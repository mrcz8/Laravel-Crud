@extends('layout.master')

@section('title')
	Add task
@endsection

@section('content')
	<div class="container">
		<div class="col-md-8 offset-md-2 mt-5">
			<h4>Add task</h4>
			<form action="{{route('insert')}}" method="post">
				@csrf
				@method('post')

				<div class="form-group">
	    			<label class="form-label">New Task</label>
	    			<input type="text" name="task_input" class="form-control" id="">
	  			</div>
	  			<br>
  				<input type="submit" value="Add" class="btn btn-info">


			</form>


		</div>
	</div>
@endsection