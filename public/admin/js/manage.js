let summernoteDesc = null
//ID
let tablePricesID = "#tablePrices"

//Plugins
let anNewNominal = new AutoNumeric('#newNominal', {
    decimalCharacter: ',',
    digitGroupSeparator: '.',
});

$(document).ready(function () {
    //PLUGINS
    ///////////////////////////////////////////////////////////////////////////////
    //Summer note Description
    summernoteDesc = $('#summernoteDesc').summernote({
        toolbar: [
            ['style', ['style']],
            ['fontsize', ['fontsize']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['picture', 'hr']],
            ['table', ['table']]
        ],
        fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36', '48', '64', '82', '150'],
        height: 800, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false, // set focus to editable area after initializing summernote
        fontNames: ['Poppins', 'Arial', 'Arial Black', 'Comic Sans MS', 'Courier New']
    })

    //Button Listener
    ///////////////////////////////////////////////////////////////////////////////
    //Description
    $("#btnUpdateDesc").click(function () {
        updateDescription($(this))
    })
    //Price
    let btnTab2Clicked = false
    $("#btnTab2").click(function () {
        if (!btnTab2Clicked) {
            tablePricesRefresh()
            btnTab2Clicked = true
        }
    })
    $("#btnAddPrice").click(function () {
        $("#modalAddPrice").modal({
            mbackdrop: 'static',
            keyboard: false
        })
    })
    $("#btnStorePrice").click(function () {
        let button = $(this)
        let buttonHtml = button.html()
        let data = {}
        let isOK = true

        //Validation
        data.price_type_id = $("#newPriceTypeId").val()
        if (!data.price_type_id) {
            Swal.fire("ERROR", "Price type is required", "error")
            isOK = false
        }
        data.nominal = parseInt(anNewNominal.getNumericString())
        if (!data.nominal || data.nominal < 0) {
            Swal("ERROR", "Nominal is required and must not be less than 0", "error")
            isOK = false
        }
        data.currency = $("#newCurrency").val()
        if (!data.currency) {
            Swal.fire("ERROR", "Currency is required", "error")
            isOK = false
        }
        data.per = $("#newPer").val()
        if (!data.per) {
            Swal.fire("ERROR", "Per is required", "error")
            isOK = false
        }
    })
})

//Update Description
let updateDescription = function (button) {
    let buttonHtml = button.html()
    let data = {}
    data.description = summernoteDesc.summernote("code")
    $.ajax({
        url: `/tour/${TOUR_ID}/manage/description`,
        method: "POST",
        data: data,
        beforeSend() {
            button.attr("disabled", true)
            button.html(`<span class="btn-label"><i class="zmdi zmdi-refresh fa-spin"></i></span> Please Wait..`)
        },
        error(err) {
            Swal.fire("ERROR", err.statusText, "error")
        },
        success(res) {
            if (res.status) {
                Swal.fire("SUCCESS", res.message, "success")
            }
        },
        complete() {
            button.attr("disabled", false)
            button.html(buttonHtml)
        }
    })
}

//Refresh Table
let tablePricesRefresh = function () {
    let rows = []
    $.ajax({
        url: `/tour/${TOUR_ID}/manage/prices`,
        method: "GET",
        beforeSend() {
            $(`${tablePricesID} tbody`).html(`<td colspan="10" class="text-center">
                <span class="fa fa-spin fa-refresh m-r-5"></span> Refreshing..
            </td>`)
        },
        error(err) {
            Swal.fire("ERROR", err.statusText, "error")
        },
        success(res) {
            rows = res.rows
        },
        complete() {
            let tbodyHtml = ``
            if (rows.length) {
                rows.forEach(function (e, i) {
                    tbodyHtml += `<tr>
                        <td>${i+1}</td>
                        <td>${e.nominal}</td>
                        <td class="text-center">${e.per}</td>
                        <td class="text-center">${e.currency}</td>
                        <td class="text-center"><span class="label" style="background: ${e.price_type.color}">${e.price_type.name}</span></td>
                        <td class="text-center">
                            <button data-id="${e.id}" type="submit" class="btn btn-delete-price btn-danger waves-effect waves-light"
                            type="button"><i class="zmdi zmdi-delete"></i></button>
                        </td>
                    </tr>`
                })
            } else {
                tbodyHtml = `<td colspan="10" class="text-center"> Data Empty</td>`
            }
            $(`${tablePricesID} tbody`).html(tbodyHtml)
        }
    })
}

//Store
let storePrice = function (button) {
    let buttonHtml = button.html()
    let data = {}
    let isOK = true

    //Validation
    data.price_type_id = $("#newPriceTypeId").val()
    if (!data.price_type_id) {
        Swal.fire("ERROR", "Price type is required", "error")
        isOK = false
    }
    data.nominal = parseInt(anNewNominal.getNumericString())
    if (!data.nominal || data.nominal < 0) {
        Swal("ERROR", "Nominal is required and must not be less than 0", "error")
        isOK = false
    }
    data.currency = $("#newCurrency").val()
    if (!data.currency) {
        Swal.fire("ERROR", "Currency is required", "error")
        isOK = false
    }
    data.per = $("#newPer").val()
    if (!data.per) {
        Swal.fire("ERROR", "Per is required", "error")
        isOK = false
    }
    //Ajax
    // $.ajax({
    //     url: `/tour/${TOUR_ID}/manage/prices`,
    //     method: "POST",
    //     data: data,
    //     beforeSend() {
    //         button.attr("disabled", true)
    //         button.html(`<span class="btn-label"><i class="fa fa-spin fa-spinner"></i></span> Please Wait..`)
    //     },
    //     error(err) {
    //         Swal.fire("ERROR", err.statusText, "error")
    //     },
    //     success(res) {
    //         Swal.fire(
    //             (res.status) ? "SUCCESS" : "ERROR",
    //             res.message,
    //             (res.status) ? "success" : "error",
    //         )
    //         if (res.status) {
    //             tablePricesRefresh()
    //             $("#modalAddPrice").modal("hide")
    //         }
    //     },
    //     complete() {
    //         button.attr("disabled", false)
    //         button.html(buttonHtml)
    //     }
    // })
}