<?php

$dsn = getenv('PG_DSN');
$pdo = new PDO($dsn);
var_dump($pdo->query('select version()')->fetchAll());

$now = new DateTime();
$year = $now->format('Y');

$currentProduct = 'Repl.it';

$products = [
  [
    'productName' => 'CodeSandbox',
    'reviewCount' => 40,
    'alternativeCount' => 21,
    'productDescription' => 'CodeSandbox is an online code editor and prototyping tool that makes creating and sharing web apps faster',
    'lastReview' => 'Great updates, endless possibilities. My choice for coding small projects to share and have online for years!',
    'lastReviewAuthorAvatarUrl' => '/img/avatar/henk.jpeg',
    'productLogoUrl' => '/img/product-logo/codesandbox_logo.jpeg'
  ],
  [
    'productName' => 'Replit',
    'reviewCount' => null,
    'alternativeCount' => 7,
    'productDescription' => 'Build software collaboratively with the power of AI, on any device, without spending a second on setup. Write code with Ghostwriter, an AI-powered pair programmer. Collaborate in our real-time multiplayer editor. Build, test, and deploy from the browser.',
    'lastReview' => null,
    'lastReviewAuthorAvatarUrl' => null,
    'productLogoUrl' => '/img/product-logo/replit_logo.jpg'
  ],
  [
    'productName' => 'Codecademy',
    'reviewCount' => 26,
    'alternativeCount' => 59,
    'productDescription' => 'Codecademy, from Skillsoft, helps millions of learners create inspiring careers in technology through an interactive online platform and a growing catalog of courses, skill paths, and career paths.',
    'lastReview' => null,
    'lastReviewAuthorAvatarUrl' => null,
    'productLogoUrl' => '/img/product-logo/codecademy_logo.jpeg'
  ],
  [
    'productName' => 'vscode.dev',
    'reviewCount' => 21,
    'alternativeCount' => 6,
    'productDescription' => 'Now when you go to https://vscode.dev, you\'ll be presented with a lightweight version of VS Code running fully in the browser. Open a folder on your local machine and start coding. No install required.',
    'lastReview' => null,
    'lastReviewAuthorAvatarUrl' => null,
    'productLogoUrl' => '/img/product-logo/vscode_dev_logo.jpeg'
  ],
  [
    'productName' => 'adaface',
    'reviewCount' => 34,
    'alternativeCount' => 32,
    'productDescription' => 'Adaface is a skills assessments platform to identify qualified developers accurately using an AI chatbot with in-built code editor. Our bot, Ada can have deep technical discussions with engineering candidates about algorithms, architecture design and databases, just like a hiring manager does.',
    'lastReview' => null,
    'lastReviewAuthorAvatarUrl' => null,
    'productLogoUrl' => '/img/product-logo/adaface_logo.jpeg'
  ],
  [
    'productName' => 'Tuple',
    'reviewCount' => 23,
    'alternativeCount' => 6,
    'productDescription' => 'Tuple is an app for remote pair programming, optimized for everything that developers care about: Seamless collaboration with full-time mouse and keyboard support for all parties, crystal-clear webcam and screen-sharing, CL integration and pluginability.',
    'lastReview' => 'I use Tuple every week to pair with engineers that are in completely different countries and don\'t tend to have any issues with screen sharing or discussing ideas! I love how simple the tool is too - it allows for simplicity while pairing.',
    'lastReviewAuthorAvatarUrl' => '/img/avatar/kristine.jpeg',
    'productLogoUrl' => '/img/product-logo/tuple_logo.jpeg'
  ],
  [
    'productName' => 'CodeSandbox for iOS',
    'reviewCount' => 4,
    'alternativeCount' => 7,
    'productDescription' => ' CodeSandbox for iOS lets you take your projects and sandboxes with you wherever you go. Using an iPhone or iPad, you can now access our new cloud development platform in the comfort of a native iOS IDE.',
    'lastReview' => 'I\’ve been on the beta for the iOS app, and excited to it launch - I initially tried using the browser version on the iPad, which worked well, but this native iOS app is a game changer, as it brings all the native touch and gestures which the browser doesn\'t support. It just becomes so easy and much more comfortable to use. Now I can code without carrying the bigger laptop',
    'lastReviewAuthorAvatarUrl' => '/img/avatar/peter.jpeg',
    'productLogoUrl' => '/img/product-logo/codesandbox_for_ios_logo.jpeg'
  ],
];


?>
<html>
  <head>
    <title>Best <?php echo $currentProduct; ?> Alternatives - <?php echo $year; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="ml-10 mr-10">
    <ul>
      <?php foreach ($products as $index => $product) : ?>       
      <li class="flex flex-col">
        <div class="flex flex-col flex-wrap mx-11 my-5 left">
          <div class="flex flex-row gap-3">
              <img class="rounded-full w-8 h-8"
                   src="<?php echo $product['productLogoUrl'] ?>" 
                   alt="<?php echo $product['productName']; ?>">
              <div class="text-16 font-semibold text-dark-gray">
                <a target="_blank" href="/">
                  <?php echo $index + 1; ?>. <?php echo $product['productName']; ?>
                </a>
              </div>
              <?php if ($product['reviewCount']) : ?>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                   <?php echo $product['reviewCount']; ?> reviews
                </a>
              </div>
              <?php endif; ?>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  <?php echo $product['alternativeCount']; ?> alternatives
                </a>
              </div>
            </div>
          <div class="flex flex-col mb-6 mt-4">
            <div class="text-16 font-normal text-dark-gray">
               <?php echo $product['productDescription']; ?>
            </div>
            <?php if ($product['lastReview']) : ?>
            <div class="flex flex-row gap-4 mt-4">
              <img class="rounded-full w-8 h-8" src="<?php echo $product['lastReviewAuthorAvatarUrl'] ?>" alt="Henk">
              <div class="text-14 font-normal text-light-gray italic">
                  <?php echo $product['lastReview']; ?>
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
