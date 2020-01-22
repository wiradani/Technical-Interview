<html>
   
   <head>
      <title>Problem 2</title>
   </head>
   
   <body>
      <?php

    require "problem.php";

       

         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr = $_POST["input"];
            

            $problem2 = new Problem;
            $problem2->set_name('New Problem 2');
            $problem2->set_input($arr);
           $solution = $problem2->findCrashPlace($problem2->get_input());
            
            
        }
        
        

         
        
      ?>
    <h2>Technical Interview - Solution</h1>
    <h3>Problem 2</h2>
      
      
      <form method = "post" action = "view_problem2.php">
         <table>
            <tr>
               <td>array value:</td> 
               <td><input type = "text" name = "input"></td>
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
         echo $solution; 
         echo "<br>";
         
        
         
        
      ?>
      
   </body>
</html>