<?php
namespace Hillel\Controllers;

use Hillel\Models\Order;
use Illuminate\Http\RedirectResponse;

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
        return view('order/form', compact('order'));
    }

    public function store()
    {
        $request = request();

        $order = new Order();
        $order->title = $request->input('title');
        $order->price = $request->input('price');
        $order->user_id = 1;
        $order->save();
        return new RedirectResponse('/order');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('order/form-edit', compact('order'));
    }

    public function update()
    {
        $request = request();

        $order = Order::find($request->input('id'));
        $order->title = $request->input('title');
        $order->price = $request->input('price');
        $order->user_id = 1;
        $order->save();
        return new RedirectResponse('/order');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return new RedirectResponse('/order');
    }
}