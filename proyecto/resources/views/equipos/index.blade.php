@extends('layouts.plantilla')
@section('title','Equipos')
@section ('content')

<div class="container-fluid card p-4">
    <div class="row ">
        <div  class="col-md-12 table-responsive">
        	<h6>Equipos</h6>
            <div class="row">
                <div class="col-12">
                    <button class="btn {{$bg->custom}} btn-sm float-right" onclick="openiframe('Nuevo equipo','{{ route('equipos.create')}}')">Crear equipo</button></div>
            </div>
        	<table id="table" class="table align-items-center mb-0">
                    <thead class="{{$bg->custombackground}} back-black rounded">
                        <tr>
                          <th class="text-uppercase text-xs font-weight-bolder rounded-left p-0 w-0 text-transparent" scope="col"></th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-0" scope="col">ID</th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Equipo</th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Creación</th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Habilitado</th>
                          <th class="text-uppercase text-xs font-weight-bolder pl-1 rounded-right" scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipos as $key => $equipo)     
                        <tr id="{{$equipo->id}}" class="border-bottom">
                          <td></td>
                          <td>{{$equipo->id}}</td>
                          <td>{{$equipo->equipo}}</td>
                          <td><span class="text-sm">{{$equipo->created_at->format('d/m/Y')}}</span></td>
                            @if($equipo->iactivo == 1)
                                <td><a class="switch" href="{{route('equipos.inactivar',$equipo)}}">
                                  <input type="checkbox" disabled checked>
                                  <span class="slider round"></span>
                                </a></td>
                            @else
                                <td><a class="switch" href="{{route('equipos.activar',$equipo)}}">
                                  <input type="checkbox" disabled>
                                  <span class="slider round"></span>
                                </a></td>
                            @endif
                            <td>
                                <a href="#" onclick="openiframe('Editar equipo','{{ route('equipos.edit',$equipo->id)}}')" class="btn btn-link text-primary text-gradient p-2 mb-0"><i class="material-icons text-sm me-2">edit</i>Editar</a>
                                <!-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Eliminar</a> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
		</div>
	</div>	
<script type="text/javascript" src="{{ URL::asset('js/table.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

@endsection
