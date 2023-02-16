$(".hapus").on("click", function (e) {
  e.preventDefault();
  var getLink = $(this).attr("href");

  Swal.fire({
    title: "Apakah ingin menghapus?",
    text: "tekan ya jika ingin menghapus!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Batal",
    confirmButtonText: "Ya!",
  }).then((result) => {
    if (result.value) {
      window.location.href = getLink;
    }
  });
});
