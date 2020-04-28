@extends('layout')

@section('content')
	
	<div class="row">
		<div class="col-lg-12">
			<form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="post" class="form-inline">
				{{ csrf_field() }}
				<br><input type="text" class="form-control input-lg text-center" name="todo" value="{{ $todo->todo }}">
					<input type="submit" class="btn btn-info btn-md" value="Update">
			</form>
		</div>
	</div>

@stop
