var id = 0
$(document).ready(function () {
	$('#mydata').DataTable();
	$('#loading-simpan, #loading-ubah, #loading-hapus, #pesan-error, #pesan-sukses, #btn-reset').hide()

	$('#view').on('click', '.btn-form-ubah', function () {
		id = $(this).data('id')

		$('#btn-simpan').show()
		$('#btn-ubah').show()

		$('#modal-title').html('Form Ubah data')

		var tr = $(this).closest('tr')
		var item_code = tr.find('.item_code').val()
		var item_name = tr.find('.item_name').val()
		var qty = tr.find('.qty').val()

		$('#item_code').val(item_code)
		$('#item_name').val(item_name)
		$('#qty').val(qty)
	})

	$('#view').on('click', '.btn-alert-hapus', function () {
		id = $(this).data('id')
	})

	$('#btn-tambah').click(function () {
		$('#btn-ubah').hide()
		$('#btn-simpan').show()

		$('#modal-title').html('Form Simpan data')
	})

	$('#btn-simpan').click(function () {
		$('#loading-simpan').show()

		$.ajax({
			url: base_url + 'ItemsController/simpan',
			type: 'POST',
			data: $("#form-tambah").serialize(),
			dataType: 'json',
			beforeSend: function (e) {
				if (e && e.overrideMimeType) {
					e.overrideMimeType('application/jsoncharset=UTF-8')
				}
			},
			success: function (response) {
				$('#loading-simpan').hide()

				if (response.status == 'sukses') {
					$('#view').html(response.html)

					// $('#pesan-sukses').html(response.pesan).fadeIn().delay(10000).fadeOut()
					Swal.fire({
						type: 'success',
						title: '' + response.pesan,
						showConfirmButton: false,
						timer: 1500
					})

					$('#mydata').DataTable()

					$('#clear_code').val("")
					$('#clear_name').val("")
					$('#clear_qty').val("")
				} else {
					$('#pesan-error').html(response.pesan).show()
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.responseText)
			}
		})
	})

	$('#btn-ubah').click(function () {
		$('#loading-ubah').show()

		$.ajax({
			url: base_url + 'ItemsController/ubah/' + id,
			type: 'POST',
			data: $("#form-modal form").serialize(),
			dataType: 'json',
			beforeSend: function (e) {
				if (e && e.overrideMimeType) {
					e.overrideMimeType('application/jsoncharset=UTF-8')
				}
			},
			success: function (response) {
				$('#loading-ubah').hide()

				if (response.status == 'sukses') {
					$('#view').html(response.html)
					Swal.fire({
						type: 'success',
						title: '' + response.pesan,
						showConfirmButton: false,
						timer: 1500
					})

					$('#form-modal').modal('hide')
					$('#mydata').DataTable()

				} else {
					$('#pesan-error').html(response.pesan).show()
				}
			}
		})
	})

	$('#form-modal').on('hidden.bs.modal', function (e) {
		$('#form-modal input').val('')
	})

})

function functionHapus() {
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: 'Data ini akan dihapus!',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus!'
	}).then((result) => {
		if (result.value) {
			$('#loading-hapus').show()
			$.ajax({
				url: base_url + 'ItemsController/hapus/' + id,
				type: 'GET',
				dataType: 'json',
				beforeSend: function (e) {
					if (e && e.overrideMimeType) {
						e.overrideMimeType('application/jsoncharset=UTF-8')
					}
				},
				success: function (response) {
					$('#loading-hapus').hide()

					$('#view').html(response.html)

					$('#mydata').DataTable()

					Swal.fire({
						type: 'success',
						title: '' + response.pesan,
						showConfirmButton: false,
						timer: 1500
					})
				}
			})
		}
	})
}
