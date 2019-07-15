<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Hash;
use Illuminate\Http\Request;
use Validator;

class PostsController extends AdminController
{

    public $model = 'posts';

    public $validator = [
        'title' => 'required',
        'category_id' => 'required',
    ];
    private function init()
    {
        return '\\App\\' . ucfirst(str_singular($this->model));
    }
    public function index(Request $request)
    {

        $searchContent = null;
        $searchCate = null;
        $modelClass = $this->init();

        $contents = $modelClass::latest('created_at');
        if ($request->input('q')) {
            $searchContent = urldecode($request->input('q'));
            $contents = $contents->where('title', 'LIKE', '%'. $searchContent. '%');

        }

        if ($request->input('cate_id')) {
            $searchCate = urldecode($request->input('cate_id'));
            $subCategoryIds = Category::where('parent_id', $searchCate)->pluck('id')->all();
            $categoryIds = ($subCategoryIds) ? $subCategoryIds : [$searchCate];
            $contents = $contents->whereIn('category_id', $categoryIds);

        }


        $contents = $contents->paginate(10)->setPath('/admin/posts');

        if ($request->input('q')) {
            $contents = $contents->appends('q', $request->input('q'));
        }
        if ($request->input('cate_id')) {
            $contents = $contents->appends('cate_id', $request->input('cate_id'));
        }

        return view('admin.'.$this->model.'.index', compact('contents', 'searchContent', 'searchCate'))->with('model', $this->model);
    }

    public function create()
    {
        $modelClass = $this->init();
        $content = new $modelClass;
        return view('admin.'.$this->model.'.form', compact('content'))->with('model', $this->model);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->validator);
        if ($validator->fails()) {
            return redirect('admin/'.$this->model.'/create')
                ->withErrors($validator)
                ->withInput();
        }
        $data = $request->all();
        $data['password'] =  Hash::make(time());


        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'));
        } else {
            unset($data['image']);
        }

        if (!$request->input('category_id')) {
            flash()->error('Please insert category!');
            return redirect('admin/'.$this->model);
        }

        if (!$request->input('desc')) {
            flash()->error('Please insert description!');
            return redirect('admin/'.$this->model);
        }


        if (!$request->input('title')) {
            flash()->error('Please insert title!');
            return redirect('admin/'.$this->model);
        }





        $modelClass = $this->init();
        $content = $modelClass::create($data);

        $tagIds = [];
        foreach ($request->input('tag_list') as $tag) {
            $tagIds[] = Tag::firstOrCreate(['name' => $tag])->id;
        }
        $content->tags()->sync($tagIds);


        flash()->success('Success created!');
        return redirect('admin/'.$this->model);
    }
    public function edit($id)
    {
        $modelClass = $this->init();
        $content = $modelClass::find($id);
        return view('admin.'.$this->model.'.form', compact('content'))->with('model', $this->model);
    }
    public function update($id, Request $request)
    {
        $this->validator[] = ['email' => 'unique:users,email,'.$id];
        $validator = Validator::make($request->all(), $this->validator);
        if ($validator->fails()) {
            return redirect('admin/'.$this->model.'/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $modelClass = $this->init();
        $content = $modelClass::find($id);
        $data = $request->all();
        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'), $content->image);
        } else {
            unset($data['image']);
        }


        if (!$request->input('category_id')) {
            flash()->error('Please insert category!');
            return redirect('admin/'.$this->model);
        }

        if (!$request->input('desc')) {
            flash()->error('Please insert description!');
            return redirect('admin/'.$this->model);
        }


        if (!$request->input('title')) {
            flash()->error('Please insert title!');
            return redirect('admin/'.$this->model);
        }


        $content->update($data);


        $tagIds = [];
        foreach ($request->input('tag_list') as $tag) {
            $tagIds[] = Tag::firstOrCreate(['name' => $tag])->id;
        }
        $content->tags()->sync($tagIds);

        flash()->success('Success edited!');
        return redirect('admin/'.$this->model);
    }
    public function destroy($id)
    {
        $modelClass = $this->init();
        $content = $modelClass::find($id);
        $content->delete();
        flash()->success('Success Deleted!');
        return redirect('admin/'.$this->model);
    }
}
