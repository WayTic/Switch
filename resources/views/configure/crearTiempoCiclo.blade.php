@extends('layouts.app')

@section('content')
<div>
	Crear tiempos de ciclo
	<form action="">
		{{ csrf_field() }}
		<input type="text" name="example">
	</form>
</div>
@endsection