<!DOCTYPE html>
<html lang="en" dir="ltr">
  <style media="screen">
    h3{
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-align: center;
    }

    body{
      color: black;
      background-image: linear-gradient(to bottom right, #d49115, #03fca5);
      background-repeat: no-repeat;
      background-attachment: fixed;
      font-family: 'Helvetica', 'Arial', sans-serif !important;
    }

    div{
      background-color: white;
      width: 300px;
      border-radius:20px;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    td{
      padding: 5px;
      padding-left: 10px;
    }
}
  </style>
  <head>
    <meta charset="utf-8">
    <title>119140104</title>
    <h3>Kalkulator Belanja Buah</h3>
  </head>
  <center>
  <div class="kotak">
  <body>
    <form class="" action="call.php" method="post">
      <table>
        <tr>
          <td>Jambu</td>
          <td><input type="text" name="jambu" placeholder="Rp.13000/kg"></input></td>
        </tr>
        <tr>
          <td>Mangga</td>
          <td><input type="text" name="mangga" placeholder="Rp.15000/kg"></input></td>
        </tr>
        <tr>
          <td>Salak</td>
          <td><input type="text" name="salak" placeholder="Rp.10000/kg"></input></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="hasil"></input></td>
        </tr>
      </table>
    </form>
    </center>
    <center>
      <p></p>
    <table>
      <caption>Detail Belanja</caption>
      <thead>
				<tr>
          <td>Buah</td>
          <td>Berat</td>
          <td>Biaya</td>
        </tr>
      </thead>
			<tbody id="cetak">

			</tbody>
    </table>
  </body>
  </div>
  <?php include('Call.php') ?>

  <script type="text/javascript">
  	function hasil() {
  		var cetak = document.getElementById('cetak');
  		var isi ="";
  		<?php for ($i=0; $i < $belanja->getTemp();$i++){?>
  			var nama = '<?php echo $belanja->getBuah($i);?>';
  			var jmlh = '<?php echo $belanja->getJumlah($i);?>';
  			var harga = '<?php echo $belanja->getHarga($i);?>';
  			text += "<tr><td> "+Buah+"</td>"+"<td>"+Berat+"</td>"+"<td>"+Biaya+"</td></tr>";
  		<?php } ?>
  		var total = <?php echo $belanja->getTotal();?>
  		text += "<tr><td></td><td>Total</td><td>"+total+"</td></tr>"
  		cetak.innerHTML = isi;
  	}
  	hasil();
  </script>
</html>
