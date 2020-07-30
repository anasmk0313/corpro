@extends("layouts.app")
@section("title","Home")
@section("content")

        <!-- Intro Slider-->
        <div class="intro-area intro-area-4 ">
            <div class="main-overly"></div>
             <div class="intro-carousel">
             @foreach($slider as $slider)
                 <div class="intro-content">
                     <div class="slider-images">
                         <img src="{{$slider->image1}}" alt="">
                     </div>
                     <div class="slider-content">
                         <div class="display-table">
                             <div class="display-table-cell">
                                 <div class="container">
                                     <div class="row">
                                         <div class="col-md-6 col-sm-8 col-xs-12 lt-bg p-3">
                                             <!-- layer 1 -->
                                            <div class="layer-1">
                                                <div class="row">
                                                    <div class="col-md-6 text-right ">
                                                        <h3 class="title2"><span class="color">Red N Black</span></h3>
                                                        <p>Weight/Pc : 2.3Kg</p>
                                                        <p>Thickness : 10mm or 0.39"</p>
                                                        <p>Water Absorption : 3-6%</p>
                                                        <p>Size : 300x400mm or 11.8"x15.7"</p>
                                                        <p>Working life : Minimum of 70 years</p>
                                                    </div>
                                                    <div class="col-md-6 text-left">
                                                        <img src="img/products/red.png">
                                                    </div>
                                                 </div>
                                             </div>
                                             <!-- layer 2 -->
                                             <!-- <div class="layer-2 ">
                                                 <p>A Cleaning company services is provides professional services.</p>
                                             </div> -->
                                             <!-- layer 3 -->
                                             <div class="layer-3">
                                                 <a href="#" class="ready-btn left-btn" >Color Selector</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="intro-content">
                     <div class="slider-images">
                         <img src="{{$slider->image2}}" alt="">
                     </div>
                     <div class="slider-content hidden-mob">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-8 col-xs-12 lt-bg p-3">
                                            <!-- layer 1 -->
                                           <div class="layer-1">
                                               <div class="row">
                                                   <div class="col-md-6 text-right ">
                                                       <h3 class="title2"><span class="color">Red N Black</span></h3>
                                                       <p>Weight/Pc : 2.3Kg</p>
                                                       <p>Thickness : 10mm or 0.39"</p>
                                                       <p>Water Absorption : 3-6%</p>
                                                       <p>Size : 300x400mm or 11.8"x15.7"</p>
                                                       <p>Working life : Minimum of 70 years</p>
                                                   </div>
                                                   <div class="col-md-6 text-left">
                                                       <img src="img/products/red.png">
                                                   </div>
                                                </div>
                                            </div>
                                            <!-- layer 2 -->
                                            <!-- <div class="layer-2 ">
                                                <p>A Cleaning company services is provides professional services.</p>
                                            </div> -->
                                            <!-- layer 3 -->
                                            <div class="layer-3">
                                                <a href="#" class="ready-btn left-btn" >Color Selector</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 @endforeach
             </div>
         </div>
        <!-- End Intro Slider-->
        <!-- about-area start -->
        <div class="about-area area-padding hidden-mob">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-image">
                            <img src="img/products/red.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content p-0">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="about-image">
                                        <img src="img/adv.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="about-image">
                                        <img src="img/adv.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="about-image">
                                        <img src="img/adv.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="about-image">
                                        <img src="img/adv.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12 sm-12 xs-12 ">
                                    <a class="service-btn m-1" href="#">Explore more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        <!-- about-area end -->
        <!-- Start Advantages area -->
		<div class="services-area services-4 area-padding">
			<div class="container lt-bg">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center ">
                        <svg height="49" width="150">
                            <polyline points="25,50 75,25 125,50" style="fill:none;stroke:#df216e;stroke-width:4" />
                        </svg>
						<div class="section-headline text-center">
						    <h3>Advantages</h3>
						    <!-- <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p> -->
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 p-0">
                        <div class="faq-full" bis_skin_checked="1">
                            <div class="faq-details" bis_skin_checked="1">
                                <div class="panel-group" id="accordion" bis_skin_checked="1">
                                    <!-- Panel Default -->
                                    <div class="panel panel-default border-none" bis_skin_checked="1">
                                        <div class="panel-heading" bis_skin_checked="1">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1" bis_skin_checked="1">
                                                    <span class="acc-icons"></span>Redug Lefes dolor sit amet.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check1" class="panel-collapse collapse in" bis_skin_checked="1">
                                            <div class="panel-body border-none" bis_skin_checked="1">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
                                                </p>		
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default" bis_skin_checked="1">
                                        <div class="panel-heading" bis_skin_checked="1">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check2" bis_skin_checked="1">
                                                    <span class="acc-icons"></span> Laboriosam maiores alias accusamus
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check2" class="panel-collapse collapse" bis_skin_checked="1">
                                            <div class="panel-body" bis_skin_checked="1">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
                                                </p>										
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default" bis_skin_checked="1">
                                        <div class="panel-heading" bis_skin_checked="1">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check3" bis_skin_checked="1">
                                                    <span class="acc-icons"></span>Mollitia dolore magnam quidem repellat 
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check3" class="panel-collapse collapse " bis_skin_checked="1">
                                            <div class="panel-body" bis_skin_checked="1">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
                                                </p>	
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default" bis_skin_checked="1">
                                        <div class="panel-heading" bis_skin_checked="1">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check4" bis_skin_checked="1">
                                                    <span class="acc-icons"></span>Quas mollitia dolore magnam
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check4" class="panel-collapse collapse" bis_skin_checked="1">
                                            <div class="panel-body" bis_skin_checked="1">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
                                                </p>	
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default" bis_skin_checked="1">
                                        <div class="panel-heading" bis_skin_checked="1">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check5" bis_skin_checked="1">
                                                    <span class="acc-icons"></span>Quas mollitia dolore magnam
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check5" class="panel-collapse collapse" bis_skin_checked="1">
                                            <div class="panel-body" bis_skin_checked="1">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained. 
                                                </p>	
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->													
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 p-0">
                        <img src="img/adv.jpg" alt="">
                    </div>
				</div>
			</div>
		</div>
		<!-- End Advantages area -->
       	<!-- Start Products Area -->
		<div class="project-area area-padding">
			<div class="container lt-bg">
			    <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <svg height="49" width="150">
                            <polyline points="25,50 75,25 125,50" style="fill:none;stroke:#df216e;stroke-width:4" />
                        </svg>
						<div class="section-headline text-center">
						    <h3>Our Products</h3>
						    <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p>
						</div>
					</div>
				</div>
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
                                    <a class="venobox" data-gall="myGallery" href="img/red.pgn">
                                        <img src="{{$products->image}}" alt="" />
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
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button class="quote-btn mb-1">View All Products</button>
                    </div>
                </div>	
			</div>
			<!-- End main content -->
		</div>
        <!-- End Products Area -->
        <!-- Get About Quicklink -->
        <div class="contact-page area-padding">
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 abt-home-left">
                        <div class="row">
                            <div class="col-md-12 mb-2 text-center">
                                <img src="img/logo/kp-logo.png">
                            </div>
                            <div class="col-md-12 mb-2 text-center">
                                <img class="w-50" src="img/logo/kpg-logo-bg.png">
                            </div>
                            <div class="col-md-12">
                                <h5>OUR PHILOSOPHY</h5>
                                <p>Providing customer satisfacetion with high quality goods accompanied by mind blowing service and thereby converting our customers into potential advertisers.</p>
                                <a class="service-btn" href="#">Know More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="abt-home-head text-center">
                            <svg height="49" width="150">
                                <polyline points="25,50 75,25 125,50" style="fill:none;stroke:#df216e;stroke-width:4" />
                            </svg>
                            <div class="section-headline text-center abt-home">
                                <h3>About us</h3>
                                <p><b>KPG roofings</b> provides you with the finest quality ceramic coated roofing tiles to colour the home in your dreams. We have several ranges of products under different variety of designs and colour. At KPG, we believe in quality and customer satisfaction. So we provide high-quality AAA graded tiles only, unlike others who provides mixture of different grades of tiles at a same price. <br><br> We are primarily located at Pallikkal bazar, Near to Calicut International Airport. We have our branded outlets in valanchery, Thrissur, Kannur and Kuttiyadi. We deliver our products throughout kerala. Along with roofing tiles, we also market imported steel security dooors. These doors are made up of strong steel and are light and unbreakable. These come in a variety of designs and styles, and are available in all the standard sizes.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- End About quicklink-->

@endsection


