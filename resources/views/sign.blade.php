@extends('layouts.main')
@section('content')
<form action="{{ route('sign.store') }}" method="post">
    @csrf
<label for="">nama lengkap:</label>
<input type="text" name="name"><br>
<label for="">username:</label>
<input type="text" name="username"><br>
<label for="">email:</label>
<input type="email" name="email"><br>
<label for="">password:</label>
<input type="password" name="password"><br>
<button>registrasi</button>
</form>
@endsection
