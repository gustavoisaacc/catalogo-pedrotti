@extends('layouts.app')

@section('content')

<main class="main flex">

    <nav class="menu-main">
        
        <ul>
        
            <li class="none"><a href="/">Inicio</a></li>
            <li class="none"><a href="{{'nosotros'}}">Nosotros</a></li> 
            <li class="none"><a href="{{'contactanos'}}">Contactanos</a></li>        
            <li><a href="#">Productos</a></li>
            <li><a href="#">Lia</a></li>
            <li><a href="#">Baggio</a></li>
            <li><a href="#">Mauri</a></li>
            <li><a href="#">Varos</a></li>
        </ul>
    </nav>

    <div class="secction flex">
    
    @foreach($marcas as $marca)

        @foreach($marca->productos as $producto)

        <fieldset class="seccion-productos ">
            
            <legend>{{$marca->nombre_marca}}</legend>

             <ul class="productos">
                 <li><img src="{{ asset('app/'.$producto->image) }}" alt="Imagen del producto"></li>
                 <li><span>Producto:</span> {{$producto['nombre-producto']}}</li>
                 <li><span>Producto:</span> {{$producto->sabor}}</li>
                 <li><span>Descripsion:</span> {{$producto['descripsion-producto']}}</li>
                 <li><span>Precio:</span> ${{$producto->precio}}</li>
             </ul>
      
        </fieldset>
        @endforeach

    @endforeach

       
    
</main>

@endsection
