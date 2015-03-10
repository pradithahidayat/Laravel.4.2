@extends('template.default')

@section('content')
<div class="container text-center">
	<h2>Create a New User</h2>
	{{ Form::open(['route'=>'users.store']) }}
		<div class="row">
			<div class="col-md-4 item-center text-left">
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

				<div class="form-group @if($errors->has('password')) has-error @endif">
					{{ Form::label('password', '*Password') }}
					{{ Form::password('password', ['class'=>'form-control']) }}
					@if($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
				</div>

				<div class="form-group @if($errors->has('password_confirmation')) has-error @endif">
					{{ Form::label('password_confirmation', '*Confirm Password') }}
					{{ Form::password('password_confirmation', ['class'=>'form-control']) }}
					@if($errors->has('password_confirmation')) <p class="help-block">{{ $errors->first('password_confirmation') }}</p> @endif
				</div>
				
				<div class="form-group @if($errors->has('avatar')) has-error @endif">
					{{ Form::label('avatar', 'Upload Avatar') }}
					{{ Form::file('avatar', ['class'=>'form-control']) }}
					@if($errors->has('avatar')) <p class="help-block">{{ $errors->first('avatar') }}</p> @endif
				</div>

			</div>
		</div>
		<div class="row text-right">
			<div class="col-md-4 item-center">
				{{ Form::button('<span class="glyphicon glyphicon-user"></span> Submit', ['type'=>'submit', 'class'=>'btn btn-primary']) }}
				{{ Form::button('<span class="glyphicon glyphicon-remove-circle"></span> Cancel', ['class'=>'btn btn-primary', 'onclick'=>'location.href="' . route('users.index') . '"']) }}
			</div>
		</div>
		<div class="row text-left">
			<div class="col-md-4 item-center">
				<i>(*) Required Field</i>
			</div>
		</div>
	{{ Form::close() }}
</div>
@stop