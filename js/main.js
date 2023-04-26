document.addEventListener("DOMContentLoaded", function () {
  const urlActual = window.location.href;

  if (urlActual.includes("login.php")) {
    const formLogin = document.querySelector("#form-login");
    formLogin.addEventListener("submit", login);
  }

  if (urlActual.includes("registro.php")) {
    const formRegistrar = document.querySelector("#form-registrar");
    formRegistrar.addEventListener("submit", crearUsuario);
  }
});

function login(event) {
  event.preventDefault();
  const email = document.querySelector("#email");
  const password = document.querySelector("#password");
  let errores = 0;

  if (email.value == "") {
    alertas(`warning`, `El campo email no puede estar vació`);
    errores++;
  }
  if (password.value == "") {
    alertas(`warning`, `El campo password no puede estar vació`);
    errores++;
  }

  if (errores === 0) {
    var xhr = new XMLHttpRequest();
    var url = "inc/auth.php";
    var params = `tipo=login&email=${email.value}&password=${password.value}`;
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        if (xhr.responseText == 1) {
          location.href = "index.php";
        } else if (xhr.responseText == 2) {
          alertas(
            `warning`,
            `Credenciales incorrectas`,
            `verifique los campos, por favor`
          );
        } else if (xhr.responseText == 3) {
          alertas(`danger`, `Error en la base de datos`);
        }
      }
    };
    xhr.send(params);
  }
}

function crearUsuario(event) {
  event.preventDefault();
  let errores = 0;
  const formRegistrar = document.querySelector("#form-registrar");

  const formData = new FormData(formRegistrar);
  const nombre = formData.get("nombre");
  const apellidos = formData.get("apellidos");
  const telefono = formData.get("telefono");
  const email = formData.get("email");
  const contrasena = formData.get("contrasena");
  const contrasenav = formData.get("v_contrasena");

  let contrasenasIguales = validarPassword(contrasena, contrasenav);

  if (!contrasenasIguales) {
    alertas(`warning`, `Las contraseñas no son iguales`);
    errores++;
  }

  if (nombre.trim() === "") {
    alertas(`warning`, `El campo Nombre no puede estar vació`);
    errores++;
  }

  if (apellidos.trim() === "") {
    alertas(`warning`, `El campo Apellidos no puede estar vació`);
    errores++;
  }

  if (telefono.trim() === "") {
    alertas(`warning`, `El campo Teléfono no puede estar vació`);
    errores++;
  }

  if (email.trim() === "") {
    alertas(`warning`, `El campo E-mail no puede estar vació`);
    errores++;
  }

  if (contrasena.trim() === "") {
    alertas(`warning`, `El campo Contraseña no puede estar vació`);
    errores++;
  }

  if (errores === 0) {
    formData.append("tipo", "crear");
    const xhr = new XMLHttpRequest();
    const url = "inc/usuario.php";
    const method = "POST";
    xhr.open(method, url);
    xhr.addEventListener("load", (event) => {
      console.log(xhr.responseText);
      if(xhr.responseText == 1){
        location.href = "login.php";
      }
    });

    xhr.addEventListener("error", (event) => {
      console.error("Error:", xhr.statusText);
    });

    xhr.send(formData);
  }
}

function alertas(tipo, titulo = null, cuerpo) {
  Swal.fire({
    title: titulo,
    text: cuerpo,
    icon: tipo,
    confirmButtonText: "Cerrar",
  });
}

function validarPassword(password, passwordvalidar) {
  console.log(password);
  console.log(passwordvalidar);
  if (password == passwordvalidar) {
    return true;
  } else {
    return false;
  }
}
