@extends('layouts.master')

@section('content')

<h3 class="page-title">
	Welcome Chris! <small>CURRENTLY HAS PARKING SPOT</small>
</h3>
<div class="row">
	<div class="col-md-6">
		<!-- DAYS AWAY STATUS PORTLET-->
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
							<a href="javascript:;" class="btn default btn-xs purple">
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
							<a href="javascript:;" class="btn default btn-xs purple">
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
							<a href="javascript:;" class="btn default btn-xs purple">
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
							<a href="javascript:;" class="btn default btn-xs purple">
							<i class="fa fa-edit"></i> Reclaim </a>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>

@stop
