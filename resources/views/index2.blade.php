
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					@foreach($products as $data)
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="{{route('single-products',['product_id' => $data->id])}}">
									<img src="{{asset($data->product_path)}}" alt="product image"></a>
								<div class="hot__box color--2">
									<span class="hot-label">Hot And sexy</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="{{route('single-products',['product_id' => $data->id])}}">{{$data->name}}</a></h4>
								<ul class="prize d-flex">
									<li>RM {{$data->price - 2}} </li>
									<li class="old_prize">RM {{$data->price}}</li>
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
					@endforeach
					<!-- Start Single Product -->
					
				</div>