<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html</title>
</head>
<body>
    <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">

<!--
  - custom css link
-->
<link rel="stylesheet" href="./assets/css/style.css">

<!--
  - google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
  rel="stylesheet">
</head>
<body class="light-theme"> 

  <?php include 'header.php';?>

<main>
<div class="main">
<div class="container">
<h1>Javascript</h1>
<article>
        <h2>What is JavaScript?</h2>
        <p>JavaScript is a versatile programming language that allows developers to create interactive and dynamic content on websites. It’s one of the core technologies of the web, alongside HTML and CSS.</p>

        <h2>Why Learn JavaScript?</h2>
        <ul>
            <li><strong>Interactivity:</strong> JavaScript makes web pages come alive with features like animations, form validation, and interactive maps.</li>
            <li><strong>In-demand skill:</strong> JavaScript is widely used in web development and is highly sought after by employers.</li>
            <li><strong>Flexibility:</strong> It can be used on the client side (in browsers) and server side (with frameworks like Node.js).</li>
        </ul>

        <h2>Basic JavaScript Example</h2>
        <p>Here’s an example of a simple JavaScript script that displays a message in the browser console:</p>
        <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;JavaScript Example&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Check the Console!&lt;/h1&gt;
    &lt;script&gt;
      console.log("Hello, JavaScript!");
    &lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
        </pre>

        <h2>Getting Started</h2>
        <p>You can start learning JavaScript by writing scripts directly in your browser’s developer console or using a text editor like Visual Studio Code. For more advanced projects, you’ll want to explore frameworks like React, Angular, or Vue.</p>

        <p>Here are some resources to help you get started:</p>
        <ul>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript">MDN Web Docs</a></li>
            <li><a href="https://www.javascript.com/">JavaScript.com</a></li>
            <li><a href="https://www.w3schools.com/js/">W3Schools JavaScript Tutorial</a></li>
        </ul>
    </article>


</div>
</div>
</main>

<?php include 'footer.php';?>


  
</body>
</html>
