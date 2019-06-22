<?php session_start(); ?>

<html>

<head>
   <title>PROBABILITY</title>
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

       <img src="https://miro.medium.com/max/876/1*0vMsUMx-xY6V7IFoCj8oJA.png" id="img1" height="400" width="400"
           style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">

       <h1 id="title" style="color:rgb(35, 5, 143);">PROBABILITY</h1>
       <p id="discription">
                     Probability is the measure of the likelihood that an event will occur.  Probability quantifies as a number between 0 and 1, where, loosely speaking, 0 indicates impossibility and 1 indicates certainty. The higher the probability of an event, the more likely it is that the event will occur. A simple example is the tossing of a fair (unbiased) coin. Since the coin is fair, the two outcomes ("heads" and "tails") are both equally probable; the probability of "heads" equals the probability of "tails"; and since no other outcomes are possible, the probability of either "heads" or "tails" is 1/2 (which could also be written as 0.5 or 50%)<br/><br/>
       
           Probability =   (the number of ways of achieving success)/
   (the total number of possible outcomes) <br/>
       <br/>
           <h2>Multiple Events:</h2><br/>

<h3>Independent and Dependent Events</h3><br/>

Suppose now we consider the probability of 2 events happening. For example, we might throw 2 dice and consider the probability that both are 6's.<br/>

We call two events independent if the outcome of one of the events doesn't affect the outcome of another. For example, if we throw two dice, the probability of getting a 6 on the second die is the same, no matter what we get with the first one- it's still 1/6.<br/>

On the other hand, suppose we have a bag containing 2 red and 2 blue balls. If we pick 2 balls out of the bag, the probability that the second is blue depends upon what the colour of the first ball picked was. If the first ball was blue, there will be 1 blue and 2 red balls in the bag when we pick the second ball. So the probability of getting a blue is 1/3. However, if the first ball was red, there will be 1 red and 2 blue balls left so the probability the second ball is blue is 2/3. When the probability of one event depends on another, the events are dependent.<br/>
      
  <h3>Possibility Spaces</h3><br/>

When working out what the probability of two things happening is, a probability/ possibility space can be drawn. <br/> For example, if you throw two dice, what is the probability that you will get: a) 8, b) 9, c) either 8 or 9?<br/>
<img src="https://revisionworld.com/sites/revisionworld.com/files/imce/probability.gif" alt="prob" style="position: relative; left:10px;"><br/>
 a) The black blobs indicate the ways of getting 8 (a 2 and a 6, a 3 and a 5, ...). There are 5 different ways. The probability space shows us that when throwing 2 dice, there are 36 different possibilities (36 squares). With 5 of these possibilities, you will get 8. Therefore P(8) = 5/36 .<br/>
b) The red blobs indicate the ways of getting 9. There are four ways, therefore P(9) = 4/36 = 1/9.<br/>
c) You will get an 8 or 9 in any of the 'blobbed' squares. There are 9 altogether, so P(8 or 9) = 9/36 = 1/4 .<br/>
      
          </p></div>
  <h2>Sample Problems:</h2><br/>

       Example 1: What is the probability of getting a 2 or a 5 when a die is rolled?<br/>

Solution:<br/>

Taking the individual probabilities of each number, getting a 2 is 1/6 and so is getting a 5.<br/>

Applying the formula of compound probability,<br/>

Probability of getting a 2 or a 5,<br/>

P(2 or 5) = P(2) + P(5) – P(2 and 5)<br/>

==>      1/6 + 1/6 – 0<br/>

==>      2/6 = 1/3.<br/><br/>

Example 2: Consider the example of finding the probability of selecting a black card or a 6 from a deck of 52 cards.<br/>

Solution:<br/>

We need to find out P(B or 6)<br/>

Probability of selecting a black card  = 26/52<br/>

Probability of selecting a 6                 = 4/52<br/>

Probability of selecting both a black card and a 6 = 2/52<br/>

P(B or 6)          = P(B) + P(6) – P(B and 6)<br/>

= 26/52 + 4/52 – 2/52<br/>

= 28/52<br/>

= 7/13.<br/><br/>

<div>
   <img src="http://tradeprobability.com/wp-content/uploads/2013/03/business_enterprise_185779-1024x732.jpg" height="300" width="300"
           style="float:right; padding: 2px">

Example 3: Say, a coin is tossed twice. What is the probability of getting two consecutive tails ?<br/>

Solution:<br/>

Probability of getting a tail in one toss = 1/2<br/>

The coin is tossed twice. So 1/2 * 1/2 = 1/4 is the answer.<br/>

Here’s the verification of the above answer with the help of sample space.<br/>

When a coin is tossed twice, the sample space is {(H,H), (H,T), (T,H), (T,T)}.<br/>

Our desired event is (T,T) whose occurrence is only once out of four possible outcomes and hence, our answer is 1/4.<br/>
</div>
<br/><br/>

<div>
   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiU21Q1zCRA_XchQe_prFp4Y4yVOm5UdN1jrkGGqqJBEnqYC7PKQ" height="300" width="300"
           style="float:right; padding: 2px">
Example 4: Consider another example where a pack contains 4 blue, 2 red and 3 black pens. If a pen is drawn at random from the pack, replaced and the process repeated 2 more times, What is the probability of drawing 2 blue pens and 1 black pen?<br/>

Solution<br/>

Here, total number of pens = 9<br/>

Probability of drawing 1 blue pen = 4/9<br/>
Probability of drawing another blue pen = 4/9<br/>
Probability of drawing 1 black pen = 3/9<br/>
Probability of drawing 2 blue pens and 1 black pen = 4/9 * 4/9 * 3/9 = 48/729 = 16/243<br/>

</div>

   </div>
</body>

</html>



