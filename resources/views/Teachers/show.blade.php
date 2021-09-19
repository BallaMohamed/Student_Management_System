@extends('layouts.app')
@section('content')

  <div class="card contain" style="width: 700px">
         <div class="card-header">Teacher Information</div>
            <div class="card-body">
            	<div class="row">
            		<div class="col-md-10">
            			<p><span class="span1">Name:</span>{{$teacher->name}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Specialization:</span>{{$teacher->specialization}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Created_at:</span>{{$teacher->created_at->diffForHumans()}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Qualification:</span>{{$teacher->qualfication}}</p>
            		</div>
                    <div class="col-md-10">
                        <p><span class="span1">Salary:</span>{{$teacher->salary}}</p>
                    </div>

                    <div class="col-md-10">
                        <p><span class="span1">Email:</span>{{$teacher->email}}</p>
                    </div>
                    <div class="col-md-10">
                        <p><span class="span1">Phone:</span>{{$teacher->phone}}</p>
                    </div>
                    <div class="col-md-10">
                        <p><span class="span1">Courses:</span>
                            @forelse($teacher->courses->pluck('name') as $name)
                            <a href="">{{$name}}</a> , 
                            @empty
                             <span>No Course Added Yet.</span>
                            @endforelse
                          
                        </p>
                    </div>
            	</div>
            	
            	<div class="col-md-5">
                      <a href="/teachers" class="btn btn-info"><--Back</a>
                    </div>
            </div>
   </div>
@endsection