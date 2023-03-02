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
      .product-image {
        display: flex;
        justify-content: center;
        margin-top: 50px;
      }
      .product-image img {
        width: 50%;
        height: auto;
      }
      .product-description {
        text-align: center;
        margin-top: 50px;
        font-size: 18px;
        color: #333;
      }
    </style>
  </head>
  <body>
    <?php
      $products = [
        [
          "name" => "Product 1",
          "image" => "product1.jpg",
          "description" => "Description for Product 1"
        ],
      ];

      foreach ($products as $product) {
        echo "<h1>" . $product["name"] . "</h1>";
        echo "<div class='product-image'>";
        echo "<img src='" . $product["image"] . "' alt='" . $product["name"] . "'>";
        echo "</div>";
        echo "<div class='product-description'>";
        echo "<p>" . $product["description"] . "</p>";
        echo "</div>";
      }
    ?>
  </body>
</html>