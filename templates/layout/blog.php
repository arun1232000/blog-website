<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>My Blog</title>
  </head>
  
  <body>

<?= $this->element("nav");?>
    
    
   
     <!--- <div class="jumbotron jumbotron-fluid text-white" style="background-image: url('../webroot/img/b.jpg');height:250px; background-size: cover;">
        <div class="container">
            <h1 class="display-4">Welcome to My Blog</h1>
            <p class="lead">Explore the latest articles and stay informed.</p>
        </div>
        <?= "<h4 style='margin-left:40px;margin-top:0px;'>".$cname=$this->request->getparam("controller");"</h4>"?>
        <?= "/" ?>
        <?= $aname=$this->request->getparam("action");?>
            </div>-->

    
 
    <?php

echo $this->fetch('content');
?>
<?= $this->element("footer");?>

    
    </div>

    
  
  </body>
</html>
