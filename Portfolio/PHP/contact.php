<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/contact.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Home</title>
</head>

<body> 
  <?php include "../HTML/navbar.html" ?>
  <?php include "../PHP/date.php" ?>
  <?php include "../HTML/carousel.html" ?>

    
          <div class="container">
              <h4><strong>Contact</strong></h4>

          <form>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                  <label for="validationServer01">Voornaam</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Voornaam" value="" required style="border-color: #181818 !important;">
              </div>

              <div class="col-md-4 mb-3">
                  <label for="validationServer02">Achternaam</label>
                  <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Achternaam" value="" required style="border-color: #181818 !important;">
              </div>

              <div class="col-md-4 mb-3">
                <label for="validationServerEmail">E-Mail</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    </div>
                    <input type="text" class="form-control is-invalid" id="validationServerEmail" placeholder="Email" aria-describedby="inputGroupPrepend3" required style="border-color: #181818 !important;">
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-12 mb-12" style="height: 100px;" >
                <label for="validationServer05">Berricht</label>
                <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Berricht" required style="border-color: #181818 !important;">
              </div>
            </div>

            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Selecteer bestand</label>
            </div>

          <div style="height: 100px; width: 100%;"></div>

              <button class="btn btn-primary" type="submit">Verstuur</button>
          </form>

          <div style="height: 100px; width: 100%;"></div>
          </div>

  <?php include "../HTML/footer.html" ?>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="portfolio.js"></script>
</body>
</html>   

