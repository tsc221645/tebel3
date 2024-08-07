@extends('templates.frontend')

@section('content')
	<div class="pd-ltr-20 xs-pd-20-10">
			<div class="card-box mb-30">
				<div class="clearfix pd-20">
					<div class="pull-left">
						<h4 class="h4">Promociones</h4>
					</div>
				</div>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="back/vendors/images/card1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="back/vendors/images/card2.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="back/vendors/images/card3.jpg" alt="Third slide">
						</div>
					</div>
				</div>
			</div>		

				<div class="title pb-20 pt-20">
						<h2 class="h3 mb-0">Categoria de productos</h2>
				</div>

				<div class="container mt-5">
					<div class="row clearfix">
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-primary card-box">
								<div class="card-header">Limpieza</div>
								<div class="card-body">
									<h5 class="card-title text-white">Limpieza</h5>
									<p class="card-text">
										Productos y servicios relacionados con la limpieza.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-secondary card-box">
								<div class="card-header">Automotriz</div>
								<div class="card-body">
									<h5 class="card-title text-white">Automotriz</h5>
									<p class="card-text">
										Productos y servicios relacionados con el sector automotriz.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-success card-box">
								<div class="card-header">Escolar</div>
								<div class="card-body">
									<h5 class="card-title text-white">Escolar</h5>
									<p class="card-text">
										Productos y servicios relacionados con el sector escolar.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="title pb-20 pt-20">
						<h2 class="h3 mb-0">Atencion al cliente</h2>
				</div>

				<div class="container mt-5">
					<div class="row clearfix">
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-primary card-box">
								<div class="card-header">Redes sociales</div>
								<div class="card-body">
									<h5 class="card-title text-white">Redes sociales</h5>
									<p class="card-text">
										Facebook, Instagram y Twitter.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-secondary card-box">
								<div class="card-header">Correos</div>
								<div class="card-body">
									<h5 class="card-title text-white">Correos</h5>
									<p class="card-text">
										Example@gmail.com, Example2@gmail.com
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="card text-white bg-success card-box">
								<div class="card-header">Numero telefonico</div>
								<div class="card-body">
									<h5 class="card-title text-white">Numeros de la empresa</h5>
									<p class="card-text">
										######## - ######, ######## - ######.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection