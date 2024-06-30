<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foot Wear</title>
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
        <h1><center>Foot Wear</center></h1>
        <div class="product-grid">
            <!-- Example Product Item Start -->
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear1.jpg');?>" alt="Product 1">
                <div class="product-details">
                    <h3 id="samani_1">Samani</h3>
                    <p id="footwear_1">footwear</p>
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
                                var data2 = document.getElementById('footwear_1').innerText;
                                var data3 = document.getElementById('price_1').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear1.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
           
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear2.jpg');?>" alt="Product 2">
                <div class="product-details"><br><br><br>
                    <h3 id="oke_2">oke brand</h3>
                    <p id="footwear_2">footwear</p>
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
                                var data2 = document.getElementById('footwear_2').innerText;
                                var data3 = document.getElementById('price_2').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear2.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear3.jpg');?>" alt="Product 3">
                <div class="product-details"><br><br>
                    <h3 id="ahana_3">ahana brand</h3>
                    <p id="footwear_3">footwear</p>
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
                                var data2 = document.getElementById('footwear_3').innerText;
                                var data3 = document.getElementById('price_3').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear3.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear4.jpg');?>" alt="Product 4">
                <div class="product-details"><br><br><br>
                    <h3 id="ahana_4">ahana brand</h3>
                    <p id="footwear_4">footwear</p>
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
                                var data2 = document.getElementById('footwear_4').innerText;
                                var data3 = document.getElementById('price_4').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear4.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear7.jpg');?>" alt="Product 7">
                <div class="product-details">
                    <h3 id="ayush_5">ayush collection</h3>
                    <p id="footwear_5">footwear</p>
                    <p id="price_5">₹700 <span class="original-price">₹999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity7')">-</button>
                            <input type="text" id="quantity7" value="1" readonly>
                            <button onclick="increaseQuantity('quantity7')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData5()">Add to Cart</button>
                        <script>
                        function sendData5() {
                                var data1 = document.getElementById('ayush_5').innerText;
                                var data2 = document.getElementById('footwear_5').innerText;
                                var data3 = document.getElementById('price_5').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear7.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear11.jpg');?>" alt="Product 11">
                <div class="product-details">
                    <h3 id="riya_6">riya collection</h3>
                    <p id="footwear_6">footwear</p>
                    <p id="price_6">₹800 <span class="original-price">₹1200</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity11')">-</button>
                            <input type="text" id="quantity11" value="1" readonly>
                            <button onclick="increaseQuantity('quantity11')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData6()">Add to Cart</button>
                        <script>
                        function sendData6() {
                                var data1 = document.getElementById('riya_6').innerText;
                                var data2 = document.getElementById('footwear_6').innerText;
                                var data3 = document.getElementById('price_6').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear11.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear16.jpg');?>" alt="Product 16">
                <div class="product-details"><br>
                    <h3 id="vaidya_7">vaidya collection</h3>
                    <p id="footwear_7">footwear</p>
                    <p id="price_7">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity16')">-</button>
                            <input type="text" id="quantity16" value="1" readonly>
                            <button onclick="increaseQuantity('quantity16')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData7()">Add to Cart</button>
                        <script>
                        function sendData7() {
                                var data1 = document.getElementById('vaidya_7').innerText;
                                var data2 = document.getElementById('footwear_7').innerText;
                                var data3 = document.getElementById('price_7').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear16.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear17.jpg');?>" alt="Product 17">
                <div class="product-details">
                    <h3 id="ayush_8">ayush collection</h3>
                    <p id="footwear_8">footwear</p>
                    <p id="price_8">₹1300 <span class="original-price">₹2990</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity17')">-</button>
                            <input type="text" id="quantity17" value="1" readonly>
                            <button onclick="increaseQuantity('quantity17')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData8()">Add to Cart</button>
                        <script>
                        function sendData8() {
                                var data1 = document.getElementById('ayush_8').innerText;
                                var data2 = document.getElementById('footwear_8').innerText;
                                var data3 = document.getElementById('price_8').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear17.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear19.jpg');?>" alt="Product 19">
                <div class="product-details">
                    <h3 id="ayush_9">ayush collection</h3>
                    <p id="footwear_9">footwear</p>
                    <p id="price_9">₹300 <span class="original-price">₹599</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity19')">-</button>
                            <input type="text" id="quantity19" value="1" readonly>
                            <button onclick="increaseQuantity('quantity19')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData9()">Add to Cart</button>
                        <script>
                        function sendData9() {
                                var data1 = document.getElementById('ayush_9').innerText;
                                var data2 = document.getElementById('footwear_9').innerText;
                                var data3 = document.getElementById('price_9').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear19.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear20.jpg');?>" alt="Product 20">
                <div class="product-details">
                    <h3 id="ayush_10">ayush collection</h3>
                    <p id="footwear_10">footwear</p>
                    <p id="price_10">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity20')">-</button>
                            <input type="text" id="quantity20" value="1" readonly>
                            <button onclick="increaseQuantity('quantity20')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData10()">Add to Cart</button>
                        <script>
                        function sendData10() {
                                var data1 = document.getElementById('ayush_10').innerText;
                                var data2 = document.getElementById('footwear_10').innerText;
                                var data3 = document.getElementById('price_10').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear20.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/men/footwear/footwear23.jpg');?>" alt="Product 23">
                <div class="product-details"><br>
                    <h3 id="ayush_11">ayush collection</h3>
                    <p id="footwear_11">footwear</p>
                    <p id="price_11">₹1000 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity23')">-</button>
                            <input type="text" id="quantity23" value="1" readonly>
                            <button onclick="increaseQuantity('quantity23')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData11()">Add to Cart</button>
                        <script>
                        function sendData11() {
                                var data1 = document.getElementById('ayush_11').innerText;
                                var data2 = document.getElementById('footwear_11').innerText;
                                var data3 = document.getElementById('price_11').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/men/footwear/footwear23.jpg');
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