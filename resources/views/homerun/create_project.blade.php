@extends('homerun.layouts.master')

@section('page-title', 'צור פרויקט חדש')

@section('content')
	<div id="panels-container" class="container-fluid">
		<div class="panels "id="panel-left"></div>
		<div class="panels" id="panel-center">
			<form action="{{ route('project.create') }}" method="post">
			    {{ csrf_field() }}
			    <input type="hidden" name="firm" value="1"/>
				<div class="form-group">
					<div class="col-xs-6">
					    <input type="text" tabindex="2" class="form-control" name="city" placeholder="עיר"/>
					</div>
					<div class="col-xs-6">
						<input type="text" tabindex="1" class="form-control" name="projectName" placeholder="שם הפרויקט"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2">
					    <button type="submit" tabindex="5" class="btn btn-primary">שמור</button>
					</div>
					<div class="col-xs-2">
					    <input type="text" tabindex="4" class="form-control" name="numOfBuildings" placeholder="00"/>
					</div>
					<div class="col-xs-2">
					    <label>מספר ביניינים</label>
					</div>
					<div class="col-xs-6">
						<input type="text" tabindex="3" class="form-control" name="street" placeholder="רחוב"/>	
					</div>
				</div>
			</form>
			<br>
			<div>
				<table class="table">
					<thead>
						<th>שם הפרוייקט</th>
						<th>עיר</th>
						<th>רחוב</th>
						<th>מספר ביניינים</th>
					</thead>
					@foreach ($projects as $project)
	    				<tr>
	        				<td>{{ $project->name }}</td>
	        				<td>{{ $project->city }}</td>
	        				<td>{{ $project->street }}</td>
	        				<td>{{ $project->number_of_buildings }}</td>
	    				</tr>
	    			@endforeach
				</table>
			</div>
		</div>
		<div class="panels" id="panel-right">
			@include('homerun.includes.sidebar')
		</div>
	</div>
@endsection