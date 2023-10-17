@extends('layouts.plantilla') <!--llama a la plantilla establecida en el archivo plantilla.blade.php -->

@section('title','Curso '.$curso)

@section('content')
    <h1>Bienvenido al curso de {{$curso}} </h1> <!-- Reemplaza a < ?php echo $curso;?> -->

@endsection
