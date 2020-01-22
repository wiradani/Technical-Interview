<html>
   
   <head>
      <title>Problem 3</title>
   </head>
   
   <body>
      <?php

    require "problem.php";
         
    $sum = "";

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = $_POST["n"];
            $x = $_POST["x"];
            
            $problem3 = new Problem;
            $problem3->set_name('New Problem 3');
            $sum = $problem3->sumOfPowerDigit($n,$x);
         }
         
        
      ?>
    <h2>Technical Interview - Solution</h1>
    <h3>Problem 3</h2>
      
      
      <form method = "post" action = "view_problem3.php">
         <table>
            <tr>
               <td>N value:</td> 
               <td><input type = "text" name = "n"></td>
            </tr>
            
            <tr>
               <td>X value:</td>
               <td><input type = "text" name = "x"></td>
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