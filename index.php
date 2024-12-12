<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimpleBlog - yogita Personal Blog</title>
<?php include 'head-css.php';?>

</head>

<body class="light-theme">

 
<?php include 'header.php';?>




  <main>

    <!--
      - #HERO SECTION
    -->

    <div class="hero">

      <div class="container">

        <div class="left">

          <h1 class="h1">
            Hi, I'm <b>yogita&nbsp;bisht</b>.
            <br>web Developer
          </h1>

          <p class="h3">
            Specialized in html,css,js,php.
          </p>

          <div class="btn-group">
            <a href="contact.php" class="btn btn-primary">Contact Me</a>
            <a href="about.php" class="btn btn-secondary">About Me</a>
          </div>

        </div>

        <div class="right">

          <div class="pattern-bg"></div>
          <div class="img-box">
            <img src="./assets/images/hero.png" alt="yogita bisht" class="hero-img">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
          </div>

        </div>

      </div>

    </div>





    <div class="main">

      <div class="container">

        <!--
          - BLOG SECTION
        -->

        <div class="blog">

          <h2 class="h2">Latest Blog Post</h2>

          <div class="blog-card-group">


        <section id="html">
            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/html.png" alt="Building microservices with Dropwizard, MongoDB & Docker"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">html</button>

                <h3>
                  <a href="css-blog.php" class="h3">
                  Building a webpage and website
                  </a>
                </h3>

                <p class="blog-text">
                HTML (HyperText Markup Language) is the standard language used to create and structure content on the web. It defines the building blocks of a webpage, such as text, images, links, and more, by using tags.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia Walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Yogita Bisht</a>

                    <p class="text-sm">
                      <time datetime="2022-01-17">Jan 17, 2024</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>
</section>


        

          <section id="css">
            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/css.png" alt="Building microservices with Dropwizard, MongoDB & Docker"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">css</button>

                <h3>
                  <a href="css-blog.php" class="h3">
                  used to style and layout web pages 
                  </a>
                </h3>

                <p class="blog-text">
                CSS is the  “Cascading Style Sheets”. CSS is a computer language for laying out and structuring web pages (HTML or XML). This language contains coding elements and is composed of these “cascading style sheets” which are equally called CSS files (. css).
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia Walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Yogita Bisht</a>

                    <p class="text-sm">
                      <time datetime="2022-01-17">Jan 17, 2024</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>
</section>


            

<section id="accessibility">
            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/blog-3.png" alt="Accessibility Tips for Web Developers" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Accessibility</button>

                <h3><a href="Accessibility-blog.php" class="h3">Accessibility Tips for Web Developers</a></h3>

                <p class="blog-text">
                  It's awesome to build sites that are inclusive and accessible to everyone. There are at least six key
                  areas of
                  disability we can optimize for: visual, hearing, mobility, cognition, speech and neural. Many tools
                  and resources can
                  help here, even if you're totally new to web accessibility.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Yogita Bisht</a>

                    <p class="text-sm">
                      <time datetime="2021-11-28">Nov 28, 2024</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>
</section>



<section id="javascript">
            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/js.png" alt="Dynamically Securing Databases using Hashicorp Vault"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Javascript</button>

                <h3><a href="js-blog.php" class="h3">JavaScript is used to make web pages more interactive and dynamic</a></h3>

                <p class="blog-text">
                JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Yogita Bisht</a>

                    <p class="text-sm">
                      <time datetime="2021-11-20">Nov 20, 2024</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>
</section>



<section id="php">
            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/php.png"
                  alt="Adaptive Loading - Improving Web Performance on low-end devices" width="250"
                  class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">php</button>

                <h3><a href="php-blog.php" class="h3">PHP can create, open, read, write, delete, and close files on the server.</a></h3>

                <p class="blog-text">
                PHP (Hypertext Processor) is a general-purpose scripting language and interpreter that is freely available and widely used for web development. The language is used primarily for server-side scripting, although it can also be used for command-line scripting and, to a limited degree, desktop applications.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/author.png" alt="Julia walker" width="50">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Yogita Bisht</a>

                    <p class="text-sm">
                      <time datetime="2021-11-10">Nov 10, 2024</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

              </div>

             </div>
            

        </div>
</section>
        <!--
          - ASIDE
        -->

        <div class="aside">

          <div class="topics">

            <h2 class="h2">Topics</h2>

            <a href="js-blog.php" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="server-outline"></ion-icon>
              </div>

              <p>JavaScript</p>
            </a>

            <a href="accessibility-blog.php" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="accessibility-outline"></ion-icon>
              </div>

              <p>Accessibility</p>
            </a>

            <a href="php-blog.php" class="topic-btn">
              <div class="icon-box">
                <ion-icon name="rocket-outline"></ion-icon>
              </div>

              <p>PHP</p>
            </a>

          </div>

          <div class="tags">

            <h2 class="h2">Tags</h2>

            <div class="wrapper">

              <button class="hashtag"><a class="tag-link" href ="#html">html</a></button>
              <button class="hashtag"><a class="tag-link" href ="#css">css</a></button>
              <button class="hashtag"><a class="tag-link" href ="#accessibility">accessibility</a></button>
              <button class="hashtag"><a class="tag-link"href ="#javascript">JavaScript</a></button>
              <button class="hashtag"><a class="tag-link" href ="#php">php</a></button>
              

            </div>

          </div>

          

          <div class="newsletter">
          
            <h2 class="h2">Newsletter</h2>

            <div class="wrapper">

              <p>
                Subscribe to our newsletter to be among the first to keep up with the latest updates.
              </p>

              <form action="newsletter-action.php" method="post">
                <input type="email" name="email" placeholder="Email Address" required>

                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>
  <?php include 'footer.php';?>
  </body>

</html>





  