<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footwear</title>
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
        <h1><center>Footwear</center></h1>
        <div class="product-grid">
            <!-- Example Product Item Start -->
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot1.jpg');?>" alt="Product 1">
                <div class="product-details"><br><br><br>
                    <h3 id="somani_1">Samani</h3>
                    <p id="footwear_1">footwear</p>
                    <p id="price_1">₹381 <span class="original-price">₹799</span> <span class="discount">65% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity1')">-</button>
                            <input type="text" id="quantity1" value="1" readonly>
                            <button onclick="increaseQuantity('quantity1')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData1()">Add to Cart</button>
                        <script>
                        function sendData1() {
                                var data1 = document.getElementById('somani_1').innerText;
                                var data2 = document.getElementById('footwear_1').innerText;
                                var data3 = document.getElementById('price_1').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot1.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
           
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot2.jpg');?>" alt="Product 2">
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
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot2.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot3.jpg');?>" alt="Product 3">
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
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot3.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot4.jpg');?>" alt="Product 4">
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
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot4.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot5.jpg');?>" alt="Product 5">
                <div class="product-details">
                    <h3 id="ayush_5">ayush collection</h3>
                    <p id="footwear_5">footwear</p>
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
                                var data2 = document.getElementById('footwear_5').innerText;
                                var data3 = document.getElementById('price_5').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot5.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot6.jpg');?>" alt="Product 6">
                <div class="product-details">
                    <h3 id="sandhya_6">sandhya collection</h3>
                    <p id="footwear_6">footwear</p>
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
                                var data2 = document.getElementById('footwear_6').innerText;
                                var data3 = document.getElementById('price_6').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot6.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot7.jpg');?>" alt="Product 7">
                <div class="product-details">
                    <h3 id="ayush_7">ayush collection</h3>
                    <p id="footwear_7">footwear</p>
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
                                var data2 = document.getElementById('footwear_7').innerText;
                                var data3 = document.getElementById('price_7').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot7.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot8.jpg');?>" alt="Product 8">
                <div class="product-details">
                    <h3 id="shreyas_8">shreyas vv</h3>
                    <p id="footwear_8">footwear</p>
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
                                var data2 = document.getElementById('footwear_8').innerText;
                                var data3 = document.getElementById('price_8').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot8.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
           
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot10.jpg');?>" alt="Product 10">
                <div class="product-details">
                    <h3 id="ayush_9">ayush collection</h3>
                    <p id="footwear_9">footwear</p>
                    <p id="price_9">₹900 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity10')">-</button>
                            <input type="text" id="quantity10" value="1" readonly>
                            <button onclick="increaseQuantity('quantity10')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData9()">Add to Cart</button>
                        <script>
                        function sendData9() {
                                var data1 = document.getElementById('ayush_9').innerText;
                                var data2 = document.getElementById('footwear_9').innerText;
                                var data3 = document.getElementById('price_9').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot10.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot11.jpg');?>" alt="Product 11">
                <div class="product-details">
                    <h3 id="riya_10">riya collection</h3>
                    <p id="footwear_10">footwear</p>
                    <p id="price_10">₹800 <span class="original-price">₹1200</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity11')">-</button>
                            <input type="text" id="quantity11" value="1" readonly>
                            <button onclick="increaseQuantity('quantity11')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData10()">Add to Cart</button>
                        <script>
                        function sendData10() {
                                var data1 = document.getElementById('riya_10').innerText;
                                var data2 = document.getElementById('footwear_10').innerText;
                                var data3 = document.getElementById('price_10').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot11.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot13.jpg');?>" alt="Product 13">
                <div class="product-details">
                    <h3 id="sara_11">sara</h3>
                    <p id="footwear_11">footwear</p>
                    <p id="price_11">₹750 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity13')">-</button>
                            <input type="text" id="quantity13" value="1" readonly>
                            <button onclick="increaseQuantity('quantity13')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData11()">Add to Cart</button>
                        <script>
                        function sendData11() {
                                var data1 = document.getElementById('sara_11').innerText;
                                var data2 = document.getElementById('footwear_11').innerText;
                                var data3 = document.getElementById('price_11').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot13.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot14.jpg');?>" alt="Product 14">
                <div class="product-details">
                    <h3 id="saransh_12">saransh</h3>
                    <p id="footwear_12">footwear</p>
                    <p id="price_12">₹500 <span class="original-price">₹900</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity14')">-</button>
                            <input type="text" id="quantity14" value="1" readonly>
                            <button onclick="increaseQuantity('quantity14')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData12()">Add to Cart</button>
                        <script>
                        function sendData12() {
                                var data1 = document.getElementById('saransh_12').innerText;
                                var data2 = document.getElementById('footwear_12').innerText;
                                var data3 = document.getElementById('price_12').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot14.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot15.jpg');?>" alt="Product 15">
                <div class="product-details">
                    <h3 id="saransh_13">saransh collection</h3>
                    <p id="footwear_13">footwear</p>
                    <p id="price_13">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity15')">-</button>
                            <input type="text" id="quantity15" value="1" readonly>
                            <button onclick="increaseQuantity('quantity15')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData13()">Add to Cart</button>
                        <script>
                        function sendData13() {
                                var data1 = document.getElementById('saransh_13').innerText;
                                var data2 = document.getElementById('footwear_13').innerText;
                                var data3 = document.getElementById('price_13').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot15.jpg');
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="<?php echo base_url('images1/women/footwear/foot16.jpg');?>" alt="Product 16">
                <div class="product-details"><br>
                    <h3 id="vaidya_14">vaidya collection</h3>
                    <p id="footwear_14">footwear</p>
                    <p id="price_14">₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity16')">-</button>
                            <input type="text" id="quantity16" value="1" readonly>
                            <button onclick="increaseQuantity('quantity16')">+</button>
                        </div>
                        <button class="cart-btn" onclick="sendData14()">Add to Cart</button>
                        <script>
                        function sendData14() {
                                var data1 = document.getElementById('vaidya_14').innerText;
                                var data2 = document.getElementById('footwear_14').innerText;
                                var data3 = document.getElementById('price_14').innerText;
                            
                                window.location.href = "<?php echo site_url('addtocart'); ?>?data1=" + encodeURIComponent(data1)+"&data2="+ encodeURIComponent(data2)+"&data3="+ encodeURIComponent(data3)+"&data4="+encodeURIComponent('/images1/women/footwear/foot16.jpg');
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