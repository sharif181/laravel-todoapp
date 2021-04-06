@extends('layout.base')

@section('content')
    <div class="container mt-5">
        <h1> Todolist {{$num}} </h1>
        <form action="{{route('addtask')}}" method="post" >
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control"
                    name="addtask" 
                    placeholder="Add Task...." 
                    aria-label="Recipient's username" 
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button name="todonum" value={{ $num }}  class="btn btn-primary" type="submit">
                        Add Task
                    </button>
                </div>
              </div>
        </form>
        <div>
           @foreach ($data as $item)
           <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $item->task }}</h5>
              <a href="/deletetodo/{{ $item->id }}" class="btn btn-danger">Delete</a>
            </div>
          </div>
           @endforeach
            
        </div>
    </div>
@endsection