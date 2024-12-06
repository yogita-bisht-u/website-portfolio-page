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
    <div class="blog-content"
<h1>css </h1>
<article>
            <h2>What is CSS?</h2>
            <p>CSS, or <strong>Cascading Style Sheets</strong>, is a language used to describe the presentation of a web page, including colors, layout, and fonts. It allows developers to separate content (HTML) from design and make web pages visually appealing and user-friendly.</p>
            <!-- Add an image -->
        <img src="./assets/images/css.png" alt="css" width="200">

            <h2>Why is CSS Important?</h2>
            <ul>
                <li><strong>Separates Design from Content:</strong> By keeping HTML focused on structure and CSS on style, your code becomes cleaner and easier to maintain.</li>
                <li><strong>Improves User Experience:</strong> Well-designed web pages are easier to navigate and more engaging.</li>
                <li><strong>Enables Responsive Design:</strong> CSS allows you to create layouts that adapt to different screen sizes.</li>
                <li><strong>Enhances Accessibility:</strong> Styling can improve readability and usability for all users.</li>
            </ul>
            
            <h2>How CSS Works</h2>
            <p>CSS works by applying styles to HTML elements. You can apply CSS in three ways:</p>
            <ol>
                <li><strong>Inline:</strong> Directly within an HTML element using the <code>style</code> attribute. Example:</li>
                <pre>
&lt;p style="color: blue; font-size: 16px;"&gt;This is styled text.&lt;/p&gt;
                </pre>
                <li><strong>Internal:</strong> Using a <code>&lt;style&gt;</code> block in the <code>&lt;head&gt;</code> section of the HTML file.</li>
                <pre>
&lt;style&gt;
    p {
        color: blue;
        font-size: 16px;
    }
&lt;/style&gt;
                </pre>
                <li><strong>External:</strong> Linking to an external stylesheet using the <code>&lt;link&gt;</code> tag.</li>
                <pre>
&lt;link rel="stylesheet" href="styles.css"&gt;
                </pre>
            </ol>

            <h2>Key CSS Concepts</h2>
            <h3>Selectors</h3>
            <p>Selectors are used to target HTML elements. Common selectors include:</p>
            <ul>
                <li><strong>Type Selector:</strong> Targets all elements of a specific type (e.g., <code>p</code>, <code>h1</code>).</li>
                <li><strong>Class Selector:</strong> Targets elements with a specific class. Example: <code>.my-class</code></li>
                <li><strong>ID Selector:</strong> Targets a single element with a specific ID. Example: <code>#my-id</code></li>
                <li><strong>Attribute Selector:</strong> Targets elements with specific attributes. Example: <code>[type="text"]</code></li>
            </ul>

            <h3>Box Model</h3>
            <p>The box model is a key concept in CSS that defines how elements are structured and styled:</p>
            <ul>
                <li><strong>Content:</strong> The actual content inside the element.</li>
                <li><strong>Padding:</strong> Space between the content and the element's border.</li>
                <li><strong>Border:</strong> A line surrounding the padding.</li>
                <li><strong>Margin:</strong> Space outside the border, creating distance from other elements.</li>
            </ul>

            <h3>Responsive Design</h3>
            <p>Responsive design ensures your website looks great on all devices. Common techniques include:</p>
            <ul>
                <li><strong>Media Queries:</strong> Apply styles based on screen size or device type.</li>
                <li><strong>Flexbox and Grid:</strong> CSS layout systems for creating flexible and responsive layouts.</li>
                <li><strong>Viewport Meta Tag:</strong> Ensures proper scaling on mobile devices.</li>
            </ul>
            <pre>
/* Example of a media query */
@media (max-width: 600px) {
    body {
        font-size: 14px;
    }
}
            </pre>

            <h2>Advanced CSS Features</h2>
            <ul>
                <li><strong>Transitions and Animations:</strong> Add smooth effects and movements.</li>
                <li><strong>Variables:</strong> Reuse values with <code>:root</code> variables.</li>
                <li><strong>CSS Grid:</strong> A powerful layout system for creating complex designs.</li>
                <li><strong>Custom Properties:</strong> Create reusable values for colors, spacing, etc.</li>
            </ul>

            <h2>Resources to Learn CSS</h2>
            <p>Here are some helpful resources to master CSS:</p>
            <ul>
                <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS">MDN Web Docs on CSS</a></li>
                <li><a href="https://www.w3schools.com/css/">W3Schools CSS Tutorial</a></li>
                <li><a href="https://css-tricks.com/">CSS-Tricks</a></li>
                <li><a href="https://flexboxfroggy.com/">Flexbox Froggy (Game to learn CSS Flexbox)</a></li>
            </ul>
        </article>
</div>
</div>
</div>
</main>

<?php include 'footer.php';?>


  
</body>
</html>
