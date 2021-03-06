<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src = "transparent.js"></script>
<title>Anime Stop</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top bg-company-red">

<!-- Collapse button -->
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav11"
    aria-controls="basicExampleNav11" aria-expanded="false" aria-label="Toggle navigation" style = "padding:0%;border:0px" >
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Logo -->
  <a class="navbar-brand mx-auto d-block" href="homepage.php">
    <img src="Figures/logos.png" height = "60" style= "padding-right:30px">
  </a>

  <!-- Links -->
  <div class="collapse navbar-collapse" id="basicExampleNav11">
    <!-- Right -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="homepage.php" class="nav-link waves-effect">
         Home
        </a>
      </li>
      <li class="nav-item">
        <a href="all-products.php" class="nav-link waves-effect">
         Shop
        </a>
      </li>
      <li class="nav-item">
        <a href="contact.php" class="nav-link waves-effect">
          Contact
        </a>
      </li>
      <li class="nav-item">
        <a href="login.php">
        <img src = "Figures/person_outline-24px.svg" style = "padding-top:5px">
        </a>
      </li>
      <li class="nav-item">
        <a href="#!" >
          <img src = "Figures/local_mall-24px.svg" style = "padding-top:5px">
      </li>
      <li class="nav-item">
        <a href="#!" >
          <img src = "Figures/search-24px.svg" style = "padding-top:5px">
        </a>
      </li>
    </ul>
  </div>
  <!-- Links End-->
</nav>
<!-- Navbar End-->
</div>

<!-- Content -->
<div class = "container ">

    <form>
        <div class = "row" id="row1">
            <div class = "col-md-12">
                <h1 id = "h3a">Login</h1>
            </div>
        </div>

        <div class = "row d-flex justify-content-center">
            <div class = "col-sm-3">
                <label for="uname"><b>Username</b></label><br>
                <input type="text" name="uname" required>
            </div>
	        <div class = "col-sm-3">
                <label for="psw"><b>Password</b></label>
                <input type="password" name="psw" required>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12" style = "text-align:center">
                <button type="submit">Sign in</button>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12" style = "text-align:center">
                <a href ="#!" id = "fontQ">Sign Up</a>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-12" style = "text-align:center">
                <a href ="#!" id = "fontQ">Forget Password</a>
            </div>

        </div>
    </form>
</div>
<!-- Content End -->

<!-- 2ndFooter-->

<div class = "container" style = "padding-top:30px" align = "center">
<blockquote class="blockquote">
    <p>"When people get hurt, they learn to hate... When people hurt others, they become hated and racked with guilt. But knowing that pain allows people to be kind. Pain allows people to grow... and how you grow is up to you."</p>
    <footer class="blockquote-footer">Jiraiya from Naruto</footer>
  </blockquote>

</div>
<!-- 2ndFooter End -->

<!-- Footer -->
<footer class="bg-light text-white bg-company-red ">
  <div class="container py-5 ">
    <div class="row " >
      <div class="col-xl-3" id = "fontF"><a href = "homepage.php"><img src="Figures/logos.png" height = "60"></a></div>
      <div class="col-xl-3"></div>
      <div class="col-xl-3"></div>
      <div class="col-xl-3" id = "fontF" >Let's Keep In Touch
        <div>
          <a href = "#!"> <img src="Figures/fb.png" style = "height:24px"></a>
          <a href = "#!"> <img src="Figures/twt.png" style = "height:24px"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<footer class="bg-light text-white">
  <div class="container-fluid py-3 ">
    <div class="row">
      <div class = "col-md-12" id = "fontF">©Villafranca and Carreon 2020</div>
    </div>
</footer>
<!-- Footer End -->
</body>
</html>
