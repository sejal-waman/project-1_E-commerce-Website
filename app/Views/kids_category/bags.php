<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Bags</title>
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
        <h1><center>Kids Bags</center></h1>
        <div class="product-grid">
            <!-- Example Product Item Start -->
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags1.jpg');?>" alt="Product 1">
                <div class="product-details">
                    <h3 id="samani_1">Samani</h3>
                    <p id="bags_1">bags</p>
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
                                var data1 = document.getElementById('samani_1').innerText;
                                var data2 = document.getElementById('bags_1').innerText;
                                var data3 = document.getElementById('price_1').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags1.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
           
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags2.jpg');?>" alt="Product 2">
                <div class="product-details"><br><br><br>
                    <h3 id="oke_2">oke brand</h3>
                    <p id="bags_2">bags</p>
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
                                var data2 = document.getElementById('bags_2').innerText;
                                var data3 = document.getElementById('price_2').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags2.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags3.jpg');?>" alt="Product 3">
                <div class="product-details"><br><br>
                    <h3 id="ahana_3">ahana brand</h3>
                    <p id="bags_3">bags</p>
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
                                var data2 = document.getElementById('bags_3').innerText;
                                var data3 = document.getElementById('price_3').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags3.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags4.jpg');?>" alt="Product 4">
                <div class="product-details"><br><br><br>
                    <h3 id="ahana_4">ahana brand</h3>
                    <p id="bags_4">bags</p>
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
                                var data2 = document.getElementById('bags_4').innerText;
                                var data3 = document.getElementById('price_4').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags4.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags5.jpg');?>" alt="Product 5">
                <div class="product-details">
                    <h3 id="ayush_5">ayush collection</h3>
                    <p id="bags_5">bags</p>
                    <p id="price_5">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
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
                                var data1 = document.getElementById('ayush_5').innerText;
                                var data2 = document.getElementById('bags_5').innerText;
                                var data3 = document.getElementById('price_5').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags5.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags6.jpg');?>" alt="Product 6">
                <div class="product-details">
                    <h3 id="sandhya_6">sandhya collection</h3>
                    <p id="bags_6">bags</p>
                    <p id="price_6">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
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
                                var data1 = document.getElementById('sandhya_6').innerText;
                                var data2 = document.getElementById('bags_6').innerText;
                                var data3 = document.getElementById('price_6').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags6.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags7.jpg');?>" alt="Product 7">
                <div class="product-details">
                    <h3 id="ayush_7">ayush collection</h3>
                    <p id="bags_7">bags</p>
                    <p id="price_7">₹700 <span class="original-price">₹999</span> <span class="discount">87% off</span></p>
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
                                var data1 = document.getElementById('ayush_7').innerText;
                                var data2 = document.getElementById('bags_7').innerText;
                                var data3 = document.getElementById('price_7').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags7.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags8.jpg');?>" alt="Product 8">
                <div class="product-details">
                    <h3 id="shreyas_8">shreyas vv</h3>
                    <p id="bags_8">bags</p>
                    <p id="price_8">₹1100 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
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
                                var data1 = document.getElementById('shreyas_8').innerText;
                                var data2 = document.getElementById('bags_8').innerText;
                                var data3 = document.getElementById('price_8').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags9.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags9.jpg');?>" alt="Product 9">
                <div class="product-details">
                    <h3 id="shreya_9">shreya collection</h3>
                    <p id="bags_9">bags</p>
                    <p id="price_9">₹1000 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
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
                                var data1 = document.getElementById('shreya_9').innerText;
                                var data2 = document.getElementById('bags_9').innerText;
                                var data3 = document.getElementById('price_9').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags9.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags10.jpg');?>" alt="Product 10">
                <div class="product-details">
                    <h3 id="ayush_10">ayush collection</h3>
                    <p id="bags_10">bags</p>
                    <p id="price_10">₹900 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
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
                                var data1 = document.getElementById('ayush_10').innerText;
                                var data2 = document.getElementById('bags_10').innerText;
                                var data3 = document.getElementById('price_10').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags10.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags11.jpg');?>" alt="Product 11">
                <div class="product-details">
                    <h3 id="riya_11">riya collection</h3>
                    <p id="bags_11">bags</p>
                    <p id="price_11">₹800 <span class="original-price">₹1200</span> <span class="discount">87% off</span></p>
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
                                var data1 = document.getElementById('riya_11').innerText;
                                var data2 = document.getElementById('bags_11').innerText;
                                var data3 = document.getElementById('price_11').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags11.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags12.jpg');?>" alt="Product 12">
                <div class="product-details">
                    <h3 id="ayush_12">ayush collection</h3>
                    <p id="bags_12">bags</p>
                    <p id="price_12">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
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
                                var data1 = document.getElementById('ayush_12').innerText;
                                var data2 = document.getElementById('bags_12').innerText;
                                var data3 = document.getElementById('price_12').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags12.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags22.jpg');?>" alt="Product 22">
                <div class="product-details">
                    <h3 id="ayush_13">ayush collection</h3>
                    <p id="bags_13">bags</p>
                    <p id="price_13">460 <span class="original-price">₹999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity22')">-</button>
                            <input type="text" id="quantity22" value="1" readonly>
                            <button onclick="increaseQuantity('quantity22')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData13()">Add to Cart</button>
                        <script>
                        function sendData13() {
                                var data1 = document.getElementById('ayush_13').innerText;
                                var data2 = document.getElementById('bags_13').innerText;
                                var data3 = document.getElementById('price_13').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags22.jpg');
                            }
                        </script>
                </div>
            </div>
         </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags23.jpg');?>" alt="Product 23">
                <div class="product-details"><br>
                    <h3 id="ayush_14">ayush collection</h3>
                    <p id="bags_14">bags</p>
                    <p id="price_14">₹1000 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity23')">-</button>
                            <input type="text" id="quantity23" value="1" readonly>
                            <button onclick="increaseQuantity('quantity23')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData14()">Add to Cart</button>
                        <script>
                        function sendData14() {
                                var data1 = document.getElementById('ayush_14').innerText;
                                var data2 = document.getElementById('bags_14').innerText;
                                var data3 = document.getElementById('price_14').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags23.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/kids/bags/bags24.jpg');?>" alt="Product 24">
                <div class="product-details"><br>
                    <h3 id="ayush_15">ayush collection</h3>
                    <p id="bags_15">bags</p>
                    <p id="price_15">₹990 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity24')">-</button>
                            <input type="text" id="quantity24" value="1" readonly>
                            <button onclick="increaseQuantity('quantity24')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData15()">Add to Cart</button>
                        <script>
                        function sendData15() {
                                var data1 = document.getElementById('ayush_15').innerText;
                                var data2 = document.getElementById('bags_15').innerText;
                                var data3 = document.getElementById('price_15').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/kids/bags/bags24.jpg');
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