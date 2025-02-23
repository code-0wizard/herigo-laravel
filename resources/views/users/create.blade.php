@extends('layouts.header')

@section('content')
	<div>
		<form action="{{ route('users.store') }}" method="post">
			@csrf
			<!--名前-->
			<label for="name">name</label>
			<input type="text" name="name" value="{{ old('name') }}">
      @error('name')
        <div style="color: red;">{{ $message }}</div>
      @enderror
			<!--メールアドレス-->
			<label for="email">email</label>
			<input type="text" name="email" value="{{ old('email') }}">
			<!--パスワード-->
			<label for="password">password</label>
			<input type="password" name="password" value="{{ old('password') }}">
			<!--パスワード確認欄-->
			<label for="password_confirmation">password確認欄</label>
			<input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
      <button type="submit">登録</button>
		</form>
	</div>
@endsection