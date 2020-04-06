$(document).ready(function () {
  $("#tambahDataGuru").click(function () {
    $("#judulModal").html("Tambah Data Guru");
    $(".modal-footer button[type=submit]").html("Tambah");
  });
  $("#ubah").click(function (e) {
    $("#judulModal").html("Ubah Data Guru");
    $("#tombol-aksi").html("Ubah");
    // const id = $(this).data("id");
    alert(ok);
    console.log(e);
  });
});
