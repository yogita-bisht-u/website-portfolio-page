<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html</title>
<?php include 'head-css.php';?>
</head>
<body class="light-theme"> 

  <?php include 'header.php';?>

<main>
<div class="main">
<div class="container">
  <div class="blog-content">
<article>
<h1> PHP</h1>
        <h2>What is PHP?</h2>
        <p>PHP (Hypertext Preprocessor) is a server-side scripting language used to create dynamic and interactive web pages. It powers a large portion of websites and is a key tool for web developers.</p>
        <!-- Add an image -->
        <img src="./assets/images/php.png" alt="css" width="200">


        <h2>Why Learn PHP?</h2>
        <ul>
            <li><strong>Widely used:</strong> PHP is the backbone of popular platforms like WordPress, Joomla, and Drupal.</li>
            <li><strong>Easy to learn:</strong> Its syntax is simple and beginner-friendly.</li>
            <li><strong>Dynamic content:</strong> PHP can connect to databases and process forms, making your websites more interactive.</li>
        </ul>

        <h2>Basic PHP Example</h2>
        <p>Here’s a simple example of PHP code that outputs a greeting:</p>
        <pre>
&lt;?php
    echo "Hello, World!";
?&gt;
        </pre>
        <p>This script will display "Hello, World!" in the browser when executed on a server with PHP installed.</p>

        <h2>How Does PHP Work?</h2>
        <p>PHP scripts run on the server, generating HTML that is sent to the browser. This allows for dynamic content generation based on user interactions or data from a database.</p>

        <h2>Next Steps</h2>
        <p>To learn PHP, start by setting up a local server using tools like XAMPP or WAMP. Practice writing scripts and explore connecting PHP to a database like MySQL.</p>
    </article>
</div>


</div>
</div>
</main>

<?php include 'footer.php';?>


  
</body>
</html>
