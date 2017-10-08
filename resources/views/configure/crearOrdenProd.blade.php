@extends('layouts.app')

@section('content')
<div>
	Crear órdenes de producción
	<form action="">
		{{ csrf_field() }}
		<input type="text" name="example">
	</form>
</div>
@endsection