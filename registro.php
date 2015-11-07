<!doctype html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Registro de Donantes</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	

</head>

<body>
<script type="text/javascript">
	function checarOtro(){
	var combo =document.getElementById("ocupacion");
	var inputOtro =document.getElementById("otraOcupacion");
if(combo.selectedIndex==9){
	inputOtro.style.display='block';
}else{
	inputOtro.style.display='none';
}
}

function checarOtro2(){
var combo =document.getElementById("parentesco");
var inputOtro =document.getElementById("otroParentesco");
if(combo.selectedIndex==7){
	inputOtro.style.display='block';
}else{
	inputOtro.style.display='none';
}
}

		function seleccionar(){
	var todos=document.getElementById("todosOrganos")
	var corazon =document.getElementById("corazon");
	var pulmones=document.getElementById("pulmones");
	var pancreasYBazo =document.getElementById("pancreasYBazo");
	var huesos=document.getElementById("huesos");
	var tendones=document.getElementById("tendones");
	var cartilagos=document.getElementById("cartilagos");
	var higado=document.getElementById("higado");
	var rinones=document.getElementById("rinones");
	var piel=document.getElementById("piel");
	var corneas=document.getElementById("corneas");
	var vasosS=document.getElementById("vasosS");
	
	if (todos.checked == true) {
		corazon.checked=true;
		pulmones.checked=true;
		pancreasYBazo.checked=true;
		huesos.checked=true;
		tendones.checked=true;
		cartilagos.checked=true;
		higado.checked=true;
		rinones.checked=true;
		piel.checked=true;
		corneas.checked=true;
		vasosS.checked=true;

		corazon.disabled=true;
		pulmones.disabled=true;
		pancreasYBazo.disabled=true;
		huesos.disabled=true;
		tendones.disabled=true;
		cartilagos.disabled=true;
		higado.disabled=true;
		rinones.disabled=true;
		piel.disabled=true;
		corneas.disabled=true;
		vasosS.disabled=true;


		

	}else{
		corazon.checked=false;
		pulmones.checked=false;
		pancreasYBazo.checked=false;
		huesos.checked=false;
		tendones.checked=false;
		cartilagos.checked=false;
		higado.checked=false;
		rinones.checked=false;
		piel.checked=false;
		corneas.checked=false;
		vasosS.checked=false;

		corazon.disabled=false;
		pulmones.disabled=false;
		pancreasYBazo.disabled=false;
		huesos.disabled=false;
		tendones.disabled=false;
		cartilagos.disabled=false;
		higado.disabled=false;
		rinones.disabled=false;
		piel.disabled=false;
		corneas.disabled=false;
		vasosS.disabled=false;

		

	}

}


</script>

	<div id="login">

		
		<form action="insertar_info.php" method="post">

			<fieldset>
				<table class="tabulados" >
					<tr>
							<th colspan="5"><h2><span class="fontawesome-lock"></span>Datos Generales del Donador</h2></th>
					</tr>
						<tr>
							<td><label for="name">Nombre Completo </label></td>
							<td><input type="text" required maxlength="30" name="name" id="name"  placeholder="Nombre" ></td>
							<td><input type="text" required maxlength="30" id="apellidoP" name="apellidoP" placeholder="Apellido Paterno"></td>
							<td><input  type="text" required maxlength="30" name="apellidoM" id="apellidoM" placeholder="Apellido Paterno"></td>
						</tr>

						<tr>
							<td><label for="Edad">Edad </label></td>
							<td><input type="number" id="edad" name="edad" required maxlength="2"></td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td><label for="Fecha de Nacimiento">Fecha de Nacimiendo *</label></td>
							<td><input type="date" id="fechaN" name="fechaN" required></td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td><label for="Curp">Curp</label></td>
							<td><input type="text" id="curp" name ="curp" required maxlength="18" placeholder="Curp"></td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td><label for="Genero">Genero</label></td>
							<td><select name="genero" id="genero" name="genero" required maxlength="9"> 
 									 <option value="masculino">MASCULINO</option> 
  									<option value="femenino">FEMENINO</option></select> </td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td><label for="Nacionalidad">Nacionalidad</label></td>
							<td><select id="nacionalidad" name="nacionalidad" required >
								<?php
									
									
									$u="root";
									$P="";
									$DB="registro";
									$Sru="localhost";
									$conexion = mysqli_connect("$Sru","$u","$P","$DB");

									mysqli_set_charset($conexion,"utf8");

									$consulta_paises = "select Pais from paises";

									$respuesta = mysqli_query($conexion,$consulta_paises);
									while ($registros=mysqli_fetch_array($respuesta)){
											?><option <?php echo "value='".$registros['Pais']."'";?> ><?php echo $registros['Pais'];}?></option>
								</select></td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td><label for="Estado Civil">Estado Civil</label></td>
							<td><select name="estadoC" id="estadoC" name="estadoC" required> 
 									 <option value="soltero">SOLTERO</option> 
  									<option value="casado">CASADO</option>
  									<option value="divorciado">DIVORCIADO</option>
  									<option value="viudo">VIUDO</option>
  								</select></td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td><label for="Grado de Estudios">Grado de Estudios</label></td>
							<td><select name="gradoE" id="gradoE" name="gradoE" required> 
 									 <option value="primaria">PRIMARIA</option> 
  									<option value="secundaria">SECUNDARIA</option>
  									<option value="preparatoria">PREPARATORIA</option>
  									<option value="licenciatura">LICENCIATURA</option>
  									<option value="maestria">MAESTRIA</option>
  									<option value="Doctorado">DOCTORADO</option>
  								</select></td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td><label for="Ocupacion">Ocupacion</label></td>
							<td><select name="ocupacion"  id="ocupacion" onchange="checarOtro()" required> 
 									 <option value="agente_ventas">AGENTE DE VENTAS</option> 
  									<option value="contador">CONTADOR</option>
  									<option value="licenciado">LICENCIADO</option>
  									<option value="medico">MÉDICO</option>
  									<option value="profesor">PROFESOR</option>
  									<option value="obrero">OBRERO</option>
  									<option value="comerciante">COMERCIANTE</option>
  									<option value="militar">MILITAR</option>
  									<option value="agricultor">AGRICULTOR</option>
  									<option value="otro">OTRO</option>
  								</select></td>
							<td> </td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="text" name="otraOcupacion" id="otraOcupacion" required style="display: none;" value="Otra Ocupacion" onBlur="if(this.value=='')this.value='Otra Ocupacion'" onFocus="if(this.value=='Otra Ocupacion')this.value=''"></td>
						</tr>
