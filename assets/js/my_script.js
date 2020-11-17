// function tampilRekening() {
// 	var idNasabah = document.getElementById('namaNasabah').value
// 	// console.log(idNasabah)
// 	if (idNasabah == '') {
// 		document.getElementById('no_rek').value = ''
// 	} else {
// 		$.ajax({
// 			url: '/bank-sampah/user/tampilDataNasabah/' + idNasabah,
// 			type: 'get',
// 			dataType: 'json',
// 			success: function (data) {
// 				// console.log(data.no_rekening)
// 				if (data) {
// 					document.getElementById('no_rek').value = data.no_rekening
// 				} else {
// 					document.getElementById('no_rek').value = ''
// 				}
// 			}
// 		})
// 	}
// }



// $('.page-scroll').on('click', function(e){

// 	var tujuan = $(this).attr('href');
// 	var elemenTujuan = $(tujuan);

// 	$('body').animate({
// 		scrollTop: elemenTujuan.offset().top
// 	});

// 	e.preventDefault();
// });

$(document).ready(function(){
	$('#tgl_cetak').change(function(){
		var tgl_cetak = document.getElementById('tgl_cetak').value
		$.ajax({
			url : '/bank-sampah/user/tampilCetak/' + tgl_cetak,
			type : 'get',
			dataType : 'json',
			success: function(data){
				// console.log(data);
				var html = ''
				var no = 1
				data.forEach(data => {
					html += '<tr>'
					html += '<td>'+ no++ +'</td>'
					html += '<td>'+ data.nama +'</td>'
					html += '<td>'+ data.jenis_sampah +'</td>'
					html += '<td>'+ data.harga +'</td>'
					html += '<td>'+ data.banyak_sampah +'</td>'
					html += '<td>'+ data.satuan +'</td>'
					html += '<td>'+ data.jumlah_subtotal +'</td>'
					html += '</tr>'
				})
				$('#isi_transaksi').html(html)
			}
		})
		document.getElementById('tombol_cetak').href = '/bank-sampah/c_excel/cetak/' + tgl_cetak
	})

	$('#datatable').DataTable({
		"lengthMenu": [
			[5, 10, 15, 20, -1],
			[5, 10, 15, 20, 'all']
		]
	})

	$('#jumlahSampah').keyup(function () {
		var hrg_sampah = document.getElementById('hrg_sampah').value
		var jumlahSampah = document.getElementById('jumlahSampah').value
		document.getElementById('hasil').value = hrg_sampah * jumlahSampah
	})
})
var tgl_cetak = document.getElementById('tgl_cetak').value
if (tgl_cetak != '') {
	$.ajax({
		url : '/bank-sampah/user/tampilCetak/' + tgl_cetak,
		type : 'get',
		dataType : 'json',
		success: function(data){
			// console.log(data);
			var html = ''
			var no = 1
			data.forEach(data => {
				html += '<tr>'
				html += '<td>'+ no++ +'</td>'
				html += '<td>'+ data.nama +'</td>'
				html += '<td>'+ data.jenis_sampah +'</td>'
				html += '<td>'+ data.harga +'</td>'
				html += '<td>'+ data.banyak_sampah +'</td>'
				html += '<td>'+ data.satuan +'</td>'
				html += '<td>'+ data.jumlah_subtotal +'</td>'
				html += '</tr>'
			})
			$('#isi_transaksi').html(html)
		}
	})
	document.getElementById('tombol_cetak').href = '/bank-sampah/c_excel/cetak/' + tgl_cetak
}

// function tampilCetak() {
// 	var tgl_cetak = document.getElementById('tgl_cetak').value
// 	$.ajax({
// 		url : '/bank-sampah/user/tampilCetak/' + tgl_cetak,
// 		type : 'get',
// 		dataType : 'json',
// 		success: function(data){
// 			console.log(data);
// 		}
// 	})
// }

function tampilSampah() {
	var idHarga = document.getElementById('namaSampah').value
	if (idHarga == '') {
		// document.getElementById('nm_sampah').value = ''
		document.getElementById('hrg_sampah').value = ''
		document.getElementById('st_sampah').value = ''
	} else {
		$.ajax({
			url: '/bank-sampah/user/tampilDataSampah/' + idHarga,
			type: 'get',
			dataType: 'json',
			success: function (file) {
				// console.log(file)
				if (file) {
					// document.getElementById('nm_sampah').value = file.jenis_sampah
					document.getElementById('hrg_sampah').value = file.harga
					document.getElementById('st_sampah').value = file.satuan
				} else {
					// document.getElementById('nm_sampah').value = ''
					document.getElementById('hrg_sampah').value = ''
					document.getElementById('st_sampah').value = ''
				}
			}
		})
	}
}




// function tampilSetoranNasabah(){
// 	var idNasabah = document.getElementById('id_nasabah').value
// }

