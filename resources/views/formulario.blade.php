<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/morelia.jpg" rel="icon">
  <title>Zoo of Snakes</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
  

</head>

<body>


   <section class="form_wrap">

      <section class="cantact_info">
          <section class="info_title">
              <span class="fa fa-user-circle"></span>
              <h2>HAZ TU <br>SOLICITUD</h2>
          </section>
          <section class="info_items">
              <p><span class="fa fa-envelope"></span> zoo_of_snakes@gmail.com</p>
              <p><span class="fa fa-mobile"></span> +1(809) 229-6611</p>
          </section>
      </section>

      <form action="" class="form_contact">
          <h2>Completa con tus datos personales</h2>
          <div class="user_info">
              <label for="names">Nombres </label>
              <input type="text" id="names">

              <label for="names">Apellidos </label>
              <input type="text" id="lastname">

              <label for="age">Edad</label>
              <input type="number" id="age">

              <label for="sangre">Tipo de sangre</label>
              <input type="text" id="sangre">

              <label for="phone">Telefono / Celular</label>
              <input type="tel" id="phone">

              <label for="cedula">Numero cedula </label>
              <input type="number" id="cedula">

              <label for="hijo">¿Tiene hijos pequeños?</label>
              <input type="text" id="hijo">

              <label for="mensaje">- Tipo de serpiente 

                 </label>
              <textarea tyoe="text"></textarea>

              <input type="button" value="Enviar solicitud" id="btnSend">
          </div>
      </form>

  </section>
  

<style>

@font-face {
  font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}

*{
    margin: 0;
    padding: 0;
    box-sizing:border-box;
}

:focus{
    outline: none;
}

body{
  background: pink;
    font-family: 'Open sans';
}


/* FORMULARIO =================================== */

.form_wrap{
    width: 1050px;
    height: 900px;
    margin: 50px auto;
    display: flex;

    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

/* Informacion de Contacto*/

.cantact_info::before{
    content: '';
    width: 100%;
    height: 100%;

    position: absolute;
    top: 0;
    left: 0;

    background: #000000;
    opacity: 0.9;
}

.cantact_info{
    width: 58%;
    position: relative;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    background-image: url('../fondo.jpg');
    background-size: cover;
    background-position: center center;

}

.info_title,
.info_items{
    position: relative;
    z-index: 2;
    color: #fff;
}

.info_title{
    margin-bottom: 40px;
}

.info_title span{
    font-size: 100px;
    display: block;
    text-align: center;
    margin-bottom: 15px;
}

.info_title h2{
    font-size: 35px;
    text-align: center;
}

.info_items p{
    display: flex;
    align-items: center;

    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
}

.info_items p:nth-child(1) span{
    font-size: 30px;
    margin-right: 10px;
}

.info_items p:nth-child(2) span{
    font-size: 50px;
    margin-right: 15px;
    margin-left: 4px;
}


/* Formulario de contacto*/
form.form_contact{
    width: 62%;
    padding: 30px 40px;
}

form.form_contact h2{
	font-size: 25px;
	font-weight: 600;
	color: #303030;
	margin-bottom: 30px;
}

form.form_contact .user_info{
    display: flex;
    flex-direction: column;
}

form.form_contact label{
    font-weight: 600;
}

form.form_contact input,
form.form_contact textarea{
    width: 100%;
    padding: 8px 0px 5px;
    margin-bottom: 20px;

    border: none;
    border-bottom: 2px solid #D1D1D1;

    font-family: 'Open sans';
	color: #5A5A5A;
	font-size: 14px;
	font-weight: 400;
}

form.form_contact textarea{
    max-width: 100%;
    min-width: 100%;
    max-height: 90px;
}

form.form_contact input[type="button"]{
    width: 180px;
	background: #000000;
	padding: 10px;
	border: none;
	border-radius: 25px;

    align-self: flex-end;

    color: #fff;
	font-family: 'Open sans';
	font-size: 16px;
	font-weight: 600;
	cursor: pointer;
}

form.form_contact input[type="button"]:hover{
    background: #4ecbeb;
}

/* Ventana de errores*/
.modal_wrap{
    width: 100%;
    height: 100vh;
    background: rgba(0,0,0,0.7);

    position: fixed;
    top: 0;
    left: 0;
    z-index: 3;

    display: flex;
    justify-content: center;
    align-items: center;
}

.mensaje_modal{
    background: #fff;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
    width: 400px;
    padding: 30px 20px 15px;
}

.mensaje_modal h3{
    text-align: center;
    font-family: 'Ubuntu';
	font-size: 20px;
	font-weight: 400;
}

.mensaje_modal h3:after{
    content: '';
	display: block;
	width: 100%;
	height: 1px;
	background: #C5C5C5;
	margin: 10px 0px 15px;
}

.mensaje_modal p{
    font-size: 16px;
    color: #606060;
}

.mensaje_modal p:before{
    content: "\f00d";
    font-family: FontAwesome;
    display: inline-block;
    color: #E25151;
    margin-right: 8px;
}

#btnClose{
    display: inline-block;
	padding: 3px 10px;
	margin-top: 10px;

	background: #E25151;
	color: #fff;
	border: 2px solid #B14141;
	cursor: pointer;

}

</style>

   
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
