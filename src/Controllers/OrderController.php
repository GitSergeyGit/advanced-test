<?php

namespace Hillel\Controllers;

use Hillel\Models\Order;
use Hillel\Models\Product;
use Hillel\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class OrderController
{
    public function index()
    {
        $orders = Order::all();
        return view('order/index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('order/show', compact('order'));
    }

    public function create()
    {
        $order = new Order();
        $users = User::all();
        $products = Product::all();
        return view('order/form', compact('order', 'users', 'products'));
    }

    public function store()
    {
        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'unique:orders,title',
                'min:5',
            ],
            'price' => ['required'],
            'user_id' => ['exists:users,id'],
            'products' => ['required', 'exists:products,id'],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $order = new Order();
        $order->title = $data['title'];
        $order->price = $data['price'];
        $order->user_id = $data['user_id'];
        $order->save();
        $order->products()->attach($data['products']);

        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/order');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $users = User::all();
        $products = Product::all();
        return view('order/form-edit', compact('order', 'users', 'products'));
    }

    public function update()
    {
        $data = request()->all();

        $order = Order::find($data['id']);
        $order->title = $data['title'];
        $order->price = $data['price'];
        $order->user_id = $data['user_id'];

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'min:5',
                Rule::unique('orders', 'title')->ignore($order->id),
            ],
            'price' => ['required'],
            'user_id' => ['exists:users,id'],
            'products' => ['required', 'exists:products,id'],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $order->save();
        $order->products()->sync($data['products']);
        $_SESSION['success'] = 'Запис успішно добавлений';
        return new RedirectResponse('/order');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->products()->detach();
        $order->delete();
        return new RedirectResponse('/order');
    }
}