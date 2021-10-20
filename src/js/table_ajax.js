function receiveSubmit() {

    if (validateForm(true)) {

        let Y_value = $('#Y_value').val();
        let X_value = $('#X_value').val();
        let R_value = $('#R_value').val();

        $.ajax({
            type: 'GET',
            url: '../src/php/upload.php',
            data: {'y': Y_value.trim(), 'x': X_value.trim(), 'r': R_value.trim()},
            success: function (data) {
                if (data === "Data is incorrect!") alert("Возникла ошибка: " + data);
                else $('#table tr:last').after(data);
            },
            error: function (data) {
                alert("Возникла ошибка: " + data);
            }
        })
    }
}