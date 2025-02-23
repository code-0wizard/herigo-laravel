@extends('layouts.header')

@section('content')
	<div>
		<form action="post">
			@csrf
			<label for="name">name</label>
			<input type="text" name="name" value="{{ old('name') }}">

			<label for="email">email</label>
			<input type="text" name="email" value="{{ old('email') }}">
		</form>
	</div>
@endsection