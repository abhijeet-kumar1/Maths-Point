<?php session_start(); ?>

<html>

<head>
   <title> PROFIT AND LOSS</title>
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
       <li><a href="https://wordpandit.com/arithmetic-profit-and-loss-test-1/">Practice</a></li>
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

       <img src="https://s17026.pcdn.co/wp-content/uploads/sites/9/2018/10/Profit-and-loss-e1540291678944.jpeg" alt="prof" id="img1" height="400" width="400"
           style="float:right; margin-left: 10px;margin-bottom: 5px; border: solid black 1px;padding: 2px">

       <h1 id="title" style="color:rgb(35, 5, 143);"> PROFIT AND LOSS</h1>
       <p id="discription">
                     Profit and Loss is a topic that is definitely asked in every placement exam. While the questions are not too tricky, some require deeper understanding of concepts, but most of them are based on certain well known formulas.<br/>
       
           -Cost Price (CP) : The price at which an article is purchased. This is the cost of the article incurred to the seller in buying the article for re-selling. <br/>
       <br/>
           -Selling Price (SP) : The price at which the article is sold to the customer/buyer.<br/>
       <br/>
           -Marked Price or List Price (MP) : The price mentioned on the article. <br/>
       <br/>
           -Profit or Gain (P) : The extra money that the seller gets on selling an article.<br/>
            P = SP - CP.<br/>Profit percent = (P / CP) x 100<br/>
      <br/>
           -Loss (L) : The less money a seller gets on selling an article.
          <br/> L = CP - SP<br/>
          Loss percent = (L / CP) x 100.<br/>
      <br/>-Discount (D) : The reduction in price offered by the seller is called discount.
        <br/>D = MP – SP
      <br/>Discount percent = (D / MP) x 100<br/>
    <br/>-Profit or Loss is always calculated on the cost price. Discount is calculated on marked price or list price.<br/>
  <br/>-If two articles are sold at the same selling price, one at a gain of A% and one at the loss of A%, then the seller always incurs a percentage loss of (A / 10) to the power 2.<br/>
<br/>-If a seller claims to sell at cost price but uses false weights, then
Profit percent = [ (True Value – Given Value) / Given Value ] x 100 %
<br/>

      

      
           <h3>Profit and Loss Basic Concepts:</h3>
          1. One can generate a profit only if Selling Price> Cost Price<br/>
          2. One generates a loss when Selling Price < Cost Price.<br/>
          3. Profit = Selling Price – Cost Price<br/>
          % Profit = [{(Selling Price -Cost Price)/Cost Price} x 100]<br/>
          4. Loss = Cost Price – Selling Price<br/>
          % Loss = [{(Cost Price-Selling Price)/Cost Price} x 100]<br/>
          <br/><br/><br/>

        <h3>Profit and Loss Multiplying equivalents to figure out the sale price and cost price:</h3>
<h4>Equivalent for Sale Price:</h4>

If there is a profit of P %,<br/>
Cost Price = CP<br/>
Then, SP = {(100+P)/100} x CP<br/>
If there is a loss of L %,<br/>
Cost Price = CP<br/>
Then SP = {(100-L)/100} x CP</>

<h4>Equivalent for Cost Price:</h4>

If there is a profit of P %,<br/>
Cost Price = CP<br/>
Sale price= SP<br/>
Then,<br/>
CP = [{100/(100+P)} x SP]<br/>
If there is a loss of L %,<br/>
Then<br/>
CP =[{100/(100+L)} x SP]<br/>
</p>
    
  </div>
  <h2>Sample Problems:</h2><br/>

       Question 1 : A person buys a pen from a wholesaler at Rs. 10 for 20 pens. He sells those pens at Rs. 10 for 15 pens. Find his profit or loss percent.<br/>
Solution : CP for each pen = 10 / 20 = Rs. 0.50<br/>
SP for each pen = 10 / 15 = Rs. 2 / 3<br/>
Profit = SP – CP = Rs. (2 / 3) – 0.50 = Rs. 1 / 6<br/>
Therefore, profit percent = [ (1/6) / (0.50) ] x 100 = 33.334%<br/><br/>

Question 2 : A dealer incurs a loss of 5 % if he sells an article for Rs. 1805. What price must he sell the article so as to gain 5 % on that article ?<br/>
Solution : Let the cost price of the article be Rs. C<br/>
=> SP = CP – Loss<br/>
=> 1805 = C – 0.05 C<br/>
=> 0.95 C = 1805<br/>
=> C = 1900<br/>
Therefore, to gain 5 %, SP = 1900 + (0.05 x 1900) = 1900 + 95 = Rs. 1995<br/><br/>

Question 3 : If the cost price of an article is 67 % of the selling price, what is the profit percent ?<br/>
Solution : Let the selling price of the article be Rs. S<br/>
=> Cost price of the article = 67 % of S = 0.67 S<br/>
=> Profit = SP – CP = 0.33 S<br/>
Therefore, profit percent = (0.33 S / 0.67 S) x 100 = 49.25 %<br/><br/>

Question 4 : A shopkeeper purchased two varieties of rice, 80 KG at Rs. 13.50 per KG and 120 KG at Rs. 16 per KG. The shopkeeper being greedy, mixed the two varieties of rice and sold the mixture at a gain of 16 %. Find the per KG selling price of the mixture.<br/>
Solution : We are given that the shopkeeper bought 80 Kg at Rs. 13.50 per KG and 120 KG at Rs. 16 per KG.<br/>
=> Total cost price = (80 x 13.50) + (120 x 16) = 1080 + 1920 = Rs. 3000 and total rice = 80 + 120 = 200 KG<br/>
Now, total selling price = Total cost price + 16 % of total cost price<br/>
=> Total selling price = 3000 + (0.16 x 3000) = Rs. 3480<br/>
Thus, selling price per KG = 3480 / 200 = Rs. 17.40<br/><br/>
   </div>
</body>

</html>
