@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @forelse ($post as $i)
        @can('view_post', $i)
            <div class="box box-solid">
                <div class="box-header with-border">          

                <h3 class="box-title">{{$i->title}}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{$i->description}}
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Autor: {{$i->user->name}} | {{$i->user->email}} 
                    @can('edit_post', $i)
                    <a href="{{ route('show', ['id'=>$i->id]) }}"><i class="fa fa-edit"></i></a>                
                    @endcan                    
                </div>
            </div>
        @endcan       
    @empty
        
    @endforelse
@stop