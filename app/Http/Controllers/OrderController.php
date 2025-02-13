<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\ShippingAddress;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['orders'] = Order::all();
        $data['user'] = auth()->user();
        return view("admin.orders.orders_all" )->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        // dd($request->all());
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'product_id' => $request->product_id,
            'total_cost' => $request->total_cost,
            'payment_method' => $request->payment_method,
            'status' => "pending",
        ]);
        ShippingAddress::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "address" => $request->address,
            "address_2" => $request->address_2 ?? null,
            "province" => $request->province,
            "postel_code" => $request->postel_code,
            "order_id" => $order->getKey(),
        ]);
        return view("shop.order_complete");
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }


    public function process(Order $order){
        $order->update([
            'status' => 'dispatched',
        ]);
        return redirect()->back();
    }

    public function cancel(Order $order){
        $order->update([
            'status' => 'cancelled',
        ]);
        return redirect()->back();
    }
}
