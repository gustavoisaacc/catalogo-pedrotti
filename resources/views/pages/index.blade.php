@extends('layouts.app')

@section('content')

<main class="main flex">

    <nav class="menu-main">
        <ul>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Lia</a></li>
            <li><a href="#">Baggio</a></li>
            <li><a href="#">Mauri</a></li>
            <li><a href="#">Varos</a></li>
        </ul>
    </nav>

    <div class="secction flex">
    @foreach($marcas as $marca)

        <fieldset class="seccion-productos">
            
            <legend>{{$marca->nombre_marca}}</legend>
           
            @foreach($marca->productos as $producto)
            <ul>
                <li style="border: 1px solid red; padding: 5rem 1rem; background: #000"><img src="" alt=""></li>
                <li><span>Producto:</span> {{$producto['nombre-producto']}}</li>
                <li><span>Producto:</span> {{$producto->sabor}}</li>
                <li><span>Descripsion:</span> {{$producto['descripsion-prducto']}}</li>
                <li><span>Precio:</span> ${{$producto->preio}}</li>
     
            </ul>
            @endforeach
                
        </fieldset>
    @endforeach

       
    
</main>

@endsection
