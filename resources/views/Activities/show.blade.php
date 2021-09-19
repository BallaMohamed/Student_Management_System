@extends('layouts.app')
@section('content')

  <div class="card contain" style="width: 700px">
         <div class="card-header">{{$activity->name}} Activity</div>
            <div class="card-body">
            	<div class="row">
            		<div class="col-md-10">
            			<p><span class="span1">Description:</span>{{$activity->description}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Created_at:</span>{{$activity->created_at->diffForHumans()}}</p>
            		</div>
            	</div>
            	<div class="col-md-4">
            		<a href="/activities" class="btn btn-info"><--Back</a>
            	</div>
            	
            </div>
   </div>
@endsection