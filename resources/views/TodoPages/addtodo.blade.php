@extends('layouts.app')
@section('content')
<form action="{{route('todo.todo.createtodolist')}}" method="POST">
    @csrf
        <div class="container">
          <div class="card bg-light mb-3" style="margin-top: 36px; width:40%; margin-left:30%">
          <div class="card-header" style="background-image: linear-gradient(-225deg, #5eb7a2 0%, #75687b 48%, #3c3956 100%); ">
            <p style="text-align: center;">Add TodoList</p></div>

       <div class="card-body">
          <div class="col-md-8">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
          </div>
         </div>

           <div class="form-group ">
          <button type="submit" class="btn--blue btn-primary float-right" name="Create Post">Add TodoList</button>
        </div>
      </form>
     </div>
   @endsection
