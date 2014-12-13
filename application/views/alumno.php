<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gestión de Alumnos</title>

		<!-- Bootstrap -->
		<link href="media/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-12">
							<nav class="navbar navbar-inverse" role="navigation">
								<div class="container-fluid">
									<!-- Brand and toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<a class="navbar-brand" href="#">Gestión de Usuarios - UTP</a>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
								</div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<form id="formulario" method="POST">
								<div class="form-group">
									<label for="">Código</label>
									<input type="text" name="codigo" class="form-control" id="codigo" placeholder="Código">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Apellido Paterno</label>
									<input type="text"  name="ape_paterno" class="form-control" id="ape_paterno" placeholder="Apellido Paterno">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Apellido Materno</label>
									<input type="text"  name="ape_materno" class="form-control" id="ape_materno" placeholder="Apellido Materno">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Nombres</label>
									<input type="text"  name="nombres" class="form-control" id="nombres" placeholder="Nombre">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Curso</label>
									<input type="text"  name="curso" class="form-control" id="curso" placeholder="Curso">
								</div>
								<a id="btn-save" class="col-md-12 btn btn-success">Guardar</a>
								<input name="id" type="text" id="id" class="hide" value="">
							</form>
						</div>
					</div><hr>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped" id="tabla-alumnos">
								<thead>
									<tr>
										<th>Código</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Nombres</th>
										<th>Curso</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
                                    <?php foreach ($aAlumno as $oAlumno): ?>
									<tr data-info="<?php echo $oAlumno->id ?>">
										<td><?php echo $oAlumno->codigo ?></td>
										<td><?php echo $oAlumno->ape_paterno ?></td>
										<td><?php echo $oAlumno->ape_materno ?></td>
										<td><?php echo $oAlumno->nombres ?></td>
										<td><?php echo $oAlumno->curso ?></td>
										<td>
											<button data-id="<?php echo $oAlumno->id ?>" type="button" class="btn btn-primary btn-editar"><span class="glyphicon glyphicon-pencil"></span></button>
											<button data-id="<?php echo $oAlumno->id ?>" type="button" class="btn btn-danger btn-delete"><span class="glyphicon glyphicon-trash"></span></button>
										</td>
									</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="media/js/jquery-1.11.1.min.js"></script>
	<script src="media/js/bootstrap.min.js"></script>
	<script src="media/js/customize.js"></script>
</body>
</html>