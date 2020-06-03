@extends('Template')

    @section('title')
        modifier
    @endsection
    
    @section('table')
    <form action="{{url('mat')}}" method="post">
        @csrf
                 <div class="form-group">
                    <label for="exampleInputPassword1">code</label>
                    <input type="text" name="code" class="form-control" id="exampleInputPassword1" placeholder="{{$mat->code}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Libelle</label>
                    <input type="text" name="Libelle" class="form-control" id="exampleInputPassword2" placeholder="{{$mat->Libelle}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword3">Coefficient</label>
                    <input type="text" name="Coefficient" class="form-control" id="exampleInputPassword3" placeholder="{{$mat->Coefficient}}">
                </div>
        </form>
    @endsection