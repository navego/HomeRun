@extends('homerun.layouts.master')

@section('page-title', 'Create Firm')

@section('content')
	<div id="panels-container" class="container-fluid">
		<div class="panels "id="panel-left"></div>
		<div class="panels" id="panel-center">
			<form action="{{ route('firm.create') }}" method="post">
				<div class="form-group">
					<div class="col-xs-6">
						<input type="text" tabindex="2" class="form-control" name="city" placeholder="עיר"/>
					</div>
					<div class="col-xs-6">
						<input type="text" tabindex="1" class="form-control" name="firmName" placeholder="שם חברה"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-6">
						<div class="col-xs-6">
							<input type="text" tabindex="6" class="form-control" name="zip" placeholder="מיקוד"/>
						</div>
						<div class="col-xs-6">
							<input type="text" tabindex="5" class="form-control" name="po_box" placeholder="ת.ד."/>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="col-xs-6">
							<input type="text" tabindex="4" class="form-control" name="street_num" placeholder="מספר רחוב"/>
						</div>
						<div class="col-xs-6">
							<input type="text" tabindex="3" class="form-control" name="street" placeholder="רחוב"/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-6">
						<input type="email" tabindex="8" class="form-control" name="email" placeholder="אימייל"/>
					</div>
					<div class="col-xs-6">
						<input type="text" tabindex="7" class="form-control" name="phone" placeholder="טלפון"/>
					</div>
				</div>
				{{ csrf_field() }}
			  <button type="submit" tabindex="9" class="btn btn-primary">שמור</button>
			</form>
		</div>
		<div class="panels" id="panel-right">
			@include('homerun.includes.sidebar')
		</div>
	</div>
@endsection