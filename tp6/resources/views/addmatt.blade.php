@extends('Template')

    @section('title')
        add matt
    @endsection
    
    @section('table')
            <form action="/addmatiere" method="post">
           
            @csrf
            <div class="form-group">
                <label for="Code">Code</label>
                <input type="text" name="Code"  class="form-control" id="Code"  placeholder="Code">
                <small class="form-text text-muted"> @error('Code'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
                <label for="Libelle">Libelle</label>
                <input type="text" name="Libelle"  class="form-control" id="Libelle"  placeholder="Libelle">
                <small class="form-text text-muted"> @error('Libelle'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
                <label for="Coefficient">Coefficient</label>
                <input type="text" name="Coefficient"  class="form-control" id="Coefficient"  placeholder="Coefficient">
                <small class="form-text text-muted"> @error('Coefficient'){{$message}}@enderror</small>
            </div>
            <button class="btn btn-info">enregestri</button>
           </form>
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