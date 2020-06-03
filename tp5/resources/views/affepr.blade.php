@extends('Template')

    @section('title')
        affirche matt
    @endsection
    
    @section('table')
    <table class="table table-hover table-sm">
				<thead>
					<tr>
						<th>
                        Date  
						</th>
						<th>
                        Lieu  
						</th>
						<th>
                        Code 
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
						
					</tr>
				@endforeach
				</tbody>
			</table>
    @endsection