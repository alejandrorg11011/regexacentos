<!DOCTYPE html>
<html>
<head>
	<title>Regex acentos</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>
<body>

	<div class="col-sm-5 col-sm-offset-2">
		
		<form  action="" method="POST">
			
			<div class="form-group">
				<label>Nombre:</label>
				<input class="form-control" type="text" name="nombre" id="nombre" onblur="checkTexto( this )">
				<p id="resnombre" style="display: none">Ha utilizado carácteres no válidos</p>
			</div>


			<div class="form-group">
				<label>Apellido 1:</label>
				<input class="form-control" type="text" name="apellido1" id="apellido1" onblur="checkTexto( this )">
				<p id="resapellido1" style="display: none">Ha utilizado carácteres no válidos</p>
			</div>

			<p><button>Enviar</button></p>

		</form>

	</div>


	<script type="text/javascript">

		function checkTexto( txt )
		{	
			//referencia: lestras, espacios, á é í ó ú Á É Í Ó Ú à è ì ò ù À È Ì Ò Ù ä ë ï ö ü Ä Ë Ï Ö Ü ñ Ñ
     		var patt = /^[a-zA-Z \u00E1\u00E9\u00ED\u00F3\u00FA\u00C1\u00C9\u00CD\u00D3\n00DA\u00E0\u00E8\u00EC\u00F2\u00F9\u00C0\u00C8\u00CC\u00D2\u00D9\u00E4\u00EB\u00EF\u00F6\u00FC\u00C4\u00CB\u00CF\u00D6\u00DC\u00F1\u00D1]+$/g;

		     if( patt.test( txt.value ) ){
		         console.log("ok");
		         document.querySelector("#res" + txt.id).style.display = "none";
		     } else {
		        txt.focus();//en chrome si pone el foco de nuevo en el campo con error, pero en firefox no.
		        document.querySelector("#res" + txt.id).style.display = "inline";
		     }
		}
	</script>


</body>
</html>