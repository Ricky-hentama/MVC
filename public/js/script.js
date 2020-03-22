$(document).ready(function() {
  let id = [];
  $("#tambahDataGuru").click(function() {
    $("#judulModal").html("Tambah Data Guru");
    $(".modal-footer button[type=submit]").html("Tambah");
  });
  $("#ubah").click(function() {
    $("#judulModal").html("Ubah Data Guru");
    $(".modal-footer button[type=submit]").html("Ubah");
    console.log(this);
  });
});
