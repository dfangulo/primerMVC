
    // escuchar si en la entrada del nombre de archivo, se da enter
    var inputFileName = document.getElementById("nombre-archivo");
    inputFileName.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            document.getElementById("guardar").click();
        }
    });
    // escuchar si de le da clic al boton descargar
    document.querySelector('#guardar').onclick = function() {
        const data = document.querySelector('#textareaXml').value;
        const nombreArchivo = document.querySelector("#nombre-archivo").value;
        exportar(data, nombreArchivo);
    }
    //funcion para exportar/descargar un archivo con o sin nombre en formato xml (descargas)
    function exportar(data, filename) {
        const a = document.createElement("a");
        let contenido = data,
            blob = new Blob([contenido], {
                type: "text/xml"
            });
        url = URL.createObjectURL(blob);
        a.href = url;
        a.download = filename;
        a.click();
        URL.revokeObjectURL(url);
    }