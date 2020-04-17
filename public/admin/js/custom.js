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
    //Unit Usaha
    $(".btn-delete-unit-usaha").click(function () {
        let button = $(this)
        Swal({
            title: "Anda Yakin?",
            text: "Unit usaha ini akan terhapus secara permanen",
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
    //Tour
    $(".btn-delete-tour").click(function () {
        let button = $(this)
        Swal({
            title: "Are you sure?",
            text: "You will delete all prices and pictures of this tour permanently",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "No",
            confirmButtonColor: "#ea6554",
            confirmButtonText: "Yes, delete it"
        }).then(function (result) {
            if (result.value) {
                $("#formDelete" + button.data("id")).submit()
            }
        });
    })
    //Price
    $(".btn-delete-price").click(function () {
        let button = $(this)
        Swal({
            title: "Are you sure?",
            text: "You will delete this price permanently",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "No",
            confirmButtonColor: "#ea6554",
            confirmButtonText: "Yes, delete it"
        }).then(function (result) {
            if (result.value) {
                $("#formDelete" + button.data("id")).submit()
            }
        });
    })
    //Tour Picture
    $(".btn-delete-tour-picture").click(function () {
        let button = $(this)
        Swal({
            title: "Are you sure?",
            text: "You will delete this picture permanently",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "No",
            confirmButtonColor: "#ea6554",
            confirmButtonText: "Yes, delete it"
        }).then(function (result) {
            if (result.value) {
                $("#formDelete" + button.data("id")).submit()
            }
        });
    })
    //Booking
    //Tour Picture
    $(".btn-delete-booking").click(function () {
        let button = $(this)
        Swal({
            title: "Are you sure?",
            text: "You will delete this booking permanently",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "No",
            confirmButtonColor: "#ea6554",
            confirmButtonText: "Yes, delete it"
        }).then(function (result) {
            if (result.value) {
                $("#formDelete" + button.data("id")).submit()
            }
        });
    })
})