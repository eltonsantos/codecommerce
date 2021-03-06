<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class ProductsController extends Controller
{
    private $productModel;

    public function __construct(Product $productModel){

        $this->productModel = $productModel;

    }

    public function index(){

        $products = $this->productModel->paginate(10);
        return view('products.index', compact('products'));

    }

    public function create(Category $category){

        $categories = $category->lists('name', 'id');
        return view('products.create', compact('categories'));

    }

    public function store(Requests\ProductRequest $request){

        $inputs = $request->all();
        $product = $this->productModel->fill($inputs);
        $product->save();

        return redirect()->route('products');

    }

    public function edit(Category $category, $id){

        $categories = $category->lists('name', 'id');
        $product = $this->productModel->find($id);
        return view('products.edit', compact('product', 'categories'));

    }

    public function update(Requests\ProductRequest $request, $id){

        $this->productModel->find($id)->update($request->all());
        return redirect()->route('products');

    }

    public function destroy($id){

        $this->productModel->find($id)->delete();
        return redirect()->route('products');

    }

}