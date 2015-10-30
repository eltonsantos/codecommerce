<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    private $categoryModel;

    public function __construct(Category $categoryModel){

        $this->categoryModel = $categoryModel;

    }

    public function index(){

        $categories = $this->categoryModel->all();
        return view('categories.index', compact('categories'));

    }

    public function create(){

        return view('categories.create');

    }

    public function store(Requests\CategoryRequest $request){

        $inputs = $request->all();
        $category = $this->categoryModel->fill($inputs);
        $category->save();

        return redirect()->route('categories');

    }

    public function edit($id){

        $category = $this->categoryModel->find($id);
        return view('categories.edit', compact('category'));

    }

    public function update(Requests\CategoryRequest $request, $id){

        $this->categoryModel->find($id)->update($request->all());
        return redirect()->route('categories');

    }

    public function destroy($id){

        $this->categoryModel->find($id)->delete();
        return redirect()->route('categories');

    }

}