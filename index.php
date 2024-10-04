<?php

$now = new DateTime();
$year = $now->format('Y');

$currentProduct = 'Repl.it';

$product = [
  'productName' => 'CodeSandbox',
  'reviewCount' => 40,
  'alternativeCount' => 21,
  'productDescription' => 'CodeSandbox is an online code editor and prototyping tool that makes creating and sharing web apps faster',
  'lastReview' => 'Great updates, endless possibilities. My choice for coding small projects to share and have online for years!'
];

?>
<html>
  <head>
    <title>Best <?php echo $currentProduct; ?> Alternatives - <?php echo $year; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="ml-10 mr-10">
    <ul>
      <!-- 1 -->
      <li class="flex flex-col">
        <div class="flex flex-col flex-wrap mx-11 my-5 left">
          <div class="flex flex-row gap-3">
              <div class="text-16 font-semibold text-dark-gray">
                <a target="_blank" href="/">
                  1. <?php echo $product['productName']; ?>
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                   <?php echo $product['reviewCount']; ?> reviews
                </a>
              </div>
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
            <div class="flex flex-row gap-4 mt-4">
              <img class="rounded-full w-8 h-8" src="/img/henk.jpeg" alt="Henk">
              <div class="text-14 font-normal text-light-gray italic">
                  <?php echo $product['lastReview']; ?>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </li>
      <!-- 2 -->
      <li class="flex flex-col">
        <div class="flex flex-col flex-wrap mx-11 my-5 left">
          <div class="flex flex-row gap-3">
              <div class="text-16 font-semibold text-dark-gray">
                <a target="_blank" href="/">
                  2. Replit
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  7 alternatives
                </a>
              </div>
            </div>
          <div class="flex flex-col mb-6 mt-4">
            <div class="text-16 font-normal text-dark-gray">
              Build software collaboratively with the power of AI, on any device, without spending a second on setup. Write code with Ghostwriter, an AI-powered pair programmer. Collaborate in our real-time multiplayer editor. Build, test, and deploy from the browser.
            </div>
          </div>
          <hr>
        </div>
      </li>
      <!-- 3 -->
      <li class="flex flex-col">
        <div class="flex flex-col flex-wrap mx-11 my-5 left">
          <div class="flex flex-row gap-3">
              <div class="text-16 font-semibold text-dark-gray">
                <a target="_blank" href="/">
                  3. Codecademy
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                   26 reviews
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  59 alternatives
                </a>
              </div>
            </div>
          <div class="flex flex-col mb-6 mt-4">
            <div class="text-16 font-normal text-dark-gray">
             Codecademy, from Skillsoft, helps millions of learners create inspiring careers in technology through an interactive online platform and a growing catalog of courses, skill paths, and career paths.
            </div>
          </div>
          <hr>
        </div>
      </li>
      <!-- 4 -->
      <li class="flex flex-col">
        <div class="flex flex-col flex-wrap mx-11 my-5 left">
          <div class="flex flex-row gap-3">
              <div class="text-16 font-semibold text-dark-gray">
                <a target="_blank" href="/">
                  4. vscode.dev
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  21 reviews
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  6 alternatives
                </a>
              </div>
            </div>
          <div class="flex flex-col mb-6 mt-4">
            <div class="text-16 font-normal text-dark-gray">
              Now when you go to https://vscode.dev, you'll be presented with a lightweight version of VS Code running fully in the browser. Open a folder on your local machine and start coding. No install required.
            </div>
          </div>
          <hr>
        </div>
      </li>
      <!-- 5 -->
      <li class="flex flex-col">
        <div class="flex flex-col flex-wrap mx-11 my-5 left">
          <div class="flex flex-row gap-3">
              <div class="text-16 font-semibold text-dark-gray">
                <a target="_blank" href="/">
                  5. adaface
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  34 reviews
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  32 alternatives
                </a>
              </div>
            </div>
          <div class="flex flex-col mb-6 mt-4">
            <div class="text-16 font-normal text-dark-gray">
              Adaface is a skills assessments platform to identify qualified developers accurately using an AI chatbot with in-built code editor. Our bot, Ada can have deep technical discussions with engineering candidates about algorithms, architecture design and databases, just like a hiring manager does.
            </div>
          </div>
          <hr>
        </div>
      </li>
      <!-- 6 -->
      <li class="flex flex-col">
        <div class="flex flex-col flex-wrap mx-11 my-5 left">
          <div class="flex flex-row gap-3">
              <div class="text-16 font-semibold text-dark-gray">
                <a target="_blank" href="/">
                  6. Tuple
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  23 reviews
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  6 alternatives
                </a>
              </div>
            </div>
          <div class="flex flex-col mb-6 mt-4">
            <div class="text-16 font-normal text-dark-gray">
              Tuple is an app for remote pair programming, optimized for everything that developers care about: Seamless collaboration with full-time mouse and keyboard support for all parties, crystal-clear webcam and screen-sharing, CL integration and pluginability.
            </div>
            <div class="flex flex-row gap-4 mt-4">
              <img class="rounded-full w-8 h-8" src="/img/kristine.jpeg" alt="Kristine">
              <div class="text-14 font-normal text-light-gray italic">
                 I use Tuple every week to pair with engineers that are in completely different countries and don't tend to have any issues with screen sharing or discussing ideas! I love how simple the tool is too - it allows for simplicity while pairing.
              </div>
            </div>
          </div>
          <hr>
        </div>
      </li>
       <!-- 7 -->
      <li class="flex flex-col">
        <div class="flex flex-col flex-wrap mx-11 my-5 left">
          <div class="flex flex-row gap-3">
              <div class="text-16 font-semibold text-dark-gray">
                <a target="_blank" href="/">
                  7. CodeSandbox for iOS
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  4 reviews
                </a>
              </div>
              <div class="text-12 font-normal text-light-gray">
                <a target="_blank" href="/">
                  7 alternatives
                </a>
              </div>
            </div>
          <div class="flex flex-col mb-6 mt-4">
            <div class="text-16 font-normal text-dark-gray">
              CodeSandbox for iOS lets you take your projects and sandboxes with you wherever you go. Using an iPhone or iPad, you can now access our new cloud development platform in the comfort of a native iOS IDE.
            </div>
            <div class="flex flex-row gap-4 mt-4">
              <img class="rounded-full w-8 h-8" src="/img/peter.jpeg" alt="Peter">
              <div class="text-14 font-normal text-light-gray italic">
                I’ve been on the beta for the iOS app, and excited to it launch - I initially tried using the browser version on the iPad, which worked well, but this native iOS app is a game changer, as it brings all the native touch and gestures which the browser doesn't support. It just becomes so easy and much more comfortable to use. Now I can code without carrying the bigger laptop 
              </div>
            </div>
          </div>
          <hr>
        </div>
      </li>
    </ul>
  </body>
</html>
