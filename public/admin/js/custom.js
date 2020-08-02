$(document).ready(function () {
    
    //Kategori Blog
    $(".btn-delete-kategori-blog").click(function () {
        let button = $(this)
        Swal({
            title: "Anda Yakin?",
            text: "Semua blog dengan kategori ini akan terhapus secara permanen",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Tidak",
            confirmButtonColor: "#ea6554",
            confirmButtonText: "Ya, lanjutkan!"
        }).then(function (result) {
            if (result.value) {
                $("#formDelete" + button.data("id")).submit()
            }
        });
    })
    //Jenis Usaha
    $(".btn-delete-jenis-unit-usaha").click(function () {
        let button = $(this)
        Swal({
            title: "Anda Yakin?",
            text: "Semua unit usaha dengan jenis ini akan terhapus secara permanen",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Tidak",
            confirmButtonColor: "#ea6554",
            confirmButtonText: "Ya, lanjutkan!"
        }).then(function (result) {
            if (result.value) {
                $("#formDelete" + button.data("id")).submit()
            }
        });
    })
})