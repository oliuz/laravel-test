@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="row text-primary">
            <div class="col-auto">
                <h1 style="font-size:150px;">
                    {{ $user->id }}
                </h1>
            </div>
            <div class="col">
                <h1>
                    {{ $user->name }}
                </h1>
                <p> {{ $user->email }} </p>
            </div>
        </div>
        
        <div class="mt-5">
            <div>
                <span><span style="font-size:50px">M</span>i sitio donde descanzar</span>
                <span style="font-size:60px">z</span>
                <span style="font-size:40px">z</span>
                <span style="font-size:20px">z</span>
            </div>
        </div>
       
    </div>
@endsection