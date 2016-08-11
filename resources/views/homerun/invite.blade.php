@extends('homerun.layouts.master')

@section('page-title', 'שלח זימון')

@section('content')
	<div id="panels-container" class="container-fluid">
		<div class="panels "id="panel-left"></div>
		<div class="panels" id="panel-center">
			<form action="{{ route('invite') }}" method="post">
				<div class="form-group">
					<div class="col-xs-6">
						<input type="text" tabindex="2" class="form-control" name="manager_name" placeholder="שם מנהל חטיבת מתאמות"/>
					</div>
					<div class="col-xs-6">
						<input type="text" tabindex="1" class="form-control" name="firm_name" placeholder="שם חברה"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-6">
						<input type="text" tabindex="4" class="form-control" name="phone" placeholder="טלפון"/>
					</div>
					<div class="col-xs-6">
						<input type="email" tabindex="3" class="form-control" name="email" placeholder="אימייל"/>
					</div>
				</div>
				{{ csrf_field() }}
				<div class="form-group">
			      <button type="submit" tabindex="9" class="btn btn-primary">שמור</button>
			    </div>
			</form>
			<br>
			<div>
    			<table class="table">
    				<thead>
    					<th>חברה</th>
    					<th>מנהל חטיבה</th>
    					<th>אימייל</th>
    					<th>טלפון</th>
    					<th>תאריך</th>
    				</thead>
    				@foreach ($invites as $invite)
    				    <tr>
        					<td>{{ $invite->firm_name }}</td>
        					<td>{{ $invite->coordinator_manager_name }}</td>
        					<td>{{ $invite->email }}</td>
        					<td>{{ $invite->phone }}</td>
        					<td>{{ $invite->created_at }}</td>
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