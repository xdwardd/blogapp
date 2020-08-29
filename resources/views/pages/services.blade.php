@extends('layouts.app')
    @section('content')
        <h1 class="mt-2">{{$title}}</h1>
            @if (count($services) > 0)
                @foreach ($services as $service)
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                {{$service}}
                            </li>
                        </ul>
                    </div>
                    
                @endforeach
                
            @endif

    @endsection 