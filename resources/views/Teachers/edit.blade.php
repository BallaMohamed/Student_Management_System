@extends('layouts.app')
@section('content')

           <div class="card contain" style="width: 700px">
                <div class="card-header">Update Teacher</div>
                <div class="card-body">
			      <form action="/teachers/{{$teacher->id}}" method="POST">
			      	@csrf
			      	@method('PUT')
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="name" value="{{$teacher->name}}" >
					    </div>
					    <div class="col">
					      <input type="email" class="form-control" name="email" value="{{$teacher->email}}" >
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="phone" value="{{$teacher->phone}}" >
					    </div>
					    <div class="col">
					      <input type="text" class="form-control" name="specialization" value="{{$teacher->specialization}}">
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="qualfication" value="{{$teacher->qualfication}}">
					    </div>
					    <div class="col">
					      <input type="text" class="form-control" name="salary" value="{{$teacher->salary}}" >
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					    	<button class="form-control btn btn-primary"> Update</button>
					    </div>
					</div>
					   
					  
				  </form>
                </div>
            </div>
@endsection