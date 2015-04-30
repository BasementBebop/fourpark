@extends('layouts.master')

@section('content')

<h3 class="page-title">
	<div class="row">
		<div class="col-md-6">
		Welcome {{ Auth::user()->first_name }}!
		@if (Auth::user()->has_spot == 1)
			<small class="label bg-green-meadow">HAS PARKING SPOT</small>
		@else
			<small class="label bg-red-intense">DOESN'T HAVE PARKING SPOT</small>
		</div>
		<div class="col-md-2">
	  		<a href="#" class="btn green-meadow btn-block">I want a spot!</a>
		</div>
		@endif		
	</div>
</h3>

<!-- BEGIN PAGE CONTENT-->

<!-- PARKING SPOT OWNER PORTLETS -->




<div class="row">
  <!-- RELEASE DAYS (PARKING SPOT OWNER) PORTLET-->
  <div class="col-md-6">
	  <div class="portlet box blue">
		  <div class="portlet-title">
			  <div class="caption">
			    Release Days
			  </div>
		  </div>
      <!-- BEGIN FORM-->
      <div class="portlet-body form">





		{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@giveUpSpot'], 'class' => 'form-horizontal form-bordered']) !!}

  				<div class="form-body">
		            <div class="form-group">
			            <div class="row">
							<h4 class="text-center block">Release your parking spot for the specified date range: </h4>
			            </div>
						<div class="col-md-12">
							<div class="input-group input-large date-picker col-xs-offset-1 col-sm-offset-3 col-md-offset-1 input-daterange fa" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">

								{!! Form::text('open_date', null, ['class' => 'form-control']) !!}

								<span class="input-group-addon">to</span>

								{!! Form::text('end_date', null, ['class' => 'form-control']) !!}

							</div>
							<span class="help-block col-xs-offset-1 col-sm-offset-3 col-md-offset-1">
							Select date range </span>
						</div>
					</div>
  				</div>
			</div>
      <!-- END FORM-->
      	<div class="portlet-body util-btn-margin-bottom-5">
  			<div class="clearfix">
{{--   				<a href="#release" class="btn green-meadow btn-block" data-toggle="modal">
  				Submit </a> --}}

{!! Form::submit('Submit', ['class' => 'btn green-meadow btn-block']) !!}
  				
  			</div>
  		</div>

{!! Form::close() !!}
		

		</div>
  </div>
	<!-- END PORTLET-->

	<!-- START PARKING SPOT RELEASE MODAL-->
	<div class="modal fade" id="release" tabindex="-1" role="release" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Parking successfully released</h4>
				</div>
				<div class="modal-body">
					You have released your parking privilages for <strong>5/12/14</strong> - <strong>5/16/14</strong>. You can reclaim your released days in your dashboard (as long as they remain unclaimed). Thank you for thinking of your coworkers!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn green-meadow" data-dismiss="modal">Got it</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END PARKING SPOT RELEASE MODAL-->
    <!-- STATUS OF RELEASED DAYS (PARKING SPOT OWNER) PORTLET-->
    <div class="col-md-6">
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					Status of Released Days
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-scrollable">
					<table class="table table-hover">
					<thead>
					<tr>
						<th>
							Start Date
						</th>
						<th>
							End Date
						</th>
						<th>
							Spot Claimer
						</th>
						<th>
							Status
						</th>
					</tr>
					</thead>
					<tbody>

						@foreach ($released_days as $released_day)
							<tr>
								<td>
									{{ $released_day->open_date }}
								</td>
								<td>
									{{ $released_day->end_date }}
								</td>
								<td>
									{{ $released_day->assigned_user_id }}
								</td>
		          				<td>
		          					@if ($released_day->assigned_user_id == null)
										<a href="#" class="btn default btn-xs red-intense">
		          					@else
		          						<a class="btn default btn-xs red-intense disabled">
		          					@endif
										 Reclaim </a>
								</td>
							</tr>
						@endforeach




					</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
  <!-- END STATUS OF RELEASED DAYS PORTLET-->
</div>
<!-- END ROW -->
<!-- END PARKING SPOT OWNER PORTLETS -->

<!-- NON-PARKING SPOT OWNER PORTLETS -->
<div class="row">
    <!-- BEGIN PARKING SPOT AVAILABLE PORTLET-->
    <div class="col-md-6">
	  	<div class="portlet box blue">
	  		<div class="portlet-title">
	  			<div class="caption">
	  				Parking Spot Available
	  			</div>
	  		</div>
	  		<div class="portlet-body">
	  			<h4 class="block text-center">There is currently a parking spot available to you on <strong>5/12/14</strong></h4>
				<div class="portlet-body util-btn-margin-bottom-5">
					<div class="clearfix">
		  				<a href="#add" class="btn green-meadow btn-block" data-toggle="modal">
		  				Accept </a>
	  				</div>
					<div class="clearfix">
		  				<a href="#deny" class="btn red-intense btn-block" data-toggle="modal">
		  				Deny </a>
		  			</div>
				</div>
	  		</div>
	  	</div>
  </div>
	<!-- END PARKING SPOT AVAILABLE PORTLET-->

	<!-- START PARKING SPOT ADD MODAL-->
	<div class="modal fade" id="add" tabindex="-1" role="add" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Parking successfully added</h4>
				</div>
				<div class="modal-body">
					 Congratulations! You now have parking for <strong>5/12/14</strong>. You can view all claimed future parking in your dashboard.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn green-meadow" data-dismiss="modal">Got it</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END PARKING SPOT ADD MODAL-->

	<!-- START MY UPCOMING PARKING (NON-PARKING SPOT OWNER) PORTLET-->
	<div class="col-md-6">
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					My Upcoming Parking
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-scrollable">
					<table class="table table-hover">
					<thead>
					<tr>
						<th>
							Date
						</th>
						<th>
							Spot Owner
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							5/12/15
						</td>
						<td>
							Stanley Jenkins
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs red-intense">
							<i class="fa fa-edit"></i> Release </a>
						</td>
					</tr>
					<tr>
						<td>
							6/11/15
						</td>
						<td>
							Frank Williams
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs red-intense">
							<i class="fa fa-edit"></i> Release </a>
						</td>
					</tr>
					<tr>
						<td>
							6/13/15
						</td>
						<td>
							Henry Adams
						</td>
						<td>
							<a href="javascript:;" class="btn default btn-xs red-intense">
							<i class="fa fa-edit"></i> Release </a>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- END MY UPCOMING PARKING (NON-PARKING SPOT OWNER) PORTLET-->






</div><!-- END ROW -->
<!-- END NON-PARKING SPOT OWNER PORTLETS -->

@stop
