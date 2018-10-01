@extends('layouts.master')

@section('content')


<div class="panel panel-primary">
  <div class="panel-heading">
  <div class="pull-left"style="
    padding-top: 0px;
    padding-bottom: 20px;
    margin-top: 20px;
     ">
      <h3 class="panel-title">All Orders</h3>
  </div>
    
 
  </div>
  <div class="panel-body">

   <!-- table -->
   <table class="table table-striped  table-bordered table-hover dataTable ">
    <thead>
    <tr> 
      <th>#</th>    
    <th>User name</th>
    <!-- <'invoiceID', 'user_id','product_id','amount','price',
    'shipping', 'paymentMethod','archive','checkoutId',
    'shippingMethod', 'coupon','shipping_status',
 -->
    <th>Invoice ID</th>
    <th>User Name</th>
    <th>Price</th>
    <th>Amount</th>
    <th>Payment Method</th>
    <th>status</th>
    <th>Archive</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
   @foreach($orders as $order)
   <tr>
     <td>{!!$x++!!}</td>
  <td>{!!$order->code!!} </td>
  <td>{!!$order->name_en!!}</td>
  <!-- <td>{!!$order->name_ar!!}</td> -->
  <!-- <td>{!!$order->description_en!!}</td>
  <td>{!!$order->description_ar!!}</td>
  <td>{!!$order->price_before!!}</td> -->
  <td>{!!$order->price_after!!}</td>
  <!-- <td>{!!$order->otherData!!}</td> -->
  <td><img width="70px"  height="70px" class="img-circle" src="{!!asset('upload/order/'.$order->img_main)!!}"></td>
  @if($order->isOffer==1)
    <td>Yes</td>
  @else
     <td>No </td>
  @endif
  @if($order->status==1)
    <td>Active</td>
  @else
     <td>inactive </td>
  @endif
  <td>{!!$order->category->name_en!!}</td>
  <!-- <td>{!!$order->cost!!}</td> -->
  <td>{!!$order->quantity!!}</td>
  <td>{!!$order->order!!}</td>
  @if($order->free_shipping==1)
    <td>Yes</td>
  @else
     <td>No </td>
  @endif
  @if(!empty($order->supplier->name))
  <td>{!!$order->supplier->name!!}</td>

  @else
  <td></td>
  @endif
  <td> 
  <form class="delete" action="{{ route('orders.destroy',$order->id) }}" method="POST">
  <!-- <a class="btn btn-info" href="{!! route('orders.show',$order->id) !!}">Show</a> -->
  <a class="fa fa-edit "  style="font-size:16px" href="{{ route('orders.edit',$order->id) }}"></a>
   <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
        </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>

 {{$orders->render()}}

  </div>
</div>


@endsection