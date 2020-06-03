@extends('Template')

    @section('title')
        matiere
    @endsection
    
    @section('table')
       <h1>Matiere</h1>


       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       ajoute matiere
        </button>

       <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Code</th>
                <th scope="col">libelle</th>
                <th scope="col">Coefficient</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($matieres as $mat)
                <tr>
                    <th scope="row">{{$mat->id}}</th>
                    <td>{{$mat->Code}}</td>
                    <td>{{$mat->Libelle}}</td>
                    <td>{{$mat->Coefficient}}</td>
                    <td>
                    <form action="{{ url('mat', ['id' => $mat->id]) }}" method="post">
                    <input type="hidden" name="_method" value="delete" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger">supprime matiere</button>
                    </form>
                        <a href="{{$mat->id}}/edit" class="btn btn-success">modifier matiere</a>
                    </td>
                </tr>
                @endforeach 
            </tbody>
            </table>

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="{{url('mat')}}" method="post">
        @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <div class="form-group">
                    <label for="exampleInputPassword1">code</label>
                    <input type="text" name="code" class="form-control" id="exampleInputPassword1" placeholder="code">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Libelle</label>
                    <input type="text" name="Libelle" class="form-control" id="exampleInputPassword2" placeholder="Libelle">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword3">Coefficient</label>
                    <input type="text" name="Coefficient" class="form-control" id="exampleInputPassword3" placeholder="Coefficient">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>
    @endsection