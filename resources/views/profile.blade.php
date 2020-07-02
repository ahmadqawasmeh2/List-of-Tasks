@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
        <form action="{{route('todo.profile.updateprofile',Auth::user()->id)}}" method="POST">
           @csrf
            <div class="container">
                    <div class="card bg-light mb-3" style="margin-top: 36px;">
              <div class="card-header" style="background-image: linear-gradient(-225deg, #5eb7a2 0%, #75687b 48%, #3c3956 100%);">
                <p style="text-align:center;">Edit Profile</p> </div>

           <div class="card-body">
             <div class="form-group">
              <label >Name</label>
             <input type="text" class="form-control"   value="{{Auth::user()->name }}" name="name" >
              </div>

              <div class="form-group">
              <label >Email</label>
             <input type="text" class="form-control"    value="{{Auth::user()->email}}" name="email" >
              </div>

              <div class="form-group">
              <label >Password</label>
              <input type="Password" class="form-control"  value="" name="password" >
              </div>


              <div class="form-group row">
              <label  class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
              <div class="col-md-6">
              <label class="radio-container m-r-45">Male
              <input type="radio"  name="gender" value="{{\App\User::GENDER_MALE}}" @if(Auth::user()->gender == \App\User::GENDER_MALE) checked @else @endif>
              <span class="checkmark"></span>
              </label>
              <label class="radio-container">Female
              <input type="radio" name="gender" value="{{\App\User::GENDER_FEMALE}}" @if(Auth::user()->gender == \App\User::GENDER_FEMALE) checked @else @endif>
              <span class="checkmark"></span>
              </label>
              </div>
              </div>
             
               <div class="form-group">
              <button type="submit" class="btn--blue btn-primary float-right" name="Create Post">Edit Profile</button>
            </div>
        </div>
    </div>

          </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
