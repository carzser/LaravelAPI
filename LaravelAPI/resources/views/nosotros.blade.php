@extends('plantilla')
@section('seccion')

<h1>Este es el equipo de trabajo</h1>
@foreach($equipo as $item)
    <a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>
@endforeach


@if(!empty($nombre))

@switch($nombre)

@case($nombre == 'Ignacio')

    <h2 class="mt-5">El nombre es {{$nombre}}</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing 
    elit. Dolor debitis adipisci unde. Sunt non aliquam 
    numquam a veniam, deleniti eaque? Nisi ipsam assumenda 
    iure nesciunt, distinctio animi hic dolorum ducimus.</p>
@break

@case($nombre == 'Juanito')

    <h2 class="mt-5">El nombre es {{$nombre}}</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing 
    elit. Dolor debitis adipisci unde. Sunt non aliquam 
    numquam a veniam, deleniti eaque? Nisi ipsam assumenda 
    iure nesciunt, distinctio animi hic dolorum ducimus.</p>
@break

@case($nombre == 'Pedrito')

    <h2 class="mt-5">El nombre es {{$nombre}}</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing 
    elit. Dolor debitis adipisci unde. Sunt non aliquam 
    numquam a veniam, deleniti eaque? Nisi ipsam assumenda 
    iure nesciunt, distinctio animi hic dolorum ducimus.</p>
@break

@endcase

@endswitch

@endif

@endsection