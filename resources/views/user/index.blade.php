@extends('layouts.app')

@section('content')

    <div class="container">

        {{-- Header --}}

        <div class="row">
            <div class="col">
                <h1>User <small class="h6">(Lista)</small></h1>
            </div>
            <div class="col-auto">
                <a href="{{route('user.create')}}" class="btn btn-primary">Crear Usuario</a>
            </div>
            
        </div>

        @if (session('warning'))
            @alert([
                'type' => 'warning',
                'title' => 'Exito',
                'description' => session('warning'),
            ])@endalert                                
        @endif  

        {{-- List --}}
        
        <div class="mt-4">
            <div class="d-flex justify-content-end">
                <span>Total: {{$users->total()}}</span>
            </div>
            <table class="table table-light">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th class="text-left">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="text-center">
                            <td class="text-left">{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('user.show', $user->id) }}" class="mr-3">Ver</a>
                                <a href="{{route('user.edit', $user->id)}}" class="mr-3">Editar</a>
                                <a href="!#"
                                    onclick="event.preventDefault();
                                                    document.getElementById('delete-user-{{$user->id}}-form').submit();">
                                    Eliminar
                                </a>

                                <form id="delete-user-{{$user->id}}-form" action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            {{$users->links()}}
        </div>

    </div>



    
    


@endsection