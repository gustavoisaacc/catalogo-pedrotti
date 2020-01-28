@extends('layouts.app')

@section('content')

<main class="main flex container">

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

        @component('shared.seccion-productos')
        @endcomponent
        
    </div>
	
</main>

@endsection