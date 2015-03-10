@extends('template.default')

@section('content')
<div id="page-wrapper">
	<div id="user-show" class="row text-center">		
		<div class="user-avatar-bg-img" style="background: url('@if($user->avatar)/{{ $user->avatar }}@else/images/avatar/default.jpg @endif') no-repeat center center scroll; padding: 100px 0;"></div>
		<div class="container user-avatar">
			<figure class="user-avatar-figure text-center">
				<img src="@if($user->avatar)/{{ $user->avatar }}@else/images/avatar/default.jpg @endif" class="avatar-img img-circle">
				<figcaption><div>{{ $user->fullname }}</div></figcaption>
			</figure>
		</div>
	</div>
	<div class="row text-center">
		<h3>User Details</h1>
		<div class="col-md-6 item-center text-left">
			<table class="table table-striped">
				<tr>
					<td>Username</td>
					<td>: {{ $user->username }}</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>: {{ $user->fullname }}</td>
				</tr>
				<tr>
					<td>E-Mail</td>
					<td>: {{ HTML::mailto($user->email) }}</td>
				</tr>
				<tr>
					<td>Registered At</td>
					<td>: {{ $user->created_at->format('d F Y') }}</td>
				</tr>
				<tr>
					<td>Last Logged In</td>
					<td>: {{ $user->created_at->format('d F Y H:i:s') }}</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>: <label class="label label-danger" style="font-size: 14px;">Offline</label> / <label class="label label-success" style="font-size: 14px;">Online</label></td>
				</tr>
			</table>
		</div>
	</div>
</div>
@stop