// function eliminaDivError () {
//   for (var i = 0; i < 7; i++) {
//     borraError("error"+i.toString());
//   }
// }
// function debeIngresar(valor,diverror,tope) {
//   eliminaDivError();
//   if (valor.value==0 || typeof valor == "undefined"){
//     muestraError('Campo es obligatorio',diverror,tope);
//   }
// }
// function muestraError(error,diverror,tope){
//   if (document.getElementById(diverror)){ //se obtiene el id
//     var eldiv = document.getElementById(diverror);
//     eldiv.style.display = 'block';
//     eldiv.innerHTML= "";
//     eldiv.innerHTML= "<h6>"+error+"</h6>";
//     eldiv.style.top = ""+tope+"px";
//     // eldiv.style.right = "25%";
//     if (diverror=="error") {
//       setTimeout(function(){
//         eldiv.style.display = 'none';
//         eldiv.innerHTML= "";
//       },2000);
//     }
//   }
// }
// function borraError(diverror){
//   if (document.getElementById(diverror)) {
//     var eldiv = document.getElementById(diverror);
//     eldiv.style.display = 'none';
//     eldiv.innerHTML= "";
//   }
// }
// function erroresValida(errores) {
//   for (var i = 0; i < errores.length; i++) {
//     if (typeof errores[i] != "undefined" && errores[i].length>0){
//       muestraError(errores[i],"error"+i.toString(),i);
//     }
//   }
// }
// function validaLogin() {
//   var user = document.forms["form-login"]["email"].value;
//   var password = document.forms["form-login"]["password"].value;
//   var chequeoOk=true;
//   var errores=[];
//   user=user.trim();
//   password=password.trim();
//   if (typeof user=="undefined" || user.length === 0) {
//       errores[0]='Ingrese usuario';
//       muestraError(errores[0],"error0","0");
//       chequeoOk=false;
//   }
//   if (typeof password=="undefined" || password.length < 8) {
//       errores[1]='Password mínima 8 caracteres';
//       muestraError(errores[1],"error1","38");
//       chequeoOk=false;
//   }
//   return chequeoOk;
// }
//
// function validaRegistro() {
//   var chequeoOk=true;
//   var errores=[];
//   var nombre = document.forms["form-registro"]["nombre"].value;
//   var apellido = document.forms["form-registro"]["apellido"].value;
//   var email = document.forms["form-registro"]["email"].value;
//   var emailconfirm = document.forms["form-registro"]["confemail"].value;
//   var password = document.forms["form-registro"]["password"].value;
//   var fechanac = document.forms["form-registro"]["fechanac"].value;
//   var genero = document.forms["form-registro"]["genero"].value;
//   nombre=nombre.trim();
//   apellido=apellido.trim();
//   email=email.trim();
//   emailconfirm=emailconfirm.trim();
//   password=password.trim();
//   if (typeof nombre=="undefined" || nombre.length === 0) {
//       errores[0]='Nombre es obligatorio';
//       chequeoOk=false;
//   }
//   if (typeof apellido=="undefined" ||apellido.length === 0) {
//       errores[1]='Apellido es obligatorio';
//       chequeoOk=false;
//   }
//   if (typeof email=="undefined"||email.length === 0 ) {
//       errores[2]='Email es obligatorio';
//       chequeoOk=false;
//   }
//   if (emailconfirm !== email) {
//       errores[3]='Deben coincidir los emails';
//       chequeoOk=false;
//   }
//   if (typeof password=="undefined" || password.length < 8) {
//       errores[4]='Password con al menos 8 caracteres';
//       chequeoOk=false;
//   }
//   if (typeof fechanac=="undefined" || fechanac.length < 8) {
//       errores[5]='Fecha Naciemiento incorrecta';
//       chequeoOk=false;
//   }
//   if (!chequeoOk){
//     erroresValida(errores);
//   }
//   return chequeoOk;
// }
// function redireccionar() {
//   window.location.href=pagina;
// }

