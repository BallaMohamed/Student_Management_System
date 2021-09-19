@extends('layouts.app')
@section('content')

           <div class="card contain" style="width: 700px">
                <div class="card-header">Create Teacher</div>
                <div class="card-body">
			      <form action="/teachers" method="POST">
			      	@csrf
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Teacher Full Name">
					    </div>
					    <div class="col">
					      <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Teacher Email ">
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Enter Teacher Phone Number">
					    </div>
					    <div class="col">
					      <input type="text" class="form-control" name="specialization" value="{{old('specialization')}}" placeholder="Enter Teacher Specialization ">
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="qualfication" value="{{old('qualfication')}}" placeholder="Enter Teacher Qualification">
					    </div>
					    <div class="col">
					      <input type="text" class="form-control" name="salary" value="{{old('salary')}}" placeholder="Enter Teacher Salary ">
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					    	<button class="form-control btn btn-primary"> Create</button>
					    </div>
					</div>
					   
					  
				  </form>
                </div>
            </div>
@endsection