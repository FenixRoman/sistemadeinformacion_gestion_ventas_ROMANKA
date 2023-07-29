<?php

include("db.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romanka C.A. Repuestos para Motos</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<style>
   @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
    
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Montserrat Alternates', sans-serif;
	}
	body{
	

        background-color: #AAA2A2;
       
	}
	.capa{
		position: fixed;
		width: 100%;
		height: 100vh;
		/*background: rgba(0,0,0,0.6);*/
		z-index: -1;
		top: 0;left: 0;
	}
	/*Estilos para el encabezado*/
	.header{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 80px;
        background: #fff;
        box-shadow: 0 4px 25px -22px black;
        /*z-index: 2;*/
	}
	.container{
		width: 90%;
		max-width: 1200px;
		margin: auto;
	}
	.container .btn-menu, .logo{
		float: left;
		line-height:100px;
	}
	.container .btn-menu label{
		color: #0a0a0a;
		font-size: 25px;
		cursor: pointer;
	}
	.logo h1{
		color: black;
		font-weight: 400;
		font-size: 22px;
		margin-left: 10px;
	}
    .logo h1 b{
        color: #ff7332;
        font-size: 20px;
    }

    .logo p{
        position: fixed;
        width: 100%;
        max-width: 1000px;
        top: -10px;
        right: 50px;
        font-size: 14px;
        font-family: 'Times New Roman', Times, serif;
        text-align: right;


    }
 
	.container .menu{
		float: right;
		line-height: 100px;
    
	}
	.container .menu a{
		display: inline-block;
		padding: 15px;
		line-height: normal;
		text-decoration: none;
		color: #fff;
		transition: all 0.3s ease;
		border-bottom: 2px solid transparent;
		font-size: 15px;
		margin-right: 5px;
	}
	.container .menu a:hover{
		border-bottom: 2px solid #c7c7c7;
		padding-bottom: 5px;
	}
	/*Fin de Estilos para el encabezado*/

	/*Menù lateral*/
	#btn-menu{

        display: none;
        
	}
	.container-menu{
		position: absolute;
		background: rgba(0,0,0,0.5);
		width: 100%;
		height: 100vh;
		top: 0;left: 0;
		transition: all 500ms ease;
		opacity: 0;
		visibility: hidden;
	}
	#btn-menu:checked ~ .container-menu{
		opacity: 1;
		visibility: visible;
	}
	.cont-menu{
		width: 100%;
		max-width: 250px;
		background: #1c1c1c;
		height: 100vh;
		position: relative;
		transition: all 500ms ease;
		transform: translateX(-100%);
	}
	#btn-menu:checked ~ .container-menu .cont-menu{
		transform: translateX(0%);
	}
	.cont-menu nav{
		transform: translateY(15%);
	}
	.cont-menu nav a{
		display: block;
		text-decoration: none;
		padding: 20px;
		color: #c7c7c7;
		border-left: 5px solid transparent;
		transition: all 400ms ease;
	}
	.cont-menu nav a:hover{
		border-left: 5px solid #c7c7c7;
		background: #1f1f1f;
	}
	.cont-menu label{
		position: absolute;
		right: 5px;
		top: 10px;
		color: #fff;
		cursor: pointer;
		font-size: 18px;
	}
    .espacio-tabla{
        padding: 20%;
    }
	/*Fin de Menù lateral*/

    .espacio-tabla{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        border: solid 1px rgb(255, 255, 255, 0.2);
        

    }
    table{
        color: #1f1f1f;
        font-size: 14px;
        table-layout: fixed;
        border-collapse: collapse;
    }
    thead{
        background: #595959;
    }
    th{
        padding: 20px 15px;
        font-weight: 700;
        text-transform: uppercase;
    }
    td{
        padding: 15px;
        border-bottom: solid 1px rgb(255, 255, 255, 0.2);
    }
    tbody tr{
        cursor: pointer;
    }
    tbody tr:hover{
        background: gray;
    }
	</style>

    <body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu"><i class="bi bi-list" id="btn"></i></label>
		</div>
			<div class="logo">
				<h1>ROMANKA C.A. <b>Repuestos de motos</b></h1>
                
                    <p><b>Venezuela</b>, 26 de juliio de 2023 </p>
                
                
			</div>
            
                
            
			
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
            <a href="#"><i class="bi bi-bar-chart-fill"></i>Ventas</a>
            <a href="#"><i class="bi bi-box2-fill"></i>Productos</a>
            <a href="#"><i class="bi bi-card-list"></i>Clientes</a>
            <a href="#"><i class="bi bi-archive-fill"></i>Proveedor</a>
            <a href="#"><i class="bi bi-file-person"></i>Usuario</a>
		</nav>
		<label for="btn-menu"><i class="bi bi-x-lg" ></i></label>
	</div>

</div>

<div class="espacio-tabla">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CONTACTO</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">ESTADO</th>
    </tr>
  </thead>

  <tbody>

  <?php
  
  $sql="SELECT * FROM cliente";
  $result= mysqli_query($conexion,$sql);

  while($mostrar = mysqli_fetch_array($result)){

  

  ?>
    <tr>
      <th ><?php echo $mostrar['ID_cliente']?></th>
      <th ><?php echo $mostrar['Nombre']?></th>
      <th ><?php echo $mostrar['Apellido']?></th>
      <th ><?php echo $mostrar['Contacto']?></th>
      <th ><?php echo $mostrar['Dirección']?></th>
      <th ><?php echo $mostrar['Estado']?></th>
    </tr>
    
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</body>
</html>