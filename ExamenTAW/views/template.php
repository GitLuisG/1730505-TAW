<!DOCTYPE html>
<html>
<head>
	<title>Examen TAW</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <style>
        header{
			position:relative;
			margin:auto;
			text-align:center;
			padding:5px;
        }

            nav{
                position:relative;
                margin:auto;
                width:100%;
                height:auto;
                background:black;
            }

            nav ul{
                position:relative;
                margin:auto;
                width:50%;
                text-align: center;
            }

            nav ul li{
                display:inline-block;
                width:10%;
                line-height: 50px;
                list-style: none;
            }

            nav ul li a{
                color:white;
                text-decoration: none;
            }

            section{
                position:relative;
                padding:20px;
            }

	</style>
</head>
<body>
	<header>
        <h1>Systema de gestion de libros</h1>
        </header>
        <div class="conteiner">
    
		<?php
		//incluir el menú de navegación
		include MODELS['navegacion'];
         ?>
         
		 <section>
		 	<!--contenedor donde se muestran las opciones del sistemaa -->

		 	<?php
		 	$mvc = new MvcController();
		 	$mvc -> enlaces();
		 	 ?>

		 </section>
</div>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>