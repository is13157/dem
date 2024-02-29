@extends('main')
@section('content')
    <form action="/register" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" required>
        <input type="text" name="surname" placeholder="surname" required>
        <input type="text" name="patronymic" placeholder="patronymic">
        <input type="text" name="login" placeholder="login" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required min="6">
        <input type="password" name="password_confirmation" placeholder="repeat password" required min="6">
        <input type="checkbox" name="rules" placeholder="name" required>
        <input type="submit" value="Submit">
    </form>
@endsection
