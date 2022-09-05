@extends('layouts.modal')

@section('content')
  {!! Form::open(array('route' => array('departamentos.store', $departamento),'method'=>'post','class'=>'container')) !!}
<br>
<div class="container">
    <div class="row justify-content-center">
    @csrf
    <div class="col-7 mt-2">
        {!! Form::label('','Departamento') !!}
        {!! Form::text('nombre',$departamento->nombre,array('class' => 'form-control form-gray px-2', 'placeholder'=>'Nombre', 'required'))!!}
    </div>
    <div class="col-7 mt-2">
        {!! Form::label('','Subdirección perteneciente') !!}
        {{ Form::select('subdireccion', $cat_sub, '', ['class' => 'form-control form-gray','id'=>'cat_sub','placeholder'=>'Seleccione una subdireccion','required'])}}
    </div>
    <br>
    
            </div>
                        <div class="form-group row mb-0 mt-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" onclick=" window.parent.closeModal();" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn {{$bg->custom}}">
                                    Guardar
                                </button><br><br>
                            </div>
                        </div>
                        
                
        </div>
    
  {!! Form::close() !!}

  <script type="text/javascript">
    localStorage.setItem('res','');
    @if(session('ok'))
    localStorage.setItem('res','ok');
    window.parent.closeModal();
    @elseif(session('nook'))
    localStorage.setItem('res','{{Session::get('nook')}}');
    window.parent.closeModal();
    @endif
  </script>

@endsection

