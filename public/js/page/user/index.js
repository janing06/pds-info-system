$(function () {
    let this_id;

    let modal = $("#user-modal");
    let activateModal = $("#activate-user-modal");
    let deactivateModal = $("#deactivate-user-modal");

    let table = $("#user-table").DataTable({
        autoWidth: false,
        responsive: true,
        processing: true,
        serverSide: true,
        searching: true,
        paging: true,
        order: [5, "desc"],
        ajax: {
            method: "GET",
            url: "/users/table",
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
            { data: "last_name", name: "last_name" },
            { data: "email", name: "email" },
            { data: "role", name: "role" },
            { data: "status", name: "status" },
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

    $("body").on("click", ".delete-user", function () {
        this_id = $(this).attr("data-id");
        modal.modal("show");
    });

    $("body").on("click", "#destroy-user", function () {
        $.ajax({
            type: "DELETE",
            url: "/users/" + this_id,
            dataType: "json",
            beforeSend: function () {
                buttons("destroy-user", "start");
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
                buttons("destroy-user", "finish");
                modal.modal("hide");
            });
    });

    $("body").on("click", ".activate-user", function () {
        this_id = $(this).attr("data-id");
        activateModal.modal("show");
    });

    $("body").on("click", "#activate-user", function () {
        $.ajax({
            type: "PATCH",
            url: "/users/activate/" + this_id,
            dataType: "json",
            beforeSend: function () {
                buttons("activate-user", "start");
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
                buttons("activate-user", "finish");
                activateModal.modal("hide");
            });
    });

    $("body").on("click", ".deactivate-user", function () {
        this_id = $(this).attr("data-id");
        deactivateModal.modal("show");
    });

    $("body").on("click", "#deactivate-user", function () {
        $.ajax({
            type: "PATCH",
            url: "/users/deactivate/" + this_id,
            dataType: "json",
            beforeSend: function () {
                buttons("deactivate-user", "start");
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
                buttons("deactivate-user", "finish");
                deactivateModal.modal("hide");
            });
    });
});
