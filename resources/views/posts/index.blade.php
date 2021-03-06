@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Articulos
                        <a class="btn btn-sm btn-primary float-right" href="{{route('posts.create')}}"> Crear</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="{{route('posts.edit',$post)}}"
                                           class="btn btn-primary btn-sm">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{route('posts.destroy',$post)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Desea eliminar?')" type="submit">Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
