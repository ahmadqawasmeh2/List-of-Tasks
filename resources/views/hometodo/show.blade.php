@extends('layouts.app')
@section('content')
<div class="container">
 
  <div class="">
    <table class="table table-bordered table-striped table-responsive-stack div_func">
      <thead class="thead-dark">
         <tr>
            <th></th>
            <th>TodoName</th>
            <th>Completed</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
        <form action="{{route('todo.todo.allaction')}}">
                 @foreach($todo as $todo)
             <tr>
                <td>
                  <input class="chk btn-sm btn-info btn-teal btn-rounded btn-sm m-0 btn-sm my-0" name="check[]" type="checkbox" 
                 value="{{$todo->id}}"></td>
                <td>{{ $todo->name }}</td>
                <td>{{ $todo->complete? 'Completed' : 'Pending' }}</td>
                <td>
                  <span class="table-info">
                    <a href="{{route('todo.todo.approved' , $todo->id)}}"><button type="button"
                  class="btn-sm btn-info btn-teal btn-rounded btn-sm m-0 btn-sm my-0">{{ $todo->complete?  'un Complete'  : 'Completed' }}</button></a></span>

                  <span class="table-remove">
                    <a href="{{route('todo.todo.delete' , $todo->id)}}"><button type="button"
                     class="btn-sm btn-danger btn-teal btn-rounded btn-sm m-0 btn-sm my-0">Delete</button></a></span>
                </td>
             </tr>
              @endforeach           
         
        <button type="submit" name="complete" class="btn--palls btn-primary btn-teal btn-rounded btn-sm m-0 btn-sm my-0"
         >complete</button>

            <button type="submit" name="UnComplete" class="btn--palls  btn-info btn-teal btn-rounded btn-sm m-0 btn-sm my-0"
           >Un Complete</button>

           <button  type="submit" name="delete" class="btn--palls  btn-danger btn-teal btn-rounded btn-sm m-0 btn-sm my-0">delete</button>

        </form>
         
      </tbody>
   </table>
  </div>
   
</div>
<!-- /.container -->
   @endsection
