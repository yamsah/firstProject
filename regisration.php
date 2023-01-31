<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">





    <title>Document</title>
</head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="shadow p-3">
            <form class="form-signin" method ="POST" action = "./hendllers/regHendller.php">
          <h2 class="form-signin-heading"><i>YAMSAH REGISTRATION</i></h2>
          <label for="inpuFirstname" class="sr-only">First name</label>
          <input type="Firstname" id="inputFirstname" name="Firstname" class="form-control" placeholder="First name" required autofocus><br>

          <label for="inpuLastname" class="sr-only">Last name</label>
          <input type="Lastname" id="inputLastname" name="Lastname" class="form-control" placeholder="Last name" required autofocus><br>

          <label for="inputAddress" class="sr-only">Address</label>
          <input type="Address" id="inputAddress" name="Address" class="form-control" placeholder="Address" required autofocus><br>

          <label for="inputCity" class="sr-only">City</label>
          <input type="City" id="inputCity" name="City" class="form-control" placeholder="City" required autofocus><br>

          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" name="Email" class="form-control" placeholder="Email address" autofocus><br>

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
        </form>
  
            </div>

        </div>
        <div class="col-md-3"></div>
      </div>


        
      </div> <!-- /container -->
  
  
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
</body>
</html>