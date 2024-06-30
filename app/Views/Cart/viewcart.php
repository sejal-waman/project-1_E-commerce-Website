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
        <h1><center>Cart</center></h1>
        <div class="product-grid">
            <?php foreach($detail as $demo)
                {
                    ?>
            <!-- Example Product Item Start -->
            <div class="product-item">
                <?php
                    $image=$demo['image_url'];
                    echo '<img src="' . $image . '" alt="Product 1" id="imgdata">';?>
                    
                    

                <div class="product-details"><br><br><br>
                    <h3><?php echo $demo['product_name'];?></h3>
                    <p><?php echo $demo['product_brand'];?></p>
                    <p ><span class="original-price"><?php echo $demo['product_price'];?></span></p>
                    
                    <div class="container">
                    <!--  <div class="quantity-picker" id="quantity">
                            <button onclick="decreaseQuantity('quantity1')">-</button>
                            <input type="text" id="quantity1" value="1" readonly>
                            <button onclick="increaseQuantity('quantity1')">+</button>
                        </div>   -->
                        <a href="removecart/<?= $demo['id'];?>"><button class="cart-btn">Remove</button></a>
                        
                    </div>
                    <div class="container">
                    <button class="cart-btn">Buy</button>
                    </div>
                </div>
            </div>
                <?php }
                ?>
           
            
           
            
            

       
            
        </div>
    </main>
    <script>
      /*  function decreaseQuantity(id) {
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
        }  */
    </script>
   
    <script type="text/javascript" src="cart.js"></script>
</body>
</html>