<?php session_start(); ?>
<html>

<head>
  <title>ALGEBRA</title>
  <style type="text/CSS">

      #body{
          font-size: 28px;
           background:#ffffff;
     }
    ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: rgb(255, 230, 0);
           }

      li{
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
          background-color:  rgb(0, 255, 255);
      }

     #discription{
       margin: 20px;
       font-size: 22px;
       font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       color:rgb(19, 11, 1);    
     }

  
     #title{
       font-size: 38px;
       font-weight:"bold";
   
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 20px;
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

           .button_container1 {
            position: relative;
            left: 900px;
            top: 30%;
        }

        .btn1{
            color: #fff !important;
            text-transform: uppercase;
            background: #60a3bc;
            padding: 20px;
            border-radius: 50px;
            display: inline-block;
            border: none;
        }

        .btn1:hover {
            text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
            -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
            -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
            transition: all 0.4s ease 0s;
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

<body id="body">

 <ul>
        <li><a class="active" href="FrontPage.php">Home</a></li>
        <li class="dropdown"><a href="#Topics">Topics</a>
           <div class="dropdown-content">
                <a href="algebra.php">ALGEBRA </a>
                <a href="probab.php">PROBABLITY</a>
                <a href="triangles.php">TRIANGLE</a>
                <a href="trigo.php">TRIGNOMETRY</a>
                <a href="cal.php">CALCULUS</a>
                <a href="square.php">SQUARE</a>
                <a href="matrix.php">MATRIX</a>
                 <a href="sets.php">SETS</a>
                <a href="profit.php">PROFIT AND LOSS</a>
            </div>
        </li>
        <li><a href="#Practice">Practice</a></li>
        <li class="dropdown"><a href="#References">References</a>
            <div class="dropdown-content">
                <a href="https://byjus.com/class-11-12/">NCERT Class 11-12</a>
                <a href="https://byjus.com/class-6-10/">NCERT Class 6-10</a>
                <a href="https://byjus.com/class-4-5/">NCERT Class 4-5</a>
            </div>
        </li>
       

        <div class="button_container1">
            <button class="btn1" ><span><?php echo $_SESSION['username']; ?></span></button>
        </div>
       

    </ul>

   <div class="intro" id="intro">

      <img src="https://cdn.shopify.com/s/files/1/0099/4982/products/9781911132288.jpg?v=1489699651" id="img1" height="400" width="400"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">

      <h1 id="title" style="color:rgb(35, 5, 143);">ALGEBRA</h1>
      <p id="discription">
           For the kind of algebraic structure, see Algebra over a field.<br/>

           The quadratic formula expresses the solution of the equation ax2 + bx + c = 0, <br/>
           where a is not zero, in terms of its coefficients a, b and c.<br/>
           Algebra is one of the broad parts of mathematics, <br/>
           together with number theory, geometry and analysis. In its most general form, algebra is the study of mathematical symbols and the rules for manipulating these symbols.<br/>
       <br/>
           -It is a unifying thread of almost all of mathematics.It includes everything from elementary equation solving to the study of abstractions such as groups, rings, and fields. <br/>
       <br/>
           -The more basic parts of algebra are called elementary algebra; the more abstract parts are called abstract algebra or modern algebra.<br/>
       <br/>
           -Elementary algebra is generally considered to be essential for any study of mathematics, science, or engineering, as well as such applications as medicine and economics. <br/>
       <br/>
           -Abstract algebra is a major area in advanced mathematics, studied primarily by professional mathematicians.<br/>
      </p>

      <p id="discription">
           Elementary algebra differs from arithmetic in the use of abstractions, such as using letters to stand for numbers that are either unknown or allowed to take on many values.<br/>
           For example, inx+2=5 the letter X is unknown, but the law of inverses can be used to discover its value: x=3. <br/>
           In E = mc2, the letters  E and  m are variables, and the letter  is a constant, the speed of light in a vacuum.<br/>
           Algebra gives methods for writing formulas and solving equations that are much clearer and easier than the older method of writing everything out in words.<br/>
    </p>
  </div>

  <div class="Content">

      <h3 style="color:rgb(30, 179, 45);">ALGEBRIC FORMULAS</h3>
  </div>

  <div id="discription">
       <img src="https://i.pinimg.com/originals/a5/a8/79/a5a8795368be161444b69827196b6168.jpg" id="img1" height="800" width="600"
       style="position:absolute;left:10px">
       <img src="https://i.pinimg.com/originals/76/8d/fc/768dfc6402179e65d35cfe1ed7098658.png" id="img1" height="800" width="600"
       style="position:absolute;left:600px">


   </div>
</body>

</html>