<tr>
	<th colspan="5"><h2><span class="fontawesome-lock"></span>Domicilio del Donador</h2></th>
</tr> 
					<tr>
							<td><label for="Dirección">Direccion</label></td>
							<td><input type="text" required id="direccion" name="direccion" maxlength="50" placeholder="Dirección"></td>
							<td></td>
							<td></td>
						</tr>		
						<tr>
							<td><label for="Codigo_Postal">Código Postal</label></td>
							<td><input type="number" name="codigoP" id="codigoP"  maxlength="10"  required maxlength="5" placeholder="Código Postal"></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="Colonia">Colonia</label></td>
							<td><input type="text" name="colonia" id="colonia" required maxlength="40" placeholder="Colonia"></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="Ciudad">Ciudad</label></td>
							<td><input type="text" name="ciudad" id="ciudad" required  maxlength="10" placeholder="Ciudad"></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="Estado">Estado</label></td>
							<td><select name="estado" id="estado" required>
								<?php
									
									
									$u="root";
									$P="";
									$DB="registro";
									$Sru="localhost";
									$conexion = mysqli_connect("$Sru","$u","$P","$DB");
									
									mysqli_set_charset($conexion,"utf8");

									$consulta_estados = "select nombre from estados ";

									$respuesta = mysqli_query($conexion,$consulta_estados);
									while ($registros=mysqli_fetch_array($respuesta)){
											?><option <?php echo "value='".$registros['nombre']."'";?> > <?php echo $registros['nombre'];}?></option>
								
								</select></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="Municipio">Municipio</label></td>
							<td><input type="text" name ="municipio" id="municipio" required maxlength="30" placeholder="Municipio"></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="telefono">Telefono</label></td>
							<td><input type="number" name="telefono" id="telefono" required maxlength="10"></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="Correo">Correo</label></td>
							<td><input type="email" name="email" id="email" required placeholder="Correo@ejemplo.com"></td>
							<td></td>
							<td></td>
						</tr>			
<tr>
	<th colspan="5"><h6> Con fundamento en los artículos 320, 321 y 322 de la Ley General de Salud, otorgo mi consentimiento para que una vez comprobada la perdida de mi vida, se utilicen para trasplante:</h6></th>
</tr>

<tr></tr>
<tr></tr><tr></tr>
<tr>

