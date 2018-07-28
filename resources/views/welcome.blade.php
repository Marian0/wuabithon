@extends('layout.app')

@section('content')

    <div class="wizard-container">
        <div class="card wizard-card" data-color="red" id="wizard">

            <h1>Ingresa</h1>


            <input type="text">
            <input type="password">


            <a href="./dashboard">Login</a>
            <a href="./register">Registro</a>
        </div>
    </div>
@stop