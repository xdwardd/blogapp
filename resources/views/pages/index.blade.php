@extends('layouts.app')
    @section('content')
        <div class="jumbotron text-center mt-4">
            
            <h1>{{$title}}</h1>
            <p>Share your happy moments in life in Daily Blog</p>

            <a class="btn btn-success" href="/login">Login</a> <a class="btn btn-warning" href="/register">Register</a>
        </div>
    @endsection