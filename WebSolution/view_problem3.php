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
      
      <p>
      Buatlah sebuah function sumOfPowerDigit yang terdiri dari 2 buah parameter, n dan x. n>0 dan x >0, n,x = integer. 
      Fungsi ini akan menjumlahkan masing-masing digit hasil pangkat bilangan n sesuai dengan nilai variabel x yang dimasukkan ke dalam function tersebut.
      </p>

      <p>contoh 1: </p>
      <p>n = 2, x = 20 </p>
      <p>Output: 31 (2^20 = 1.048.576 = (1+0+4+8+5+7+6) = 31)</p>

      
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