@extends('Template')

    @section('title')
        add matt
    @endsection
    
    @section('table')
            <form action="{{url('CrudMatiere/'.$data->id)}}" method="post">
                {{method_field('PATCH')}}
                @csrf

                <div class="form-group">
                    <label for="Code">Code</label>
                    <input type="text" name="Code" value="{{$data->Code}}" class="form-control" id="Code"  placeholder="Code">
                    <small class="form-text text-muted"> @error('Code'){{$message}}@enderror</small>
                </div>

                <div class="form-group">
                    <label for="Libelle">Libelle</label>
                    <input type="text" name="Libelle" value="{{$data->Libelle}}"  class="form-control" id="Libelle"  placeholder="Libelle">
                    <small class="form-text text-muted"> @error('Libelle'){{$message}}@enderror</small>
                </div>

                <div class="form-group">
                    <label for="Coefficient">Coefficient</label>
                    <input type="text" name="Coefficient" value="{{$data->Coefficient}}" class="form-control" id="Coefficient"  placeholder="Coefficient">
                    <small class="form-text text-muted"> @error('Coefficient'){{$message}}@enderror</small>
                </div>

                <button class="btn btn-info">modifier</button>

           </form>
          
    @endsection