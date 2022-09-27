<?php

namespace Hillel\Controllers;

use Hillel\Models\Order;
use Hillel\Models\Product;
use Hillel\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class ProductController
{
    public function index()
    {
        $products = Product::all();
        return view('product/index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product/show', compact('product'));
    }

    public function create()
    {
        $product = new Product();
        $isCreate = true;
        return view('product/form', compact('product', 'isCreate'));
    }

    public function store()
    {
        $data = request()->all();
//dd($data);
        $validator = validator()->make($data, [
            'name' => [
                'required',
                'unique:products,name',
                'min:5',
            ],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $product = new Product();
        $product->name = $data['name'];
        $product->save();

        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $isCreate = false;
        return view('product/form', compact('product', 'isCreate'));
    }

    public function update()
    {
        $data = request()->all();

        $product = Product::find($data['id']);
        $product->name = $data['name'];

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'min:5',
                Rule::unique('orders', 'title')->ignore($product->id),
            ],
            'price' => ['required'],
            'user_id' => ['exists:users,id'],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $product->save();
        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/product');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return new RedirectResponse('/product');
    }
}