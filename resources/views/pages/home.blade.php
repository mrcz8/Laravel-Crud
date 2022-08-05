@extends('layout.master')

@section('title')
	To do list
@endsection

@section('content')
	<div class="container">
		<div class="col-md-8 offset-md-2">
			<table class="table mt-5">
				<thead>
					<tr>
						<td><b>ID</b></td>
						<td><b>Task</b></td>
						<td><b>Done</b></td>
						<td><b>Edit</b></td>
						<td><b>Delete</b></td>
					</tr>
				</thead>
				<tbody>
					@foreach ($tasks as $task)
						<tr>
							<td>{{$task->id}}</td>
							<td>{{$task->task_column}}</td>
							<td><a href="{{route('done', $task->id)}}" onclick="return confirm('Are you sure you completed {{$task->task_column}}?')">
							@if ($task->done === 0)
								Pending
							@else
								Completed
							@endif
							</a>
							</td>
							<td><a href="{{route('edit', $task->id)}}">Edit</a></td>
							<td><a href="{{route('delete', $task->id)}}" onclick="return confirm('Are you sure you want to delete {{$task->task_column}}?')" id="dlt">Delete</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<a href="{{route('add')}}" class="btn btn-primary">Add Task</a>
		</div>
	</div>
@endsection