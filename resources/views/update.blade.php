@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
    <div class="box box-solid box-primary">
        <div class="box-header with-border">          

          <h3 class="box-title">Editar Post</h3>
        </div>
        <!-- /.box-header -->
        <form action="{{ route('update', ['id'=>$post->id]) }}" method="post">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">Titulo</label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-4">
                            <label for="">Descrição</label>
                            <textarea cols="30" rows="10"class="form-control" name="description">{{$post->description}}</textarea>                            
                        </div>
                    </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>       
    
@stop