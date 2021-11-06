<!DOCTYPE html>
<html>
<title>Nomor 3</title>
<?php
  echo "MENCARI BILANGAN PRIMA RENTANG ANTARA 1 - 50 <br><br>";
  for($x=1;$x<=50;$x++){
    $test = 0;
      for($y=1;$y<=$x;$y++){
        if($x%$y==0){
          $test++;
        }
      }
      if($test==2){
        echo "<b>$x</b>".' ';
      }
      else{
        echo "$x".' ';
      }
  }
  echo "<br><br>";

  $hitung = 0;
  for($i=1;$i<=50;$i++){
    $temp = 0;
      for($j=1;$j<=$i;$j++){
        if($i%$j==0){
          $temp++;
        }
      }
      if($temp==2){
        $hitung++;
        echo "Hasil $hitung : ".$i."<br>";
      }
  }
  echo "<br> Total banyak bilangan prima : $hitung";
?>
</html>
