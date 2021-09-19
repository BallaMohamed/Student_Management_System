@extends('layouts.app')
@section('content')

           <div class="card contain" style="width: 700px">
                <div class="card-header">Update Student</div>
                <div class="card-body">
			      <form action="/students/{{$student->id}}" method="POST">
			      	@csrf
			      	@method('PUT')
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="name" value="{{$student->name}}" placeholder="Enter Student Full Name">
					    </div>
					    <div class="col">
					      <input type="email" class="form-control" name="email" value="{{$student->email}}" placeholder="Enter Student Email">
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="age" value="{{$student->age}}" placeholder="Enter Student Age">
					    </div>
					    <div class="col">
					      <input type="text" class="form-control" name="phone" value="{{$student->phone}}" placeholder="Enter Student phone ">
					    </div>
					  </div>
					  <br>
					  <div class="form-row">
					    <div class="col">
					      <input type="text" class="form-control" name="serial_number" value="{{$student->serial_number}}" placeholder="Enter Student Serial Number">
					    </div>
					    <div class="col">
					      <input type="text" class="form-control" name="payment_of_fees" value="{{$student->payment_of_fees}}" placeholder="Enter Student Payment of Fees ">
					    </div>
					  </div>
					  <br>
					  

					  <div class="form-row">
					     <div class="col">
								<label>Select Student Department</label>
								<select class="form-control" name="department_id">
									@foreach($departments as $department)
									<option value="{{$department->id}}">{{$department->name}}</option>
									@endforeach
								</select> 
                                 <br>
								<label>Select Student Level</label>
								<select class="form-control" name="level_id">
									@foreach($levels as $level)
									<option value="{{$level->id}}">{{$level->name}} , Dept : {{$level->department->apperviation}}</option>
									@endforeach
								</select> 

				         </div>
				         <div class="col">
							 <div class="select is-multiple control">
								<label>Select Student Activities </label>
								<select name="activities[]" multiple class="form-control" style="height: 127px">
									@foreach($activities as $activity)
									<option value="{{$activity->id}}">{{$activity->name}}</option>
									@endforeach
								</select> 
				            </div>	
				         </div>
					</div>
                      <br>
					  <div class="form-row">
					    <div class="col">
					    	<button class="form-control btn btn-primary"> Update Student</button>
					    </div>
					  </div>
				  </form>
                </div>
            </div>
@endsection