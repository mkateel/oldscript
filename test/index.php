<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Error 404: Page not found – 80s hacker theme</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="noise"></div>
<div class="overlay"></div>
<div class="terminal">
  <h1><span class="errorcode">Request Headers</span></h1>

  <p class="output"> <?php
  $headers =  getallheaders();
  foreach($headers as $key=>$val){
    echo $key . ': ' . $val . '
          <br>';
  }
  ?></p>

  <p class="output"><a href="https://maheshkateel.cf/home">Click here for Home</a>.</p>
  
</div>
<!-- partial -->
  
</body>
</html>


