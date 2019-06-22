
<?php session_start(); ?>
<html>

<head>
  <title>TRIGONOMENTRY</title>
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

      <img src="https://www.skillsyouneed.com/images/trig/right-angle-triangle.png" alt="triangle-1" id="img1" height="400" width="500"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">

      <h1 id="title" style="color:rgb(35, 5, 143);"> TRIGONOMENTRY</h1>
      <p id="discription">
           Trigonometry (from Greek trigōnon, "triangle" and metron, "measure") is a branch of mathematics that studies relationships between side lengths and angles of triangles.<br/>
            The field emerged in the Hellenistic world during the 3rd century BC from applications of geometry to astronomical studies.<br/>
            In particular, 3rd-century astronomers first noted[citation needed] that the ratio of the lengths of two sides of a right-angled triangle depends only of one acute angles of the triangle.<br/>
            These dependencies are now called trigonometric functions.<br/>
           <br/>
           Trigonometry is the foundation of all applied geometry, including geodesy, surveying, celestial mechanics, solid mechanics, navigation.<br/>
       <br/>
           Trigonometric functions have been extended as functions of a real or complex variable, which are today pervasive in all mathematics.<br/>
      </p>

      <p id="discription">
           If one angle of a triangle is 90 degrees and one of the other angles is known, the third is thereby fixed, because the three angles of any triangle add up to 180 degrees. <br/>
           The two acute angles therefore add up to 90 degrees: they are complementary angles. <br/>
           The shape of a triangle is completely determined, except for similarity, by the angles. Once the angles are known, the ratios of the sides are determined, regardless of the overall size of the triangle.<br/>
           If the length of one of the sides is known, the other two are determined. <br/>
           These ratios are given by the following trigonometric functions of the known angle A, where a, b and c refer to the lengths of the sides in the accompanying figure:<br/>

        </p>
      <br/>

      
      <br/>
    
      <img src="https://i.imgur.com/NasTRHp.png" alt="triangle-1" id="img1" height="400" width="1200"
      style="position:absolute;left:10px;">
     
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/TrigonometryTriangle.svg/368px-TrigonometryTriangle.svg.png" alt="triangle-1" id="img1" height="300" width="300"
      style="position:absolute;left:1200px;">
  </div>
<br/> <br/> <br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/> <br/> <br/>
  <div class="Content">

      <h3 style="color:rgb(30, 179, 45);">EXTENDING DEFINATION</h3>
  </div>

  <div id="discription">
   
      <p id="discription">
          <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Sin-cos-defn-I.png" alt="triangle-1" id="img1" height="400" width="400"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">
<p >
  The above definitions only apply to angles between 0 and 90 degrees (0 and π/2 radians).<br/>
  Using the unit circle, one can extend them to all positive and negative arguments (see trigonometric function). <br/>
  The trigonometric functions are periodic, with a period of 360 degrees or 2π radians. <br/>
  That means their values repeat at those intervals. The tangent and cotangent functions also have a shorter period, <br/>
  of 180 degrees or π radians.<br/>
<br/>
The trigonometric functions can be defined in other ways besides the geometrical definitions above, <br/>
using tools from calculus and infinite series. <br/>
With these definitions the trigonometric functions can be defined for complex numbers. <br/>
The complex exponential function is particularly useful.<br/>
<br/>
e^{x+iy}=e^{x}(\cos y+i\sin y)<br/>
<br/>
</p>

</p>
 
 
<p style="text-decoration-line: underline;font-weight: bold;">See Euler's and De Moivre's formulas.</p>


    <div >
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Sine_curve_drawing_animation.gif" alt="triangle-1" id="img1" height="200" width="400"
            style="position:absolute;left:10px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5d/Csc_drawing_process.gif" alt="triangle-1" id="img1" height="300" width="400"
            style="position:absolute;left:550px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Tan_drawing_process.gif" alt="triangle-1" id="img1" height="300" width="400"
            style="position:absolute;left:950px;">
            <p style="position: absolute;left:190px;top:3000;">EQUILATERAL TRIANGLE</p>
          <p style="position: absolute;left:650px;top:3000;">ISOSCELES TRIANGLE</p>
          <p style="position: absolute;left:1100px;top:3000;">SCALENE TRIANGLE</p>
 
              
    </div>
   </div>
</body>

</html>






