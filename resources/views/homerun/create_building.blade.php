@extends('homerun.layouts.master')

@section('page-title', 'צור בניין חדש')

@section('content')
	<div id="panels-container" class="container-fluid">
		<div class="panels "id="panel-left"></div>
		<div class="panels" id="panel-center">
			<form action="{{ route('building.create') }}" method="post">
			    {{ csrf_field() }}
			    <input type="hidden" name="firm" value="1"/>
			    
			    <div class="row">
			      <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" tabindex="2" class="form-control" name="name" placeholder="שם בניין"/>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <!--<div class="input-group">-->
                    <div class="input-group">
                        <select tabindex="1" class="form-control" name="project_select" id="project_select">
                            @foreach ($projects as $project)
                                <option value="{{ $project->name }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                </div>
                <div class="row">
	    			<div class="form-group">
    					<div class="col-xs-2">
    					    <input type="text" tabindex="5" class="form-control" name="street_num" placeholder="00"/>
    					</div>
    					<div class="col-xs-1">
    					    <label>מס'</label>
    					</div>
    					<div class="col-xs-3">
    					    <input type="text" tabindex="4" class="form-control" name="street" placeholder="שם רחוב / חלקה"/>	
    					</div>
    					<div class="col-xs-6">
    						<input type="text" tabindex="3" class="form-control" name="city" placeholder="עיר"/>	
    					</div>
    				</div>
				</div>
				<div class="row">
	    			<div class="form-group">
    					<div class="col-xs-2">
    					    <label>
    					    <input type="radio" tabindex="9" name="groundFloorRadios" id="optionsRadios2" value="1">
    					    ראשונה
    					    </label>
    					</div>
    					<div class="col-xs-2">
    					    <label>
    					    <input type="radio" tabindex="8" name="groundFloorRadios" id="optionsRadios1" value="0" checked>
    					    קרקע
    					    </label>
    					</div>
    					<div class="col-xs-2">
    					    <label>מתחיל בקומה:</label>
    					</div>
    					<div class="col-xs-2">
    						<input type="text" tabindex="7" class="form-control" name="number_of_floors" placeholder="00"/>	
    					</div>
    					<div class="col-xs-1">
    					    <label>מס' קומות</label>
    					</div>
    					<div class="col-xs-2">
    						<input type="text" tabindex="6" class="form-control" name="number_of_apartments" placeholder="00"/>	
    					</div>
    					<div class="col-xs-1">
    					    <label>מס' דירות</label>
    					</div>
    				</div>
				</div>
				<hr>
    			<label>הגדר סוגי הדירות בבניין. בסיום, סמן את סוג הדירה הנפוץ כברירת מחדל</label>
    			<div class="form-group">
    			    <div class="row">
    			        <div class="form-group">
    			            <div class="col-xs-11">
    			                <input type="text" tabindex="11" class="form-control" name="apartment_type1" placeholder="סוג דירה. לדוגמה: דירת גן 4567"/>	
    			            </div>
    			            <div class="col-xs-1">
    			                <input type="radio" tabindex="10" name="apartmentsRadios" id="apartmentsRadios1" value="1">
    			            </div>
                        </div>
    			    </div>
    			    <div class="row">
    			        <div class="form-group">
    			            <div class="col-xs-11">
    			                <input type="text" tabindex="13" class="form-control" name="apartment_type2" placeholder="סוג דירה. לדוגמה: דירת גן 4567"/>	
    			            </div>
    			            <div class="col-xs-1">
    			                <input type="radio" tabindex="12" name="apartmentsRadios" id="apartmentsRadios2" value="2">
    			            </div>
                        </div>
    			    </div>
    			</div>
    			<div class="form-group">
			      <button type="submit" tabindex="14" class="btn btn-primary">שמור</button>
			    </div>
			</form>
			<hr>
			<div>
				<table class="table">
					<thead>
						<th>שם הבניין</th>
						<th>עיר</th>
						<th>רחוב</th>
						<th>מספר רחוב</th>
						<th>מס' קומות</th>
						<th>מס' דירות</th>
					</thead>
					@foreach ($buildings as $building)
	    				<tr>
	        				<td>שם בניין</td>
	        				<td>שם עיר</td>
	        				<td>שם רחוב</td>
	        				<td>{{ $building->street_num }}</td>
	        				<td>{{ $building->number_of_floors }}</td>
	        				<td>{{ $building->number_of_apartments }}</td>
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