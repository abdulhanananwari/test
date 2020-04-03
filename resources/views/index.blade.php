@extends('partials.frame')
<?php
$title = 'Loops.id Test';
?>

@section('title')
{{$title}}
@stop

@section('css')

@stop

@section('js')
@stop

@section('body')
<div class="container">
	<div class="columns">
		<div class="column col-12">
			<h5>Content Post</h5>
			<hr>
			<table class="table">
				<thead>
					<th>Content</th>
					<th>User Name</th>
					<th>User Email</th>
				</thead>
				<tbody>
					@foreach($viewData['contentPosts'] as $contentPost)
					<tr>
						<td>{{$contentPost->content}}</td>
						<td>{{$contentPost['user']->name}}</td>
						<td>{{$contentPost['user']->email}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<br>
		<div class="column col-12">
			<h5>User list</h5>
			<hr>
			<table class="table">
				<thead>
					<th>User Name</th>
					<th>Comments</th>
				</thead>
				<tbody>
						@foreach($viewData['userLists'] as $userList)
					<tr>
						<td>{{$userList->name}}</td>
						<td>{{$userList->post['comments'] ? $userList->post['comments']->pluck('comment')->join(',') : '' }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<br>
		<div class="column col-12">
			<h5>Comment Guest</h5>
			<hr>
			<table class="table">
				<thead>
					<th>Comment</th>
				</thead>
					<tbody>
						@foreach($viewData['commentGuests'] as $commentGuest)
					<tr>
						<td>{{$commentGuest->comment}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

	</div>
</div>