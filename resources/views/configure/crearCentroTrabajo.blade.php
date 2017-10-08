@extends('layouts.app')

@section('content')
<div>
	Crear nuevo centro de trabajo
	<form action="">
		{{ csrf_field() }}
		<input type="text" name="example">
	</form>
</div>
@endsection