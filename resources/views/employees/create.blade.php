@extends('layouts.master')

@section('content')

	{{-- BEGIN EDIT SETTINGS PORTLET --}}
	<div class="col-md-6">
		<div class="portlet box green-meadow">
			<div class="portlet-title">
				<div class="caption">
					Add New User
				</div>
			</div>

			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				@include ('admin.create_form')
				<!-- END FORM-->
			</div>
		</div>
	</div>
	{{-- END EDIT SETTINGS PORTLET --}}


@stop