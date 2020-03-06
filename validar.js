function validacion(f) {
if (document.fvalidacion.nombre.value=="") {
alert("Por favor escriba su Nombre");
document.fvalidacion.nombre.focus();
document.getElementById("pNombre").style.color = "red";
return false;
}
if (document.fvalidacion.apellido.value=="") {
alert("Por favor escriba su Apellido");
document.fvalidacion.apellido.focus();
document.getElementById("pApellido").style.color = "red";
return false;
}
if (document.fvalidacion.edad.value=="") {
alert("Por favor escriba su Edad");
document.getElementById("pEdad").style.color = "red";
document.fvalidacion.edad.focus();
return false;
}
if (document.fvalidacion.cedula.value=="") {
alert("Por favor escriba su Cedula o Pasaporte.");
document.getElementById("pCedula").style.color = "red";
document.fvalidacion.cedula.focus();
return false;
}
if (document.fvalidacion.genero.value=="") {
alert("Por favor seleccione su Genero.");
document.getElementById("pGenero").style.color = "red";
document.fvalidacion.genero.focus();
return false;
}
alert("Muchas gracias por completar el formulario");
   	document.fvalidacion.submit();
}