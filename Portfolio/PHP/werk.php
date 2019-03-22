<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/werk.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Mijn werk</title>
</head>

<body> 
    <?php include "../HTML/navbar.html" ?>
    <?php include "../PHP/date.php" ?>
    <?php include "../HTML/carousel.html" ?>

      <div class="bg-light" style="height: 200px; width: 100%;"></div>

<!-- Buttons -->
    <div class="btn-group btn-group-toggle" data-toggle="buttons">

        <label class="btn btn-secondary active">
            <input class="bg-primary" type="button" value="Alles" onclick="window.location.href='werk.php'"/>
        </label>
            
        <label class="btn btn-secondary">
            <input class="bg-primary" type="button" value="Blok 1" onclick="window.location.href='blok1.php'"/>
        </label>
            
        <label class="btn btn-secondary">
            <input class="bg-primary" type="button" value="Blok 2" onclick="window.location.href='blok2.php'"/>   
        </label>

    </div>
        
        <div style="width: 100%; height: 35px; background-color: #181818;"></div>
    </div>

<!-- Start Photo Gallery -->
    <div class="gallery" style="background-color: #181818" id="gallery">

<!-- Grid column -->
    <div class="mb-3 pics animation all 2">
        <a href="images//B1W2.png"><img class="img-fluid" src="../images/W2.png" alt="b1w2"></a>
    </div>

  <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//B1B5.png"><img class="img-fluid" src="../images/B5.png" alt="b1w5"></a>
    </div>

  <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//B1W7.png"><img class="img-fluid" src="../images/B7.png" alt="B1W7O1"></a>
    </div>

  <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
        <a href="images//B1W9.png"><img class="img-fluid" src="../images/B91.png" alt="B1W9"></a>
    </div>

  <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
        <a href="images//flexi-desktop.png"><img class="img-fluid" src="../images/flexi-desktop.png" alt="flexi-desktop"></a>
    </div>

  <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//B1W3.png"><img class="img-fluid" src="../images/W3.png" alt="B1W3"></a>
    </div>

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//B1W6.png"><img class="img-fluid" src="../images/B6.png" alt="B1W6"></a>
    </div>

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//B1W9O2.png"><img class="img-fluid" src="../images/B92.png" alt="B1W9O2"></a>
    </div>

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//flexi-mobile.png"><img class="img-fluid" src="../images/flexi-mobile.png" alt="flexi-mobile"></a>
    </div>

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//B1W8O1.png"><img class="img-fluid" src="../images/B8.png" alt="B1W8O1"></a>
    </div>

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//B1W4.png"><img class="img-fluid" src="../images/W4.png" alt="B1W4"></a>
    </div>

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//adventure-game.png"><img class="img-fluid" src="../images/adventuregame.png" alt="adventure-game"></a>
    </div>

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <a href="images//lingo.png"><img class="img-fluid" src="../images/lingo.png" alt="lingo"></a>
    </div>
</div>

<div style="height: 20px;"></div>


    <?php include "../HTML/footer.html" ?>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="portfolio.js"></script>
</body>
</html>     


