$(document).ready(function () {
    $("#update").submit(function (e) {
        e.preventDefault();

        var formData = $(this).serialize();

        if (formData) {
            $.ajax({
                url: "update.php",
                type: "POST",
                data: formData,
                success: function () {
                    location.reload()
                }
            });
        } else {
            alert('data kosong');
        }
    });
});