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
<h1>Accessibility </h1>
<article>
        <h2>What is Accessibility?</h2>
        <p>Accessibility in web development refers to designing and building websites that can be used by everyone, including people with disabilities. It ensures equal access to information and functionality for all users, regardless of their abilities or the tools they use to navigate the web.</p>
<!-- Add an image -->
<img src="./assets/images/blog-3.png" alt="css" width="200">

        <h2>Why is Accessibility Important?</h2>
        <ul>
            <li><strong>Inclusion:</strong> Accessibility promotes inclusivity, allowing users with disabilities to engage with your content.</li>
            <li><strong>Legal Compliance:</strong> Many countries have laws requiring websites to meet certain accessibility standards.</li>
            <li><strong>Better User Experience:</strong> Accessible websites are easier for everyone to use, not just people with disabilities.</li>
            <li><strong>SEO Benefits:</strong> Accessibility features, like proper headings and alt text, also improve search engine optimization.</li>
        </ul>

        <h2>How Can Web Developers Improve Accessibility?</h2>
        <ul>
            <li><strong>Use Semantic HTML:</strong> Proper use of tags like <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, and <code>&lt;main&gt;</code> helps assistive technologies understand your content.</li>
            <li><strong>Add Alt Text:</strong> Provide descriptive alt text for images to help visually impaired users.</li>
            <li><strong>Ensure Keyboard Navigation:</strong> Design your site so that all functionality is accessible via the keyboard.</li>
            <li><strong>Test with Screen Readers:</strong> Use tools like NVDA or VoiceOver to ensure your website works well with screen readers.</li>
            <li><strong>Color Contrast:</strong> Make sure text is easily readable against its background.</li>
        </ul>

        <h2>Resources for Learning Accessibility</h2>
        <p>Here are some great resources to get started with accessibility:</p>
        <ul>
            <li><a href="https://www.w3.org/WAI/">W3C Web Accessibility Initiative (WAI)</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility">MDN Web Docs: Accessibility</a></li>
            <li><a href="https://wave.webaim.org/">WAVE Web Accessibility Evaluation Tool</a></li>
        </ul>
    </article>
</div>


</div>
</div>
</main>

<?php include 'footer.php';?>


  
</body>
</html>
