@extends('layouts.app')
@section('content')

           <div class="card contain" style="width: 700px">
                <div class="card-header">Create Department</div>
                <div class="card-body">
			      <form action="/departments" method="Post">
			      	@csrf
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Department Full Name"><br />
					      <input type="text" class="form-control" value="{{old('apperviation')}}" name="apperviation" placeholder="Enter Department Appreviation">
					    </div>
					    <div class="col">
					      <textarea class="form-control" name="description" style="height: 95px" placeholder="Enter Department Descripion">{{old('description')}}</textarea>
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					  	<div class="col">
					      <input type="text" class="form-control" name="study_fees" value="{{old('study_fees')}}" placeholder="Enter Department Study fees"><br />
					    </div>
					    <div class="col">
					      <button class="form-control btn btn-primary" style="width: 200px"> Create</button>
					    </div>
					  </div>
					  <br>
					  
				  </form>
                </div>
            </div>
@endsection