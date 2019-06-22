<?php session_start(); ?>

<html>

<head>
    <title> TRIANGLES</title>
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

        <img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBTRCNT/triangle_count.png" alt="triangle-1" id="img1" height="400" width="400"
            style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">

        <h1 id="title" style="color:rgb(35, 5, 143);"> TRIANGLES</h1>
        <p id="discription">
            A triangle is a polygon with three edges and three vertices. It is one of the basic shapes in geometry. A
            triangle with vertices A, B, and C is denoted triangle ABC.

            In Euclidean geometry any three points, when non-collinear, determine a unique triangle and simultaneously,
            a unique plane (i.e. a two-dimensional Euclidean space). In other words, there is only one plane that
            contains that triangle, and every triangle is contained in some plane. If the entire geometry is only the
            Euclidean plane, there is only one plane and all triangles are contained in it; however, in
            higher-dimensional Euclidean spaces, this is no longer true. This article is about triangles in Euclidean
            geometry, and in particular, the Euclidean plane, except where otherwise noted.
        </p>

        <p id="discription">
            Triangles are assumed to be two-dimensional plane figures, unless the context provides otherwise (see
            Non-planar triangles, below). In rigorous treatments, a triangle is therefore called a 2-simplex .
            Elementary facts about triangles were presented by Euclid in books 1–4 of his Elements, around 300 BC.
        </p>
        <br>
        <br/>
        <p id="discription">
            Course Description: This course is designed to emphasize the study of multiple representations of linear and
            non-linear functions. It includes mathematical concepts for working with rational numbers, various
            expressions, analyzing and solving linear equations & inequalities, data analysis, probability, statistics,
            and polynomials. Students will use hands-on materials and calculators when needed in solving problems where
            the algebra concepts are applied. Students who complete Algebra I should take Geometry next.
        </p>

    </div>

    <div class="Content">

        <h3 style="color:rgb(30, 179, 45);">TYPES OF TRIANGLES</h3>
    </div>

    <div id="discription">

        <p id="discription">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Euler_diagram_of_triangle_types.svg/480px-Euler_diagram_of_triangle_types.svg.png"
                alt="triangle-1" id="img1" height="200" width="400"
                style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">
            <p style="text-decoration-line: underline;font-weight: bold;">BY LENGTH OF SIDES:</p>
            Triangles can be classified according to the lengths of their sides:<br/>
            <br/>
            - An equilateral triangle has all sides the same length. An equilateral triangle is also a<br/>
            regular polygon with all angles measuring 60°.<br/>
            <br/>
            - An isosceles triangle has two sides of equal length.<br/>
            <br/>
            - An isosceles triangle also has two angles of the same measure, namely the angles opposite to<br/>
            the two sides of the same length .<br/>
            <br/>
            - This fact is the content of the isosceles triangle theorem, which was known by Euclid.<br/>
            <br/>
            - Some mathematicians define an isosceles triangle to have exactly two equal sides, whereas<br/>
            others define an isosceles triangle as one with at least two equal sides.<br/>
            <br/>
            - The latter definition would make all equilateral triangles isosceles triangles.<br/>
            <br/>
            - The 45–45–90 right triangle, which appears in the tetrakis square tiling, is isosceles.<br/>
            <br/>
            - A scalene triangle has all its sides of different lengths.Equivalently, it has all angles of different
            measure.<br/>
        </p>

        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Triangle.Equilateral.svg/183px-Triangle.Equilateral.svg.png"
            alt="triangle-1" id="img1" height="200" width="200" style="position:absolute;left:200px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Triangle.Isosceles.svg/800px-Triangle.Isosceles.svg.png"
            alt="triangle-1" id="img1" height="200" width="200" style="position:absolute;left:650px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Triangle.Scalene.svg/1920px-Triangle.Scalene.svg.png"
            alt="triangle-1" id="img1" height="200" width="200" style="position:absolute;left:1090px;">
            
        <p style="position: absolute;left:190px;top:1700;">EQUILATERAL TRIANGLE</p>
        <p style="position: absolute;left:650px;top:1700;">ISOSCELES TRIANGLE</p>
        <p style="position: absolute;left:1100px;top:1700;">SCALENE TRIANGLE</p>

        <br /><br /><br /><br /><br /><br /><br /><br /><br />

        <p style="text-decoration-line: underline;font-weight: bold;">BY INTERNAL ANGLES:</p>
        <p id="discription">
            Triangles can also be classified according to their internal angles, measured here in degrees.<br/>
            <br/>
            -A RIGHT ANGLED TRIANGLE has one of its interior angles measuring 90°.<br/>
            <br/>
            -The side opposite to the right angle is the hypotenuse, the longest side of the triangle.<br/>
            <br/>
            -The other two sides are called the legs or catheti of the triangle.<br/>
            <br/>
            -Right triangles obey the PYTHAGORAS THEOREM: the sum of the squares of the lengths of the two legs is<br/>
            equal to the square of the length of the hypotenuse: a2 + b2 = c2,<br/>
            where a and b are the lengths of the legs and c is the length of the hypotenuse.<br/>
            <br/>
            -Special right triangles are right triangles with additional properties that make calculations involving
            them easier.<br/>
            One of the two most famous is the 3–4–5 right triangle, where 32 + 42 = 52. In this situation, 3, 4, and 5
            are a Pythagorean triple.<br/>
            The other one is an isosceles triangle that has 2 angles that each measure 45 degrees.<br/>
            Triangles that do not have an angle measuring 90° are called oblique triangles.<br/>
            <br/>
            -A triangle with all interior angles measuring less than 90° is an ACUTE ANGLED TRIANGLE.<br/>
            <br/>
            -If c is the length of the longest side, then a2 + b2 &gt; c2, where a and b are the lengths of the other
            sides.<br/>
            <br/>
            -A triangle with one interior angle measuring more than 90° is an obtuse triangle or obtuse-angled
            triangle.<br/>
            <br/>
            If c is the length of the longest side, then a2 + b2 &lt; c2, where a and b are the lengths of the other
            sides.<br/>
            <br/>
            -A triangle with an interior angle of 180° (and collinear vertices) is degenerate.<br/>
            <br/>
            -A right degenerate triangle has collinear vertices, two of which are coincident.<br/>
            <br/>
            -A triangle that has two angles with the same measure also has two sides with the same length, and therefore
            it is an isosceles triangle.<br/>
            <br/>
            -It follows that in a triangle where all angles have the same measure, all three sides have the same length,
            and such a triangle is therefore equilateral.<br/>
        </p>

        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Triangle.Right.svg/225px-Triangle.Right.svg.png"
                alt="triangle-1" id="img1" height="200" width="200" style="position:absolute;left:200px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Triangle.Obtuse.svg/170px-Triangle.Obtuse.svg.png"
                alt="triangle-1" id="img1" height="200" width="200" style="position:absolute;left:650px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Triangle.Acute.svg/272px-Triangle.Acute.svg.png"
                alt="triangle-1" id="img1" height="200" width="200" style="position:absolute;left:1090px;">
            <p style="position: absolute;left:190px;top:3000;">EQUILATERAL TRIANGLE</p>
            <p style="position: absolute;left:650px;top:3000;">ISOSCELES TRIANGLE</p>
            <p style="position: absolute;left:1100px;top:3000;">SCALENE TRIANGLE</p>


        </div>
    </div>
</body>

</html>