@extends('template.default')

@section('content')
<div id="page-wrapper">
	<div id="user-edit" class="row text-center">		
		<div class="user-avatar-bg-img" style="background: url('@if($user->avatar)/{{ $user->avatar }}@else/images/avatar/default.jpg @endif') no-repeat center center scroll; padding: 100px 0;"></div>
		<div class="container user-avatar">
			<figure class="user-avatar-figure text-center">
				<img src="@if($user->avatar)/{{ $user->avatar }}@else/images/avatar/default.jpg @endif" class="avatar-img img-circle">
				<figcaption><div>{{ $user->fullname }}</div></figcaption>
			</figure>
		</div>
	</div>
	<div class="row text-center">
		<div class="container">
		<h3>Edit User</h1>
		{{ Form::model($user, ['route'=>'users.store']) }}
		<div class="row">
			<div class="col-md-6 text-left">
				<div class="form-group @if($errors->has('username')) has-error @endif">
					{{ Form::label('username', '*User Name') }}
					{{ Form::text('username', null, ['class'=>'form-control']) }}
					@if($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
				</div>

				<div class="form-group @if($errors->has('fullname')) has-error @endif">
					{{ Form::label('fullname', '*Full Name') }}
					{{ Form::text('fullname', null, ['class'=>'form-control']) }}
					@if($errors->has('fullname')) <p class="help-block">{{ $errors->first('fullname') }}</p> @endif
				</div>

				<div class="form-group @if($errors->has('email')) has-error @endif">
					{{ Form::label('email', '*E-Mail') }}
					{{ Form::text('email', null, ['class'=>'form-control']) }}
					@if($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
				</div>
				
				<div class="form-group @if($errors->has('avatar')) has-error @endif">
					{{ Form::label('avatar', 'Upload Avatar') }}
					{{ Form::file('avatar', ['class'=>'form-control']) }}
					@if($errors->has('avatar')) <p class="help-block">{{ $errors->first('avatar') }}</p> @endif
				</div>

				<div class="text-left">
					<i>(*) Required Field</i>
				</div>
			</div>

			<div class="col-md-6 text-left">
				<div class="form-group @if($errors->has('old_password')) has-error @endif">
					{{ Form::label('old_password', '*Old Password') }}
					{{ Form::password('old_password', ['class'=>'form-control']) }}
					@if($errors->has('old_password')) <p class="help-block">{{ $errors->first('old_password') }}</p> @endif
				</div>

				<div class="form-group @if($errors->has('password')) has-error @endif">
					{{ Form::label('new_password', '*New Password') }}
					{{ Form::password('new_password', ['class'=>'form-control']) }}
					@if($errors->has('new_password')) <p class="help-block">{{ $errors->first('new_password') }}</p> @endif
				</div>

				<div class="form-group @if($errors->has('password_confirmation')) has-error @endif">
					{{ Form::label('new_password_confirmation', '*Confirm New Password') }}
					{{ Form::password('new_password_confirmation', ['class'=>'form-control']) }}
					@if($errors->has('new_password_confirmation')) <p class="help-block">{{ $errors->first('new_password_confirmation') }}</p> @endif
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-12 item-center">
				{{ Form::button('<span class="glyphicon glyphicon-user"></span> Submit', ['type'=>'submit', 'class'=>'btn btn-primary']) }}
				{{ Form::button('<span class="glyphicon glyphicon-remove-circle"></span> Cancel', ['class'=>'btn btn-primary', 'onclick'=>'location.href="' . route('users.index') . '"']) }}
			</div>
		</div>
	{{ Form::close() }}
	</div>
	</div>
</div>
@stop