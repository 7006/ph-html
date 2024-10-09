<?php

require_once  __DIR__ . '/src/Products.php';

$dsn = getenv('PG_DSN');
$pdo = new PDO($dsn);
$products = new Products($pdo);

$now = new DateTime();
$year = $now->format('Y');
$currentProduct = 'Repl.it';

?>
<html>
  <head>
    <title>Best <?php echo $currentProduct; ?> Alternatives - <?php echo $year; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="ml-10 mr-10">
    <ul>
      <?php foreach ($products->getAllProducts() as $index => $product) : ?>       
      <li class="flex flex-col">
        <div class="flex flex-col flex-wrap mx-11 my-5 left">
          <div class="flex flex-row gap-3">
              <img class="rounded-full w-8 h-8"
                   src="<?php echo $product['product_logo_url'] ?>" 
                   alt="<?php echo $product['product_name']; ?>">
              <div class="text-16 font-semibold text-dark-gray">
                <a target="_blank" href="/">
                  <?php echo $index + 1; ?>. <?php echo $product['product_name']; ?>
                </a>
              </div>
              <?php if ($product['review_count']) : ?>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                   <?php echo $product['review_count']; ?> reviews
                </a>
              </div>
              <?php endif; ?>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  <?php echo $product['alternative_count']; ?> alternatives
                </a>
              </div>
            </div>
          <div class="flex flex-col mb-6 mt-4">
            <div class="text-16 font-normal text-dark-gray">
               <?php echo $product['product_description']; ?>
            </div>
            <?php if ($product['last_review']) : ?>
            <div class="flex flex-row gap-4 mt-4">
              <img class="rounded-full w-8 h-8" src="<?php echo $product['last_review_author_avatar_url'] ?>" alt="Henk">
              <div class="text-14 font-normal text-light-gray italic">
                  <?php echo $product['last_review']; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <hr>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
