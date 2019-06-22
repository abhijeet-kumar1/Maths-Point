<?php session_start(); ?>

<html>

<head>
  <title>CALCULAS</title>
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

      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4MNWAUUBLD0SrgXBEpI6m4saJjVK0inntYMm-7AHi9Ou3XoLeYA" alt="triangle-1" id="img1" height="400" width="400"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">

      <h1 id="title" style="color:rgb(35, 5, 143);"> CALCULAS</h1>
      <p id="discription">
          A triangle is a polygon with three edges and three vertices. It is one of the basic shapes in geometry. <br/>
       <br/>
          A Calculus (from Latin calculus, literally 'small pebble', used for counting and calculations, <br/>
          as on an abacus) is the mathematical study of continuous change, <br/>
          in the same way that geometry is the study of shape and algebra is the study of generalizations of arithmetic operations.<br/>
       <br/>
          It has two major branches, differential calculus (concerning instantaneous rates of change and slopes of curves), and integral calculus (concerning accumulation of quantities and the areas under and between curves).<br/>
          These two branches are related to each other by the fundamental theorem of calculus. Both branches make use of the fundamental notions of convergence of infinite sequences and infinite series to a well-defined limit.<br/>
         
          Modern calculus was developed independently in the late 17th century by Isaac Newton and Gottfried Wilhelm Leibniz.<br/>
          Today, calculus has widespread uses in science, engineering, and economics.[better source needed]<br/>
       <br/>
          Calculus is a part of modern mathematics education. A course in calculus is a gateway to other, more advanced courses in mathematics devoted to the study of functions and limits, broadly called mathematical analysis.<br/>
          Calculus has historically been called "the calculus of infinitesimals", or "infinitesimal calculus". The term calculus (plural calculi) is also used for naming specific methods of calculation or notation as well as some theories,<br/>
           such as propositional calculus, Ricci calculus, calculus of variations, lambda calculus, and process calculus.<br/>
      </p>

    
  </div>

  <div class="Content">

      <h3 style="color:rgb(30, 179, 45);">PRINCIPLES</h3>
  </div>

  <div id="discription">
   
      <p id="discription">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Tangent_derivative_calculusdia.svg/450px-Tangent_derivative_calculusdia.svg.png" alt="triangle-1" id="img1" height="300" width="400"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">
<p style="text-decoration-line: underline;font-weight: bold;">DIFFERENTIAL CALCULAS:</p>
Differential calculus is the study of the definition, properties, and applications of the derivative of a function. <br/>
The process of finding the derivative is called differentiation. <br/>
Given a function and a point in the domain, the derivative at that point is a way of encoding the small-scale behavior of the function near that point.<br/>
<br/>
By finding the derivative of a function at every point in its domain, it is possible to produce a new function, called the derivative function or just the derivative of the original function.<br/>
In formal terms, the derivative is a linear operator which takes a function as its input and produces a second function as its output.<br/>
This is more abstract than many of the processes studied in elementary algebra, where functions usually input a number and output another number.<br/>
<br/>
For example, if the doubling function is given the input three, then it outputs six, and if the squaring function is given the input three, then it outputs nine.<br/>
The derivative, however, can take the squaring function as an input. <br/>
This means that the derivative takes all the information of the squaring function—such as that two is sent to four, three is sent to nine,<br/>
four is sent to sixteen, and so on—and uses this information to produce another function. <br/>
The function produced by deriving the squaring function turns out to be the doubling function.<br/>
</p>
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Sec2tan.gif/450px-Sec2tan.gif" alt="triangle-1" id="img1" height="300" width="400"
style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">
<img src="https://sbook9.files.wordpress.com/2017/01/differentiation-formulas-of-calculus.jpg?w=255&h=232" alt="triangle-1" id="img1" height="400" width="500"
            style="position:absolute;left:200px;">
        
       
  <br/><br/><br/><br/><br/><br/>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>
 
 
<p style="text-decoration-line: underline;font-weight: bold;">Integral calculus:</p>

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Integral_as_region_under_curve.svg/1024px-Integral_as_region_under_curve.svg.png" alt="triangle-1" id="img1" height="400" width="400"
style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">
<p  id="discription">

       Integral calculus is the study of the definitions, properties, and applications of two related concepts, the indefinite integral and the definite integral. <br/>
       The process of finding the value of an integral is called integration. In technical language, integral calculus studies two related linear operators.<br/>
   <br/>
       The indefinite integral, also known as the antiderivative, is the inverse operation to the derivative. <br/>
       F is an indefinite integral of f when f is a derivative of F. <br/>
       (This use of lower- and upper-case letters for a function and its indefinite integral is common in calculus.)<br/>
   <br/>
       The definite integral inputs a function and outputs a number, which gives the algebraic sum of areas between the graph of the input and the x-axis. <br/>
       The technical definition of the definite integral involves the limit of a sum of areas of rectangles, called a Riemann sum.<br/>
   <br/>
       A motivating example is the distances traveled in a given time.<br/>
  
     <br/><p style="text-decoration-line: underline;">{Distance} = {Speed}*{Time}</p>  <br/>
  
       If the speed is constant, only multiplication is needed, but if the speed changes, a more powerful method of finding the distance is necessary. <br/>
       One such method is to approximate the distance traveled by breaking up the time into many short intervals of time, then multiplying the time elapsed in each interval by one of the speeds in that interval, <br/>
       and then taking the sum (a Riemann sum) of the approximate distance traveled in each interval. <br/>
   <br/>
       The basic idea is that if only a short time elapses, then the speed will stay more or less the same. However, <br/>
       a Riemann sum only gives an approximation of the distance traveled.<br/>
        We must take the limit of all such Riemann sums to find the exact distance traveled.<br/>
              
    </div>
   </div>
   <div class="Content">

           <h3 style="color:rgb(158, 32, 9);">BASIC FORMULAS:-</h3>
       </div>
       <img src="https://i.pinimg.com/originals/68/08/fe/6808feb13a70e0d27756a82c092f1d73.gif" alt="triangle-1" id="img1" height="800" width="600"
            style="position:absolute;left:400px;">
</body>

</html>





