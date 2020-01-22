<html>
   
   <head>
      <title>Problem 2</title>
   </head>
   
   <body>
      <?php

    require "problem.php";
         
    $sum = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr = $_POST["array"];
           
            
            $problem2 = new Problem;
            $problem2->set_name('New Problem 2');
            $solution = $problem3->sumOfPowerDigit($n,$x);
         }
         
        
      ?>
    <h2>Technical Interview - Solution</h1>
    <h3>Problem 2</h2>
      
      
      <form method = "post" action = "view_problem3.php">
         <table>
            <tr>
               <td>array value:</td> 
               <td><input type = "text" name = "array"></td>
            </tr>
             
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>
      
      <?php
         echo "<h2>Output :</h2>";
         
         echo $sum;
         echo "<br>";
         
        
         
        
      ?>
      
   </body>
</html>