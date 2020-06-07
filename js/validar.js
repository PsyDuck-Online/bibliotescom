function validarRegistro() {
    var boleta, nombre, paterno, materno, semestre, direccion, email, pass, pass2, expresion;
    boleta = document.getElementById('boleta').value;
    nombre = document.getElementById('nombre').value;
    paterno = document.getElementById('paterno').value;
    materno = document.getElementById('materno').value;
    semestre = document.getElementById('semestre').value;
    direccion = document.getElementById('direccion').value;
    email = document.getElementById('email').value;
    pass = document.getElementById('pass').value;
    pass2 = document.getElementById('pass2').value;

    expresion = /\w+@\w+\.+[a-z]/;

    if (boleta === "" || nombre === "" || paterno === "" || materno === "" || semestre === "" || direccion === "" || email === "" || pass === "" || pass2 === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (nombre.length > 45) {
        alert("El nombre es muy largo");
        return false;
    }
    else if (paterno.length > 45) {
        alert("El apellido paterno es muy largo");
        return false;
    }
    else if (materno.length > 45) {
        alert("El apellido materno es muy largo");
        return false;
    }
    else if (direccion.length > 80) {
        alert("La direccion es muy larga");
        return false;
    }
    else if (email.length > 60) {
        alert("El correo es muy largo");
        return false;
    }
    else if (!expresion.test(email)) {
        alert("El correo no tiene un formato valido");
        return false;
    }
    else if (pass.length > 20) {
        alert("La contraseña es muy larga(debe ser de 1 a 20 caracteres)");
        return false;
    }
    else if (pass != pass2) {
        alert("Las contraseñas no coinciden");
        return false;
    }
    else if (isNaN(boleta)) {
        alert("La boleta solo debe contener numeros");
        return false;
    }

}

function boletaRegistrada() {
    document.getElementById('error').innerHTML = 'ERROR: Boleta ya registrada';
}

function escribirDiv(id, message) {
    document.getElementById(id).innerHTML = message;
}