<?php session_start(); ?>
<html>

<head>
  <title>SET THEORY </title>
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

      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Venn_A_intersect_B.svg/1200px-Venn_A_intersect_B.svg.png" id="img1" height="400" width="500"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">

      <h1 id="title" style="color:rgb(35, 5, 143);">SET THEORY </h1>
      <p id="discription">
           In mathematics, a set is a collection of distinct objects, considered as an object
          in its own right. 
        For example, the numbers 2, 4, and 6 are distinct objects when considered separately,<br/>
           But when they are considered collectively they form a single set of size three, written{2,4,6}.<br/>
           <br/>
           He concept of a set is one of the most fundamental in mathematics. Developed at the end of the 19th century,<br/> 
           Set theory is now a ubiquitous part of mathematics, and can be used as a foundation from which nearly all of mathematics can be derived.<br/> 
           In mathematics education, elementary topics from set theory such as Venn diagrams are taught at a young age, <br/>
           while more advanced concepts are taught as part of a university degree.<br/>

      </p>

      <p id="discription">
     Sets are conventionally denoted with capital letters.<br/>v 
     Sets A and B are equal if and only if they have precisely the same elements.<br/>
<br/>
For technical reasons, Cantor's definition turned out to be inadequate; <br/>
today, in contexts where more rigor is required, one can use axiomatic set theory,<br/>
 in which the notion of a "set" is taken as a primitive notion and the properties of sets are<br/>
 <br/>
defined by a collection of axioms. The most basic properties are that a set can have elements,<br/>
 and that two sets are equal (one and the same) if and only if every element of each set is an element of the other;<br/>
  this property is called the extensionality of sets.<br/>
      <br/>
    </p>
  <div class="Content">

      <h3 style="color:rgb(30, 179, 45);">Basic operations</h3>
  </div>

<p style="text-decoration-line: underline;font-weight: bold;">UNIONS</p>
  <div id="discription">
   
      <p id="discription">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Venn0111.svg/1024px-Venn0111.svg.png" id="img1" height="400" width="400"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">
<p >
  Two sets can be "added" together. The union of A and B, denoted by A ∪ B,<br/> 
  is the set of all things that are members of either A or B.<br/>

Examples:<br/>

{1, 2} ∪ {1, 2} = {1, 2}.<br/>
{1, 2} ∪ {2, 3} = {1, 2, 3}.<br/>
{1, 2, 3} ∪ {3, 4, 5} = {1, 2, 3, 4, 5}<br/>
Some basic properties of unions:<br/>

A ∪ B = B ∪ A.<br/>
A ∪ (B ∪ C) = (A ∪ B) ∪ C.<br/>
A ⊆ (A ∪ B).<br/>
A ∪ A = A.<br/>
A ∪ U = U.<br/>
A ∪ ∅ = A.<br/>
A ⊆ B if and only if A ∪ B = B<br/>

<br/>
</p>

</p>
 
 
<p style="text-decoration-line: underline;font-weight: bold;">INTERSECTION</p>
<p id= "discription">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Venn0001.svg/1024px-Venn0001.svg.png" id="img1" height="400" width="400"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">
  A new set can also be constructed by determining which members two sets have "in common". <br/>
  The intersection of A and B, denoted by A ∩ B, is the set of all things that are members of both A and B. <br/>
  If A ∩ B = ∅, then A and B are said to be disjoint.<br/>

<br/>
The intersection of A and B, denoted A ∩ B.<br/>
Examples:<br/>

{1, 2} ∩ {1, 2} = {1, 2}.<br/>
{1, 2} ∩ {2, 3} = {2}.<br/>
Some basic properties of intersections:<br/>

A ∩ B = B ∩ A.<br/>
A ∩ (B ∩ C) = (A ∩ B) ∩ C.<br/>
A ∩ B ⊆ A.<br/>
A ∩ A = A.<br/>
A ∩ U = A.<br/>
A ∩ ∅ = ∅.<br/>
A ⊆ B if and only if A ∩ B = A.<br/>

</p>
<p style="text-decoration-line: underline;font-weight: bold;">COMPLIMENTS</p>
<p id= "discription">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Venn0100.svg/1024px-Venn0100.svg.png" id="img1" height="400" width="400"
          style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">
          Two sets can also be "subtracted". The relative complement of B in A (also called the set-theoretic difference of A and B),<br/>
           denoted by A \ B (or A − B), is the set of all elements that are members of A but not members of B. <br/>
           Note that it is valid to "subtract" members of a set that are not in the set, <br/>
           such as removing the element green from the set {1, 2, 3}; doing so has no effect.<br/>
<br/>
In certain settings all sets under discussion are considered to be subsets of a given universal set U. <br/>
In such cases, U \ A is called the absolute complement or simply complement of A, and is denoted by A′.<br/>
<br/>
A′ = U \ A<br/>
 Examples:<br/>
<br/>
{1, 2} \ {1, 2} = ∅.<br/>
{1, 2, 3, 4} \ {1, 3} = {2, 4}.<br/>
If U is the set of integers, E is the set of even integers, and O is the set of odd integers, then U \ E = E′ = O.<br/> 
Some basic properties of complements:<br/>
<br/>
A \ B ≠ B \ A for A ≠ B.<br/>
A ∪ A′ = U.<br/>
A ∩ A′ = ∅.<br/>
(A′)′ = A.<br/>
∅ \ A = ∅.<br/>
A \ ∅ = A.<br/>
A \ A = ∅.<br/>
A \ U = ∅.<br/>
A \ A′ = A and A′ \ A = A′.<br/>
U′ = ∅ and ∅′ = U.<br/>
A \ B = A ∩ B′.<br/>
if A ⊆ B then A \ B = ∅.<br/>
An extension of the complement is the symmetric Ådifference, defined for sets A, B as<br/>
<br/>
For example, the symmetric difference of {7, 8, 9, 10} and {9, 10, 11, 12} is the set {7, 8, 11, 12}. <br/>
The power set of any set becomes a Boolean ring with symmetric difference as the addition of the ring (with the empty set as neutral element) <br/>
and intersection as the multiplication of the ring.<br/>
</p>

   </div>
</body>

</html>






