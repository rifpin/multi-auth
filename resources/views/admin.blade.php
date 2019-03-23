@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
					<div class="card">
						<div class="card-header bg-dark text-white">
							Admin Area 
						</div> 
						<div class="card-body">
							This is admin area <br><br>
							<a href="{{url('/home')}}" class="btn btn-secondary btn-sm">Home</a> 
						</div> 
					</div> 
			</div>
		</div> 
	</div>
@endsection