$(document).ready(function() {
  $("#tambahDataGuru").click(function() {
    $("#judulModal").html("Tambah Data Guru");
    $(".modal-footer button[type=submit]").html("Tambah");
  });
  $("#ubah").click(function() {
    $("#judulModal").html("Ubah Data Guru");
    $(".modal-footer button[type=submit]").html("Ubh");
    const id = $(this).data("id");
    console.log(id);
  });
  alert("ok");
});
