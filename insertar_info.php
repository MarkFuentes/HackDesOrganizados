<html>
<head>
	<title></title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
    
</head>
<script>
function cerrarTodo(){
   $("#dialogo").dialog({
      
      show: { effect: "explode", duration: 1200 },
      modal: true,
      title: "Confirmacion",
      width: 550,
      minWidth: 400,
      maxWidth: 650,
      hide: { effect: "explode", duration: 2000 },
   open: function(event, ui) { $(".ui-dialog-titlebar-close", ui.dialog).hide(); },
   buttons: [
    {
      text: "SALIR",
      icons: {
        primary: "ui-icon-heart"
      },

      click: function() {

        $( this ).dialog( "close" );
        window.location.replace('index.html');
      }
 
      // Uncommenting the following line would hide the text,
      // resulting in the label being used as a tooltip
      //showText: false
    }
  ]
});
}

function cerrarDialog(){


}
</script>
<body>

<div id="dialogo" style="display: none">
   <center><p>DONADOR REGISTRADO CON ESXITO !GRACIAS!</p></center>
   <br>
   
</div>

</body>
</html>

<?php 

									$u="root";
									$P="";
									$DB="registro";
									$Sru="localhost";
									$conexion = mysqli_connect("$Sru","$u","$P","$DB");

	$us_nom = $_REQUEST['name'];  $us_paterno = $_REQUEST['apellidoP'];
	$us_materno = $_REQUEST['apellidoM'];	$us_edad = $_REQUEST['edad'];
	$us_fecha = $_REQUEST['fechaN'];	$us_curp = $_REQUEST['curp'];
	$us_genero = $_REQUEST['genero'];	$us_nacionalidad = $_REQUEST['nacionalidad'];
	$us_estadoc = $_REQUEST['estadoC'];	$us_grado = $_REQUEST['gradoE'];
	$us_ocupacion = $_REQUEST['ocupacion']; $otraOcupacion = $_REQUEST['otraOcupacion'];
	$us_dom = $_REQUEST['direccion'];	$us_codpostal = $_REQUEST['codigoP'];
	$us_colonia = $_REQUEST['colonia'];	$us_ciudad = $_REQUEST['ciudad'];
	$us_estado = $_REQUEST['estado'];	$us_municipio = $_REQUEST['municipio'];
	$us_tel = $_REQUEST['telefono'];	$us_correo = $_REQUEST['email'];

	if(isset($_REQUEST['todos'])){
			$us_pulmones =  'Si';	
			$us_corazon =  'Si';	
			$us_pancreas =  'Si';
			$us_huesos =  'Si';	
			$us_tendones =  'Si';
			$us_cartilagos =  'Si';
			$us_higado = 'Si';
			$us_riñones =  'Si';	
			$us_piel =  'Si';
			$us_corneas = 'Si';
			$us_vasosS = 'Si';

	}

	if(isset($_REQUEST['corazon'])){
			$us_corazon =  'Si';	
	}else{
		$us_corazon = 'No';
	}

	if(isset($_REQUEST['pulmones'])){
			$us_pulmones =  'Si';	
	}else{
		$us_pulmones = 'No';
	}

	if(isset($_REQUEST['pancreasYBazo'])){
			$us_pancreas =  'Si';	
	}else{
		$us_pancreas = 'No';
	}

	if(isset($_REQUEST['huesos'])){
			$us_huesos =  'Si';	
	}else{
		$us_huesos = 'No';
	}

	if(isset($_REQUEST['tendones'])){
			$us_tendones =  'Si';	
	}else{
		$us_tendones = 'No';
	}

	if(isset($_REQUEST['cartilagos'])){
			$us_cartilagos =  'Si';	
	}else{
		$us_cartilagos = 'No';
	}

	if(isset($_REQUEST['higado'])){
			$us_higado = 'Si';	
	}else{
		$us_higado = 'No';
	}

	if(isset($_REQUEST['rinones'])){
			$us_riñones =  'Si';
	}else{
		$us_riñones = 'No';
	}

	if(isset($_REQUEST['piel'])){
			$us_piel =  'Si';	
	}else{
		$us_piel = 'No';
	}

	if(isset($_REQUEST['corneas'])){
			$us_corneas = 'Si';	
	}else{
		$us_corneas = 'No';
	}
	if(isset($_REQUEST['vasosS'])){
			$us_vasosS = 'Si';	
	}else{
		$us_vasosS = 'No';
	}

	$ref_nom = $_REQUEST['nameO'];	$ref_paterno = $_REQUEST['apellidoPO'];
	$ref_materno = $_REQUEST['apellidoMO'];	$ref_parentesco = $_REQUEST['parentesco']; $ref_parentescoO = $_REQUEST['otroParentesco'];
	$ref_direccion = $_REQUEST['direccionO'];	$ref_colonia = $_REQUEST['coloniaO'];
	$ref_ciudad = $_REQUEST['ciudadO'];	$ref_codigo = $_REQUEST['codigoPO'];
	$ref_estado = $_REQUEST['estadoO'];	$ref_municipio = $_REQUEST['municipioO'];
	$ref_tel = $_REQUEST['telefonoO'];	$ref_correo = $_REQUEST['emailO'];



	
	if($us_ocupacion == 'otro'){
		$us_ocupacion = $otraOcupacion;
	}

	if($ref_parentesco == 'otro'){
		$ref_parentesco = $ref_parentescoO;
	}
	$consulta_sql = "insert into usuario (id_usuario,nombre,a_paterno,a_materno,edad,fecha_nacimiento,curp,genero,nacionalidad,estado_civil,grado_estudios,ocupacion) 
					values ('','$us_nom','$us_paterno','$us_materno',$us_edad ,'$us_fecha' ,'$us_curp','$us_genero','$us_nacionalidad','$us_estadoc','$us_grado','$us_ocupacion')";				

	$consulta_sql1 ="insert into dom_usuario (direccion,codigo_postal,colonia,ciudad,estado,municipio,telefono,e_correo) 
					values ('$us_dom',$us_codpostal,'$us_colonia','$us_ciudad','$us_estado','$us_municipio',$us_tel,'$us_correo')";
	$query_id = "select id_usuario from usuario";
	$consulta_sql3 = "insert into referencias (nombre,a_paterno,a_materno,parentesco,direccion,colonia,ciudad,codigo_postal,estado,municipio,telefono,e_correo) 
					values ('$ref_nom','$ref_paterno','$ref_materno','$ref_parentesco','$ref_direccion','$ref_colonia','$ref_ciudad',$ref_codigo,'$ref_estado','$ref_municipio',$ref_tel,'$ref_correo')";				

	$respuesta_sql = mysqli_query($conexion,$consulta_sql)or die ("Error en ejecutar la consulta usuario");
	$respuesta_sql = mysqli_query($conexion,$consulta_sql1)or die ("Error en ejecutar la consult dom_usuario");
	$respuesta_sql1 = mysqli_query($conexion,$query_id) or die ("Error en consultar el id");
	$respuesta_sql = mysqli_query($conexion,$consulta_sql3)or die ("Error en ejecutar la consulta referencias");
	while ($registros=mysqli_fetch_array($respuesta_sql1)){
		$id_usuario_bd = $registros['id_usuario'];

	}
	$consulta_sql2 ="insert into organos(corazon, pulmones, pancreas_o_bazo, hueso, tendones, cartilago, higado, rinones, piel, corneas, vasos_sanguineos, id_usuario) 
					values ('$us_corazon','$us_pulmones','$us_pancreas','$us_huesos','$us_tendones','$us_cartilagos','$us_higado','$us_riñones','$us_piel','$us_corneas','$us_vasosS',$id_usuario_bd)";
	$respuesta_sql = mysqli_query($conexion,$consulta_sql2)or die ("Error en ejecutar la consulta organos");

	if(isset($respuesta_sql)){
		echo "<script language='javascript'>";
		echo "cerrarTodo();";
		echo "</script>";
	}
	mysqli_close($conexion);



	/*echo $us_nom."<br>";  echo $us_paterno."<br>";
	echo $us_materno."<br>";  echo $us_edad."<br>";
	echo $us_fecha."<br>";  echo $us_curp."<br>";
	echo $us_genero."<br>";  echo $us_nacionalidad."<br>";
	echo $us_estadoc."<br>";  echo $us_grado."<br>";
	echo $us_ocupacion."<br>";  echo $otraOcupacion."<br>";
	echo $us_dom."<br>";  echo $us_codpostal."<br>";
	echo $us_colonia."<br>";  echo $us_ciudad."<br>";
	echo $us_estado."<br>";  echo $us_municipio."<br>";
	echo $us_tel."<br>";  echo $us_correo."<br>";
	echo $us_orgtodos."<br>"; 
	 echo $us_corazon."<br>"; 
	echo $us_pulmones."<br>";  echo $us_pancreas."<br>";
	echo $us_huesos."<br>";
	echo $us_tendones."<br>";
	echo $us_cartilagos."<br>";
	echo $us_higado."<br>";
	echo $us_riñones."<br>";
	echo $us_piel."<br>";
	echo $us_corneas."<br>";
	echo $us_vasosS."<br>";
	echo $ref_nom."<br>";
	echo $ref_paterno."<br>";
	echo $ref_materno."<br>";
	echo $ref_parentesco."<br>";
	echo $ref_direccion."<br>";
	echo $ref_colonia."<br>";
	echo $ref_ciudad."<br>";
	echo $ref_codigo."<br>";
	echo $ref_estado."<br>";
	echo $ref_municipio."<br>";
	echo $ref_tel."<br>";
	echo $ref_correo."<br>";*/
?>