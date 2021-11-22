<?php
   
   function sum(int ...$ints) {
      return array_sum($ints);
   }
   print(sum(2, '3', 4.1));
?>






<!-- strict type -->
<?php
   
   declare(strict_types = 1);
   function sum1(int ...$ints) {
      return array_sum($ints);
   }
   print(sum1(2, '3', 4.1));
?>