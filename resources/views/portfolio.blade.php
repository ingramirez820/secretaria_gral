@extends('layout')

@section('title','portfolio')

@section('content')
<h1>{{ __('Portfolio')}}</h1>  
    <ul>
       {{--  @if($portfolio) --}}
      {{--  @isset($portfolio) --}}
        @forelse ($portfolio as $portfolioItem)
        <li>{{ $portfolioItem['title'] }}</li>
        @empty 
            <li>No hay proyectos para mostrar</li>
        @endforelse
       {{--  @else --}}
            
        {{-- @endisset --}}
    </ul> 
@endsection
