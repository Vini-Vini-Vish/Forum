@extends('layouts.app')
@section('content')
    <div class="container">
        @include('usuario.__apptitle')
        <div class="tile">
            <div class="tile-body">
                <form>
                    @csrf
                    @include('usuario.__form')
                    <div class="center">
                        <a href="{{ url('/usuario/cancelar') }}" class="btn btn-secondary btn-lg ml-3">Cancelar Consulta
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
