$(document).ready(function(){
	var dataHasil = 0;
	tampil();

	$('.btn-tambah').click(function(){
		tambah();
	});

	function tampil(){
		$('.targetData').html('');

		$('.btn-tambah').show();
		$.ajax({
			type : 'GET',
			url : 'tampil.php',
			dataType : 'JSON',
			success : function(response){
				var i;
				var data = '';
				for( i=0; i<response.length; i++ ){
					data +=
					`
					<tr>
					<td style="text-align: center;">`+(i+1)+`</td>
					<td style="text-align: center;">`+response[i].nama+`</td>
					<td style="text-align: center;">`+response[i].senjata+`</td>
					<td style="text-align: center;">`+response[i].elemen+`</td>
					<td style="text-align: center;">
						<button class='btn-delete' id='`+response[i].levelk+`'>Hapus</button>
					</td>
					</tr>
					`
				}
				$('.targetData').append(data);
				$('.btn-delete').click(function(){
					hapus($(this).attr('id'));
				})
			}
		})
	}

	function tambah(){
		var nama = $('.nama').val();
		var senjata = $('.senjata').val();
		var elemen = $('.elemen').val();
		$.ajax({
			type : 'POST',
			url : 'tambah.php',
			data : '&nama='+nama+'&senjata='+senjata'+&elemen='+elemen+,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}
			}
		})
	}

	function tampil_data(x){
		$.ajax({
			type : 'POST',
			url : 'tampil_data.php',
			data : 'id='+x,
			dataType : 'JSON',
			success : function(response){
				dataHasil = response.levelk;
				$('.nama').val(response.nama);
				$('.senjata').val(response.senjata);
				$('.elemen').val(response.elemen);

				$('.btn-tambah').hide();
			}
		})
	}

	function hapus(x){
		$.ajax({
			type : 'POST',
			url : 'delete.php',
			data : 'levelk='+x,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					tampil();
					reset();
				}else{
					alert(response.msg);
					tampil();
					reset();
				}
			}
		})
	}

	function reset(){
		$('.nama').val('');
		$('.senjata').val('');
		$('.elemen').val('');
	}

});
