<?php session_start(); ?>

<html>

<head>
   <title>MATRIX</title>
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
       <li><a href="https://www.hitbullseye.com/Probability-Problems.php">Practice</a></li>
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

       <img src="http://i.imgur.com/ZNhsLa2.jpg" id="img1" height="400" width="400"
           style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">

       <h1 id="title" style="color:rgb(35, 5, 143);">MATRIX</h1>
       <p id="discription">
                     <p style="position: relative; left:15px;">
                   In mathematics, a matrix is a rectangular array of numbers, symbols, or expressions, arranged in rows and columns.For example, the dimensions of the matrix below are 2 × 3 (read "two by three"), because there are two rows and three columns:<br/>
                 
                      
                     <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d16330f5f99566fa754114ff04cd176d6185c796" alt="prob" style="position: relative; left:30px;"><br/>
                     <br/>
       
           Provided that they have the same size (each matrix has the same number of rows and the same number of columns as the other), two matrices can be added or subtracted element by element (see Conformable matrix). The rule for matrix multiplication, however, is that two matrices can be multiplied only when the number of columns in the first equals the number of rows in the second (i.e., the inner dimensions are the same, n for an (m×n)-matrix times an (n×p)-matrix, resulting in an (m×p)-matrix. There is no product the other way round, a first hint that matrix multiplication is not commutative. Any matrix can be multiplied element-wise by a scalar from its associated field. <br/>
           <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Matrix.svg/800px-Matrix.svg.png" alt="prob" height="300" width="300" style="position: relative; left:30px;"></p>
       <br/>
           <h3>Notation:</h3><br/>

 <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/599e7d283086f53898bbe2c0f48b6cfcdcda019e" alt="matrix "style="position: relative; left:30px;"><br/>

 <p style="position: relative; left:15px;">
The specifics of symbolic matrix notation vary widely, with some prevailing trends. Matrices are usually symbolized using upper-case letters (such as A in the examples above), while the corresponding lower-case letters, with two subscript indices (for example, a11, or a1,1), represent the entries. In addition to using upper-case letters to symbolize matrices, many authors use a special typographical style, commonly boldface upright (non-italic), to further distinguish matrices from other mathematical objects. An alternative notation involves the use of a double-underline with the variable name, with or without boldface style, (for example, {\displaystyle {\underline {\underline {A}}}} {\underline {\underline {A}}}).<br/><br/>

The entry in the i-th row and j-th column of a matrix A is sometimes referred to as the i,j, (i,j), or (i,j)th entry of the matrix, and most commonly denoted as ai,j, or aij. Alternative notations for that entry are A[i,j] or Ai,j. For example, the (1,3) entry of the following matrix A is 5 (also denoted a13, a1,3, A[1,3] or A1,3):<br/>
<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f9d58776afc906466b6163beaf584405eaf7a97f" alt="matrix "style="position: relative; left:30px;"><br/>

Sometimes, the entries of a matrix can be defined by a formula such as ai,j = f(i, j). For example, each of the entries of the following matrix A is determined by aij = i − j.<br/>
<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f9d58776afc906466b6163beaf584405eaf7a97f" alt="matrix "style="position: relative; left:30px;">
<br/>
In this case, the matrix itself is sometimes defined by that formula, within square brackets or double parentheses. For example, the matrix above is defined as A = [i-j], or A = ((i-j)). If matrix size is m × n, the above-mentioned formula f(i, j) is valid for any i = 1, ..., m and any j = 1, ..., n. This can be either specified separately, or using m × n as a subscript. For instance, the matrix A above is 3 × 4 and can be defined as A = [i − j] (i = 1, 2, 3; j = 1, ..., 4), or A = [i − j]3×4.<br/></p>

<br/>
<img src="https://farm1.staticflickr.com/698/23054781706_9038119c6b_o.png" style="position: relative; left:50px;"><br/>
<br/>

      

  <h2>Sample Problems:</h2><br/>
  <img src="https://farm1.staticflickr.com/634/22462500624_cc2146089b_o.jpg" style="position: relative; left:50px;"><br/>
  <img src="https://farm1.staticflickr.com/646/22462500464_1e768ff9fc_o.jpg" style="position: relative; left:50px;"><br/>
  <img src="https://farm1.staticflickr.com/684/22666891718_f298a9e1dd_o.jpg" style="position: relative; left:50px;"><br/>
    <img src="https://farm6.staticflickr.com/5726/22693020949_a0541c8391_o.jpg" style="position: relative; left:50px;"><br/>
<img src="https://farm6.staticflickr.com/5663/23059231946_41788c7e6d_o.jpg" style="position: relative; left:50px;"><br/>
<img src="https://farm1.staticflickr.com/566/22462499794_20a6a7a848_o.jpg" style="position: relative; left:50px;"><br/>
<img src="https://farm1.staticflickr.com/601/23059231576_b9a4db873a_o.jpg" style="position: relative; left:50px;"><br/>
<img src="https://farm1.staticflickr.com/745/22693020409_2c2f747836_o.jpg" style="position: relative; left:50px;"><br/>


 

</div>

   </div>
</body>

</html>



