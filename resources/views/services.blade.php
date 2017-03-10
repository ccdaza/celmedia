@extends('layouts.app')

@section('content')

     @include('nav')
     
     <div>
         <div class="content">
             <div class="row">
                 <div class="col-xs-12 col-md-12">
                     <h1 class='text-center'>Servicios</h1>
                 </div>
             </div>
             <div class="row">
                 <div class="col-xs-3 col-md-3  text-center">Nombre</div>
                 <div class="col-xs-3 col-md-3 text-center">Descripcion</div>
                 <div class="col-xs-3 col-md-3 text-center">Estado</div>
                 <div class="col-xs-3 col-md-3 text-center">Acciones</div>
             </div>
             @foreach($allServices as $service)
                 <div class="row">
                     <div class="col-xs-3 col-md-3  text-center">{{$service->name}}</div>
                     <div class="col-xs-3 col-md-3 text-center">{{$service->description}}</div>
                     <div class="col-xs-3 col-md-3 text-center">{{$service->state->state}}</div>
                     <div class="col-xs-3 col-md-3 text-center">
                        <a href="/services/edit/{{$service->id}}">Editar</a><br>
                         <a href="/services/inactive/{{$service->id}}">Eliminar</a>
                     </div>
                 </div>
             @endforeach
             
             <div class="row">
                 <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4">
                     <a href="#newService" class="col-md-12 col-xs-12 btn btn-default">Nuevo Servicio</a>
                </div>
             </div>
         </div>
     </div>

<div class="modal row" id='newService'>
    <div class="shadow" onclick="window.location.href = '#'"></div>
    <div class="box-modal panel col-xs-4 col-xs-offset-4 content">
        <form action="/services/new" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-4">
                    <label for="name">Nombre</label>
                </div>
                <div class="col-xs-8">
                    <input type="text" class='col-xs-12' placeholder="Nombre" name="name">
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-4">
                    <label for="descripton">Descripcion</label>
                </div>
                <div class="col-xs-8">
                    <textarea name="description" class='col-xs-12' id="description" placeholder="Descripcion" cols="30" rows="10"></textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-4">
                    <label for="state">Estado</label>
                </div>
                <div class="col-xs-8">
                    <select name="state" id="state"  class='col-xs-12'>
                        @foreach(App\States::all() as $state)
                            <option value="{{$state->id}}">{{$state->state}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <button type="submit" class="col-md-12 col-xs-12 btn btn-primary">Enviar</button>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <a href="#" class="col-md-12 col-xs-12 btn btn-default">Cerrar</a>
                </div>
            </div>
            
        </form>    
    </div>
</div>

@endsection