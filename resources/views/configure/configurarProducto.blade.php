@extends('layouts.app')

@section('content')
<div>
	Configurar productos
	<form action="">
		{{ csrf_field() }}
		<input type="text" name="example">
	</form>
</div>
@endsection