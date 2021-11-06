<!DOCTYPE html>
<html>
<title>Nomor 1</title>
<?php
  if(isset($_POST['hasil'])){
    $pertama = $_POST['bilangan1'];
    $kedua = $_POST['bilangan2'];
    $operasi_tambah=tambah($pertama,$kedua);
    $operasi_kurang=kurang($pertama,$kedua);
    $operasi_kali=kali($pertama,$kedua);
    $operasi_bagi=bagi($pertama,$kedua);
    $operasi_modulus=modulus($pertama,$kedua);
  }
  function tambah($x,$y){
    return $x + $y;
  }
  function kurang($x,$y){
    return $x - $y;
  }
  function kali($x,$y){
    return $x * $y;
  }
  function bagi($x,$y){
    return $x / $y;
  }
  function modulus($x,$y){
    return $x % $y;
  }
?>

<form method="post" action="PrakWeb5_No1.php">
  <table>
    <tr>
      <td>Bilangan 1 =</td>
      <td><input type="text" name="bilangan1"></input></td>
    </tr>
    <tr>
      <td>Bilangan 2 =</td>
      <td><input type="text" name="bilangan2"></input></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="hasil"></input></td>
    </tr>
  </table>
</form>
<?php if(isset($_POST['hasil'])){ ?>
  <table>
    <tr>
      <td><br>Berikut merupakan hasil dari setiap operasi</td>
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
      <td>PENJUMLAHAN</td>
    </tr>
    <tr>
      <td>Operator : +</td>
    </tr>
    <tr>
      <td>Hasil : <?php echo $operasi_tambah; ?>
  <?php } ?></td>
    </tr>
  </table>
  <?php if(isset($_POST['hasil'])){ ?>
    <table>
      <tr>
        <td><br>PENGURANGAN</td>
      </tr>
      <tr>
        <td>Operator : -</td>
      </tr>
      <tr>
        <td>Hasil : <?php echo $operasi_kurang; ?>
    <?php } ?></td>
      </tr>
    </table>
  <?php if(isset($_POST['hasil'])){ ?>
    <table>
      <tr>
        <td><br>PERKALIAN</td>
      </tr>
      <tr>
        <td>Operator : *</td>
      </tr>
      <tr>
        <td>Hasil : <?php echo $operasi_kali; ?>
    <?php } ?></td>
      </tr>
    </table>
  <?php if(isset($_POST['hasil'])){ ?>
    <table>
      <tr>
        <td><br>PEMBAGIAN</td>
      </tr>
      <tr>
        <td>Operator : /</td>
      </tr>
      <tr>
        <td>Hasil : <?php echo $operasi_bagi; ?>
    <?php } ?></td>
      </tr>
    </table>
  <?php if(isset($_POST['hasil'])){ ?>
    <table>
      <tr>
        <td><br>MODULUS</td>
      </tr>
      <tr>
        <td>Operator : %</td>
      </tr>
      <tr>
        <td>Hasil : <?php echo $operasi_modulus; ?>
    <?php } ?></td>
      </tr>
    </table>
</html>
