console.log("ok");
const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton => {
    boton.addEventListener("click", function(){
        //console.log("Click en boton bEliminar");
        const matricula = this.dataset.matricula;
        //console.log(matricula);
        const confirm = window.confirm("¿deseas eliminar el alumno con ID:"+ matricula +"  ?");

        if (confirm){
            //solicitud AJAX
            httpRequest("http://curso-php.com/mvc/consulta/eliminarAlumno/" + matricula, function(){
                // console.log(this.responseText);
                document.querySelector("#respuesta").innerHTML = this.responseText;

                const tbody = document.querySelector("#tbody-alumnos");
                const fila = document.querySelector("#fila-" + matricula);
                console.log(fila);

                tbody.removeChild(fila);
            });
        }
    });
});


function httpRequest(url, callback){
        const http = new XMLHttpRequest();
        http.open("GET", url);
        http.send();

        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                callback.apply(http);

            }
        }

}