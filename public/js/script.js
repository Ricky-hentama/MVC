$(document).ready(function() {
  $("#ubah").click(function() {
    $("#judulModal").html("Ubah Data Guru");
    $(".modal-footer button[type=submit]").html("Ubah");
  });
  $("#tambahDataGuru").click(function() {
    $("#judulModal").html("Tambah Data Guru");
    $(".modal-footer button[type=submit]").html("Tambah");
  });
});
