<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
// use Illuminate\\\\\

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->sortBy('name');
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all()->sortBy('name');
        $brands = Brand::all()->sortBy('name');
        return view('admin.products.create', compact('categories', 'brands'));
    }

    public function store(ProductFormRequest $request)
    {
        // All the validation check
        $validatedData = $request->validated();

        // Check if the Category is exists or not
        $category = Category::findOrFail($validatedData['category_id']);

        $product = $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['slug']),
            'brand' => $validatedData['brand'],
            'small_description' => $validatedData['small_description'],
            'description' => $validatedData['description'],
            'original_price' => $validatedData['original_price'],
            'selling_price' => $validatedData['selling_price'],
            'quantity' => $validatedData['quantity'],
            'trending' => $request->trending == true ? '1' : '0',
            'status' => $request->status == true ? '1' : '0',
            // 'status' => $validatedData['status'],
            'meta_title' => $validatedData['meta_title'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'meta_description' => $validatedData['meta_description'],
        ]);

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/products/';

            $i = 1; // Unique Name Need to create
            foreach ($request->file('image') as $imageFile) {
                // $file = $request->file('image');
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time() . $i++ . '.' . $extention;
                $imageFile->move($uploadPath, $filename);

                $finalImagePathName = $uploadPath . $filename;

                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }

        return redirect('/admin/products')->with('message', 'Product Added Sucessfully');
    }
}
