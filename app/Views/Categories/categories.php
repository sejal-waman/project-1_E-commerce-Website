<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <link rel="icon" type="image/x-icon" href="">
    <title>Categories</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/login.css');?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/jquery.mCustomScrollbar.min.css');?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css');?>"  media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->\
      
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="<?php echo base_url('images/loading.gif');?>" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div>
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="home"><img src="<?php echo base_url('images/logo.jpeg');?>" alt="#" ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="<?php echo base_url('icon/loc1.png');?>" />Sangamner</li>
                                <li><img src="<?php echo base_url('icon/email1.png');?>" />Blissmart@gmail.com</li>

                                <li><img src="<?php echo base_url('icon/call1.png');?>" />(+91)9434567890</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row w-150">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="<?php echo base_url('dashboard');?>" class=" btn-outline-success">Home</a> </li>
                                               
                                                <li><a href="<?php echo base_url('explore');?>" class=" btn-outline-success">Explore</a></li>
                                               
                                                <li><a href="<?php echo base_url('categories');?>" class=" btn-outline-success">Categories</a></li>

                                                <li><a href="<?php echo base_url('viewcart');?>" class=" btn-outline-success">Cart</a></li>
                                               
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form id="searchForm" class="search">
                                    <input id="searchInput" class="form-control" type="text" placeholder="Search">
                                    <button><img src="<?php echo base_url('images/search_icon.png');?>"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
  
    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2><strong class="black">Products</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="product_box">
                                <a href="<?php echo base_url('women');?>"><figure><img src="<?php echo base_url('images/women.jpeg');?>" alt="#" />
                                    <h3>Women</h3></figure></a>
                            </div>
                        </div>
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="product_box">
                                <a href="<?php echo base_url('men');?>"><figure><img src="<?php echo base_url('images/men.jpg');?>" alt="#" />
                                    <h3>Men</h3>
                                </figure></a>
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="product_box">
                                <a href="<?php echo base_url('digital');?>"><figure><img src="<?php echo base_url('images/accessories.jpeg');?>" alt="#" />
                                    <h3>Digital Devices</h3></figure></a>
                            </div>
                        </div>

                         
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="product_box">
                                <a href="<?php echo base_url('cosmetics');?>"><figure><img src="<?php echo base_url('images/cosmetics.jpeg');?>" alt="#" />
                                    <h3>Cosmetics</h3></figure></a>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="product_box">
                                <a href="<?php echo base_url('kids');?>"><figure><img src="<?php echo base_url('images/kids.jpg');?>" alt="#" />
                                    <h3>Kids</h3></figure></a>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="product_box">
                                <a href="<?php echo base_url('jewellery');?>"><figure><img src="<?php echo base_url('images/jewellery.jpg');?>" alt="#" />
                                    <h3>Jewellery</h3></figure></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->
    
   
   
   <!--  footer -->
    <footer>
        <div class="footer top_layer ">
            <div class="">

                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                           <figure> <a href="home"> </a>
                            <h5 class="text-white text-center">"Being more enthusiastic,more ethnic,more attractive with us” </h5>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-8 col-sm-12">
                        <div class="address">
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="<?php echo base_url('icon/3.png');?>" alt="#" /> <a href="#"> Join Us</a> </li>
                                <li><img src="<?php echo base_url('icon/3.png');?>" alt="#" /> <a href="#">Our Community</a> </li>
                                <li><img src="<?php echo base_url('icon/3.png');?>" alt="#" /> <a href="#">Our Services</a></li>
                                <li><img src="<?php echo base_url('icon/3.png');?>" alt="#" /> <a href="#">Our Products</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12">
                        <div class="address">
                            <h3>Subscribe </h3>
                            <p>It is very important for the customer to follow us for more information.. </p>
                            <input class="form-control" placeholder="Your Email" type="type" name="Your Email">
                            <button class="submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-8 col-sm-12">
                        <div class="address">
                            <h3>Contact Us</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="<?php echo base_url('icon/loc.png');?>" alt="#" /></a>Sangamner-422605,
                                    <br>Maharashtra,India </li>
                                <li>
                                    <a href="#"><img src="<?php echo base_url('icon/email.png');?>" alt="#" /></a>Blissmart@gmail.com </li>
                                <li>
                                    <a href="#"><img src="<?php echo base_url('icon/call.png');?>" alt="#" /></a>(+91)9434567890 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Send Message</h3>

                            <form action="insertmessage" method="post">
                       
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text" name="name">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Phone" type="text" name="phone_no">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="send">Send</button>
                                </div>
                            
                        </form>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
     
        <div class="copyright">
            <div class="container">
                <p>© 2022 All Rights Reserved.</p>
           
        </div>
        </div>
    </footer>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="<?php echo base_url('js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('js/jquery-3.0.0.min.js');?>"></script>
    <script src="<?php echo base_url('js/plugin.js');?>"></script>
    <!-- sidebar -->
    <script src="<?php echo base_url('s/jquery.mCustomScrollbar.concat.min.js');?>"></script>
    <script src="<?php echo base_url('js/custom.js');?>"></script>
    <!-- javascript -->
    <script src="<?php echo base_url('js/owl.carousel.js');?>"></script>
    <script src="<?php echo base_url('https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js');?>"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="<?php echo base_url('https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap');?>"></script>
    <!-- end google map js -->
</body>

</html>