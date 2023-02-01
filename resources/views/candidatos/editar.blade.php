@extends('welcome')
@section('contenido')
   
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 mx-auto">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Actualizacion de Candidato</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('candidato.update', $candidatos->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label >Nombre de Candidato</label>
                                    <input type="text" class="form-control"  placeholder="Nombre de Candidato" name="nombre" value="{{$candidatos->nombre}}">
                                </div>
                                <div class="form-group">
                                    <label >Cedula de Candidato</label>
                                    <input type="text" class="form-control"  placeholder="Cedula de Candidato" name="cedula" value="{{$candidatos->cedula}}">
                                </div>
                                <div class="form-group">
                                    <label >Nombre del Partido</label>
                                    <input type="text" class="form-control"  placeholder="Nombre del Partido" name="nomPartido" value="{{$candidatos->nomPartido}}">
                                </div>
                                <div class="form-group">
                                    <label >Numero de Lista</label>
                                    <input type="text" class="form-control"  placeholder="Numero de Lista" name="numLista" value="{{$candidatos->numLista}}">
                                </div>
                                <div class="form-group">
                                    <label >Votos</label>
                                    <input type="text" class="form-control"  placeholder="Votos" name="votos" value="{{$candidatos->votos}}">
                                </div>
                                                          
                                <div>
                                    <button class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                    </div>
                </div>
    </section>
@endsection