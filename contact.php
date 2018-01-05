<!DOCTYPE html>
<html lang="en">
<head>
  <title>Socially Responsible Investment Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>



        .navbar {
        margin-bottom: 0;
        background-color: transparent;
        color: white;
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
      }

      .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
      }

      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: black !important;
        background-color: #fff !important;
      }

      .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
      }

    .jumbotron {
        background-image:url("newyork.jpg");
        color: #ffffff;
        padding-top: 50px;
        padding-bottom: 50px;
        margin-bottom: 0px;
    }

  </style>
</head>
<body>

  <div class="jumbotron text-center" >
  <h1>Contact and Recruitment</h1>
  </div>

  <style>
  .bg-grey {
      background-color: #f6f6f6;
  }

  .container-fluid {
    padding: 60px 50px;
    margin-left: 0px;
    margin-right: 0px;

  }


    @media screen and (max-width: 768px) {
        .col-sm-4 {
            text-align: center;
            margin: 25px 0;
        }

    }

  </style>


    <div class="container-fluid bg-grey text-center" >
      <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
          <h2>Contact Us</h2></br>
          <p>For more information regarding SRI, please contact us at pittsri@outlook.com. If you are interested in joining SRI, please upload your resume below.  Our leadership team
            will review all resumes and applications during our recruitment period.
           </p>
           </br></br>
           <form>
              <div class="form-group text-center">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="fileToUpload" id="fileToUpload">
                  <input type="submit" class= "btn btn-default" value="Upload Resume" name="submit">
              </div>
            </form>
        </div>
        <div class="col-sm-3">
        </div>
      </div>
    </div>



  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="team.html">LEADERSHIP</a></li>
        <li><a href="portfolio.php">PORTFOLIO</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<script>
    $(document).ready(function(){
      $(window).scroll(function() {
        if ($(document).scrollTop() > 150) {
          $(".navbar-fixed-top").css("background-color", "black");
          $("#logo").css("visibility: visible");
        } else {
          $(".navbar-fixed-top").css("background-color", "transparent");
          $("#logo").css("visibility: hidden");
        }
      });
    });
</script>



</body>

<style>
footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;

}

footer a {
    color: #f5f5f5;
}

footer a:hover {
    color: #777;
    text-decoration: none;
}
</style>
<footer class="text-center">
  <a class="up-arrow" href="#header" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>© 2017 Socially Responsible Investment Portfolio</p>
</footer>

</html>
