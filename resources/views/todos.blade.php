@extends('layout')

@section('content')
	
	<div class="row">
		<div class="col-lg-12">
			<form action="/create/todo" method="post" class="form-inline">
				{{ csrf_field() }}
				<br><input type="text" name="todo" class="form-control input-lg text-center" placeholder="Create a new todo">
				<input type="submit" class="btn btn-info" value="Create">
			</form>
		</div>
	</div>
	<hr>

	@foreach($todos as $todo)
		{{ $todo->todo }} 
			<a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger"> X </a>
			@if(!$todo->completed)
			<a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-primary btn-sm"> update </a>
			@endif
			
			@if(!$todo->completed)
				<a href="{{ route('todo.completed', ['id' => $todo->id]) }}" class="btn btn-success btn-xs"> Mark as completed </a>
			@else
				<a href="/" class="btn btn-default btn-xs disabled" role="button"> Completed </a>
			@endif
		<hr>
	@endforeach

@stop