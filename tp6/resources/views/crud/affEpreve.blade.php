@extends('Template')

    @section('title')
        affirche matt
    @endsection
    
	@section('table')
	<div class="col-lg-12">
	<h1>Epreve</h1>
	@isset($message)
	<div class="alert alert-info alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Errer ! </strong> <br>{{$message}} .
	</div>
	@endisset
	<a href="{{url('CrudEpreuve/create')}}" class="btn btn-info m-3">Ajouter Matiere</a>
	</div>
	
    <table class="table table-hover table-sm">
				<thead>
					<tr>
						<th>
                        date preuve 
						</th>
						<th>
                        lieu 
						</th>
						<th>
                        numepreuve
						</th>
						<th>
                        matiere
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
                        {{$d->datepreuve}}
						</td>
						<td>
						{{$d->lieu}}
						</td>
						<td>
                        {{$d->numepreuve}}
						</td>
						<td>
                        {{$d->Libelle}}
						</td>
						<td>
						<form action="{{url('CrudEpreuve/'.$d->id)}}" method="post">
							@csrf
							{{method_field('DELETE')}}
							<button type="submit" class="btn btn-danger">supprimer</button>
						</form>
						<form action="{{url('CrudEpreuve/'.$d->id).'/edit'}}" method="get">
							<button class="btn btn-success">modifier</button>
						</form>
						</td>
						
					</tr>
				@endforeach
              
					
				</tbody>
			</table>
    @endsection