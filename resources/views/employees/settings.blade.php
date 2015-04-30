@extends('layouts.master')

@section('content')
	{{-- BEGIN EDIT SETTINGS PORTLET --}}
	<div class="col-md-6">
		<div class="portlet box green-meadow">
			<div class="portlet-title">
				<div class="caption">
					Edit Account Info
				</div>
			</div>

			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				@include ('employees.current_user_settings')
				<!-- END FORM-->
			</div>
		</div>
	</div>
	{{-- END EDIT SETTINGS PORTLET --}}
	{{-- BEGIN INSTRUCTIONS PORTLET --}}
	<div class="col-md-6">
		<div class="portlet solid blue">
			<div class="portlet-title">
				<div class="caption">
					FourPark Instructions
				</div>
			</div>
			<div class="portlet-body">
				<p class="bold">Parking spots will be assigned randomly.</p>
				<p class="bold">I have a parking spot:</p>
				<ul>
					<li>You can give up your spot until 5pm the night before. After 5pm, no changes can be made until the next morning.</li>
					<li>You can reclaim your spot if it has not been assigned to another employee.</li>
				</ul>
				<p class="bold">I want a parking spot:</p>
				<ul>
					<li>If you are assigned a spot, you have:
						<ul>
							<li>
								30 minutes to accept at night
							</li>
							<li>
								10 minutes to accept in the morning
							</li>
						</ul>
					</li>
					<li>
						You can accept the spot, deny the spot, or do nothing.
					</li>
				</ul>
			</div>
		</div>
	</div>
	{{-- END INSTRUCTIONS PORTLET --}}
@stop