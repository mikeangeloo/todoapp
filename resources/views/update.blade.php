@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{route('todo.save',['id'=>$todo->id])}}" method="post">
                    {{csrf_field()}}
                    <input type="text" class="form-control input-lg" placeholder="Create a new todo" name="todo" value="{{$todo->todo}}">
                </form>
            </div>
        </div>
    </div>



@endsection