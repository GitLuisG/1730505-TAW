$(document).ready(function () {
        $("#save").click(function () {
            let params = {
                Fecha: $("#Infecha").val(),
                Paciente: $("#InPaciente").val(),
                Edad: $("#InEdad").val(),
                Nacimiento: $("#InNacimiento").val(),
                Direccion: $("#InDir").val(),
                Ocupaccion: $("#InOC").val(),
                Telefono: $("#InTel").val(),
                Celular: $("#InCel").val(),
                Padre:$("#NamePadre").val(),
                OcupaccionP:$("#InOcP").val(),
                Madre:$("#NameMadre").val(),
                OcupaccionM:$("#InOcM").val(),
                Recomendado:$("#InRec").val(),
            };
            console.log(params);
            alert("Arreglo Listo en la consola");
        });
    });