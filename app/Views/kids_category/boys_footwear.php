<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boys Footwear</title>
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
        <h1><center> Boys Footwear</center></h1>
        <div class="product-grid">
            <!-- Example Product Item Start -->
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth1.jpg" alt="Product 1">
                <div class="product-details">
                    <h3>Samani</h3>
                    <p>boys_clothes</p>
                    <p>₹381 <span class="original-price">₹799</span> <span class="discount">65% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity1')">-</button>
                            <input type="text" id="quantity1" value="1" readonly>
                            <button onclick="increaseQuantity('quantity1')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth1',₹381)">Add to Cart</button>
                    </div>
                </div>
            </div>
           
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth2.jpg" alt="Product 2">
                <div class="product-details"><br><br><br>
                    <h3>oke brand</h3>
                    <p>boys_clothes</p>
                    <p>₹375 <span class="original-price">₹499</span> <span class="discount">74% off</span></p>
                    <p class="rating">★★★★☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity2')">-</button>
                            <input type="text" id="quantity2" value="1" readonly>
                            <button onclick="increaseQuantity('quantity2')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth2',₹375)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth3.jpg" alt="Product 3">
                <div class="product-details"><br><br>
                    <h3>ahana brand</h3>
                    <p>boys_clothes</p>
                    <p>₹360 <span class="original-price">₹599</span> <span class="discount">77% off</span></p>
                    <p class="rating">★★★★☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity3')">-</button>
                            <input type="text" id="quantity3" value="1" readonly>
                            <button onclick="increaseQuantity('quantity3')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth3',₹360)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth4.jpg" alt="Product 4">
                <div class="product-details"><br><br><br>
                    <h3>ahana brand</h3>
                    <p>boys_clothes</p>
                    <p>₹450 <span class="original-price">₹700</span> <span class="discount">75% off</span></p>
                    <p class="rating">★★★★☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity4')">-</button>
                            <input type="text" id="quantity4" value="1" readonly>
                            <button onclick="increaseQuantity('quantity4')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth4',₹450)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth5.jpg" alt="Product 5">
                <div class="product-details">
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity5')">-</button>
                            <input type="text" id="quantity5" value="1" readonly>
                            <button onclick="increaseQuantity('quantity5')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth5',₹1200)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth6.jpg" alt="Product 6">
                <div class="product-details">
                    <h3>sandhya collection</h3>
                    <p>boys_clothes</p>
                    <p>₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity6')">-</button>
                            <input type="text" id="quantity6" value="1" readonly>
                            <button onclick="increaseQuantity('quantity6')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth6',₹1200)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth7.jpg" alt="Product 7">
                <div class="product-details">
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹700 <span class="original-price">₹999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity7')">-</button>
                            <input type="text" id="quantity7" value="1" readonly>
                            <button onclick="increaseQuantity('quantity7')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth7',₹700)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth8.jpg" alt="Product 8">
                <div class="product-details">
                    <h3>shreyas vv</h3>
                    <p>boys_clothes</p>
                    <p>₹1100 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity8')">-</button>
                            <input type="text" id="quantity8" value="1" readonly>
                            <button onclick="increaseQuantity('quantity8')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth8',₹1100)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth9.jpg" alt="Product 9">
                <div class="product-details">
                    <h3>shreya collection</h3>
                    <p>boys_clothes</p>
                    <p>₹1000 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity9')">-</button>
                            <input type="text" id="quantity9" value="1" readonly>
                            <button onclick="increaseQuantity('quantity9')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth9',₹1000)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth10.jpg" alt="Product 10">
                <div class="product-details">
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹900 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity10')">-</button>
                            <input type="text" id="quantity10" value="1" readonly>
                            <button onclick="increaseQuantity('quantity10')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth10',₹900)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth11.jpg" alt="Product 11">
                <div class="product-details">
                    <h3>riya collection</h3>
                    <p>boys_clothes</p>
                    <p>₹800 <span class="original-price">₹1200</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity11')">-</button>
                            <input type="text" id="quantity11" value="1" readonly>
                            <button onclick="increaseQuantity('quantity11')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth11',₹360)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth12.jpg" alt="Product 12">
                <div class="product-details">
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity12')">-</button>
                            <input type="text" id="quantity12" value="1" readonly>
                            <button onclick="increaseQuantity('quantity12')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth12',₹1200)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth13.jpg" alt="Product 13">
                <div class="product-details">
                    <h3>sara</h3>
                    <p>boys_clothes</p>
                    <p>₹750 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity13')">-</button>
                            <input type="text" id="quantity13" value="1" readonly>
                            <button onclick="increaseQuantity('quantity13')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth13',₹750)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth14.jpg" alt="Product 14">
                <div class="product-details">
                    <h3>saransh</h3>
                    <p>boys_clothes</p>
                    <p>₹500 <span class="original-price">₹900</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity14')">-</button>
                            <input type="text" id="quantity14" value="1" readonly>
                            <button onclick="increaseQuantity('quantity14')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth14',₹500)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth15.jpg" alt="Product 15">
                <div class="product-details">
                    <h3>saransh collection</h3>
                    <p>boys_clothes</p>
                    <p>₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity15')">-</button>
                            <input type="text" id="quantity15" value="1" readonly>
                            <button onclick="increaseQuantity('quantity15')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth15',₹1200)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth16.jpg" alt="Product 16">
                <div class="product-details"><br>
                    <h3>vaidya collection</h3>
                    <p>boys_clothes</p>
                    <p>₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity16')">-</button>
                            <input type="text" id="quantity16" value="1" readonly>
                            <button onclick="increaseQuantity('quantity16')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth16',₹360)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth17.jpg" alt="Product 17">
                <div class="product-details">
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹1300 <span class="original-price">₹2990</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity17')">-</button>
                            <input type="text" id="quantity17" value="1" readonly>
                            <button onclick="increaseQuantity('quantity17')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth17',₹1300)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth18.jpg" alt="Product 18">
                <div class="product-details">
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹400 <span class="original-price">₹999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity18')">-</button>
                            <input type="text" id="quantity18" value="1" readonly>
                            <button onclick="increaseQuantity('quantity18')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth18',₹400)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth19.jpg" alt="Product 19">
                <div class="product-details">
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹300 <span class="original-price">₹599</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity19')">-</button>
                            <input type="text" id="quantity19" value="1" readonly>
                            <button onclick="increaseQuantity('quantity19')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth19',₹300)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth20.jpg" alt="Product 20">
                <div class="product-details">
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹1200 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity20')">-</button>
                            <input type="text" id="quantity20" value="1" readonly>
                            <button onclick="increaseQuantity('quantity20')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth20',₹1200)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth21.jpg" alt="Product 21">
                <div class="product-details"><br>
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹900 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity21')">-</button>
                            <input type="text" id="quantity21" value="1" readonly>
                            <button onclick="increaseQuantity('quantity21')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth21',₹360)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth22.jpg" alt="Product 22">
                <div class="product-details">
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>460 <span class="original-price">₹999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity22')">-</button>
                            <input type="text" id="quantity22" value="1" readonly>
                            <button onclick="increaseQuantity('quantity22')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth22',₹460)">Add to Cart</button>
                </div>
            </div>
         </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth23.jpg" alt="Product 23">
                <div class="product-details"><br>
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹1000 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity23')">-</button>
                            <input type="text" id="quantity23" value="1" readonly>
                            <button onclick="increaseQuantity('quantity23')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth23',₹1000)">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <img src="http://localhost:8080/images1/kids/boys_clothes/cloth24.jpg" alt="Product 24">
                <div class="product-details"><br>
                    <h3>ayush collection</h3>
                    <p>boys_clothes</p>
                    <p>₹990 <span class="original-price">₹1999</span> <span class="discount">87% off</span></p>
                    <p class="rating">★★★☆☆</p>
                    <div class="container">
                        <div class="quantity-picker">
                            <button onclick="decreaseQuantity('quantity24')">-</button>
                            <input type="text" id="quantity24" value="1" readonly>
                            <button onclick="increaseQuantity('quantity24')">+</button>
                        </div>
                        <button class="cart-btn" onclick="addToCart('cloth24',₹990)">Add to Cart</button>
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