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
    
            <h1>What is HTML?</h1>
            <p>HTML, short for <strong>HyperText Markup Language</strong>, is the standard language for creating web pages. It provides the structure for web content and allows developers to define elements like headings, paragraphs, links, images, and much more.</p>
            <p>Every web page you visit is built using HTML. Whether you're reading an article, filling out a form, or watching a video, HTML is behind the scenes making it all possible.</p>
          <!-- Add an image -->
            <img src="./assets/images/html1.png" alt="HTML Introduction" width="200">

            <h1>The Basics of HTML</h1>
            <p>HTML is made up of elements, which are represented by tags. Tags are enclosed in angle brackets, like <code>&lt;h1&gt;</code> and <code>&lt;/h1&gt;</code>. Here's a simple example of an HTML document:</p>
            <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;My First Page&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Hello, World!&lt;/h1&gt;
    &lt;p&gt;Welcome to my first HTML page.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
            </pre>
          

            <h1>Key HTML Elements</h1>
            <ul>
                <li><strong>&lt;h1&gt; to &lt;h6&gt;:</strong> Heading tags define headings, with <code>&lt;h1&gt;</code> being the largest and <code>&lt;h6&gt;</code> the smallest.</li>
                <li><strong>&lt;p&gt;:</strong> Used for paragraphs.</li>
                <li><strong>&lt;a&gt;:</strong> Creates hyperlinks.</li>
                <li><strong>&lt;img&gt;:</strong> Embeds images.</li>
                <li><strong>&lt;ul&gt; and &lt;ol&gt;:</strong> Create unordered and ordered lists, respectively.</li>
                <li><strong>&lt;table&gt;:</strong> Defines tables.</li>
            </ul>

            <h1>How HTML Works with Other Languages</h1>
            <p>HTML doesn’t work alone. It partners with other languages to create dynamic, visually appealing, and functional web pages:</p>
            <ul>
                <li><strong>CSS (Cascading Style Sheets):</strong> Adds style and layout to HTML elements, such as colors, fonts, and spacing.</li>
                <li><strong>JavaScript:</strong> Brings interactivity to web pages, like form validation, dynamic content, and animations.</li>
                <li><strong>Backend languages:</strong> Like Python, PHP, or Ruby, handle server-side logic and database interactions.</li>
            </ul>

            <h1>Why Learn HTML?</h1>
            <p>HTML is the foundation of web development and is essential for anyone interested in creating websites. Here’s why learning HTML is important:</p>
            <ul>
                <li><strong>It’s beginner-friendly:</strong> Easy to learn and understand.</li>
                <li><strong>It’s versatile:</strong> Allows you to create websites, emails, and even mobile apps.</li>
                <li><strong>It’s in-demand:</strong> A fundamental skill for web developers.</li>
            </ul>

            <h2>Next Steps</h2>
            <p>Ready to dive deeper into HTML? Start experimenting with code! Try building a simple webpage using a text editor like Notepad or Visual Studio Code. Combine HTML with CSS to make your pages visually appealing, and explore JavaScript to add interactivity.</p>
            
            
        </article>
        <h2>What is HTML?</h2>
        <p>HTML, or HyperText Markup Language, is the standard language used to create web pages. It forms the backbone of every website you visit, defining the structure and content of a page.</p>

        <h2>Why Learn HTML?</h2>
        <ul>
            <li>It’s the foundation of web development.</li>
            <li>Easy to learn for beginners.</li>
            <li>Enables you to create your own websites.</li>
        </ul>

        <h2>Basic HTML Example</h2>
        <p>Here’s a simple example of an HTML document:</p>
        <pre>
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;title&gt;My First Page&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;h1&gt;Hello, World!&lt;/h1&gt;
                &lt;/body&gt;
            &lt;/html&gt;
        </pre>

        
    </article>
</div>
</div>
</div>
</main>

<?php include 'footer.php';?>


  
</body>
</html>
