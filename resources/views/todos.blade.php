@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="create/todo" method="post">
                    {{csrf_field()}}
                    <input type="text" class="form-control input-lg" placeholder="Create a new todo" name="todo">
                </form>
            </div>
        </div>
    </div>
        @foreach($todos as $todo)
            <hr>
            {{$todo->todo}}
            <a href="{{route('todo.delete', ['id' => $todo->id])}}" class="btn btn-danger"> X </a>
            <a href="{{route('todo.update', ['id' => $todo->id])}}" class="btn btn-info btn-xs"> Update </a>
            @if(!$todo->completed)
                <a href="{{route('todo.completed',['id'=>$todo->id])}}" class="btn btn-xs btn-success">Mark as completed</a>
            @else
                <span class="text-success">Completed!</span>

            @endif
            <hr>
        @endforeach


@endsection