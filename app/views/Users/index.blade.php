@extends('template.default')

@section('content')
<div id="users-index">
	<div class="container">
		<div class="text-center" style="border:1px solid #ddd">
			<h2><span class="glyphicon glyphicon-user"></span> USER LIST <span class="glyphicon glyphicon-user"></span></h2>
			<hr style="background-color:gray; width:98%; height: 3px;">
			<div class="text-right" style="padding-right: 10px; padding-bottom: 10px;">
				<a href="{{ route('users.create') }}" class="btn btn-s btn-success">
					<span class="glyphicon glyphicon-plus"></span> Create New User
				</a>
			</div>
			<div class="row" style="margin: 5px">
				@foreach($users as $user)
					<div class="col-xs-4">
						<div class="thumbnail" style="background-color: #F5EDCE">
							<a href="{{ route('users.show', ['user' => $user->id]) }}">
								<img src="@if($user->avatar){{ $user->avatar }}@else/images/avatar/default.jpg @endif" class="avatar-img img-circle" title="Click to see detail" alt="{{ $user->username }} Avatar">
							</a>
							<div class="caption text-left">
								<p><b>User Name</b><br>{{ $user->username }}</p>
								<p><b>Name</b><br>{{ $user->fullname }}</p>
								<p><b>E-Mail</b><br>{{ HTML::mailto($user->email) }}</p>
							</div>
							<div class="text-right">
								{{ Form::button('<span class="glyphicon glyphicon-pencil"></span> Edit', ['class'=>'btn btn-s btn-info opr-btn', 'onclick'=>'location.href="' . route('users.edit', ['id'=>$user->id]) . '"']) }}
								{{-- <button type="button" class="btn btn-s btn-info opr-btn"><span class="glyphicon glyphicon-pencil"></span> Edit </button> --}}
								<button type="button" class="btn btn-s btn-danger opr-btn"><span class="glyphicon glyphicon-trash"></span> Delete </button>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@stop
