@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- Header --}}

        <div class="row">
            <div class="col">
                <h1>User <small class="h6">(Edit)</small></h1>
            </div>            
        </div>

        {{-- Form Create --}}
    
        <div class="row justify-content-center mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('put')

                            @if (session('success'))
                                @alert([
                                    'type' => 'success',
                                    'title' => 'Exito',
                                    'description' => session('success'),
                                ])@endalert                                
                            @endif                            

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Name')</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">@lang('E-Mail Address')</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection