<!doctype html>
<html class="no-js" lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>@yield("title")</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/icon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="css/venobox.css">
		<!-- style css -->
		<link rel="stylesheet" href="css/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
      

        <style>
        @import url('https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap');
        </style>

		<!-- modernizr css -->

		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
     
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        
        <header class="header-style-3">
            <!-- Start top bar -->
            <div class="topbar-area topbar-3 fix hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-8 col-sm-6">
                            <div class="topbar-left">
                                <ul>
                                    <li><a href="#"><i class="icon icon-inbox"></i>House-34,22/2 avenue,London</a></li>
                                    <li><a href="#"><i class="icon icon-phone"></i>+1313-4535434</a></li>
                                    <li><a href="#"><i class="icon icon-clock"></i>9:00 am - 7:00 pm</a></li>
                                </ul>  
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="topbar-right">
                               <div class="quote-button">
                                    <a href="#" class="quote-btn">Download Brochure</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area header-area-3 hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="/">
                                    <img src="img/logo/kpg-logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="pagess" href="/">Home</a>
                                            </li>
                                            <li><a class="pagess" href="/about">About us</a>
                                            </li>
                                            <li><a class="pagess" href="/gallery">Gallery</a>
                                            </li>
                                            <li><a class="pagess" href="/products">Products</a>
                                            </li>
                                            <li><a class="pagess" href="/color-selector">Colour Selector</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="/"><img src="img/logo/kpg-logo.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a class="pagess" href="/">Home</a>
                                        </li>
                                        <li><a class="pagess" href="/about">About us</a>
                                        </li>
                                        <li><a class="pagess" href="/gallery">Gallery</a>
                                        </li>
                                        <li><a class="pagess" href="/products">Products</a>
                                        </li>
                                        <li><a class="pagess" href="/color-selector">Colour Selector</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>
        <!-- header end -->
        @yield("content")


        <div class="contact-page area-padding">
            <div class="container th-bg p-3">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-head text-center">
                            <svg height="49" width="150">
                                <polyline points="25,50 75,25 125,50" style="fill:none;stroke:#fff;stroke-width:4" />
                            </svg>
                            <div class="section-headline text-center">
                                <h3 class="text-white">get a quote</h3>
                                <p class="text-white">Send an Enquiry to get a quick quote from us.</p>
                                <p class="text-white"><br>Or<br></p>
                                <div class="banner-contact">
                                    <span class="call-us"><i class="icon icon-phone-handset"></i>Call us:  +1313-4325432 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form method="post" action="/enquiry" class="contact-form">
                                @csrf
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Name" name="title" value="{{old('title')}}" >
                                        @error("title")
		                                <p style="color:yellow">{{$errors->first("title")}}</p>
		
		                                @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="email form-control" placeholder="Color Needed" name="color" value="{{old('color')}}">
                                        @error("color")
		                                <p style="color:yellow">{{$errors->first("color")}}</p>
		
		                                @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Phone Number" name="number" value="{{old('number')}}">
                                        @error("number")
		                                <p style="color:yellow">{{$errors->first("number")}}</p>
		
		                                @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="email form-control" placeholder="Quantity/Sq.Ft " name="quantity" value="{{old('quantity')}}">
                                        @error("quantity")
		                                <p style="color:yellow">{{$errors->first("quantity")}}</p>
		
		                                @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Place" name="place" value="{{old('place')}}">
                                        @error("place")
		                                <p style="color:yellow">{{$errors->first("place")}}</p>
		
		                                @enderror

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" name="email" placeholder="Email " >
                                        @error("email")
		                                <p style="color:yellow">{{$errors->first("email")}}</p>
		
		                                @enderror
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Message (if any)" class="form-control" name="message" >{{old('message')}}</textarea>

                                        @error("message")
		                                <p style="color:yellow">{{$errors->first("message")}}</p>
		
		                                @enderror
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button  class="contact-btn">Submit</button>
                                       
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- End Get a Quote-->
        <!-- Main Footer-->
        <div class="container contact-page">
            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12 f-bg">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-head f-bg text-center">
                                <svg height="49" width="150">
                                    <polyline points="25,50 75,25 125,50" style="fill:none;stroke:#df216e;stroke-width:4" />
                                </svg>
                                <div class="section-headline text-center">
                                    <h3 class="text-white">Contact us</h3>
                                </div>+
                            </div>
                        </div>
                        <div class="col-md-6 p-3">
                            <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/preview-cleanhome/contact.php" class="contact-form">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <select class="form-control" id="state">
                                <option value="">Select</option>
								@foreach($branches as $branches)
                                <option value="{{$branches->state}}">{{$branches->StateName}}</option>
                                    @endforeach
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <select class="form-control" id="districts">
                                    <option value="">Select</option>

                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-1">
                                    <select class="form-control" id="branches">
                                    <option value="">Select </option>
                                        </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </form>
                            <div class="dynamic-add p-3" id="branch_details"> 
                            <h6></h6><p></p><p></p><p></p></div>
                             
                        </div>
                        <div class="col-md-6 p-3 f-cnt">
                            <h6>Head Office</h6>
                            <i class="icon icon-location"> <span>Emarald Mall,<br>Mavoor Road, Calicut</span></i>
                            <i class="icon icon-phone"> <span>9562 888 666</span></i>
                            <i class="icon icon-pencil"> <span>info@kpggroupindia.com</span></i>
                            <i class="icon icon-earth"> <span>www.kpgroofings.com</span></i>
                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End contact icon -->
                <div class="col-md-6 col-sm-6 col-xs-12 p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.7846375462327!2d75.82921631428378!3d11.203563992032551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65b8174f61fd1%3A0x91f5aa98b0707e0e!2sK%20P%20G%20Roofings!5e0!3m2!1sen!2sin!4v1594061793466!5m2!1sen!2sin" width="100%" height="524.1px" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!-- End contact Form -->
            </div>
        </div>



       
        <!-- End Main Footer-->
        <!-- Bottom Footer-->
        <footer class="footer-1">
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2020 KP Group. All Rights Reserved. Developed by
                                    <a href="#"> Owl Generation Pvt. Ltd.</a> 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-right copyright">
                                <a href="#">Terms of Use</a>
                                <a href="#">Privacy Policy</a>
                                <a href="#">Cookies Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Bottom Footer-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

		<script>
		$(document).ready(function() {
        $('#state').change(function(e){
        
         let state_id          = $('#state').val();
          $.ajax({
            url: "/get_districts/"+state_id,
            type: "GET",
           
            success: function(dataResult){
                var resultData = JSON.parse(dataResult);
                var bodyData = '';
              
                
                bodyData+= '<option value="">Select District</option>';                       
                $.each(resultData,function(index,row){
                   

                    bodyData+='<option value="'+row.district+'">'+row.district+'</option>';
                 
                    
                })
                $("#districts").html(bodyData);
                
            }
                 
            });
 

                 
    });
   });


   $(document).ready(function() {
        $('#districts').change(function(e){
        
         let district_id          = $('#districts').val();
          $.ajax({
            url: "/get_branches/"+district_id,
            type: "GET",
           
            success: function(dataResult){
                var resultData = JSON.parse(dataResult);
                var bodyData = '';
              
                
                bodyData+= '<option value="">Select Branch</option>';                     
                $.each(resultData,function(index,row){
                   

                    bodyData+='<option value="'+row.b_name+'">'+row.b_name+'</option>';
                 
                    
                })
                $("#branches").html(bodyData);
                
            }
                 
            });
 

                 
    });
   });



   $(document).ready(function() {
        $('#branches').change(function(e){
        
         let branch_id          = $('#branches').val();
          $.ajax({
            url: "/get_branch_details/"+branch_id,
            type: "GET",
           
            success: function(dataResult){
                var resultData = JSON.parse(dataResult);
                var bodyData = '';
              
                
                                  
                $.each(resultData,function(index,row){
                   

                    bodyData+='<h6>'+row.b_name+'</h6><p>'+row.add_one+'</p><p>'+row.add_two+'</p><p>'+row.pincode+'</p></div>';
                 
                    
                })
                $("#branch_details").html(bodyData);
                
            }
                 
            });
 

                 
    });
   });
   </script>
		<!-- all js here -->
        
		<!-- jquery latest version -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="js/waypoints.js"></script>
		<!-- isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- magnific js -->
        <script src="js/magnific.min.js"></script>
		<!-- venobox js -->
		<script src="js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
       

	</body>
</html>
<!-- jquery latest version -->
