<?php
//include de la cabecera en HTML
require_once("plantillas/cabecera.php");
require_once("funciones/funciones.php");
//require_once("tooltips.php");
?>
<!--cuerpo del navegador-->
<div id="navegador">
        <div align="center">
        			<div id="fecha_hora">Venezuela.
					<?php 
						echo fecha_completa();
					?>
				</div>		
            <p><p>
        </div>
	</div>
	<div id="cuerpo">
		<h1>Sistema de Manejo de Archivo</h1>


<div align="center">
    <table >
        <tr>
<!-- formulario de entrada del usuario-->
	    <form action='index2.php' method="post" name='loginForm' id='loginForm'  onSubmit="return validar();">
         <td>
            Usuario:	<input type='text' style="text-transform: uppercase;" size="20" maxlength="25" name='usuario' id='usuario' onmouseover="Tip('<?php echo $principal['nusuario'];?>');" onmouseout="UnTip();">            
            
        </td></tr>
        <tr>
        <td>
										 &nbsp;&nbsp;&nbsp;clave: <input type='password' style="text-transform: uppercase;" size="20" maxlength="25"  name='clave' id="clave" onmouseover="Tip('<?php echo $principal['clave'];?>');" onmouseout="UnTip();">                
        </td></tr>
        <tr>
        <td align="center">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name="Entrar" id="Entrar" value='Ingresar'/>
        </td></tr>
            </form>
    </table>
</div>
<?php
//includer del pie de la pagina en HTML
include("plantillas/pie.php");
?>
