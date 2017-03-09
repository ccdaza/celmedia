@extends('layouts.app')

@section('content')

     @include('nav')
 
<div class="col-xs-4 col-xs-offset-4 content">
    <form action="/services/edit/{{$service->id}}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xs-4">
                <label for="name">Nombre</label>
            </div>
            <div class="col-xs-8">
                <input type="text" class='col-xs-12' placeholder="Nombre" name="name" value='{{$service->name}}'>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4">
                <label for="descripton">Descripcion</label>
            </div>
            <div class="col-xs-8">
                <textarea name="description" class='col-xs-12' id="description" placeholder="Descripcion" cols="30" rows="10">{{$service->description}}
                </textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4">
                <label for="state">Estado</label>
            </div>
            <div class="col-xs-8">
                <select name="state" id="state"  class='col-xs-12'>
                    @foreach(App\States::all() as $state)
                       <option value="{{$state->id}}" @if($state->id == $service->state_id) selected @endif>{{$state->state}}</option>
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
                <a href="{{url('/services')}}" class="col-md-12 col-xs-12 btn btn-default">Volver</a>
            </div>
        </div>

    </form>    
</div>

@endsection