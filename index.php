<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Title</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
  <?php
    $products = [
      [
        'title' => 'Product Title 1',
        'price' => 100,
        'image' => [
          'src' => '/assets/images/product-1.jpg',
        ],
      ],
      [
        'title' => 'Product Title 2',
        'price' => 200,
        'image' => [
          'src' => '/assets/images/product-2.jpg',
        ],
      ],
      [
        'title' => 'Product Title 3',
        'price' => 300,
        'image' => [
          'src' => '/assets/images/product-3.jpg',
        ],
      ],
      [
        'title' => 'Product Title 4',
        'price' => 400,
        'image' => [
          'src' => '/assets/images/product-4.jpg',
        ],
      ],
      [
        'title' => 'Product Title 5',
        'price' => 500,
        'image' => [
          'src' => '/assets/images/product-5.jpg',
        ],
      ],
      [
        'title' => 'Product Title 6',
        'price' => 600,
        'image' => [
          'src' => '/assets/images/product-6.jpg',
        ],
      ],
    ];
  ?>
  
  <h1><?php echo 'hello world'; ?></h1>

  <div class="containder-products">

    <?php foreach ($products as $item) { ?>

      <div class="product">
        <div class="product-image">
          <img src="<?php echo $item['image']['src']; ?>" alt="Product Image">
        </div>
        <div class="product-title"><?php echo $item['title']; ?></div>
        <div class="product-price"><?php echo $item['price']; ?></div>
      </div>

    <?php } ?>
    
  </div>

</body>
</html>


