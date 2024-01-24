$("#example").DataTable({
  responsive: true,
});

// Sweet Alert 
const swal = $('.swal').data('swal');
if (swal) {
  Swal.fire({
    icon: "success",
    title: "Data Berhasil",
    text: swal,
    showConfirmButton: true,
    confirmButtonColor: "#125d72"
  });
} 

$(document).on('click', '.btn-hapus', function (e) {
  e.preventDefault();
  var form = $(this).closest('form');

  Swal.fire({
    title: "Apakah anda yakin?",
    text: "Data yang telah dihapus tidak dapat dikembalikan!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus!"
  }).then((result) => {
    if (result.value) {
      form.submit();
    }
  });

})
