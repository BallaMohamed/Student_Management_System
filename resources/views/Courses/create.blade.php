@extends('layouts.app')
@section('content')

           <div class="card contain" style="width: 700px">
                <div class="card-header">Create Course</div>
                <div class="card-body">
			      <form action="/courses" method="POST">
			      	@csrf
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter Course Full Name"><br />
					       <label for="exampleFormControlSelect2">Select Course Teacher </label>
					          <select  class="form-control" id="exampleFormControlSelect2" name="teacher_id">
						     @foreach($teachers as $teacher)
						      <option  value='{{$teacher->id}}'>{{$teacher->name}}</option>
						      @endforeach
					    </select>
					    </div>
					    <div class="col">
					      <textarea class="form-control" name="description" style="height: 100px" placeholder="Enter Department Descripion">{{old('description')}}</textarea>
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					     <label for="exampleFormControlSelect2">Select Course Department </label>
					    <select  class="form-control" id="exampleFormControlSelect2" name="department_id">
						     @foreach($departments as $department)
						      <option  value='{{$department->id}}'>{{$department->id}}-{{$department->name}}</option>
						      @endforeach
					    </select>
					    </div>
					     <div class="col">
					      <label for="exampleFormControlSelect2">Select Course Level </label>
					    <select  class="form-control" id="exampleFormControlSelect2" name="level_id">
						     @foreach($levels as $level)
						      <option  value='{{$level->id}}'>{{$level->name}} , {{$level->department->apperviation}} Department</option>
						      @endforeach
					    </select>
					    </div>
					  </div>
					  <br>
					  <button class="form-control btn btn-primary"> Create</button>
				  </form>
                </div>
            </div>
@endsection