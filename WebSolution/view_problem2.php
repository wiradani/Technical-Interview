<html>
   
   <head>
      <title>Problem 2</title>
   </head>
   
   <body>
      <?php

    require "problem.php";

       
   $solution = "";
         
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr = $_POST["input"];
            

            $problem2 = new Problem;
            $problem2->set_name('New Problem 2');
            $problem2->set_input($arr);
           $solution = $problem2->findCrashPlace($problem2->get_input());
            
            
        }
        
        

         
        
      ?>
      <a href="index.php">Back to index</a>
    <h2>Technical Interview - Solution</h1>
    <h3>Problem 2</h2>

    <p>
    Terdapat papan catur yang ditempati oleh 8 buah bidak ratu secara acak. Pergerakan bidak ratu bisa mendatar ke kiri, kanan, atas, bawah, diagonal kanan kiri atas, maupun diagonal kanan kiri bawah.
    Buatlah sebuah function findCrashPlace() yang berfungsi untuk mencari bidak mana saja yang akan memakan bidak lainnya dimulai dari POJOK KIRI BAWAH. Jika tidak ditemukan bidak ratu yang saling memakan maka berikan return string "tidak ditemukan". Bentuk input adalah sebuah array koordinat dengan susunan koordinat (baris,kolom)
   </p>

   <p>
   Contoh input : array("(1,2)", "(2,5)", "(3,7)", "(4,4)", "(5,1)", "(6,8)", "(7,6)", "(8,3)")
   </p>
   
   <img src="src/prob2Visual.png">

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