@extends('Template')

    @section('title')
        affirche matt
    @endsection
    
	@section('table')
	
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
						
					</tr>
				@endforeach
              
					
				</tbody>
			</table>
    @endsection