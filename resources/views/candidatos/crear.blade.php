@extends('welcome')

@section('contenido')


<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-10 mx-auto">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Registro de  Candidatos</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('candidato.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label >Nombre de Candidato</label>
                            <input type="text" class="form-control"  placeholder="Nombre de Candidato" name="nombre">
                        </div>
                        <div class="form-group">
                            <label >Cedula de Candidato</label>
                            <input type="text" class="form-control"  placeholder="Cedula de Candidato" name="cedula">
                        </div>
                        <div class="form-group">
                            <label >Nombre del Partido</label>
                            <input type="text" class="form-control"  placeholder="Nombre del Partido" name="nomPartido">
                        </div>
                        <div class="form-group">
                            <label >Numero de lista</label>
                            <input type="text" class="form-control"  placeholder="Numero de Lista" name="numLista">
                        </div>
                        <div class="form-group">
                            <label >Votos</label>
                            <input type="text" class="form-control"  placeholder="Votos" name="votos">
                        </div>
                        
                        <div >
                           <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                    <!-- /.card-body -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
    
@endsection