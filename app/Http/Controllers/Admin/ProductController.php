<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {
        $categories = Category::all()->sortBy('name');
        $brands = Brand::all()->sortBy('name');
        return view('admin.products.create', compact('categories', 'brands'));
    }
    public function store(ProductFormRequest $request)
    {
        # code...
    }
}
