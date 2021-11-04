$(document).ready(function(){
	var dataHasil = 0;
	tampil();

	$('.tambah').click(function(){
		tambah();
	});

	$('.batal').click(function(){
		tampil();
		reset();
	});

	$('.ubah').click(function(){
		edit(dataHasil);
	});

	function tampil(){
		$('.view').html('');

		$('.tambah').show();
		$('.ubah').hide();
		$('.batal').hide();
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
					<td style="text-align: center;">`+response[i].nim+`</td>
					<td style="text-align: center;">`+response[i].prodi+`</td>
					<td style="text-align: center;">`+response[i].angkatan+`</td>
					<td style="text-align: center;">
						<button class='btn-edit' id='`+response[i].nim+`'>Ubah</button>
						<button class='btn-delete' id='`+response[i].nim+`'>Hapus</button>
					</td>
					</tr>
					`
				}
				$('.view').append(data);

				$('.edit').click(function(){
					show($(this).attr('id'));
				})

				$('.delete').click(function(){
					hapus($(this).attr('id'));
				})
			}
		})
	}

	function edit(x){
		var id = x;
		var nim = $('.nim').val();
		var nama = $('.nama').val();
		var prodi = $('.prodi').val();
		var angkatan = $('.angkatan').val();
		$.ajax({
			type : 'POST',
			url : 'edit.php',
			data : 'id='+id+'&nim='+nim+'&nama='+nama+'&prodi='+prodi+'&angkatan='+angkatan,
			success : function(response){
				tampil();
				reset();
			}
		})
	}

	function show(x){
		$.ajax({
			type : 'POST',
			url : 'show.php',
			data : 'id='+x,
			dataType : 'JSON',
			success : function(response){
				dataHasil = response.nim;
				$('.nim').val(response.nim);
				$('.nama').val(response.nama);
				$('.prodi').val(response.prodi);
				$('.angkatan').val(response.angkatan);

				$('.tambah').hide();
				$('.ubah').show();
				$('.batal').show();

			}
		})
	}

	function tambah(){
		var nim = $('.nim').val();
		var nama = $('.nama').val();
		var prodi = $('.prodi').val();
		var angkatan = $('.angkatan').val();
		$.ajax({
			type : 'POST',
			url : 'tambah.php',
			data : 'nim='+nim+'&nama='+nama+'&prodi='+prodi+'&angkatan='+angkatan,
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

	function hapus(x){
		$.ajax({
			type : 'POST',
			url : 'hapus.php',
			data : 'nim='+x,
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
		$('.nim').val('');
		$('.nama').val('');
		$('.prodi').val('');
		$('.angkatan').val('');
	}
});
