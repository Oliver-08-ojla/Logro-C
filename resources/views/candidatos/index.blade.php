@extends('welcome')

@section('contenido')
    

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Todas los Candidatos</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body ">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>id</th>
              <th>Nombre de Candidatos</th>
              <th>Cedula</th>
              <th>Nombre del Partido</th>
              <th>Numero de Lista</th>
              <th>Votos</th>
            
              <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($candidatos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->cedula}}</td>
                    <td>{{$item->nomPartido}}</td>
                    <td>{{$item->numLista}}</td>
                    <td>{{$item->votos}}</td>
                    
                   
                     <td class="d-flex justify-content-center">
                        <a href="{{route('candidato.editar',$item->id)}}" class="btn btn-primary ">Editar</a>
                        <form action="{{route('candidato.delete',$item->id)}}" method="POST" >
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger mx-2 ">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>no hay datos</td>
                    <td>no hay datos</td>
                    <td>no hay datos</td>
                    <td>no hay datos</td>
                    <td>no hay datos</td>
                    <td>no hay datos</td>
                </tr>
                @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>


@endsection

