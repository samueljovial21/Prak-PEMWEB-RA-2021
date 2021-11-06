<!DOCTYPE html>
<html>
<title>Nomor 2</title>
  <?php
    $data = array("larine","aduh","qifuat","toda","anevi","samid","kifuat");
    echo "BENTUK LIST AWAL";
    echo "<br>";
    foreach ($data as $list) {
      echo $list;
      echo "<br>";
    }
    echo "<br><br>";
    sort($data);
    echo "BENTUK LIST AKHIR";
    echo "<br>";
    foreach ($data as $list) {
      echo $list;
      echo "<br>";
    }
  ?>
</html>
