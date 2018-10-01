<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;
use App\Category;
use App\User;

use Illuminate\Http\Request;

class OrderController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=Order::latest()->paginate(30);
        return view('admin.orders.index ',compact('orders','x'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $products=product::all();
        // $categories=Category::all();
        // return view('admin.orders.create', compact('products','categories'));


    }
     /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    // request()->validate([
    // 'invoiceID' => 'required',
    // 'user_id' => 'required',
    // 'product_id' => 'required',
    // 'amount' => 'required',
    // 'price' => 'required',
    // 'shipping' => 'required',
    // 'paymentMethod' => 'required',
    // 'checkoutId' => 'required',
    // 'shippingMethod' => 'required',
    // 'coupon' => 'required',
    // 'archive' => 'required',
    // 'shipping_status' => 'required',
    // //shipping_status	
    // ]);
    // $order = $request->all();
    // $order=new Order;
    // $order->invoiceID=$request->invoiceID;
    // $order->user_id=$request->user_id;
    // $order->product_id=$request->product_id;
    // $order->amount=$request->amount;
    // $order->shipping=$request->shipping;
    // $order->paymentMethod=$request->paymentMethod;
    // $order->checkoutId=$request->checkoutId;
    // $order->shippingMethod=$request->shippingMethod;
    // $order->price=$request->price;
    // $order->coupon=$request->coupon;
    // $order->archive=$request->archive;
    // $order->shipping_status=$request->shipping_status;
    // $order->save();
    // return redirect()->route('orders.index')
    // ->with('success','Order Add successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
        $products=product::all();
        return view('admin.orders.edit', compact('order','products'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
        request()->validate([
            'invoiceID' => 'required',
            'user_id' => 'required',
            'product_id' => 'required',
            'amount' => 'required',
            'price' => 'required',
            'shipping' => 'required',
            'paymentMethod' => 'required',
            'checkoutId' => 'required',
            'shippingMethod' => 'required',
            'coupon' => 'required',
            'archive' => 'required',
            'shipping_status' => 'required',
            ]);
            $product->update([
                'user_id' => $request->input('user_id'),
                'product_id' => $request->input('product_id'),
                'amount' => $request->input('amount'),
                'price' => $request->input('price'),
                'shipping' =>$request->input('shipping') ,
                'paymentMethod' => $request->input('paymentMethod'),
             
                'checkoutId' =>$request->input('checkoutId') ,
                'shippingMethod' => $request->input('shippingMethod'),
                'coupon' => $request->input('coupon'),
                'archive' => $request->input('archive'),
                'shipping_status' => $request->input('shipping_status'),
                           ]);
                           return redirect()->route('orders.index')
                           ->with('success','Order Updated successfully');
              
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        // $order->delete();


        // return redirect()->route('orders.index')
        //                 ->with('success','order deleted successfully');

    
    }

    public function fetch(Request $request)
    {
        //   $select = $request->get('select');
        //   $value = $request->get('value');
        //   $dependent = $request->get('dependent');
        //   $data=product::where('category_id',$value)->get();
        //   $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        //   foreach($data as $row)
        //    {
        //       $output .= '<option value="'.$row->id.'">'.$row->name_en.'</option>';
        //    }
        //   echo $output;
    //     $category_id=$request->category_id;
    //     $products=product::where('category_id',$category_id)->get();
    // //    dd($products);
    //     return response()->json($products);

   
    }
}
