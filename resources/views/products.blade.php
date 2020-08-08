@extends("layouts.app")
@section("title","Products")
@section("content")
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb">
                    <div class="section-headline white-headline text-center">
                        <h3>Products</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END Header -->
<!--features-->
<div class="section-headline area-padding">
    <div class="container p-3">
        <div class="body-bg text-center">
            <div class="row">
                    <!-- single-well end-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="#"><i class="flaticon-cleaning-6"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <p>Inspired Fromo Nature</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="#"><i class="flaticon-cleaning-8"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <p>Light Weight & Uniformity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="#"><i class="flaticon-spray"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <p>Undoubted Durabilty</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end -->
                    <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="#"><i class="flaticon-sweeping-3"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <p>Strength & Load Bearing Capacity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end -->
                </div>
        </div>
    </div>
</div>
<!--end features-->
<!-- Start Products Area -->
<div class="project-area area-padding">
			<div class="container body-bg">
				<div class="row">
					<!-- Start Portfolio -page -->
					<div class="awesome-project fix">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="awesome-menu text-center">
								<ul class="project-menu">
									<li><a href="#" class="active" data-filter="*" >All</a></li>
                                    @foreach($category as $category)
									<li><a href="#" data-filter=".{{$category->id}}">{{$category->category}}</a></li>
                                    @endforeach
								</ul>				
							</div>
						</div>
					</div>
                    <div class="project-content">
                        <!-- single-awesome-project start -->
                          @foreach($products as $products)
				       <div class="project-single all-padding {{$products->category_id}}">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="{{$products->image}}">
                                        <img src="{{ asset('storage/images/products/'.$products->image) }}" alt="" />
                                        <p>{{$products->title}}</p>
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4>Red n Black</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        @endforeach
                        
                    </div>
                </div>	
			</div>
			<!-- End main content -->
		</div>
        <!-- End Products Area -->
        @endsection