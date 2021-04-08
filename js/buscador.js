$(document).ready(function () {
    $("#buscador").on('keyup', function () {
        var busqueda = $("#buscador").val();
        //alert(busqueda);
        $.ajax({
            type: 'POST',
            url: '/phpFiles/busqueda.php',
            data: {palabra_principal: busqueda},
            success: function () {

            }
        });

    });

});
