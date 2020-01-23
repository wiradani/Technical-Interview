<html>
   
   <head>
      <title>Problem 1</title>
   </head>
   
   <body>
      <?php

    require "problem.php";
         
    $solution = "";
    $arr = array(array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), 
                 array(0, 8, 4, 1, 1, 1, 1, 1, 1, 20, 20, 20, 20, 1, 1, 3, 2, 1), 
                 array(4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3), 
                 array(4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3),
                 array(4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 1, 2, 3),
                 array(4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8, 43, 0, 1, 2, 3 ),
                 array(4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8, 9, 20, 22, 2, 3),
                 array(4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 32, 2, 3),
                 array(4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8, 23, 9, 8, 54, 3),
                 array(4, 5, 6, 7, 8, 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,0 ,20 ,2 ,69), 
                 array(89, 5, 6, 7, 8, 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,0 ,32 ,2 ,3),
                 array(4, 5, 6, 7, 8, 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,0 ,1 ,2 ,3),
                 array(4, 5, 6, 7, 8, 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,0 ,1 ,2 ,3),
                 array(4, 5, 6, 7, 8, 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,0 ,1 ,2 ,3),
                 array(4, 5, 6, 7, 8, 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,0 ,1 ,2 ,3),
                 array(4, 5, 6, 7, 8, 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,0 ,1 ,2 ,3),
                 array(4, 5, 6, 7, 8, 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,0 ,1 ,2 ,3), 
                 array(4, 5, 6, 7, 8, 1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,0 ,1 ,2 ,3));

     
                 
    $problem1 = new Problem;
    $problem1->set_name('New Problem 1');
    $solution = $problem1->findGreatestProduct($arr);
         
         
        
      ?>
    <h2>Technical Interview - Solution</h1>
    <h3>Problem 1</h2>
    <p>
    Terdapat sebuah perkalian terbesar diantara 4 elemen matriks yang berurutan (ke atas, ke bawah, ke kanan, ke kiri, atau secara diagonal). 
    Input matrix sebagai berikut:
   </p>
      
   <img src="src/prob1Input.png">

      <?php
         echo "<h2>Output :</h2>";
         
         echo $solution;
         echo "<br>";
         
        
         
        
      ?>
      
   </body>
</html>