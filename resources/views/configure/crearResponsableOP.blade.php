@extends('layouts.app')

@section('content')
<div>
	Crear nuevo responsable OP
	<form action="">
		{{ csrf_field() }}
		<input type="text" name="example">
	</form>
</div>
@endsection