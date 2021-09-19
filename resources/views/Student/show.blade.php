@extends('layouts.app')
@section('content')
<div class="card contain" style="width: 700px">
                <div class="card-header">Student Information</div>
                <div class="card-body">
			     <div class="row">
            		<div class="col-md-10">
            			<p><span class="span1">Name:</span>{{$student->name}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Age:</span>{{$student->age}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Activities:</span>
                                  @forelse($student->activities->pluck('name') as $name)
                                  <a href="">{{$name}}</a> , 
                                  @empty
                             <span>No Activity Added Yet.</span>
                            @endforelse
                          
                        </p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Created_at:</span>{{$student->created_at->diffForHumans()}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Department:</span>{{$student->department->name}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Level:</span>{{$student->level->name}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Email:</span>{{$student->email}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Phone:</span>{{$student->phone}}</p>
            		</div>
                        <div class="col-md-10">
                              <p><span class="span1">Study fees Total:</span>{{$student->department->study_fees}} <span class="span1">Fees paid:</span>{{$student->payment_of_fees}}<span class="span1">The remaining fees:</span>{{$student->department->study_fees-$student->payment_of_fees}}</p>
                        </div>
                        <div class="col-md-10">
                              <p><span class="span1">Serial Number:</span>{{$student->serial_number}}</p>
                        </div>
            	</div>
            	<div class="col-md-4">
            		<a href="/students" class="btn btn-info"><--Back</a>
            	</div>
                </div>
            </div>
@endsection