// window.addEventListener("onresize", myFunction());

    // if(window.innerWidth > 767){
    //   window.onscroll = function() {myFunction()};
    //
    //   function myFunction() {
    //       if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
    //           document.getElementById("lcol").className = "col-sm-3 bkg-white brd-top col-right fixed-top";
    //           document.getElementById("nav").className = "navbar navbar-default navbar-static-top bkg-white shw-nav nav-fixed";
    //       } else {
    //           document.getElementById("lcol").className = "col-sm-3 bkg-white brd-top col-right";
    //           document.getElementById("nav").className = "navbar navbar-default navbar-static-top bkg-white shw-nav";
    //       }
    //   }
    // };
    // else {
    //   document.getElementById("lcol").className = "col-sm-3 bkg-white brd-top col-right fixed-top";
    //   document.getElementById("nav").className = "navbar navbar-default navbar-static-top bkg-white shw-nav nav-fixed";
    // }






// window.onload = function(){
//   // Captura Formulario Registro
//   var formRegistro = document.querySelector("#form-registro");
//   var boton = document.querySelector("#boton");
//
//   // Muestro los usuarios que trae AJAX
//
//   if (formRegistro!=  null) {
//     formRegistro.onsubmit = function(enviar) {
//       boton.setAttribute("disabled", "false");
//       boton.setAttribute("value", "Enviando...");
//       if (!validaRegistro()) {
//         enviar.preventDefault();
//         console.log("errores");
//       } else {
//         console.log("formulario ok");
//         var pagina="iniciio.php"
//         setTimeout ("redireccionar()", 20000);
//       }
//       boton.disabled=false;
//       boton.value="Registrarse";
//     }
//   }
//
//   var formLogin = document.querySelector("#form-login");
//   console.log(formLogin);
//
//   if (formLogin!= null) {
//     formLogin.onsubmit = function(enviar) {
//       if (!validaLogin()) {
//         enviar.preventDefault();
//         console.log("errores");
//       } else {
//         console.log("login ok");
//       }
//     }
//   }
//  };
$(document).ready(function () {
  $("#user-pill").click(function(){
    $("#user-form").show();
    $("#doctor-form").hide();
    $("#user-pill").addClass("active");
    $("#doctor-pill").removeClass("active");
});
  $("#doctor-pill").click(function(){
    $("#user-form").hide();
    $("#doctor-form").show();
    $("#user-pill").removeClass("active");
    $("#doctor-pill").addClass("active");
});

  $(".menem").justifiedGallery({
    rowHeight : 150,
    lastRow : 'justify',
    margins : 0,
  });
});


function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
};

// function ( document, window, index )
// {
// 	var inputs = document.getElementById("postfile[]");
// 	Array.prototype.forEach.call( inputs, function( input )
// 	{
// 		var label	 = input.nextElementSibling,
// 			labelVal = label.innerHTML;
//
// 		input.addEventListener( 'change', function( e )
// 		{
// 			var fileName = '';
// 			if( this.files && this.files.length > 1 )
// 				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
// 			else
// 				fileName = e.target.value.split( '\\\\ ).pop();
//
// 			if( fileName )
// 				label.querySelector( 'span' ).innerHTML = fileName;
// 			else
// 				label.innerHTML = labelVal;
// 		});
//
// 		// Firefox bug fix
// 		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
// 		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
// 	});
// }( document, window, 0 )

var inputs = document.getElementById("postfile[]");
  Array.prototype.forEach.call( inputs, function( input ) {
    var label  = input.nextElementSibling,
      labelVal = label.innerHTML;

    input.addEventListener( 'change', function( e ) {
        var fileName = '';
        if( this.files && this.files.length > 1 ) {
            fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
        } else {
            fileName = e.target.value.split( '\\' ).pop();
        }

        if( fileName ) {
            label.querySelector( 'span' ).innerHTML = fileName;
        } else {
            label.innerHTML = labelVal;
        }
    });
  });
