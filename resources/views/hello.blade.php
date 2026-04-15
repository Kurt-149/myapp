@extends('layouts.app')

@section('content')
    <h1>Hello, {{ $user['name'] }}!</h1>
    <p>Age: {{ $user['age'] }}</p>
    <p>Course: {{ $user['course'] }}</p>
    <p>Address: {{ $address['street'] }}, {{ $address['city'] }}, {{ $address['province'] }}</p>
@endsection
