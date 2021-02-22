@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar articulo') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route('posts.update',$post)}}" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Titulo *</label>
                                <input type="text" name="title" required class="form-control"
                                       value="{{old('title',$post->title)}}">
                            </div>
                            <div class="form-group">
                                <label>Image *</label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Contenido *</label>
                                <textarea name="body" rows="6" required
                                          class="form-control">{{old('body',$post->body)}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Contenido embebido</label>
                                <textarea name="iframe" class="form-control">{{old('iframe',$post->iframe)}}</textarea>
                            </div>
                            <div class="form-group">
                                @csrf
                                @method('put')
                                <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
