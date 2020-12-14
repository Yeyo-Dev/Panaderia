let formulario = document.getElementById("FRMAdmin"); //Guardamos el formulario en una varuable

//cuando el boton haga submit hara la funcion
formulario.addEventListener("submit", function(e) {
    e.preventDefault(); //evita que se recargue la pagina
    let box = document.getElementById("Respuesta"); //Guardo  un div en una variable
    let data = new FormData(formulario); //Guarda los datos del formulario en la variable data
    console.log(data);
    //el fetch es un metodo parecido al AJAX para intercambiar datos con otros archivos incluyendo php
    fetch("./Backend/Admin_ingresar.php", {
            method: "POST",
            body: data
        })
        .then((res) => {
            return res.text();
        })
        .then((data1) => {
            //  document.getElementById('button').style.display = 'none' //Oculto el boton
            document.getElementById("FRMAdminIngresar").style.display = "none";
            box.style.display = "block";
            //data1 = SinComillas(data1)
            //las comillas `` sirven para datos tipo template que es parecido a JSX de Reactjs para guardar estructuras html
            box.innerHTML = `
            <h1>${data1}</h1>
             <br>
            <a class="backx" href="javascript:FAgregar()">Atras</a>`;
        })
        .catch(function(error) {
            console.error(error);
        });
});

function FAgregar() {
    document.getElementById("b-form").style.display = "none";
    document.getElementById("FRMAdminIngresar").style.display = "block";
    document.getElementById("Respuesta").style.display = "none";
    document.getElementById("add-tap").style.backgroundColor = "blue";
    document.getElementById("show-tap").style.backgroundColor = "darkblue";
}

function FMostrar() {
    document.getElementById("show-tap").style.backgroundColor = "blue";
    document.getElementById("add-tap").style.backgroundColor = "darkblue";

    let box = document.getElementById("Respuesta");
    box.style.padding = "none";
    document.getElementById("FRMAdminIngresar").style.display = "none";
    document.getElementById("b-form").style.display = "block";
    document.getElementById("Respuesta").style.display = "block";
    fetch("./Backend/Admin_ConsGral.php")
        .then((res) => {
            return res.text();
        })
        .then((data1) => (box.innerHTML = `${data1}`))
        .catch(function(error) {
            console.log(error);
        });
}

let formulario2 = document.getElementById("b-form");
let searcher = document.getElementById("buscar");

formulario2.addEventListener("keyup", function(e) {
    e.preventDefault();
    let box = document.getElementById("Respuesta");

    box.style.padding = "3%";

    let datax = new FormData(formulario2); //Guarda los datos del formulario en la variable data

    fetch("./Backend/Admin_ConsGral.php", {
            method: "POST",
            body: datax
        })
        .then((res) => {
            return res.text();
        })
        .then((data1) => (box.innerHTML = `${data1}`))
        .catch(function(error) {
            console.log(error);
        });
});

formulario2.addEventListener("submit", function(e) {
    e.preventDefault();
}); 



function eliminar(id) {
    console.log("eliminando");
    let FRM = `FRM${id}`
    console.log(id);
    console.log(FRM);
    let formulario3 = document.getElementById(FRM);
    let datay = new FormData(formulario3);
    const boton_mostrar = document.getElementById("show-tap");
    let msg = confirm("¿Esta seguro de eliminar este registro?, se eliminara para siempre");
console.log(datay);
    if (msg == true) {
        fetch("./Backend/Admin_eliminar.php", {
            method: "POST",
            body: datay
        })
        .then((res) => {
            return res.text();
        })
            .then((data1) => {
                alert(data1);
                boton_mostrar.click();
                boton_mostrar.click();
                boton_mostrar.click();
                
            })
            .catch(function(error) {
                console.log(error);
            });
    } else {
        alert("Eliminación Cancelada");
    }
}

function modificar(id){
    const a = document.createElement('a')
    a.href = `./Admin_Change.php?id=${id}`;
    a.target = '_blank'
    a.click()
}
