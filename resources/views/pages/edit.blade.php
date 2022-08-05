@extends('layout.master')

@section('title')
	Edit task
@endsection

@section('content')
	<div class="container">
		<div class="col-md-8 offset-md-2 mt-5">

			<h4>Edit task</h4>
			<form action="{{route('update', $task->id)}}" method="post">
				@csrf
				@method('post')

				<div class="form-group">
	    			<label class="form-label">Task</label>
	    			<input type="text" name="task_input" class="form-control" value="{{$task->task_column}}" required>
	  			</div>
	  			<br>
  				<input type="submit" value="Update" class="btn btn-success">


			</form>


		</div>
	</div>
@endsection