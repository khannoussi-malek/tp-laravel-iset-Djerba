@extends('Template')

    @section('title')
        affirche matt
    @endsection
    
	@section('table')
	<div class="col-lg-12">
	<h1>Matiere</h1>
	@isset($message)
	
 

<div class="alert alert-info alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Errer ! </strong> <br>{{$message}} .
  </div>


	@endisset
	<a href="{{url('CrudMatiere/create')}}" class="btn btn-info m-3">Ajouter Matiere</a>
	</div>
	
    <table class="table table-hover table-sm">
				<thead>
					<tr>
						<th>
                        Code 
						</th>
						<th>
                        Libelle 
						</th>
						<th>
                        Coefficient
						</th>
						<th style="width: 20vw">
                        Action
						</th>
					</tr>
				</thead>
				<tbody>
				@foreach ($data as $d)
				<tr>
						<td>
                        {{$d->Code}}
						</td>
						<td>
						{{$d->Libelle}}
						</td>
						<td>
                        {{$d->Coefficient}}
						</td>
						<td>
						<form action="{{url('CrudMatiere/'.$d->id)}}" method="post">
							@csrf
							{{method_field('DELETE')}}
							<button type="submit" class="btn btn-danger">supprimer</button>
						</form>
						<form action="{{url('CrudMatiere/'.$d->id).'/edit'}}" method="get">
							<button class="btn btn-success">modifier</button>
						</form>
						</td>
						
					</tr>
				@endforeach
              
					
				</tbody>
			</table>
    @endsection