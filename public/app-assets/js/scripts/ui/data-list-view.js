$(document).ready(function () {
    "use strict"
    // init list view datatable


    // init thumb view datatable
    var dataThumbView = $(".data-thumb-view").DataTable({
        responsive: false,
        columnDefs: [
            {
                orderable: true,
                targets: 0,
            }
        ],
        dom:
            '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
        oLanguage: {
            sLengthMenu: "_MENU_",
            sSearch: ""
        },
        aLengthMenu: [[10, 15, 20, 25], [10, 15, 20, 25]],
        select: {
            style: "multi"
        },
        order: [[1, "asc"]],
        bInfo: false,
        pageLength: 10,
        buttons: [
            {
                text: "<i class='feather icon-plus'></i> Add New",
                action: function () {
                    $(this).removeClass("btn-secondary")
                    $(".add-new-data").addClass("show");
                    $(".add-new-data form").attr("action", $("#store_route").val());
                    $(".overlay-bg").addClass("show")
                },
                className: "btn-outline-primary"
            }
        ],
        initComplete: function (settings, json) {
            $(".dt-buttons .btn").removeClass("btn-secondary")
        }
    })

    dataThumbView.on('draw.dt', function () {
        setTimeout(function () {
            if (navigator.userAgent.indexOf("Mac OS X") != -1) {
                $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
            }
        }, 50);
    });

    // To append actions dropdown before add new button
    var actionDropdown = $(".actions-dropodown")
    actionDropdown.insertBefore($(".top .actions .dt-buttons"))


    // Scrollbar
    if ($(".data-items").length > 0) {
        new PerfectScrollbar(".data-items", {wheelPropagation: false})
    }

    // Close sidebar
    $(".hide-data-sidebar, .cancel-data-btn, .overlay-bg").on("click", function () {
        $(".add-new-data").removeClass("show")
        $(".overlay-bg").removeClass("show")
        $(".add-data-btn button").html("Add Data");
        $("#data-name, #data-price").val("")
        $("#data-categories, #data-status").prop("selectedIndex", 0)
    })

    // On Edit
    $('.action-edit').on("click", function (e) {
        e.stopPropagation();
        $('#data-name').val('Altec Lansing - Bluetooth Speaker');
        $('#data-price').val('$99');
        $(".add-new-data").addClass("show");
        $(".add-data-btn button").html("Update Data");
        $(".overlay-bg").addClass("show");
    });

    // On Delete
    $('.action-delete').on("click", function (e) {
        e.stopPropagation();
        $(this).closest('td').parent('tr').fadeOut();
    });

    // dropzone init
/*    Dropzone.options.dataListUpload = {
        complete: function (files) {
            var _this = this
            // checks files in class dropzone and remove that files
            $(".hide-data-sidebar, .cancel-data-btn, .actions .dt-buttons").on(
                "click",
                function () {
                    $(".dropzone")[0].dropzone.files.forEach(function (file) {
                        file.previewElement.remove()
                    })
                    $(".dropzone").removeClass("dz-started")
                }
            )
        }
    }
    Dropzone.options.dataListUpload.complete()*/

    // mac chrome checkbox fix
    if (navigator.userAgent.indexOf("Mac OS X") !== -1) {
        $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
    }

    // To add new data
    $(".submitBtn").on("click", function () {
        let form = $(".add-new-data form");
        let url = form.attr("action");
        let method = form.attr("method");
        let data = form.serialize();
        // ajax header setup for post request csfr token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: url,
            method: method,
            data: data,
            success: function (response) {
                console.log(response);
                $(".add-new-data").removeClass("show");
                $(".overlay-bg").removeClass("show");
                dataThumbView.ajax.reload();
            }
        });
    });


})
