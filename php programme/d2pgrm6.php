  <?php// PHP program to enter the marks of five subjects and calculate total, average, and percentage$p = 95;$c = 85;$m = 74;$e = 64;$h = 53;$total = NULL;$average = NULL;$percentage = NULL;// Calculate total, average and percentage$total = $p + $c + $m + $e + $h;$average = $total / 5.0;$percentage = ($total / 500.0) * 100;echo "The Total marks   = " . $total . "/500\n";echo "The Average marks = " . $average . "\n";echo "The Percentage    = " . $percentage . "%";?>