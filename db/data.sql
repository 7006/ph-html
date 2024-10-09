insert into products (
  product_name,
  review_count,
  alternative_count,
  product_description,
  last_review,
  last_review_author_avatar_url,
  product_logo_url
)
values

  -- line 1
  (
  'CodeSandbox',
  40,
  21,
  'CodeSandbox is an online code editor and prototyping tool that makes creating and sharing web apps faster',
  'Great updates, endless possibilities. My choice for coding small projects to share and have online for years!',
  '/img/avatar/henk.jpeg',
  '/img/product-logo/codesandbox_logo.jpeg'
  ),
  
  -- line 2
  (
  'Replit',
  null,
  7,
  'Build software collaboratively with the power of AI, on any device, without spending a second on setup. Write code with Ghostwriter, an AI-powered pair programmer. Collaborate in our real-time multiplayer editor. Build, test, and deploy from the browser.',
  null,
  null,
  '/img/product-logo/replit_logo.jpg'
  ),
  
  -- line 3
  (
  'Codecademy',
  26,
  59,
  'Codecademy, from Skillsoft, helps millions of learners create inspiring careers in technology through an interactive online platform and a growing catalog of courses, skill paths, and career paths.',
  null,
  null,
  '/img/product-logo/codecademy_logo.jpeg'
  ),
  
  -- line 4
  (
  'vscode.dev',
  21,
  6,
  'Now when you go to https://vscode.dev, you''ll be presented with a lightweight version of VS Code running fully in the browser. Open a folder on your local machine and start coding. No install required.',
  null,
  null,
  '/img/product-logo/vscode_dev_logo.jpeg'
  ),
  
  -- line 5
  (
  'adaface',
  34,
  32,
  'Adaface is a skills assessments platform to identify qualified developers accurately using an AI chatbot with in-built code editor. Our bot, Ada can have deep technical discussions with engineering candidates about algorithms, architecture design and databases, just like a hiring manager does.',
  null,
  null,
  '/img/product-logo/adaface_logo.jpeg'
  ),
  
  -- line 6
  (
  'Tuple',
  23,
  6,
  'Tuple is an app for remote pair programming, optimized for everything that developers care about: Seamless collaboration with full-time mouse and keyboard support for all parties, crystal-clear webcam and screen-sharing, CL integration and pluginability.',
  'I use Tuple every week to pair with engineers that are in completely different countries and don''t tend to have any issues with screen sharing or discussing ideas! I love how simple the tool is too - it allows for simplicity while pairing.',
  '/img/avatar/kristine.jpeg',
  '/img/product-logo/tuple_logo.jpeg'
  ),
  
    -- line 7
  (
  'CodeSandbox for iOS',
  4,
  7,
  'CodeSandbox for iOS lets you take your projects and sandboxes with you wherever you go. Using an iPhone or iPad, you can now access our new cloud development platform in the comfort of a native iOS IDE.',
  'I''ve been on the beta for the iOS app, and excited to it launch - I initially tried using the browser version on the iPad, which worked well, but this native iOS app is a game changer, as it brings all the native touch and gestures which the browser doesn''t support. It just becomes so easy and much more comfortable to use. Now I can code without carrying the bigger laptop',
    '/img/avatar/peter.jpeg',
    '/img/product-logo/codesandbox_for_ios_logo.jpeg'
  );
