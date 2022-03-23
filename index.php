<!doctype html>
<html lang="en">
  <head>
  <!-- title -->
  <title>Home</title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Css -->
        <link rel="stylesheet" href="css/style1.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
     <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #f78134;">
      <div class="container">
        <a class="navbar-brand" href="#">Teknik Komputer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item" style="margin-right:80px;">
              <a class="nav-link active" aria-current="page" href="?pages=home">Home</a>
            </li>
           <div class="dropdown">
      <li class="mainmenubtn" style="margin-right:80px;"><a style="text-decoration:none;color:black;"href="?pages=profil">Profil</a></li>
     <div class="dropdown-child">
    <a href="?pages=sejarah">sejarah</a>
    <a href="?pages=visi">Visi Dan Misi</a>
      </div>
      </div>
            <li class="nav-item">
              <a class="nav-link" href="?pages=login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
  <div class="content">

  <?php
    //home page
    $page=(isset($_GET['pages']))?$_GET['pages']:"home";
    switch($page) {

    case 'home':
        include "home.php";
    break;
    
    case 'profil':
        include"profil.php";
        break;

    case 'sejarah':
        include "sejarah.php";
    break;
    case 'visi':
      include "visi.php";
    break;
    
    case 'login':
        include "login.php";
    break;

    default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
    break;

    }
    ?>
  </div>
  </body>
</html>
