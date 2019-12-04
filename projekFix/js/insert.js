load();

function PostMessage() {
  var judul=$("[name='judul']").val();
                var isi=$("[name='isi']").val();
                var tgl=$("[name='tgl']").val();
                var jam=$("[name='jam']").val();
                var img=$("[name='img']").val();
                var kategori=$("[name='kategori']").val();
                var url_web=$("[name='url_web']").val();

  $.ajax({
    type: "POST",
    data: "judul=" + judul + "&isi=" + isi + "&tgl=" + tgl + "&jam=" + jam + "&img=" + img+ "&kategori=" + kategori + "&url_web=" +url_web,
    url: "insert.php",
    success: function (data) {

      window.alert("Sukses Ditambahkan");
                window.location.href="#page-one";
                location.reload(); 
    }
  })
}