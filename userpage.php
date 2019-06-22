<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-size: 28px;
            background-color: #cccccc;
        }

        #centered {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #1598d4;
            font-family: Papyrus;
            font-size: 20;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(255, 230, 0);
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: rgb(9, 186, 218);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: rgb(247, 178, 30);
        }

        .active {
            background-color: rgb(0, 255, 255);
        }


        h2 {
            position: relative;
            left: 400px;
        }

        #imgh {
            padding: 14px 16px;
        }

        #imgh:hover {
            opacity: 0.5;
            filter: alpha(opacity=50);

        }

        div.backgroundimg {

            background: url("https://lowvelder.co.za/wp-content/uploads/sites/44/2015/10/maths_1.jpg");
            background-color: #cccccc;
            /* Used if the image is unavailable */
            height: 700px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
        }

        div.topicimg {
            position: relative;
            left: 360px;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .button_container {
            position: relative;
            float: right;
            left: 0;
            right: 0;
            top: 30%;
        }

        .btn {
            border: none;
            display: block;
            text-align: center;
            cursor: pointer;
            text-transform: uppercase;
            outline: none;
            overflow: hidden;
            position: relative;
            color: #000000;
            font-weight: 700;
            font-size: 20px;
            background-color: rgb(255, 230, 0);
            padding: 17px 60px;
            margin: 0 auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.20);
        }

        .btn span {
            position: relative;
            z-index: 1;
        }

        .btn:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 490%;
            width: 140%;
            background: #78c7d2;
            -webkit-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out;
            -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
            transform: translateX(-98%) translateY(-25%) rotate(45deg);
        }

        .btn:hover:after {
            -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
            transform: translateX(-9%) translateY(-25%) rotate(45deg);
        }
    </style>
</head>

<body>

    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li class="dropdown"><a href="#Topics">Topics</a>
            <div class="dropdown-content">
                <a href="#">ALGEBRA</a>
                <a href="#">PROBABLITY</a>
                <a href="#">GEOMETRY</a>
            </div>
        </li>
        <li><a href="#Practice">Practice</a></li>
        <li class="dropdown"><a href="#References">References</a>
            <div class="dropdown-content">
                <a href="#">NCERT Class 11-12</a>
                <a href="#">NCERT Class 7-10</a>
                <a href="#">NCERT Class 5-6</a>
            </div>
        </li>
        <li><a href="#About us">About us</a></li>
        <div class="button_container">
            <button class="btn"><span>LOGIN</span></button>
        </div>
        <div class="button_container">
            <button class="btn"><span>SIGN UP</span></button>
        </div>

    </ul>

    <div>
        <img src="https://in.ixl.com/dv3/u3pzp3pH5eb1VeBRLP4kdHCoCrg/yui3/home-page/assets/featured-bg-jan-2019-i18n.jpg"
            alt="math" width="1500" height="500">
        <p id="centered">Mathematics Is More Powerful instrument</br> of Knowledge than any other that has
            been</br> bequeated to us by human agency.</p>
    </div>
    <h2 style="font-family:courier;"> Lets Explore Mathematics...</h2>


    <div class="backgroundimg">
        <div class="topicimg">

            <a style="text-decoration:none;" href="https://www.w3schools.com">
                <img alt="W3Schools"
                    src="http://study.com/cimages/course-image/glencoe-algebra-1-online-textbook-help_135772_large.jpg"
                    width="200" height="200" id="imgh">
            </a>

            <a style="text-decoration:none;" href="https://www.w3schools.com">
                <img alt="W3Schools" src="https://img.haikudeck.com/mg/9F5A8501-9AB7-44C0-8C7B-9C34606AA45E.jpg"
                    width="200" height="200" right="400" id="imgh">
            </a>

            <a style="text-decoration:none;" href="https://www.w3schools.com">
                <img alt="W3Schools" src="https://cdn1.byjus.com/wp-content/uploads/2016/06/Trigonometry.png"
                    width="200" height="200" right="400" id="imgh">
            </a>

            <br />
            <a style="text-decoration:none;" href="https://www.w3schools.com">
                <img alt="W3Schools"
                    src="https://tse1.mm.bing.net/th?id=OIP.sX59usF4qsjydZJwQQv1BQHaE8&pid=15.1&P=0&w=236&h=158e.jpg"
                    width="200" height="200" id="imgh">
            </a>



            <a style="text-decoration:none;" href="https://www.w3schools.com">
                <img alt="W3Schools"
                    src="https://tse1.mm.bing.net/th?id=OIP.WHImK-jpEG8FLwk6Ns9LJQHaGK&pid=15.1&P=0&w=184&h=154"
                    width="200" height="200" right="400" id="imgh">
            </a>

            <a style="text-decoration:none;" href="https://www.w3schools.com">
                <img alt="W3Schools"
                    src="https://tse1.mm.bing.net/th?id=OIP.nivnoJ1eznNtMJ6Ho_r4VwHaEi&pid=15.1&P=0&w=336&h=207"
                    width="200" height="200" right="400" id="imgh">
            </a>
            <br />
            <a style="text-decoration:none;" href="https://www.w3schools.com">
                <img alt="W3Schools"
                    src="https://tse1.mm.bing.net/th?id=OIP.sX59usF4qsjydZJwQQv1BQHaE8&pid=15.1&P=0&w=236&h=158e.jpg"
                    width="200" height="200" id="imgh">
            </a>



            <a style="text-decoration:none;" href="https://www.w3schools.com">
                <img alt="W3Schools"
                    src="https://tse1.mm.bing.net/th?id=OIP.WHImK-jpEG8FLwk6Ns9LJQHaGK&pid=15.1&P=0&w=184&h=154"
                    width="200" height="200" right="400" id="imgh">
            </a>

            <a style="text-decoration:none;" href="https://www.w3schools.com">
                <img alt="W3Schools"
                    src="https://tse1.mm.bing.net/th?id=OIP.nivnoJ1eznNtMJ6Ho_r4VwHaEi&pid=15.1&P=0&w=336&h=207"
                    width="200" height="200" right="400" id="imgh">
            </a>
        </div>
    </div>

</body>

</html>