@extends('layouts.app')
@section('content')
    <div class="conteiner">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Lista de Usuario</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Menu Principal</a></li>
            </ul>
        
        </div>
    </div>
    <div class="container">
        <div class="tile">
            <div class="title-body">
                <div id="no-more-tables">
                    <table class="table table-striped table-bordered table-hover cf">
                        <thead class="cf">
                            <tr>
                                <th>Id</th>
                                <th>Nick</th>
                                <th>Email</th>
                                <th>Selo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registros as $registro)
                            <tr>
                            <td>{{$registro->id}}</td>
                            <td>{{$registro->nick}}</td>
                            <td>{{$registro->email}}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href ="{{url('usuario/alterar', $registro->id)}}"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger btn-sm"href ="{{url('usuario/excluir',$registro->id)}}"><i class="fa fa-trash"></i></a>
                                <a class="btn btn-warning btn-sm" href ="{{url('usuario/consultar',$registro->id)}}"><i class="fa fa-address-book"></i></a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-sucess btn-lg" href ="{{ url('/usuario/incluir') }}"><i class="fa fa-plus-circle"></i></a>
                </div>
           </div>
        </div>
@endsection