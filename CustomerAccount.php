<?php session_start();
if (isset($_SESSION["username"]))
{
	
}
else if (isset($_SESSION["admin"]))
{
    header('Location: AdminAccount.php');
}
else
{
    header('Location: sign up.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unique - My Account</title>
	<link rel="stylesheet" type="text/css" href="css/dashBoardStyle.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
<style>
  * {
        margin: 0px;
        padding: 0px;
        font-family: 'Poppins', sans-serif;
    }
    .main {
        height: 400px;
        width: 70%;
        margin: 5% auto;
		backface-visibility: visible;
		border-radius: 15px;
        border: 1px solid #00DCFF;
        box-shadow: 0 0 5px #FF0080; 
		background: url("https://png.pngtree.com/thumb_back/fw800/background/20190221/ourmid/pngtree-poster-background-material-gradient-poster-design-image_19245.jpg");
		background-size: cover;
        border-radius: 15px 15px 15px 15px;
    }
    .main .right {
        float: right;
        width: 45%;
        height: 100px;
        
    }
    .right .content {
        width: 80%;
        margin: auto;
        padding-top: 100px;
        color: #E8E7E7;
        
    }
    .right .content i{
        width: 50px;
        text-align: center;
        font-size: 35px;
        margin-right: 10px;
    }
    .right .content p {
        padding: 15px;
        font-size: 18px;
        }
	
	.right .content a{
		color: #ECECEC;
		text-decoration-line: none;
		}
		
    .main .left {
        width: 50%;
        height: 400px;
        float: left;
    }

    .left form {
        width: 80%;
        margin: auto;
		color: #FFFFFF;
    }
    form input {
        width: 90%;
        margin: auto;
        padding: 3%;
        margin-bottom: 10px;
        display: block;
        border: none;
        outline: none;
        border-bottom: 2px solid rgba(0, 0, 0, .3);
    }
    form textarea {
        width: 98%;
        margin: 2%;
        padding: 3%;
        border: none;
        resize: none;
        outline: none;
        border-bottom: 2px solid rgba(0, 0, 0, .3);
    }
    form input[type=submit] {
        width: 30%;
        border: none;
        outline: none;
        background: linear-gradient(to left, rgb(236, 0, 140), rgb(252, 103, 103));
        border-radius: 15px;
        font-weight: bolder;
        color: white;
        font-size: 19px;
        padding: 0px;
    }
    .left .title {
        margin: auto;
        width: 100%;
    }
    .title h1 {
        text-align: center;
        padding: 10px;
    };

     </style>
</head>

<body>
    
<script>
       const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links a");

  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");

    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = "";
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 7 + 0.5
        }s `;
      }
    });
    burger.classList.toggle("toggle");
  });
  //
};

navSlide();
          </script>
<nav>
  <div class="logo">
    <h4><a href="UniqueHomePage.html">Unique</a></h4>
  </div>
  <nav id="nav">
      <ul>
          <li><a href="UniqueHomePage.html">Home</a></li>
          <li><a href="">Order</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="CustomerAccount.php">My Account</a>
              <ul class="dropdown">
              <li><a href="sign up.php">Log in/Register</a></li>
              <li><a href="CustomerAccount.php">My Orders</a></li>
              <li><a href="#">Log Out</a></li>
              </ul></li>
      </ul>
				</nav>
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>
<table width="908" height="225" align="center">
  <tbody>
    <tr>
      <td width="900"><div class="main-section">
      <div class="dashbord">
        <div class="icon-section"> <br />
          <img src="images/profile.jpg" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="#">My Profile<br> </a> </div>
      </div>
      <div class="dashbord dashbord-green">
        <div class="icon-section"> <br />
          <img src="images/add.png"="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="AddAdvertisement.php">Add Products</a> </div>
      </div>
      <div class="dashbord dashbord-blue">
        <div class="icon-section"> <br />
          <img src="images/view.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="ViewMyAdvertisements.php">View Products</a> </div>
      </div>
      <div class="dashbord dashbord-skyblue">
        <div class="icon-section"> <br />
          <img src="images/publish.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"><a href="EditAdvertisements.php">List Products</a> </div>
      </div>
      <div class="dashbord dashbord-red">
        <div class="icon-section"> <br />
          <img src="images/edit.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="ViewMyAdvertisements.php">Change Product Details</a> </div>
      </div>
      <div class="dashbord dashbord-orange">
        <div class="icon-section"> <br />
          <img src="images/viewAll.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="ViewAdvertisements.php">View All Displayed Products</a> </div>
      </div>
    </div></td>
    </tr>
  </tbody>
</table>
</body>
</html>
