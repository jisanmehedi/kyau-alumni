<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>
    <link rel="stylesheet" href="kyau_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>

<body>
    <div class="titleimage">
      <img src="./image/logo-title.png"  alt="kyau-title-image">
    </div>
  
  
    <div class="mainnav" data-spy="affix" data-offset-top="197">
      <div class="listtext">
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#gallery">Gallery</a>
        <a href="#notice">Notice</a>
        <a href="#Contact">Contact</a>
      </div>
      <div class="listtext" id="login">
        <a href="logout.php">Logout</a>
      </div>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./image/kyau.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://kyau.edu.bd/kyau/public/uploads/1640081004-madam.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./image/kyau.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      <div class="events">
        <h3>Upcoming Events</h3>
        <hr class="hr-event">
      </div>


      <section>
        <div class="leftbox">
          <div class="content">
            <h1>Events</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident voluptatum ratione dolorem beatae ab quasi ad perferendis unde ullam recusandae!</p>
          </div>
        </div>
        <div class="events">
          <ul>
            <li>
              <div class="time">
                <h2>13<br><span>August</span></h2>
              </div>
              <div class="details">
                <h3>Event1</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda et eum minima quaerat nobis hic quo deleniti adipisci vitae? Labore.</p>
                <a href="#">View Details</a>
              </div>
            </li>
            <li>
              <div class="time">
                <h2>13<br><span>August</span></h2>
              </div>
              <div class="details">
                <h3>Event1</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda et eum minima quaerat nobis hic quo deleniti adipisci vitae? Labore.</p>
                <a href="#">View Details</a>
              </div>
            </li>
            <li>
              <div class="time">
                <h2>13<br><span>August</span></h2>
              </div>
              <div class="details">
                <h3>Event1</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda et eum minima quaerat nobis hic quo deleniti adipisci vitae? Labore.</p>
                <a href="#">View Details</a>
              </div>
            </li>
          </ul>
        </div>
    </section>

      

      <footer class="footer">
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <img
                src="./image/logo-title.png"
                alt=""
                style="width: 100%; margin-bottom: 10px"
              />
              <p style="text-align: left; margin-top: 10px">
                "Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem ipsam incidunt animi quod. Laboriosam culpa sit hic
                nam, quia ducimus."
              </p>
            </div>
  
            <div class="col">
              <h6>Useful Links</h6>
              <p>Home</p>
              <p>Blog</p>
              <p>Events</p>
            </div>
  
            <div class="col">
              <h6>Contacts</h6>
              <p>Facebook</p>
              <p>Youtube</p>
              <p>Whatsapp</p>
            </div>
          </div>
        </div>
        <hr />
        <div class="copyright">
          <p>copyright © 2022 All Rights Reserved</p>
          <p>Developed by: Depression_CSE</p>
        </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>