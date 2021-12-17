<?php
$insert=false;
if(isset($_POST['email'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection failed due to ".$mysqli_connect_error());
}
// echo("Success connecting to the db");
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `animapedia_contact`.`animalpedia_contact_table` (`E-mail`, `Message`, `Time`) VALUES ('$email', '$message', current_timestamp());" ; 
    // echo $sql;

    if($con->query($sql)==true){
        // echo "Succesfully inserted";
        $insert=true;
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con -> close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-signin-client_id" content="956597175192-jl4iiuqvtitq3pocbv2f56ddco7oadh7.apps.googleusercontent.com">
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="icon" href="Images/icon-01.png" type="image/x-icon" />
    <link rel="stylesheet" href="index.css" />
    <title>Animalpedia | Contact</title>
  </head>
  <body id="contact-body">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="Images/icon-02.png" alt="" width="28" height="24" />
        </a>
        <a class="navbar-brand" href="index.html">Animalpedia</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Browse animals
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <h5 class="pt-3 px-3">Vertebrates</h5>
                </li>
                <li><a class="dropdown-item" href="#">Amphibians</a></li>
                <li><a class="dropdown-item" href="#">Reptiles</a></li>
                <li><a class="dropdown-item" href="#">Mammals</a></li>
                <li><a class="dropdown-item" href="#">Birds</a></li>
                <li><a class="dropdown-item" href="#">Fishes</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <h5 class="pt-3 px-3">Invertebrates</h5>
                </li>
                <li><a class="dropdown-item" href="#">Annelida</a></li>
                <li><a class="dropdown-item" href="#">Artropoda</a></li>
                <li><a class="dropdown-item" href="#">Cnidaria</a></li>
                <li><a class="dropdown-item" href="#">Echinodarmata</a></li>
                <li><a class="dropdown-item" href="#">Mollusca</a></li>
                <li><a class="dropdown-item" href="#">Nematoda</a></li>
                <li><a class="dropdown-item" href="#">Platyhelminthes</a></li>
                <li><a class="dropdown-item" href="#">Porifera</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact us</a>
            </li>
            <div id="my-signin2" class="mx-lg-5"></div>
            <img id="image" class="my-2"style="height: 25px; width: 25px;visibility:hidden;"></img>
            <div id="name" style="display: none;"></div>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
<?php
    if($insert==true){
        echo "<div class='alert alert-success' role='alert' id='alert' style='display:none'><strong>Message submitted successfully</strong>
        You can return to <a href='index.html' class='alert-link'>Home</a> now.
      </div>";
    }
?>
    <div class="container" style="background-color: rgba(0, 0, 0, 0.438);">
    <div class="container my-5 text-white">
      <h2>Contact us</h2>
      
      <form
        action="contact.php"
        method="post"
      >
        <label for="exampleFormControlInput1" class="form-label"
          >Email address</label
        >
        <input
          type="email"
          class="form-control"
          name="email"
          id="email"
          placeholder="name@example.com"
          required
        />
        <label for="exampleFormControlTextarea1" class="form-label"
          >Enter your message</label
        >
        <textarea
        type="text"
          class="form-control"
          id="message"
          name="message"
          rows="5"
          required
        ></textarea>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start my-3">
          <button type="submit" class="btn btn-primary btn-lg px-4 me-md-2">
            Submit
          </button>
          <button type="reset" class="btn btn-secondary btn-lg px-4">
            Reset
          </button>
        </div>
      </form>
    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="contact.js"></script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <script>
      function onSuccess(googleUser) {
        console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
        document.getElementById('image').style.visibility="visible";
        document.getElementById('name').style.display="inline";
        document.getElementById('name').style.color="white";
        document.getElementById('name').innerText = googleUser.getBasicProfile().getName();
        document.getElementById('image').src=googleUser.getBasicProfile().getImageUrl();
        document.getElementById('my-signin2').style.display="none";
        document.getElementById('email').value= googleUser.getBasicProfile().getEmail();  
      }
      function onFailure(error) {
        console.log(error);
        document.getElementById('my-signin2').style.display="none";
        document.getElementById('image').style.display="none";
        document.getElementById('name').style.display="none";
      }
      function renderButton() {
        gapi.signin2.render('my-signin2', {
          'scope': 'profile email',
          'width': 240,
          'height': 50,
          'longtitle': true,
          'theme': 'dark',
          'onsuccess': onSuccess,
          'onfailure': onFailure
        });
      }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>




