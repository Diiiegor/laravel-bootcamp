@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear articulo') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Titulo *</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Imagen</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Contenido *</label>
                                    <textarea name="body" rows="6" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Contenido embebido</label>
                                    <textarea name="iframe" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    @csrf
                                    <input type="submit" name="enviar" value="Enviar" class="btn btn-sm btn-primary">
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
