<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
        background-color: #e6e6e6;
      }
      h1 {
        text-align: center;
        color: #333;
        margin-top: 50px;
      }
      .product-item {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        text-align: center;
      }
      .product-image img {
        width: 50%;
        height: auto;
      }
      .product-description {
        margin-left: 50px;
        font-size: 18px;
        color: #333;
      }
      .product-link {
        text-decoration: none;
        color: #333;
      }
    </style>
  </head>
  <body>
    <h1>Our Products</h1>
    <?php
      $products = [
        [
          "name" => "Product 1",
          "image" => "product1.jpg",
          "description" => "Description for Product 1"
        ],
        [
          "name" => "Product 2",
          "image" => "product2.jpg",
          "description" => "Description for Product 2"
        ],
        [
          "name" => "Product 3",
          "image" => "product3.jpg",
          "description" => "Description for Product 3"
        ],
        [
          "name" => "Product 4",
          "image" => "product4.jpg",
          "description" => "Description for Product 4"
        ],
        [
          "name" => "Product 5",
          "image" => "product5.jpg",
          "description" => "Description for Product 5"
        ],
      ];

      foreach ($products as $product) {
        echo "<div class='product-item'>";
        echo "<img src='" . $product["image"] . "' alt='" . $product["name"] . "'>";
        echo "<div class='product-description'>";
        echo "<h2>" . $product["name"] . "</h2>";
        echo "<p>" . $product["description"] . "</p>";
        echo "<a class='product-link' href='producto1.php" . $product["name"] . "'>View Product</a>";
        echo "</div>";
        echo "</div>";
      }
    ?>
  </body>
</html>