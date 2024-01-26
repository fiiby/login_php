<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0px;
            padding: 0px;
            /* background-color: yellow; */
            background-color: palegoldenrod;
        }

        #root {
            /* display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center; */
            /* height: 100vh; */
            width: 100%;
            height: auto;
            display: grid;
            grid-template-rows: 1fr 1fr 1fr;
            place-items: center;
            padding-top: 50px;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            /* flex-direction: row; */
            justify-content: space-between;
        }

        .product {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }


        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-name {
            text-align: center;
            margin: 10px 0;
        }

        .product-price {
            text-align: center;
            color: #00b371;
            font-weight: bold;
            margin: 0 0 10px;
        }

        /* Optional: Hover effect */
        .product:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product-btn {
            /* display: inline; */
            background-color: #00b371;
            color: white;
            font-weight: bold;
            border: none;
            margin-left: 50px;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div>
        <?php include_once('nav.php'); ?>
    </div>


    <div id="root">
        <!-- Product List -->
        <div class="product-list">
            <!-- Product 1 -->
            <div class="product" id="product1">
                <img src="./images/1.jpeg" alt="Product 1" class="product-image">
                <h2 class="product-name">IPhone</h2>
                <p class="product-price">70000 /-</p>
                <button class="product-btn">click</button>
            </div>

            <!-- Product 2 -->
            <div class="product" id="product2">
                <img src="./images/2.png" alt="Product 2" class="product-image">
                <h2 class="product-name">Acer Laptop 14'</h2>
                <p class="product-price">60000 /-</p>
                <button class="product-btn">click</button>
            </div>

            <!-- Product 3 -->
            <div class="product" id="product3">
                <img src="./images/3.jpeg" alt="Product 3" class="product-image">
                <h2 class="product-name">Headphone</h2>
                <p class="product-price">1500 /-</p>
                <button class="product-btn">click</button>
            </div>

            <!-- Product 4 -->
            <div class="product" id="product4">
                <img src="./images/4.jpeg" alt="Product 4" class="product-image">
                <h2 class="product-name">Camera</h2>
                <p class="product-price">20000 /-</p>
                <button class="product-btn">click</button>
            </div>

            <!-- Product 5 -->
            <div class="product" id="product5">
                <img src="./images/5.jpg" alt="Product 5" class="product-image">
                <h2 class="product-name">Denim Jacket</h2>
                <p class="product-price">3000 /-</p> <button class="product-btn">click</button>
            </div>

            <!-- Product 6 -->
            <div class="product" id="product6">
                <img src="./images/6.webp" alt="Product 6" class="product-image">
                <h2 class="product-name">Cool Hat</h2>
                <p class="product-price">400 /-</p>
                <button class="product-btn">click</button>
            </div>

            <!-- Product 7 -->
            <div class="product" id="product7">
                <img src="./images/7.jpeg" alt="Product 7" class="product-image">
                <h2 class="product-name">Water Bottle</h2>
                <p class="product-price">450 /-</p>
                <button class="product-btn">click</button>
            </div>

            <!-- Product 8 -->
            <div class="product" id="product8">
                <img src="./images/8.jpg" alt="Product 8" class="product-image">
                <h2 class="product-name">Nike Sport Shoes</h2>
                <p class="product-price">5500 /-</p>
                <button class="product-btn">click</button>
            </div>
        </div>
    </div>

</body>

</html>