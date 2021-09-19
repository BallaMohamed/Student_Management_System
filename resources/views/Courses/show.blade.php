@extends('layouts.app')
@section('content')

  <div class="card contain" style="width: 700px">
         <div class="card-header">{{$course->name}} Course</div>
            <div class="card-body">
            	<div class="row">
            		<div class="col-md-10">
            			<p><span class="span1">Created_at:</span>{{$course->created_at->diffForHumans()}}</p>
            		</div>
                <div class="col-md-10">
                  <p><span class="span1">Description:</span>{{$course->description}}</p>
                </div>
                <div class="col-md-10">
                  <p><span class="span1">Teacher Name:</span><a href="">{{$course->teacher->name}}</a></p>
                </div>
                 <div class="col-md-10">
                  <p><span class="span1">Department:</span><a href="">{{$course->department->name}}</a></p>
                </div>
                 <div class="col-md-10">
                  <p><span class="span1">Level:</span><a href="">{{$course->level->name}}</a></p>
                </div>
            	</div>
            	<div class="col-md-4">
            		<a href="/courses" class="btn btn-info"><--Back</a>
            	</div>
            	
            </div>
   </div>
@endsection