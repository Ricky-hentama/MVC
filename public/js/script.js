$(document).ready(function () {
  $("#tambahDataGuru").click(function () {
    $("#judulModal").html("Tambah Data Guru");
    $(".modal-footer button[type=submit]").html("Tambah");
  });
  $(".ubah").click(function () {
    $("#judulModal").html("Ubah Data Guru");
    $("#tombol-aksi").html("Ubah");
    const id = $(this).data("id");

    $.ajax({
      type: "post",
      url: "http://localhost/mvc/public/teacher/ubah",
      data: { id: id },
      dataType: "json",
      success: function (data) {
        console.log(data);
      },
    });
  });
});
