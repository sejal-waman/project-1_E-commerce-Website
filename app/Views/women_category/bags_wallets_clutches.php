<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bags Wallets & Clutches</title>
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
        <h1><center>Bags,Wallets & Clutches</center></h1>
        <div class="product-grid">
            <!-- Example Product Item Start -->
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/bag1.jpg');?>" alt="Product 1">
                <div class="product-details"><br><br><br>
                    <h3 id="somani_1">Samani</h3>
                    <p id="handbag_1">handbag</p>
                    <p id="price_1">₹381 <span class="original-price">₹799</span> <span class="discount">65% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity1')">-</button>
                            <input type="text" id="quantity1" value="1" readonly>
                            <button onclick="increaseQuantity('quantity1')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData()">Add to Cart</button>
                        <script>
                        function sendData() {
                                var data1 = document.getElementById('somani_1').innerText;
                                var data2 = document.getElementById('handbag_1').innerText;
                                var data3 = document.getElementById('price_1').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/bag1.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
           
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/bag2.jpg');?>" alt="Product 2">
                <div class="product-details">
                    <h3 id="oke_2">oke brand</h3>
                    <p id="bag_2">bag</p>
                    <p id="price_2">₹375 <span class="original-price">₹499</span> <span class="discount">74% off</span></p>
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
                                var data1 = document.getElementById('oke_2').innerText;
                                var data2 = document.getElementById('bag_2').innerText;
                                var data3 = document.getElementById('price_2').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/bag2.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/bag3.jpg');?>" alt="Product 3">
                <div class="product-details">
                    <h3 id="ahana_3">ahana brand</h3>
                    <p id="bag_3">bag</p>
                    <p id="price_3">₹360 <span class="original-price">₹599</span> <span class="discount">77% off</span></p>
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
                                var data1 = document.getElementById('ahana_3').innerText;
                                var data2 = document.getElementById('bag_3').innerText;
                                var data3 = document.getElementById('price_3').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/bag3.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/bag4.jpg');?>" alt="Product 4">
                <div class="product-details">
                    <h3 id="ahana_4">ahana brand</h3>
                    <p id="bag_4">bag</p>
                    <p id="price_4">₹450 <span class="original-price">₹700</span> <span class="discount">75% off</span></p>
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
                                var data1 = document.getElementById('ahana_4').innerText;
                                var data2 = document.getElementById('bag_4').innerText;
                                var data3 = document.getElementById('price_4').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/bag4.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/bag25.jpg');?>" alt="Product 25">
                <div class="product-details">
                    <h3 id="ayush_5">ayush collection</h3>
                    <p id="bag_5">bag</p>
                    <p id="price_5">₹899 <span class="original-price">₹1099</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity25')">-</button>
                            <input type="text" id="quantity25" value="1" readonly>
                            <button onclick="increaseQuantity('quantity25')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData5()">Add to Cart</button>
                        <script>
                        function sendData5() {
                                var data1 = document.getElementById('ayush_5').innerText;
                                var data2 = document.getElementById('bag_5').innerText;
                                var data3 = document.getElementById('price_5').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/bag25.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/bag26.jpg');?>" alt="Product 26">
                <div class="product-details"><br>
                    <h3 id="ayush_6">ayush collection</h3>
                    <p id="bag_6">bag</p>
                    <p id="price_6">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity26')">-</button>
                            <input type="text" id="quantity26" value="1" readonly>
                            <button onclick="increaseQuantity('quantity26')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData6()">Add to Cart</button>
                        <script>
                        function sendData6() {
                                var data1 = document.getElementById('ayush_6').innerText;
                                var data2 = document.getElementById('bag_6').innerText;
                                var data3 = document.getElementById('price_6').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/bag26.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/bag27.jpg');?>" alt="Product 27">
                <div class="product-details"><br>
                    <h3 id="shreya_7">shreya collection</h3>
                    <p id="bag_7">bag</p>
                    <p id="price_7">₹800 <span class="original-price">₹1099</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity27')">-</button>
                            <input type="text" id="quantity27" value="1" readonly>
                            <button onclick="increaseQuantity('quantity27')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData7()">Add to Cart</button>
                        <script>
                        function sendData7() {
                                var data1 = document.getElementById('shreya_7').innerText;
                                var data2 = document.getElementById('bag_7').innerText;
                                var data3 = document.getElementById('price_7').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/bag27.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/bag28.jpg');?>" alt="Product 28">
                <div class="product-details"><br>
                    <h3 id="shivansh_8">shivansh collection</h3>
                    <p id="bag_8">bag</p>
                    <p id="price_8">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity28')">-</button>
                            <input type="text" id="quantity28" value="1" readonly>
                            <button onclick="increaseQuantity('quantity28')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData8()">Add to Cart</button>
                        <script>
                        function sendData8() {
                                var data1 = document.getElementById('shivansh_8').innerText;
                                var data2 = document.getElementById('bag_8').innerText;
                                var data3 = document.getElementById('price_8').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/bag28.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <!-- bags end here -->

            <!-- wallets start here -->
        
        
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/wallet1.jpg');?>" alt="Product 29">
                <div class="product-details">
                    <h3 id="somani_9">Samani</h3>
                    <p id="wallet_9">wallet</p>
                    <p id="price_9">₹381 <span class="original-price">₹799</span> <span class="discount">65% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity29')">-</button>
                            <input type="text" id="quantity29" value="1" readonly>
                            <button onclick="increaseQuantity('quantity29')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData9()">Add to Cart</button>
                        <script>
                        function sendData9() {
                                var data1 = document.getElementById('somani_9').innerText;
                                var data2 = document.getElementById('wallet_9').innerText;
                                var data3 = document.getElementById('price_9').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/wallet1.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
           
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/wallet2.jpg');?>" alt="Product 30">
                <div class="product-details">
                    <h3 id="oke_10">oke brand</h3>
                    <p id="wallet_10">wallet</p>
                    <p id="price_10">₹375 <span class="original-price">₹1499</span> <span class="discount">74% off</span></p>
                    <p class="rating">★★★★☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity30')">-</button>
                            <input type="text" id="quantity30" value="1" readonly>
                            <button onclick="increaseQuantity('quantity30')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData10()">Add to Cart</button>
                        <script>
                        function sendData10() {
                                var data1 = document.getElementById('oke_10').innerText;
                                var data2 = document.getElementById('wallet_10').innerText;
                                var data3 = document.getElementById('price_10').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/wallet2.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/wallet8.jpg');?>" alt="Product 36">
                <div class="product-details">
                    <h3 id="shreyas_11">shreyas vv</h3>
                    <p id="wallet_11">wallet</p>
                    <p id="price_11">₹200 <span class="original-price">₹699</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity36')">-</button>
                            <input type="text" id="quantity36" value="1" readonly>
                            <button onclick="increaseQuantity('quantity36')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData11()">Add to Cart</button>
                        <script>
                        function sendData11() {
                                var data1 = document.getElementById('shreyas_11').innerText;
                                var data2 = document.getElementById('wallet_11').innerText;
                                var data3 = document.getElementById('price_11').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/wallet8.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/wallet9.jpg');?>" alt="Product 37">
                <div class="product-details">
                    <h3 id="shreya_12">shreya collection</h3>
                    <p id="wallet_12">wallet</p>
                    <p id="price_12">₹900 <span class="original-price">₹1200</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity37')">-</button>
                            <input type="text" id="quantity37" value="1" readonly>
                            <button onclick="increaseQuantity('quantity37')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData12()">Add to Cart</button>
                        <script>
                        function sendData12() {
                                var data1 = document.getElementById('shreya_12').innerText;
                                var data2 = document.getElementById('wallet_12').innerText;
                                var data3 = document.getElementById('price_12').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/wallet9.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/wallet11.jpg');?>" alt="Product 39">
                <div class="product-details">
                    <h3 id="riya_13">riya collection</h3>
                    <p id="wallet_13">wallet</p>
                    <p id="price_13">₹500 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity39')">-</button>
                            <input type="text" id="quantity39" value="1" readonly>
                            <button onclick="increaseQuantity('quantity39')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData13()">Add to Cart</button>
                        <script>
                        function sendData13() {
                                var data1 = document.getElementById('riya_13').innerText;
                                var data2 = document.getElementById('wallet_13').innerText;
                                var data3 = document.getElementById('price_13').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/wallet11.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/wallet13.jpg');?>" alt="Product 41">
                <div class="product-details">
                    <h3 id="sara_14">sara</h3>
                    <p id="wallet_14">wallet</p>
                    <p id="price_14">₹1100 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity41')">-</button>
                            <input type="text" id="quantity41" value="1" readonly>
                            <button onclick="increaseQuantity('quantity41')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData14()">Add to Cart</button>
                        <script>
                        function sendData14() {
                                var data1 = document.getElementById('sara_14').innerText;
                                var data2 = document.getElementById('wallet_14').innerText;
                                var data3 = document.getElementById('price_14').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/wallet13.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/wallet14.jpg');?>" alt="Product 42">
                <div class="product-details">
                    <h3 id="saransh_15">saransh</h3>
                    <p id="wallet_15">wallet</p>
                    <p id="price_15">₹490 <span class="original-price">₹999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity42')">-</button>
                            <input type="text" id="quantity42" value="1" readonly>
                            <button onclick="increaseQuantity('quantity42')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData15()">Add to Cart</button>
                        <script>
                        function sendData15() {
                                var data1 = document.getElementById('saransh_15').innerText;
                                var data2 = document.getElementById('wallet_15').innerText;
                                var data3 = document.getElementById('price_15').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/wallet14.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/wallet15.jpg');?>" alt="Product 43">
                <div class="product-details">
                    <h3 id="saransh_16">saransh collection</h3>
                    <p id="wallet_16">wallet</p>
                    <p id="price_16">₹800 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity43')">-</button>
                            <input type="text" id="quantity43" value="1" readonly>
                            <button onclick="increaseQuantity('quantity43')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData16()">Add to Cart</button>
                        <script>
                        function sendData16() {
                                var data1 = document.getElementById('saransh_16').innerText;
                                var data2 = document.getElementById('wallet_16').innerText;
                                var data3 = document.getElementById('price_16').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/wallet15.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/wallet20.jpg');?>" alt="Product 48">
                <div class="product-details">
                    <h3 id="ayush_17">ayush collection</h3>
                    <p id="wallet_17">wallet</p>
                    <p id="price_17">₹700 <span class="original-price">₹999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity48')">-</button>
                            <input type="text" id="quantity48" value="1" readonly>
                            <button onclick="increaseQuantity('quantity48')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData17()">Add to Cart</button>
                        <script>
                        function sendData17() {
                                var data1 = document.getElementById('ayush_17').innerText;
                                var data2 = document.getElementById('wallet_17').innerText;
                                var data3 = document.getElementById('price_17').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/wallet20.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            
             <!--wallets end here-->


               <!-- clutches start here -->
        
        
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/clutch16.jpg');?>" alt="Product 64">
                <div class="product-details"><br><br>
                    <h3 id="vaidya_18">vaidya collection</h3>
                    <p id="clutch_18">clutch</p>
                    <p id="price_18">₹350 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity64')">-</button>
                            <input type="text" id="quantity64" value="1" readonly>
                            <button onclick="increaseQuantity('quantity64')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData18()">Add to Cart</button>
                        <script>
                        function sendData18() {
                                var data1 = document.getElementById('vaidya_18').innerText;
                                var data2 = document.getElementById('clutch_18').innerText;
                                var data3 = document.getElementById('price_18').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/clutch16.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/clutch17.jpg');?>" alt="Product 65">
                <div class="product-details">
                    <h3 id="ayush_19">ayush collection</h3>
                    <p id="clutch_19">clutch</p>
                    <p id="price_19">₹230 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity65')">-</button>
                            <input type="text" id="quantity65" value="1" readonly>
                            <button onclick="increaseQuantity('quantity65')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('clutch17',₹230)">Add to Cart</button>
                        <script>
                        function sendData19() {
                                var data1 = document.getElementById('ayush_19').innerText;
                                var data2 = document.getElementById('clutch_19').innerText;
                                var data3 = document.getElementById('price_19').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/clutch17.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/clutch18.jpg');?>" alt="Product 66">
                <div class="product-details">
                    <h3 id="ayush_20">ayush collection</h3>
                    <p id="clutch_20">clutch</p>
                    <p id="price_20">₹240 <span class="original-price">₹899</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity66')">-</button>
                            <input type="text" id="quantity66" value="1" readonly>
                            <button onclick="increaseQuantity('quantity66')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData20()">Add to Cart</button>
                        <script>
                        function sendData20() {
                                var data1 = document.getElementById('ayush_20').innerText;
                                var data2 = document.getElementById('clutch_20').innerText;
                                var data3 = document.getElementById('price_20').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/clutch18.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/clutch19.jpg');?>" alt="Product 67">
                <div class="product-details">
                    <h3 id="ayush_21">ayush collection</h3>
                    <p id="clutch_21">clutch</p>
                    <p id="price_21">₹200 <span class="original-price">₹399</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity67')">-</button>
                            <input type="text" id="quantity67" value="1" readonly>
                            <button onclick="increaseQuantity('quantity67')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData21()">Add to Cart</button>
                        <script>
                        function sendData21() {
                                var data1 = document.getElementById('ayush_21').innerText;
                                var data2 = document.getElementById('clutch_21').innerText;
                                var data3 = document.getElementById('price_21').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/clutch19.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/handbags/clutch20.jpg');?>" alt="Product 68">
                <div class="product-details">
                    <h3 id="ayush_22">ayush collection</h3>
                    <p id="clutch_22">clutch</p>
                    <p id="price_22">₹150 <span class="original-price">₹299</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity68')">-</button>
                            <input type="text" id="quantity68" value="1" readonly>
                            <button onclick="increaseQuantity('quantity68')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData22()">Add to Cart</button>
                        <script>
                        function sendData22() {
                                var data1 = document.getElementById('ayush_22').innerText;
                                var data2 = document.getElementById('clutch_22').innerText;
                                var data3 = document.getElementById('price_22').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/handbags/clutch20.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>

         <!-- clutches end here -->
            
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