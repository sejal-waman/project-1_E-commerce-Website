<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethnic Wear</title>
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
        <h1><center>Ethnic Wear</center></h1>
        <div class="product-grid">
            <!-- Example Product Item Start -->
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/ethnic/ethnic1.jpg');?>" alt="Product 1">
                <div class="product-details">
                    <h3 id="somani_1">Samani</h3>
                    <p id="ethnic_1">ethnic</p>
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
                                var data2 = document.getElementById('ethnic_1').innerText;
                                var data3 = document.getElementById('price_1').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/ethnic/ethnic1.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
           
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/ethnic/ethnic2.jpg');?>" alt="Product 2">
                <div class="product-details"><br><br><br>
                    <h3 id="oke_2">oke brand</h3>
                    <p id="ethnic_2">ethnic</p>
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
                                var data2 = document.getElementById('ethnic_2').innerText;
                                var data3 = document.getElementById('price_2').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/ethnic/ethnic2.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/ethnic/ethnic3.jpg');?>" alt="Product 3">
                <div class="product-details"><br><br>
                    <h3 id="ahana_3">ahana brand</h3>
                    <p id="ethnic_3">ethnic</p>
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
                                var data2 = document.getElementById('ethnic_3').innerText;
                                var data3 = document.getElementById('price_3').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/ethnic/ethnic3.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/ethnic/ethnic4.jpg');?>" alt="Product 4">
                <div class="product-details"><br><br><br>
                    <h3 id="ahana_4">ahana brand</h3>
                    <p id="ethnic_4">ethnic</p>
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
                                var data2 = document.getElementById('ethnic_4').innerText;
                                var data3 = document.getElementById('price_4').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/ethnic/ethnic4.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/ethnic/ethnic5.jpg');?>" alt="Product 5">
                <div class="product-details">
                    <h3 id="ayush_5">ayush collection</h3>
                    <p id="ethnic_5">ethnic</p>
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
                                var data2 = document.getElementById('ethnic_5').innerText;
                                var data3 = document.getElementById('price_5').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/ethnic/ethnic5.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/ethnic/ethnic6.jpg');?>" alt="Product 6">
                <div class="product-details">
                    <h3 id="sandhya_6">sandhya collection</h3>
                    <p id="ethnic_6">ethnic</p>
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
                                var data2 = document.getElementById('ethnic_6').innerText;
                                var data3 = document.getElementById('price_6').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/ethnic/ethnic6.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/ethnic/ethnic7.jpg');?>" alt="Product 7">
                <div class="product-details">
                    <h3 id="ayush_7">ayush collection</h3>
                    <p id="ethnic_7">ethnic</p>
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
                                var data2 = document.getElementById('ethnic_7').innerText;
                                var data3 = document.getElementById('price_7').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/ethnic/ethnic7.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/ethnic/ethnic8.jpg');?>" alt="Product 8">
                <div class="product-details">
                    <h3 id="shreya_8">shreyas vv</h3>
                    <p id="ethnic_8">ethnic</p>
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
                                var data1 = document.getElementById('shreya_8').innerText;
                                var data2 = document.getElementById('ethnic_8').innerText;
                                var data3 = document.getElementById('price_8').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/ethnic/ethnic8.jpg');
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