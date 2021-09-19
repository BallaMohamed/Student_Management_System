@extends('layouts.app')
@section('content')

           <div class="card contain" style="width: 700px">
                <div class="card-header">Update Level</div>
                <div class="card-body">
			      <form action="/levels/{{$level->id}}" method="POST">
			      	@csrf
			      	@method('PUT')
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="name" value="{{$level->name}}" placeholder="Enter Level Full Name"><br />
					      <input type="text" class="form-control" name="apperviation" value="{{$level->apperviation}}" placeholder="Enter Level Appreviation">
					    </div>
					    <div class="col">
					      <textarea class="form-control" style="height: 95px" placeholder="Enter Level Descripion" name="description">{{$level->description}}</textarea>
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					   <div class="col">
					  <label for="exampleFormControlSelect2">Select Level Department belong To </label>
					    <select  class="form-control" id="exampleFormControlSelect2" name="department_id">
					     @foreach($departments as $department)
					      <option  value='{{$department->id}}'>{{$department->id}}-{{$department->name}}</option>
					      @endforeach
					    </select>
					    </div>
					  </div>
					  <br>
					  <button class="form-control btn btn-primary"> Update</button>
				  </form>
                </div>
            </div>
@endsection