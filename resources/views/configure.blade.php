@extends('layouts.app')

@section('content')
<div class="container cont_config">
	<div class="row">
		<div class="col-md-6">
			<ul>
				<a class="url_item" href="#">
					<li class="cont_item">
						<img class="img_item" src="{{ asset('img/IC1.png') }}">
						<p class="p_item">Crear un nuevo centro de trabajo</p>					
					</li>
				</a>
				<div class="modal_user">
					<div class="cont_user">
						<div class="txt_user">
						</div>
						<form action="#" method="post">
							<div class="form-group">
								<label for="name">Nombre</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="selec">Seleccionar</label>
								<select name="selec" class="form-control">
									<option value="1">Opción 1</option>
									<option value="2">Opción 2</option>
									<option value="3">Opción 3</option>
								</select>
							</div>
						</form>
						<a href="#" class="btn btn-danger btn_aceptar">Aceptar</a>
					</div>
				</div>
				<a class="url_item" href="#">
					<li class="cont_item">
						<img class="img_item" src="{{ asset('img/IC2.png') }}">
						<p class="p_item">Crear ordenes de producción</p>
					</li>
				</a>
				<a class="url_item" href="#">
					<li class="cont_item">
						<img class="img_item" src="{{ asset('img/IC3.png') }}">
						<p class="p_item">Crear tiempos de ciclo</p>
					</li>
				</a>
			</ul>
		</div>
		<div class="col-md-6">
			<ul>
				<a class="url_item" href="#">
					<li class="cont_item">
						<img class="img_item" src="{{ asset('img/IC4.png') }}">
						<p class="p_item">Configurar productos</p>
					</li>
				</a>
				<a class="url_item" href="#">
					<li class="cont_item">
						<img class="img_item" src="{{ asset('img/IC5.png') }}">
						<p class="p_item">Crear nuevo responsable OP</p>
					</li>
				</a>
				<div class="modal_user">
					<div class="cont_user">
						<div class="txt_user">
						</div>
						<form action="#" method="post">
							<div class="form-group">
								<label for="name">Nombre</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="selec">Seleccionar</label>
								<select name="selec" class="form-control">
									<option value="1">Opción 1</option>
									<option value="2">Opción 2</option>
									<option value="3">Opción 3</option>
								</select>
							</div>
						</form>
						<a href="#" class="btn btn-danger btn_aceptar">Aceptar</a>
					</div>
				</div>
			</ul>    	
		</div>
	</div>
</div>
@endsection