<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands</title>
    <link rel="stylesheet" href="<?php echo base_url('css/categories.css');?>">
   
</head>
<body>
    <nav>
        <ul>
            <li><a href="dashboard">Home</a></li>
            <li><a href="explore">Explore</a></li>
            <li><a href="categories">Categories</a></li>
            <li><a href="cart">Cart</a></li>
        </ul>
    </nav>
    <main>
        <!-- bags start here -->
        <h1><center>Women Brands</center></h1>
        <div class="product-grid">
            <!-- Example Product Item Start -->
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand1.jpg');?>" alt="Product 1" id="imgdata">
                <div class="product-details"><br><br><br>
                    <h3 id="somani_h3">Samani</h3>
                    <p id="fusion_p">fusion</p>
                    <p id="value_somani">₹1500<span class="original-price">₹2999</span> <span class="discount">65% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker" id="quantity">
                            <button onclick="decreaseQuantity('quantity1')">-</button>
                            <input type="text" id="quantity1" value="1" readonly>
                            <button onclick="increaseQuantity('quantity1')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData()">Add to Cart</button> 
                        <script>
                            function sendData() {
                                var data1 = document.getElementById('somani_h3').innerText;
                                var data2 = document.getElementById('fusion_p').innerText;
                                var data3 = document.getElementById('value_somani').innerText;
                                var data4 = document.getElementById('imgdata').innerText;
                                
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand1.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
           
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand2.jpg');?>" alt="Product 2">
                <div class="product-details"><br><br><br><br>
                    <h3 id="oke_h3">oke brand</h3>
                    <p id="oke_brand">brand</p>
                    <p id="oke_price">₹375 <span class="original-price">₹1499</span> <span class="discount">74% off</span></p>
                    <p class="rating">★★★★☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity2')">-</button>
                            <input type="text" id="quantity2" value="1" readonly>
                            <button onclick="increaseQuantity('quantity2')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData2()">Add to Cart</button>
                        <script>
                            function sendData2() {
                                var data1 = document.getElementById('oke_h3').innerText;
                                var data2 = document.getElementById('oke_brand').innerText;
                                var data3 = document.getElementById('oke_price').innerText;
                                //var data4 = document.getElementById('imgdata').innerText;
                                
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand2.jpg');
                            }
                        </script>

                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand3.jpg');?>" alt="Product 3">
                <div class="product-details"><br><br>
                    <h3 id="ahana_h3">ahana brand</h3>
                    <p id="ahana_brand">brand</p>
                    <p id="ahana_price">₹360 <span class="original-price">₹1599</span> <span class="discount">77% off</span></p>
                    <p class="rating">★★★★☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity3')">-</button>
                            <input type="text" id="quantity3" value="1" readonly>
                            <button onclick="increaseQuantity('quantity3')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData3()">Add to Cart</button>
                        <script>
                            function sendData3() {
                                var data1 = document.getElementById('ahana_h3').innerText;
                                var data2 = document.getElementById('ahana_brand').innerText;
                                var data3 = document.getElementById('ahana_price').innerText;
                                //var data4 = document.getElementById('imgdata').innerText;
                                
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand3.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand4.jpg');?>" alt="Product 4">
                <div class="product-details"><br>
                    <h3 id="ahana_brand2">ahana brand</h3>
                    <p id="brand_ahana2">brand</p>
                    <p id="price_ahana2">₹450 <span class="original-price">₹700</span> <span class="discount">75% off</span></p>
                    <p class="rating">★★★★☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity4')">-</button>
                            <input type="text" id="quantity4" value="1" readonly>
                            <button onclick="increaseQuantity('quantity4')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData4()">Add to Cart</button>
                        <script>
                        function sendData4() {
                                var data1 = document.getElementById('ahana_brand2').innerText;
                                var data2 = document.getElementById('brand_ahana2').innerText;
                                var data3 = document.getElementById('price_ahana2').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand4.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand5.jpg');?>" alt="Product 5">
                <div class="product-details"><br><br><br><br><br>
                    <h3 id="ayush_1">ayush collection</h3>
                    <p id="ayush_brand_1">brand</p>
                    <p id="ayush_price_1">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity5')">-</button>
                            <input type="text" id="quantity5" value="1" readonly>
                            <button onclick="increaseQuantity('quantity5')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData5()">Add to Cart</button>
                        <script>
                        function sendData5() {
                                var data1 = document.getElementById('ayush_1').innerText;
                                var data2 = document.getElementById('ayush_brand_1').innerText;
                                var data3 = document.getElementById('ayush_price_1').innerText;
                                //var data4 = document.getElementById('imgdata').innerText;
                                
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand5.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand6.jpg');?>" alt="Product 6">
                <div class="product-details"><br>
                    <h3 id="sandhya_h3">sandhya collection</h3>
                    <p id="sandhya_brand">brand</p>
                    <p id="sandhya_price">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity6')">-</button>
                            <input type="text" id="quantity6" value="1" readonly>
                            <button onclick="increaseQuantity('quantity6')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData6()">Add to Cart</button>
                        <script>
                        function sendData6() {
                                var data1 = document.getElementById('sandhya_h3').innerText;
                                var data2 = document.getElementById('sandhya_brand').innerText;
                                var data3 = document.getElementById('sandhya_price').innerText;
                                //var data4 = document.getElementById('imgdata').innerText;
                                
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand6.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand7.jpg');?>" alt="Product 7">
                <div class="product-details"><br><br><br>
                    <h3 id="ayush_collection2">ayush collection</h3>
                    <p id="ayush_brand2">brand</p>
                    <p id="ayush_price2">₹1100 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity7')">-</button>
                            <input type="text" id="quantity7" value="1" readonly>
                            <button onclick="increaseQuantity('quantity7')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData7()">Add to Cart</button>
                        <script>
                        function sendData7() {
                                var data1 = document.getElementById('ayush_collection2').innerText;
                                var data2 = document.getElementById('ayush_brand2').innerText;
                                var data3 = document.getElementById('ayush_price2').innerText;
                                //var data4 = document.getElementById('imgdata').innerText;
                                
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand7.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand8.jpg');?>" alt="Product 8">
                <div class="product-details">
                    <h3 id="shreyas_vv">shreyas vv</h3>
                    <p id="shreyas_brand">brand</p>
                    <p id="shreyas_price">₹1400 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity8')">-</button>
                            <input type="text" id="quantity8" value="1" readonly>
                            <button onclick="increaseQuantity('quantity8')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData8()">Add to Cart</button>
                        <script>
                        function sendData8() {
                                var data1 = document.getElementById('shreyas_vv').innerText;
                                var data2 = document.getElementById('shreyas_brand').innerText;
                                var data3 = document.getElementById('shreyas_price').innerText;
                                //var data4 = document.getElementById('imgdata').innerText;
                                
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand8.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand9.jpg');?>" alt="Product 9">
                <div class="product-details">
                    <h3 id="shreya_collection_2">shreya collection</h3>
                    <p id="shreya_brand_2">brand</p>
                    <p id="shreya_price_2">₹1000 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity9')">-</button>
                            <input type="text" id="quantity9" value="1" readonly>
                            <button onclick="increaseQuantity('quantity9')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData9()">Add to Cart</button>
                        <script>
                        function sendData9() {
                                var data1 = document.getElementById('shreya_collection_2').innerText;
                                var data2 = document.getElementById('shreya_brand_2').innerText;
                                var data3 = document.getElementById('shreya_price_2').innerText;
                                //var data4 = document.getElementById('imgdata').innerText;
                                
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand9.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand10.jpg');?>" alt="Product 10">
                <div class="product-details">
                    <h3 id="ayush_collection_3">ayush collection</h3>
                    <p id="ayush_collection_brand_3">brand</p>
                    <p id="ayush_collection_price_3">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity10')">-</button>
                            <input type="text" id="quantity10" value="1" readonly>
                            <button onclick="increaseQuantity('quantity10')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData10()">Add to Cart</button>
                        <script>
                        function sendData10() {
                                var data1 = document.getElementById('ayush_collection_3').innerText;
                                var data2 = document.getElementById('ayush_collection_brand_3').innerText;
                                var data3 = document.getElementById('ayush_collection_price_3').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand10.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand11.jpg');?>" alt="Product 11">
                <div class="product-details">
                    <h3 id="riya_collection">riya collection</h3>
                    <p id="riya_brand">brand</p>
                    <p id="riya_price">₹900 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity11')">-</button>
                            <input type="text" id="quantity11" value="1" readonly>
                            <button onclick="increaseQuantity('quantity11')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData11()">Add to Cart</button>
                        <script>
                        function sendData11() {
                                var data1 = document.getElementById('riya_collection').innerText;
                                var data2 = document.getElementById('riya_brand').innerText;
                                var data3 = document.getElementById('riya_price').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand11.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand12.jpg');?>" alt="Product 12">
                <div class="product-details">
                    <h3 id="ayush_collection_4">ayush collection</h3>
                    <p id="ayush_brand_4">brand</p>
                    <p id="ayush_price_4">₹800 <span class="original-price">₹1200</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                       <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity12')">-</button>
                            <input type="text" id="quantity12" value="1" readonly>
                            <button onclick="increaseQuantity('quantity12')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData12()">Add to Cart</button>
                        <script>
                        function sendData12() {
                                var data1 = document.getElementById('ayush_collection_4').innerText;
                                var data2 = document.getElementById('ayush_brand_4').innerText;
                                var data3 = document.getElementById('ayush_price_4').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand12.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/bag13.jpg');?>" alt="Product 13">
                <div class="product-details">
                    <h3 id="sara_1">sara</h3>
                    <p id="bag_1">bag</p>
                    <p id="price_sara">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity13')">-</button>
                            <input type="text" id="quantity13" value="1" readonly>
                            <button onclick="increaseQuantity('quantity13')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData13()">Add to Cart</button>
                        <script>
                        function sendData13() {
                                var data1 = document.getElementById('sara_1').innerText;
                                var data2 = document.getElementById('bag_1').innerText;
                                var data3 = document.getElementById('price_sara').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/bag13.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand14.jpg');?>" alt="Product 14">
                <div class="product-details">
                    <h3 id="saransh_1">saransh</h3>
                    <p id="saransh_brand">brand</p>
                    <p id="saransh_price">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity14')">-</button>
                            <input type="text" id="quantity14" value="1" readonly>
                            <button onclick="increaseQuantity('quantity14')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData14()">Add to Cart</button>
                        <script>
                        function sendData14() {
                                var data1 = document.getElementById('saransh_1').innerText;
                                var data2 = document.getElementById('saransh_brand').innerText;
                                var data3 = document.getElementById('saransh_price').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand14.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand15.jpg');?>" alt="Product 15">
                <div class="product-details">
                    <h3 id="saransh_collection">saransh collection</h3>
                    <p id="brand_saransh_2">brand</p>
                    <p id="price_saransh_2">₹700 <span class="original-price">₹1000</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity15')">-</button>
                            <input type="text" id="quantity15" value="1" readonly>
                            <button onclick="increaseQuantity('quantity15')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData15()">Add to Cart</button>
                        <script>
                        function sendData15() {
                                var data1 = document.getElementById('saransh_collection').innerText;
                                var data2 = document.getElementById('brand_saransh_2').innerText;
                                var data3 = document.getElementById('price_saransh_2').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand15.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand16.jpg');?>" alt="Product 16">
                <div class="product-details"><br>
                    <h3 id="vaidya_collection_1">vaidya collection</h3>
                    <p id="vaidya_brand_1">brand</p>
                    <p id="vaidya_price_1">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity16')">-</button>
                            <input type="text" id="quantity16" value="1" readonly>
                            <button onclick="increaseQuantity('quantity16')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData16()">Add to Cart</button>
                        <script>
                        function sendData16() {
                                var data1 = document.getElementById('vaidya_collection_1').innerText;
                                var data2 = document.getElementById('vaidya_brand_1').innerText;
                                var data3 = document.getElementById('vaidya_price_1').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand16.jpg');
                            }
                        </script>

                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand17.jpg');?>" alt="Product 17">
                <div class="product-details">
                    <h3 id="ayush_collection_5">ayush collection</h3>
                    <p id="ayush_brand_5">brand</p>
                    <p id="ayush_price_5">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity17')">-</button>
                            <input type="text" id="quantity17" value="1" readonly>
                            <button onclick="increaseQuantity('quantity17')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData17()">Add to Cart</button>
                        <script>
                        function sendData17() {
                                var data1 = document.getElementById('ayush_collection_5').innerText;
                                var data2 = document.getElementById('ayush_brand_5').innerText;
                                var data3 = document.getElementById('ayush_price_5').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand17.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand18.jpg');?>" alt="Product 18">
                <div class="product-details">
                    <h3 id="ayush_collection_6">ayush collection</h3>
                    <p id="ayush_brand_6">brand</p>
                    <p id="ayush_price_6">₹1100 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity18')">-</button>
                            <input type="text" id="quantity18" value="1" readonly>
                            <button onclick="increaseQuantity('quantity18')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData18()">Add to Cart</button>
                        <script>
                        function sendData18() {
                                var data1 = document.getElementById('ayush_collection_6').innerText;
                                var data2 = document.getElementById('ayush_brand_6').innerText;
                                var data3 = document.getElementById('ayush_price_6').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand18.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand19.jpg');?>" alt="Product 19">
                <div class="product-details">
                    <h3 id="ayush_collection_7">ayush collection</h3>
                    <p id="brand_7">brand</p>
                    <p id="price_7">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity19')">-</button>
                            <input type="text" id="quantity19" value="1" readonly>
                            <button onclick="increaseQuantity('quantity19')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData19()">Add to Cart</button>
                        <script>
                        function sendData19() {
                                var data1 = document.getElementById('ayush_collection_7').innerText;
                                var data2 = document.getElementById('brand_7').innerText;
                                var data3 = document.getElementById('price_7').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand19.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand20.jpg');?>" alt="Product 20">
                <div class="product-details">
                    <h3 id="ayush_collection_8">ayush collection</h3>
                    <p id="brand_8">brand</p>
                    <p id="price_8">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity20')">-</button>
                            <input type="text" id="quantity20" value="1" readonly>
                            <button onclick="increaseQuantity('quantity20')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData20()">Add to Cart</button>
                        <script>
                        function sendData20() {
                                var data1 = document.getElementById('ayush_collection_8').innerText;
                                var data2 = document.getElementById('brand_8').innerText;
                                var data3 = document.getElementById('price_8').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand20.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand21.jpg');?>" alt="Product 21">
                <div class="product-details"><br>
                    <h3 id="ayush_9">ayush collection</h3>
                    <p id="brand_9">brand</p>
                    <p id="price_9">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity21')">-</button>
                            <input type="text" id="quantity21" value="1" readonly>
                            <button onclick="increaseQuantity('quantity21')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData21()">Add to Cart</button>
                        <script>
                        function sendData21() {
                                var data1 = document.getElementById('ayush_9').innerText;
                                var data2 = document.getElementById('brand_9').innerText;
                                var data3 = document.getElementById('price_9').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand21.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand22.jpg');?>" alt="Product 22">
                <div class="product-details">
                    <h3 id="ayush_10">ayush collection</h3>
                    <p id="brand_10">brand</p>
                    <p id="price_10">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity22')">-</button>
                            <input type="text" id="quantity22" value="1" readonly>
                            <button onclick="increaseQuantity('quantity22')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData22()">Add to Cart</button>
                        <script>
                        function sendData22() {
                                var data1 = document.getElementById('ayush_10').innerText;
                                var data2 = document.getElementById('brand_10').innerText;
                                var data3 = document.getElementById('price_10').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand22.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand23.jpg');?>" alt="Product 23">
                <div class="product-details"><br>
                    <h3 id="ayush_11">ayush collection</h3>
                    <p id="brand_11">brand</p>
                    <p id="price_11">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity23')">-</button>
                            <input type="text" id="quantity23" value="1" readonly>
                            <button onclick="increaseQuantity('quantity23')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData23()">Add to Cart</button>
                        <script>
                        function sendData23() {
                                var data1 = document.getElementById('ayush_11').innerText;
                                var data2 = document.getElementById('brand_11').innerText;
                                var data3 = document.getElementById('price_11').innerText;
                                
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand23.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/brands/brand24.jpg');?>" alt="Product 24">
                <div class="product-details"><br>
                    <h3 id="ayush_12">ayush collection</h3>
                    <p id="brand_12">brand</p>
                    <p id="price_12">₹700 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                    <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity24')">-</button>
                            <input type="text" id="quantity24" value="1" readonly>
                            <button onclick="increaseQuantity('quantity24')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData24()">Add to Cart</button>
                        <script>
                        function sendData24() {
                                var data1 = document.getElementById('ayush_12').innerText;
                                var data2 = document.getElementById('brand_12').innerText;
                                var data3 = document.getElementById('price_12').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/brands/brand24.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
           
            

       
            
        </div>
    </main>
    <script>
        function decreaseQuantity(id) {
            let quantityInput = document.getElementById(id);
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        }

        function increaseQuantity(id) {
            let quantityInput = document.getElementById(id);
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        }
    </script>
    <script type="text/javascript" src="cart.js"></script>
</body>
</html>