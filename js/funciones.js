$(document).ready(function () {
    $('#buscaborrar').click(function () {
        $.ajax({
            url: './consultas/C.buscaborra.php',
            type: 'POST',
            data: { nombre: $("#nombre").val(),
                    apellido: $("#apellido").val(),
             },
            datatype: "json",
            success: function (dato) {  
                console.log(dato);
                $("#paraladata").html(dato)
            }
        });
    });
    $('#infobae').click(function () {
        $.ajax({
            url: './consultas/C.personas.php',
            type: 'GET',
            dataType: "json",
            success: function (data) {
                console.log(data);
                let html = "<table border='1'><th>Nombre</th><th>Apellido</th></tr>";
                data.forEach(function (persona) {
                    html += `</td><td>${persona.nombre}</td><td>${persona.apellido}</td></tr>`;
                });
                html += "</table>";
                $("#person").html(html);
            }
        });
    })
    $('#borraete').click(function() {
        $.ajax({
            url: "./consultas/C.borraalotro.php",
            type: "POST",
            data: { apellido: $("#apellido2").val() },
            dataType: "json", // Asegúrate de que dataType está configurado a "json"
            success: function(datas) {
                console.log(datas);
                    $("#selogra").html(datas);

            },
        });
    });

    
})
