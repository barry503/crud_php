<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crud php</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<!-- datatable with bootstrap 5 CDN-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/>

	<!-- <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet"> -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!-- mis estilos -->
	<link rel="stylesheet" type="text/css" href="../public/css/estilos.css">

</head>
<body>


	<!-- Contenedor de todo -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-12 text-center">

						<h1 class="container-text">Crud persona <i class="fa fa-user"></i></h1>

					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<!-- seccion del contenido -->
		<section class="content">



			<!-- inicio card -->
			<div class="card">
				<div class="card-header"> <!-- inicio card-header-->
					<h3 class="card-title">persona  <i class="fa fa-user"></i>
						<button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)" >

							<i class="fa fa-plus-circle"></i>Agregar

						</button>
					</h3>

				</div><!-- / fin card-header-->


				<!-- inicio card-body  -->
				<div class="card-body" >




					<div class="box-tools pull-right">  
						<!-- nose si es necesario en esta version -->
					</div>

					<!-- inicio panel-body o cuerpo de tabla -->
					<div class="panel-body table-responsive" id="listadoregistros">
						<!-- inicio tabla -->
						<table id="tbllistado" class="table display nowrap dataTable dtr-inline collapsed table-borderless table-striped table-bordered table-condensed table-hover" ><!-- table-earning = clase que causa pointer-->
							<div class="box-tools pull-right"></div>
							<thead class="bg-dark text-white">
								<th>Acciones</th>
								<th>ID</th>
								<th>Nombres</th>
								<th>mail</th>
								<th>edad</th>


							</thead>  
							<tbody>
								<!-- datos de bd en el archivo url: scripts/ .js -->
							</tbody>



						</table>
						<!-- / fin tabla -->

					</div>




					<!-- inicio panel-body -->
					<div class="panel-body"  id="formularioregistros">
						<!--inicio del formulario de registrar y editar -->
						<form name="formulario" id="formulario" method="POST">


							<div class="col-md-6">
								<h4 class="text-center">Agregar persona</h4>
								<div class="mb-3">
									<label for="nombres" class="form-label">Nombres y Apellidos</label>
									<input type="hidden" class="form-control" name="id" id="id" value="0">
									<input type="text" class="form-control" name="nombres" id="nombres" placeholder="pedro alvarado" required>
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="mail">@</span>
									<input type="email" name="email" id="email" class="form-control" placeholder="escribe tu correo" aria-label="correo" aria-describedby="mail" required>
								</div>

								<div class="mb-3">
									<label for="edad" class="form-label">Edad</label>
									<input class="form-control form-control-sm" type="number" name="edad" id="edad" placeholder="edad" aria-label="Escribe tu edad" required>
								</div>

							</div>




							<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<button class="btn btn-info " type="submit" id="btnGuardar">
									<i class="fa fa-save"></i> Guardar
								</button>

								<button class="btn btn-danger"  onclick="cancelarform()" type="button">
									<i class="fa fa-arrow-circle-left"></i> Cancelar
								</button>



							</div>
						</form>

					</div><!-- fin panel-body -->

				</div> <!-- / card body fin -->



			</div>  <!-- / fin card  -->


		</section>
		<!--fin de  seccion del contenido -->


	</div>
	<!-- fin  Contenedor de todo -->
<div class="b-example-divider"></div>


	<div class="container bg-dark text-white">
	  <footer class="py-3 my-4">
	    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
	      <li class="nav-item "><h3>Creado por<a href="https://github.com/barry503" class="nav-link px-2 text-muted">Barry503<i class="fa-brands fa-github"></i></h3></a></li>
	    </ul>
	    <p class="text-center text-muted">© 2022 RaizTecnologica, Inc</p>
	  </footer>
	</div>


	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<!-- add jquery library -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- dataTable with bootstrap 5 CDN-->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.js"></script>

	<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script src="scripts/alertas.js"></script>

	<script src="scripts/script_persona.js"></script>
</body>
</html>