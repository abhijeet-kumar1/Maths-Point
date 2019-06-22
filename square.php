
<?php session_start(); ?>
<html>

<head>
  <title> SQUARES</title>
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
            left: 850px;
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

      <img src="http://www.clker.com/cliparts/a/0/3/a/11949893812045379220pattern-squares-angled-1.svg.med.png"  id="img1" height="400" width="400"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">

      <h1 id="title" style="color:rgb(35, 5, 143);"> SQUARES</h1>
   
          <p  id="discription" style="text-decoration-line: underline;font-weight: bold;">  CHARACTERISATION:</p>
          <p id="discription">
           A convex quadrilateral is a square if and only if it is any one of the following:<br/>
          
           -a rectangle with two adjacent equal sides<br/>
       <br/>
           -a rhombus with a right vertex angle<br/>
       <br/>
           -a rhombus with all angles equal<br/>
       <br/>
           -a parallelogram with one right vertex angle and two adjacent equal sides<br/>
       <br/>
           -a quadrilateral with four equal sides and four right angles<br/>
       <br/>
           -a quadrilateral where the diagonals are equal and are the perpendicular bisectors of each other, <br/>
           i.e. a rhombus with equal diagonals<br/>
       <br/>
           -a convex quadrilateral with successive sides a, b, c, d <br/>
           whose area is A= {1}/{2}(a^{2}+c^{2})={1}{2}}(b^{2}+d^{2})} A=(a^{2}+c^{2})=(b^{2}+d^{2}).<br/>
      </p>

      <p id="discription">
            <p  id="discription" style="text-decoration-line: underline;font-weight: bold;">PROPERTIES:</p>
           A square is a special case of a rhombus (equal sides, opposite equal angles),<br/>
           a kite (two pairs of adjacent equal sides), a trapezoid (one pair of opposite sides parallel),<br/>
           a parallelogram (all opposite sides parallel), a quadrilateral or tetragon (four-sided polygon), <br/>
           and a rectangle (opposite sides equal, right-angles) and therefore has all the properties of all these shapes, namely:<br/>
       <br/>
          - The diagonals of a square bisect each other and meet at 90°<br/>
          - The diagonals of a square bisect its angles.<br/>
          - Opposite sides of a square are both parallel and equal in length.<br/>
          - All four angles of a square are equal. (Each is 360°/4 = 90°, so every angle of a square is a right angle.)<br/>
          - All four sides of a square are equal.<br/>
          - The diagonals of a square are equal.<br/>
          - The square is the n=2 case of the families of n-hypercubes and n-orthoplexes.<br/>
          - A square has Schläfli symbol {4}. A truncated square, t{4}, is an octagon. An alternated square, h{4}, is a digon.<br/>
      </p>
    
  </div>

  <div class="Content">

      <h3 style="color:rgb(30, 179, 45);">PERIMETER AND AREA</h3>
  </div>

  <div id="discription">
   
      <p id="discription">
           The perimeter of a square whose four sides have length L is:<br/>
           <p style="text-decoration-line: underline;font-weight: bold;">  P=4*L</p><br/>
           And the area A is<br/>
              <p style="text-decoration-line: underline;font-weight: bold;">    A= ^{2}</p><br/>
           In classical times, the second power was described in terms of the area of a square, as in the above formula.<br/>
            This led to the use of the term square to mean raising to the second power.<br/>
           <br/>
           The area can also be calculated using the diagonal d according to<br/>
      
       <p style="text-decoration-line: underline;font-weight: bold;">A={d^{2}}{2}}</p><br/>
           In terms of the circumradius R, the area of a square is<br/>
     <p style="text-decoration-line: underline;font-weight: bold;">
           A=2R^{2} </p><br/>
           since the area of the circle is pi R^{2},} \pi R^{2}, the square fills approximately 0.6366 of its circumscribed circle.<br/>
          
           In terms of the inradius r, the area of the square is<br/>
            A=4r^{2}.<br/>
           Because it is a regular polygon, a square is the quadrilateral of least perimeter enclosing a given area. Dually,.<br/>
       <br/>
           a square is the quadrilateral containing the largest area within a given perimeter..<br/>
       <br/>
           Indeed, if A and P are the area and perimeter enclosed by a quadrilateral, then the following isoperimetric inequality holds:<br/>
          
           P^{2}<br/>
           with equality if and only if the quadrilateral is a square.<br/>
          
</p>
   </div>
</body>

</html>





