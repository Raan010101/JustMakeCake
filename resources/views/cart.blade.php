@extends('master')

@section('content')
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Shopping Cart</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="{{route('index')}}">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Shopping Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">               
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Empty Cart</th>
                                        </tr>
                                    </thead>
                                 <!--error message area -->
                                     <div class="cart-section container">
                                         @if (session()->has('success_message'))
                                                <div class="alert alert-success">
                                                    {{session()->get('success_message')}}
                                                </div>    
                                        @endif    
                                        
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error}} </li>
                                                    
                                                @endforeach
                                            </ul>

                                        </div>
                                            
                                        @endif
                                    
                                        @if (Cart::count() > 0)
                                            <h2> {{Cart::count()}} item(s) in Shopping Cart </h2>

                                        @else

                                        <h3> No items in Cart</h3>

                                        @endif                                            
                                        

                                     </div>
                                 <!--error message area -->
                                

                                    
                                    
                                    <tbody>
										@foreach(Cart::content() as $row)
                                        <tr>
                                            <td class="product-thumbnail"><a href="{{route('single-products',['product_id' => $row->id])}}"><img src="{{asset($row->product_path)}}" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">{{$row->name}}</a></td>
                                            <td class="product-price"><span class="amount">{{$row->price}}</span></td>
                                            <td class="product-quantity"><input  style="text-align: center;"type="number" value="{{$row->qty}}" readonly></td>
                                            <td class="product-subtotal">{{$row->total}}</td>
                                           <!-- <form action="{{ url('cart', [$row->rowId]) }}" method="DELETE">
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="_method" value="DELETE">                
                                                <td><button type="submit" class="btn btn-primary btn-sm">X</button></td>
                                              </form>-->

											<form action ="{{route('cart.destroy',[$row->rowId])}}"  method="POST" >
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
                                                <input type="hidden" name="_method" value="DELETE">                
                                                <td><button type="submit" class="btn btn-primary btn-sm">X</button></td>
                                              </form> 
                                        </tr>
										@endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                        <div class="cartbox__btn">
                            <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                <li><a href="#">Coupon Code</a></li>
                                <li><a href="#">Apply Code</a></li>
                                <li><a href="#">Update Cart</a></li>
                                <li><a href="#">Check Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cart total</li>
                                    <li>Sub Total</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>$70</li>
                                    <li>$70</li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span>$140</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- cart-main-area end -->
		<!-- Footer Area -->
@stop