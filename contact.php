<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

 <?php include 'head-css.php';?>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="light-theme"> 

    <?php include 'header.php';?>

    <main>
<div class="main">
<div class="container">
<div class="blog-content">
  <h1>Contact Me </h1>


  <form>
  <div class="mb-3">
    <label for="name" class="form-label">First name</label>
    <input type="name" class="form-control" id="name" aria-describedby="">
    
  </div>

  <div class="mb-3">
    <label for="last" class="form-label">Last name</label>
    <input type="last" class="form-control" id= "last" aria-describedby="">
    
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <textarea class="form-control" id="message">
</textarea>
  </div>
  



  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>
</div>
</div>
</main>
 

    <?php include 'footer.php';?>

    
</body>
</html>