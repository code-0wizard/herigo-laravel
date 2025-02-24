@extends('layouts.header')

@section('content')
<p>ログインフォーム</p>
<form action="{{ route('login') }}" method="POST">
  @csrf
  <div>
    <label for="email">メールアドレス:</label>
    <input type="email" placeholder="メールアドレス" name="email" value="{{ old('email') }}">
  </div>
  <div>
    <label for="password">パスワード:</label>
    <input type="password" placeholder="パスワード" name="password">
  </div>
  <button type="submit">ログイン</button>
</form>
@endsection
