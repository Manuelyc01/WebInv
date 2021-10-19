<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<style>
    body { background: #E3DDDB; }
	.container {
		width:996px;
		margin:0px auto;
		font-size:12px;
        
	}
	section{
		padding: 10px;
		background:#E7DFDD;
		-moz-border-radius:5px;-webkit-border-radius:5px;-o-border-radius:5px;border-radius:5px;
	}
	section {
		float: left;
		width: 50%;
	}
	
	/* para 980px o menos */
	@media screen and (max-width:980px) {
		.container {
			width:98%;
		}
		section {
			width:68%;
		}
	}
 
	/* para 700px o menos */
	@media screen and (max-width:700px) {
		section {
			float:none;
			width:96%;
		}
		section {
			font-size:10px;
		}
		
	}
 
	/* para 480px o menos */
	@media screen and (max-width:480px) {
		
		section {
			font-size:10px;
		}
		section {
			width:94%;
		}
	}
    
       
       .clase_table {
        border-collapse: separate;
        border-spacing: 10;
      }
      .clase_table{
          border: 1px solid black;
          border-radius: 10px;
          background: #AB4BDF;
          -moz-border-radius: 10px;
          padding: 10px;
      }
       
	</style>
 
</head>
 
<body>
 
<div class="container">
	
    <?php
    //dd($parametros['wpforms']['fields']); 
    ?>
	<section>
    <table width="100%" class="image">
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><strong style="font-size: small;color:black">ID DE SOLICITUD</strong></td>
        </tr>
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><strong style="font-size: small;color:black"></strong></td>
        </tr>
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><span style="font-size: small;">{{@$element['id_soli_ofi_equi_tra']}}</span></td>
        </tr>
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><strong style="font-size: small;color:black"></strong></td>
        </tr>



         <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><strong style="font-size: small;color:black">DESCRIPCION DE SOLICITUD</strong></td>
        </tr>
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><strong style="font-size: small;color:black"></strong></td>
        </tr>
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><span style="font-size: small;">{{@$element['descripcion']}}</span></td>
        </tr>
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><strong style="font-size: small;color:black"></strong></td>
        </tr>
        


        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><strong style="font-size: small;color:black">DATOS DE TRABAJADOR</strong></td>
        </tr>
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><strong style="font-size: small;color:black"></strong></td>
        </tr>
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><span style="font-size: small;">{{@$trabajador->co_colaborador}}:&nbsp;{{@$trabajador->$no_colaborador}}&nbsp;{{@$trabajador->ap_paterno_colaborador}}&nbsp;{{@$trabajador->ap_materno_colaborador}}</span></td>
        </tr>
        <tr>
          <td width="5%"  align="right"></td>
          <td width="95%"  align="left"><strong style="font-size: small;color:black"></strong></td>
        </tr>
    </table>
    
    

    <table width="100%" class="image2">
		
		
    </table>
	</section>

</div>
</body>
</html>