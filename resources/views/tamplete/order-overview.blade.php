@include('tamplete.partains.header')

<div class="banner inner-banner1 ">
    <div class="container">
      <section class="banner-detail center-xs">
        <h1 class="banner-title">Checkout</h1>
        <div class="bread-crumb right-side float-none-xs">
          <ul>
            <li><a href="{{route('home')}}">Home</a>/</li>
            <li><a href="{{route('cart')}}">Cart</a>/</li>
            <li><span>Checkout</span></li>
          </ul>
        </div>
      </section>
    </div>
  </div>

<section class="checkout-section ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="checkout-step mb-40">
            <ul>
              <li> 
                  <a href="{{route('checkout')}}">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">1</div>
                  </div>
                  <span>Shipping</span> 
                </a> 
              </li>
              <li class="active"> 
                <a href="{{route('order_overview')}}">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">2</div>
                  </div>
                  <span>Order Overview</span> 
                </a> 
              </li>
              <li> 
                <a href="{{route('payment')}}">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">3</div>
                  </div>
                  <span>Payment</span> 
                </a> 
              </li>
              <li> 
                <a href="{{route('order_complete')}}">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">4</div>
                  </div>
                  <span>Order Complete</span> 
                </a> 
              </li>
              <li>
                <div class="step">
                  <div class="line"></div>
                </div>
              </li>
            </ul>
            <hr>
          </div>
          <div class="checkout-content">
            <div class="row">
              <div class="col-12">
                <div class="heading-part align-center">
                  <h2 class="heading">Order Overview</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 mb-sm-30">
                <div class="cart-item-table commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Product Detail</th>
                          <th>Sub Total</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="{{route('product_page')}}">
                            <div class="product-image"><img alt="Honour" src="{{url('/')}}/public/assets/images/1.jpg"></div>
                            </a></td>
                          <td><div class="product-title"> <a href="{{route('product_page')}}">Cross Colours Camo Print Tank half mengo</a>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Price: </label>
                                  <div class="price-box"> <span class="info-deta price">$80.00</span> </div>
                                </div>
                              </div>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Quantity: </label>
                                  <span class="info-deta">1</span> </div>
                              </div>
                            </div></td>
                          <td><div data-id="100" class="total-price price-box"> <span class="price">$80.00</span> </div></td>
                          <td><i class="fa fa-trash cart-remove-item" data-id="100" title="Remove Item From Cart"></i></td>
                        </tr>
                        <tr>
                          <td><a href="{{route('product_page')}}">
                            <div class="product-image"><img alt="Honour" src="{{url('/')}}/public/assets/images/2.jpg"></div>
                            </a></td>
                          <td><div class="product-title"> <a href="{{route('product_page')}}">Cross Colours Camo Print Tank half mengo</a>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Price: </label>
                                  <div class="price-box"> <span class="info-deta price">$80.00</span> </div>
                                </div>
                              </div>
                              <div class="product-info-stock-sku m-0">
                                <div>
                                  <label>Quantity: </label>
                                  <span class="info-deta">1</span> </div>
                              </div>
                            </div></td>
                          <td><div data-id="100" class="total-price price-box"> <span class="price">$80.00</span> </div></td>
                          <td><i class="fa fa-trash cart-remove-item" data-id="100" title="Remove Item From Cart"></i></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="cart-total-table commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Cart Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Item(s) Subtotal</td>
                          <td><div class="price-box"> <span class="price">$160.00</span> </div></td>
                        </tr>
                        <tr>
                          <td>Shipping</td>
                          <td><div class="price-box"> <span class="price">$0.00</span> </div></td>
                        </tr>
                        <tr>
                          <td><b>Amount Payable</b></td>
                          <td><div class="price-box"> <span class="price"><b>$160.00</b></span> </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="right-side float-none-xs"> <a href="{{route('payment')}}" class="btn btn-color">Next</a> </div>
              </div>
              <div class="col-md-4">
                <div class="cart-total-table address-box commun-table mb-30">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Shipping Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <ul>
                              <li class="inner-heading"> <b>Denial tom</b> </li>
                              <li>
                                <p>5-A kadStylexpoi aprtment,opp. vasan eye care,</p>
                              </li>
                              <li>
                                <p>Risalabaar,City Road, deesa-405001.</p>
                              </li>
                              <li>
                                <p>India</p>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="cart-total-table address-box commun-table">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Billing Address</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <ul>
                              <li class="inner-heading"> <b>Denial tom</b> </li>
                              <li>
                                <p>5-A kadStylexpoi aprtment,opp. vasan eye care,</p>
                              </li>
                              <li>
                                <p>Risalabaar,City Road, deesa-405001.</p>
                              </li>
                              <li>
                                <p>India</p>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('tamplete.partains.footer')