<td>A)Todos</td>
<td colspan="2" > <input name="todos" type="checkbox"  id="todosOrganos" onclick="seleccionar()" >Todos los órganos y/ó tejidos útiles para trasplante</td>
</tr>
	<td>B)Solo los siguientes</td>
	<td colspan="4"> 
		<input type="checkbox" name="corazon" id="corazon" value="corazon">Corazón
		<input type="checkbox" name="pulmones" id="pulmones" value="pulmones">Pulmones
		<input type="checkbox" name="pancreasYBazo" id="pancreasYBazo" value="pancreas y bazo">Páncreas y Bazo
		<input type="checkbox" name="huesos" id="huesos" value="huesos">Huesos
		<input type="checkbox" name="tendones" id="tendones" value="tendones">Tendones
		<input type="checkbox" name="cartilagos" id="cartilagos" value="cartilagos">Cartílagos
		<input type="checkbox" name="higado" id="higado" value="higado">Hígado
		<input type="checkbox" name="rinones" id="rinones" value="rinones">Riñones
		<input type="checkbox" name="piel" id="piel" value="piel">Piel
		<input type="checkbox" name="corneas" id="corneas" value="corneas">Córneas
		<input type="checkbox" name="vasosS" id="vasosS" value="vasos Sanguineos">Vasos Sanguíneos
	</td>
	<tr>
		<td></td>
	</tr>	

	<tr>
	<th colspan="5"><h6> Referencias Personales. Anote el nombre y domicilio el cónyuge, concubina o concubinario, si tuviere. Si es soltero, nombre y domicilio de los padres y a falta de éstos, de alguno de sus familiares más cercanos.</h6></th>
</tr>
<tr>
							<td><label for="name">Nombre Completo *</label></td>
							<td><input type="text"  maxlength="30" name ="nameO" id="nameO" placeholder="Nombre" required></td>
							<td><input type="text" maxlength="30" name="apellidoPO" id="apellidoPO" placeholder="Apellido Paterno"required></td>
							<td><input type="text" maxlength="30"  name="apellidoMO" id="apellidoMO" placeholder="Apellido Materno" required></td>
						</tr>
<tr>
<td>Parentesco</td>
<td>
<select name="parentesco" id="parentesco" onchange="checarOtro2()" required> 
 									 <option value="hermano(a)">HERMANO(A)</option> 
  									<option value="esposo(a)">ESPOSO(A)</option>
  									<option value="hijo(a)">HIJO(A)</option>
  									<option value="padre/madre">PADRE/MADRE</option>
  									<option value="abuelo/a">ABUELO/A</option>
  									<option value="sobrino">SOBRINO</option>
  									<option value="nieto">NIETO</option>
  									<option value="otro">OTRO</option>
  								</select>
</td>

</tr>
<tr>
<td></td>
<td><input type="text" required id="otroParentesco" name="otroParentesco" style="display: none;" value="Otro Parentesco" onBlur="if(this.value=='')this.value='Otro Parentesco'" onFocus="if(this.value=='Otro Parentesco')this.value=''"></td></td>
</tr>
<tr>
<td>

</td>
</tr>

<tr>
							<td><label for="DireccionO" maxlength="50">Direccion</label></td>
							<td><input type="text" required id="direccionO" name="direccionO" placeholder="Direccion"></td>
							<td></td>
							<td></td>
						</tr>		
						<tr>
							<td><label for="Codigo_PostalO" maxlength="5">Codigo Postal</label></td>
							<td><input type="number" required id="codigoPO" name="codigoPO"  maxlength="10" placeholder="Código Postal" ></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="ColoniaO" maxlength="40">Colonia</label></td>
							<td><input type="text" required id="coloniaO" name="coloniaO" placeholder="Colonia"></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="CiudadO" maxlength="20">Ciudad</label></td>
							<td><input type="text" required id="ciudadO" name="ciudadO" placeholder="Ciudad"></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							
							<td><label for="EstadoO">Estado</label></td>
							<td><select name="estadoO" id="estadoO" required>
								<?php
									
									
									$u="root";
									$P="";
									$DB="registro";
									$Sru="localhost";
									$conexion = mysqli_connect("$Sru","$u","$P","$DB");
									
									mysqli_set_charset($conexion,"utf8");

									$consulta_estados = "select nombre from estados ";

									$respuesta = mysqli_query($conexion,$consulta_estados);
									while ($registros=mysqli_fetch_array($respuesta)){
											?><option <?php echo "value='".$registros['nombre']."'";?> > <?php echo $registros['nombre'];}?></option>
								
								</select></td>
							<td></td>
							<td></td>
						</tr>	

						<tr>
							<td><label for="MunicipioO" maxlength="30">Municipio</label></td>
							<td><input type="text" required name="municipioO" id="municipioO" placeholder="Municipio"></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="telefonoO" maxlength="10">Telefono</label></td>
							<td><input type="number" required id="telefonoO" name="telefonoO" required="required"></td>
							<td></td>
							<td></td>
						</tr>	
						<tr>
							<td><label for="CorreoO">Correo</label></td>
							<td><input type="email" required id="emailO" name="emailO"  required="required"  placeholder="Correo@ejemplo.com"></td>
							<td></td>
							<td></td>
						</tr>			

						<tr>
							<td></td>
							<td></td>
							<td>
								<p><input type="submit" value="Registrarse" ></p>
							</td>
							<td>
								<p><input type="button" value="Regresar" onclick="window.location.href='index.html'"></p>
							</td>
						</tr>

				</table>

  					 

				
				

				
				
				
				

			</fieldset>

		</form>
	</div> <!-- end login -->

</body>	
</html>