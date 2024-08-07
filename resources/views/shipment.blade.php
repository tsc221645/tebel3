@extends('templates.frontend')

@section('content')
<div class="container mt-5">
	<div class="pd-20 card-box mb-30">
		<div class="clearfix">
			<h4 class="text-blue h4">Formulario de envío</h4>
			<p class="mb-30">Finaliza con los detalles de envio</p>
		</div>
		<div class="wizard-content">
			<form class="tab-wizard wizard-circle wizard">
				<!-- Paso 1: Información del Destinatario -->
				<h5>Información del Destinatario</h5>
				<section>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nombre del Destinatario :</label>
								<input type="text" class="form-control" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Apellido del Destinatario :</label>
								<input type="text" class="form-control" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Dirección de Correo Electrónico :</label>
								<input type="email" class="form-control" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Número de Teléfono :</label>
								<input type="text" class="form-control" />
							</div>
						</div>
					</div>
				</section>
				<!-- Paso 2: Dirección de Envío -->
				<h5>Dirección de Envío</h5>
				<section>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Dirección :</label>
								<input type="text" class="form-control" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Municipio :</label>
								<input type="text" class="form-control" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Departamento :</label>
								<select class="custom-select form-control">
									<option value="">Selecciona Departamento</option>
									<option value="Alta Verapaz">Alta Verapaz</option>
									<option value="Baja Verapaz">Baja Verapaz</option>
									<option value="Chimaltenango">Chimaltenango</option>
									<option value="Chiquimula">Chiquimula</option>
									<option value="El Progreso">El Progreso</option>
									<option value="Escuintla">Escuintla</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Huehuetenango">Huehuetenango</option>
									<option value="Izabal">Izabal</option>
									<option value="Jalapa">Jalapa</option>
									<option value="Jutiapa">Jutiapa</option>
									<option value="Petén">Petén</option>
									<option value="Quetzaltenango">Quetzaltenango</option>
									<option value="Quiché">Quiché</option>
									<option value="Retalhuleu">Retalhuleu</option>
									<option value="Sacatepéquez">Sacatepéquez</option>
									<option value="San Marcos">San Marcos</option>
									<option value="Santa Rosa">Santa Rosa</option>
									<option value="Sololá">Sololá</option>
									<option value="Suchitepéquez">Suchitepéquez</option>
									<option value="Totonicapán">Totonicapán</option>
									<option value="Zacapa">Zacapa</option>
								</select>
							</div>
						</div>
					</div>
				</section>
				<!-- Paso 3: Confirmación -->
				<h5>Confirmación</h5>
				<section>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Comentarios Adicionales :</label>
								<textarea class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary">Enviar Pedido</button>
						</div>
					</div>
				</section>
			</form>
		</div>
	</div>
</div>
@endsection