@extends('master')

@section('content')
<div class="ht__bradcaump__area bg-image--6">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">Shop Grid</h2>
					<nav class="bradcaump-content">
					  <a class="breadcrumb_item" href="/">Home</a>
					  <span class="brd-separetor">/</span>
					  <span class="breadcrumb_item active">Shop Grid</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
						<div class="title"
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Product Categories</h3>
        						<ul>
        						
        						</ul>
        					</aside>
        					<aside class="wedget__categories pro--range">
        						<h3 class="wedget__title">Filter by price</h3>
        						<div class="content-shopby">
        						    <div class="price_filter s-filter clear">
        						        <form action="#" method="GET">
        						            <div id="slider-range"></div>
        						            <div class="slider__range--output">
        						                <div class="price__output--wrap">
        						                    <div class="price--output">
        						                        <span>Price :</span><input type="text" id="amount" readonly="">
        						                    </div>
        						                    <div class="price--filter">
        						                        <a href="#">Filter</a>
        						                    </div>
        						                </div>
        						            </div>
        						        </form>
        						    </div>
        						</div>
        					</aside>
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Product Tags</h3>
        						<ul>
        							<li><a href="#">Cake1</a></li>
        							<li><a href="#">Business</a></li>
        							<li><a href="#">Cookbooks</a></li>
        							<li><a href="#">Health & Fitness</a></li>
        							<li><a href="#">History</a></li>
        							<li><a href="#">Mystery</a></li>
        							<li><a href="#">Inspiration</a></li>
        							<li><a href="#">Religion</a></li>
        							<li><a href="#">Fiction</a></li>
        							<li><a href="#">Fantasy</a></li>
        							<li><a href="#">Music</a></li>
        							<li><a href="#">Toys</a></li>
        							<li><a href="#">Hoodies</a></li>
        						</ul>
        					</aside>
        					<aside class="wedget__categories sidebar--banner">
								<img src="images/others/banner_left.jpg" alt="banner images">
								<div class="text">
									<h2>new products</h2>
									<h6>save up to <br> <strong>40%</strong>off</h6>
								</div>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
			                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
			                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
			                        </div>
			                        <p>Showing 1–12 of 40 results</p>
			                        <div class="orderby__wrapper">
			                        	<span>Sort By</span>
			                        	<select class="shot__byselect">
			                        		<option>Default sorting</option>
			                        		<option>HeadPhone</option>
			                        		<option>Furniture</option>
			                        		<option>Jewellery</option>
			                        		<option>Handmade</option>
			                        		<option>Kids</option>
			                        	</select>
			                        </div>
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        						<!-- Start Single Product Row1-->
		        					<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
									
										<div class="product product__style--3">
											<div class="col-lg-3 col-md-4 col-sm-6 col-12">
												<div class="product__thumb">
													<a class="first__img" href=""><img src="images/books/3.jpg" alt="product image"></a>
													<div class="hot__box color--2">
														<span class="hot-label">Hot And Yummy Cakes</span>
													</div>
												</div>
												<div class="product__content content--center">
													<h4><a href=""></a></h4>
													<ul class="prize d-flex">	
														<li>RM  </li>
														<li class="old_prize">RM </li>
													</ul>
													<div class="action">
														<div class="actions_inner">
															<ul class="add_to_links">
																<li><a class="cart" href="cart"><i class="bi bi-shopping-bag4"></i></a></li>
																<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
																<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
																<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
															</ul>
														</div>
													</div>
													<div class="product__hover--content">
														<ul class="rating d-flex">
															<li class="on"><i class="fa fa-star-o"></i></li>
															<li class="on"><i class="fa fa-star-o"></i></li>
															<li class="on"><i class="fa fa-star-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
															<li><i class="fa fa-star-o"></i></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									
										<!-- Start Single Product -->
										
									</div>
									<!-- End Single Product Row1-->

	        						<!-- End Single Product -->
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
@stop