$(function () {
    let this_id;

    let modal = $("#pds-modal");
    // let activateModal = $("#activate-user-modal");
    // let deactivateModal = $("#deactivate-user-modal");

    let table = $("#pds-table").DataTable({
        autoWidth: false,
        responsive: true,
        processing: true,
        serverSide: true,
        searching: true,
        paging: true,
        order: [4, "desc"],
        ajax: {
            method: "GET",
            url: "/pds/table",
            dataType: "json",
            error: function (errors) {
                toast.fire({
                    icon: "error",
                    title: "Invalid Data Token.",
                });
            },
        },
        language: {
            searchPlaceholder: "Search Records..",
        },
        columns: [
            { data: "first_name", name: "first_name" },
            { data: "surname", name: "surname" },
            { data: "sex", name: "sex" },
            { data: "email", name: "email" },
            { data: "created_at", name: "created_at" },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
            },
        ],
    });

    // custom search field
    $("#custom-search-field").keyup(function () {
        table.search($(this).val()).draw();
    });

    // custom page length
    $("#custom-page-length")
        .change(function () {
            table.page.len($(this).val()).draw();
        })
        .trigger("change");

    $("body").on("click", ".delete-pds", function () {
        this_id = $(this).attr("data-id");
        modal.modal("show");
    });

    $("body").on("click", "#destroy-pds", function () {
        $.ajax({
            type: "DELETE",
            url: "/pds/" + this_id,
            dataType: "json",
            beforeSend: function () {
                buttons("destroy-pds", "start");
            },
        })
            .done(function (response) {
                table.ajax.reload();
                toast.fire({
                    icon: "success",
                    title: response.message,
                    showCloseButton: true,
                    width: 500,
                    timer: 2000,
                    timerProgressBar: true,
                });
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                toast.fire({
                    icon: "error",
                    title: jqXHR.responseJSON.message,
                });
            })
            .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
                buttons("destroy-pds", "finish");
                modal.modal("hide");
            });
    });

    // $("body").on("click", ".activate-user", function () {
    //     this_id = $(this).attr("data-id");
    //     activateModal.modal("show");
    // });

    // $("body").on("click", "#activate-user", function () {
    //     $.ajax({
    //         type: "PATCH",
    //         url: "/users/activate/" + this_id,
    //         dataType: "json",
    //         beforeSend: function () {
    //             buttons("activate-user", "start");
    //         },
    //     })
    //         .done(function (response) {
    //             table.ajax.reload();
    //             toast.fire({
    //                 icon: "success",
    //                 title: response.message,
    //             });
    //         })
    //         .fail(function (jqXHR, textStatus, errorThrown) {
    //             toast.fire({
    //                 icon: "error",
    //                 title: jqXHR.responseJSON.message,
    //             });
    //         })
    //         .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
    //             buttons("activate-user", "finish");
    //             activateModal.modal("hide");
    //         });
    // });

    // $("body").on("click", ".deactivate-user", function () {
    //     this_id = $(this).attr("data-id");
    //     deactivateModal.modal("show");
    // });

    // $("body").on("click", "#deactivate-user", function () {
    //     $.ajax({
    //         type: "PATCH",
    //         url: "/users/deactivate/" + this_id,
    //         dataType: "json",
    //         beforeSend: function () {
    //             buttons("deactivate-user", "start");
    //         },
    //     })
    //         .done(function (response) {
    //             table.ajax.reload();
    //             toast.fire({
    //                 icon: "success",
    //                 title: response.message,
    //             });
    //         })
    //         .fail(function (jqXHR, textStatus, errorThrown) {
    //             toast.fire({
    //                 icon: "error",
    //                 title: jqXHR.responseJSON.message,
    //             });
    //         })
    //         .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
    //             buttons("deactivate-user", "finish");
    //             deactivateModal.modal("hide");
    //         });
    // });
});
