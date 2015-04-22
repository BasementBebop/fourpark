@extends('layouts.master')

@section('content')

<h3 class="page-title">
	Welcome Chris! <small>CURRENTLY HAS PARKING SPOT</small>
</h3>

<!-- BEGIN PAGE CONTENT-->

<!-- PARKING SPOT OWNER PORTLETS -->

<div class="row">
  <!-- RELEASE DAYS (PARKING SPOT OWNER) PORTLET-->
  <div class="col-md-6">
	  <div class="portlet box yellow">
		  <div class="portlet-title">
			  <div class="caption">
			    <i class="fa fa-gift"></i>Release Days
			  </div>
			  <div class="tools">
  				<a href="javascript:;" class="collapse">
  				</a>
  				<a href="#portlet-config" data-toggle="modal" class="config">
  				</a>
  				<a href="javascript:;" class="reload">
  				</a>
  				<a href="javascript:;" class="remove">
  				</a>
  			</div>
		  </div>
      <!-- BEGIN FORM-->
      <div class="portlet-body form">
  			<form action="#" class="form-horizontal form-bordered">
  				<div class="form-body">
            <div class="form-group">
              <div class="row">
  						  <h4 class="text-center block">Release your parking spot for the specified date range: </h4>
              </div>
  						<div class="col-md-12">
  							<div class="input-group input-large date-picker col-xs-offset-2 col-md-offset-1 input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
  								<input type="text" class="form-control" name="from">
  								<span class="input-group-addon">
  								to </span>
  								<input type="text" class="form-control" name="to">
  							</div>
  							<!-- /input-group -->
  							<span class="help-block col-xs-offset-2 col-md-offset-1">
  							Select date range </span>
  						</div>
  					</div>
  				</div>
        </form>
			</div>
      <!-- END FORM-->
      <div class="portlet-body util-btn-margin-bottom-5">
  			<div class="clearfix">
  				<a href="javascript:;" class="btn btn-warning btn-block">
  				Submit </a>
  			</div>
  		</div>
		</div>
  </div>
	<!-- END PORTLET-->


  <!-- STATUS OF RELEASED DAYS (PARKING SPOT OWNER) PORTLET-->
  <div class="col-md-6">
		<div class="portlet box red">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-cogs"></i>Status of Released Days
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse">
					</a>
					<a href="#portlet-config" data-toggle="modal" class="config">
					</a>
					<a href="javascript:;" class="reload">
					</a>
					<a href="javascript:;" class="remove">
					</a>
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
							 Spot Claimer
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							 5/12/15
						</td>
						<td>
							 Bruce Wayne
						</td>
            <td>
							<a href="javascript:;" class="btn default btn-xs red disabled">
							<i class="fa fa-edit"></i> Reclaim </a>
						</td>
					</tr>
					<tr>
						<td>
              6/11/15
						</td>
						<td>
							 Mark Wahlberg
						</td>
            <td>
							<a href="javascript:;" class="btn default btn-xs red disabled">
							<i class="fa fa-edit"></i> Reclaim </a>
						</td>
					</tr>
					<tr>
						<td>
							 6/13/15
						</td>
						<td>
							<span class="label label-sm label-warning">
							Not Yet Claimed </span>
						</td>
            <td>
							<a href="javascript:;" class="btn default btn-xs red">
							<i class="fa fa-edit"></i> Reclaim </a>
						</td>
					</tr>
					<tr>
						<td>
              6/23/15
						</td>
            <td>
              <span class="label label-sm label-warning">
							Not Yet Claimed </span>
						</td>
            <td>
							<a href="javascript:;" class="btn default btn-xs red">
							<i class="fa fa-edit"></i> Reclaim </a>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
  </div>
  <!-- END STATUS OF RELEASED DAYS PORTLET-->

</div> <!-- END ROW -->

<!-- END PARKING SPOT OWNER PORTLETS -->

<!-- NON-PARKING SPOT OWNER PORTLETS -->

<div class="row">

  <!-- BEGIN PARKING SPOT AVAILABLE PORTLET-->
  <div class="col-md-6">

  	<div class="portlet box green ">
  		<div class="portlet-title">
  			<div class="caption">
  				<i class="fa fa-gift"></i>Parking Spot Available
  			</div>
  			<div class="tools">
  				<a href="javascript:;" class="collapse">
  				</a>
  				<a href="#portlet-config" data-toggle="modal" class="config">
  				</a>
  				<a href="javascript:;" class="reload">
  				</a>
  				<a href="javascript:;" class="remove">
  				</a>
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
	  				<a href="#deny" class="btn red-sunglo btn-block" data-toggle="modal">
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
					<button type="button" class="btn btn-success" data-dismiss="modal">Got it</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END PARKING SPOT ADD MODAL-->






</div> <!-- END ROW -->
<!-- END NON-PARKING SPOT OWNER PORTLETS -->

@stop
