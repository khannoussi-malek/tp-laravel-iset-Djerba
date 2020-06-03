@extends('Template')

    @section('title')
        add matt
    @endsection
    
    @section('table')
    <form action="{{url('CrudEpreuve/'.$data['dataepr'][0]->id)}}" method="post">
    {{method_field('PATCH')}}

    @csrf
    <div class="form-group">
        <label for="numepreuve">numepreuve</label>
        <input type="text" name="numepreuve" value="{{$data['dataepr'][0]->numepreuve}}" class="form-control" id="numepreuve"  placeholder="numepreuve">
        <small class="form-text text-muted"> @error('numepreuve'){{$message}}@enderror</small>
    </div>

    <div class="form-group">
        <label for="datepreuve">datepreuve</label>
        <input type="date" onkeydown="return false" value="{{$data['dataepr'][0]->datepreuve}}"  name="datepreuve"  class="form-control" id="datepreuve"  placeholder="datepreuve">
        <small class="form-text text-muted"> @error('datepreuve'){{$message}}@enderror</small>
    </div>

    <div class="form-group">
        <label for="lieu">lieu</label>
        <input type="text" name="lieu" value="{{$data['dataepr'][0]->lieu}}"  class="form-control" id="lieu"  placeholder="lieu">
        <small class="form-text text-muted"> @error('lieu'){{$message}}@enderror</small>
    </div>

    <div class="form-group">
        <label for="matiere_id">matiere</label>
        <select class="form-control" id="matiere_id" name="matiere_id">
            <option selected disabled hidden >Default select</option>
            @foreach ($data['data'] as $d)
            <option value="{{$d->id}}" >{{$d->Libelle}}</option>
            @endforeach
        </select>
        <small class="form-text text-muted"> @error('matiere_id'){{$message}}@enderror</small>
    </div>

        <button class="btn btn-info">enregestri</button>

    </form>
          
    @endsection