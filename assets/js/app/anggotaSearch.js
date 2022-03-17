$(document).ready(function () {
	let baseUrl = window.location.origin + '/simkopsis/'; //development
	// let baseUrl = window.location.origin;  // production

	injectAnggotaInputSearch();

	function injectAnggotaInputSearch() {
		let url = baseUrl + 'Service/anggota';
		let anggotas = [];
		$.ajax({
			url: url,
			async: true,
			dataType: 'json',
			cache: false,
			type: 'GET',
			success: function (response) {
				if (response.data !== null) {
					let anggota = response.data;
					for (let i = 0; i < anggota.length; i++) {
						anggotas.push({
							'id': anggota[i].anggota_id,
							'nama': anggota[i].anggota_nama,
							'pekerjaan': anggota[i].anggota_pekerjaan
						});
					}
				}
			},
			error: function (response) {
				console.log(response.text);
			}
		});

		var options = {
			data: anggotas,

			getValue: "nama",

			template: {
				type: "description",
				fields: {
					description: "pekerjaan"
				}
			},
			list: {
				maxNumberOfElements: 8,
				match: {
					enabled: true
				},
				onClickEvent: function () {
					var id = $("#search-anggota").getSelectedItemData().id;
					$('input#id-anggota').val(id);
					// console.log(id);
					cekDokumen(id);
					cekAngsuranCash(id);
				}
			}
		};

		$("#search-anggota").easyAutocomplete(options);
	}

	function cekDokumen(id) {
		let url = baseUrl + 'Service/detailAnggota/' + id;
		$.ajax({
			url: url,
			async: true,
			dataType: 'json',
			cache: false,
			type: 'GET',
			success: function (response) {
				if (response.data !== null) {
					if (response.data.anggota_dokumen === null) {
						$("#dokumen-peminjaman").css({
							display: "block"
						});
						$("#lengkapi").html(
							'<a href="' + baseUrl + 'anggota/ubah/' + id + '" class="orange-text"><b><u>Lengkapi sekarang</u></b></a>'
						);
						$("#tombol-tambah").css({
							display: "none"
						});
					} else {
						$("#dokumen-peminjaman-done").css({
							display: "block"
						});
					}
				}
			},
			error: function (response) {
				console.log(response.text);
			}
		});
	}


	function cekAngsuranCash(id) {
		let url = baseUrl + 'Service/pinjamanCash/' + id;
		$.ajax({
			url: url,
			async: true,
			dataType: 'json',
			cache: false,
			type: 'GET',
			success: function (response) {
				if (response.data !== null) {
					console.log(response.data);
					$("#pinjaman-id").val(response.data.pinjaman_id);
					$("#pembayaran").val(response.data.pinjaman_angsuran);
					$("#pinjaman").val(response.data.pinjaman_pembayaran);
					$("#tenggat").val(response.data.pinjaman_tenggat);
				}
			},
			error: function (response) {
				console.log(response.text);
			}
		});
	}


});
