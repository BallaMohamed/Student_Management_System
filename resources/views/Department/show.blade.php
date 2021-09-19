@extends('layouts.app')
@section('content')

  <div class="card contain" style="width: 700px">
         <div class="card-header">{{$department->name}} Department</div>
            <div class="card-body">
            	<div class="row">
            		<div class="col-md-10" >
            			<p><span class="span1">Name:</span>{{$department->name}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Description:</span>{{$department->description}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Created_at:</span>{{$department->created_at->diffForHumans()}}</p>
            		</div>
                    <div class="col-md-10">
                        <p><span class="span1">Study fees:</span>{{$department->study_fees}}</p>
                    </div>
                    <div class="col-md-10">
                        <p><span class="span1">Apperviation:</span>{{$department->apperviation}}</p>
                    </div>
                    <div class="col-md-10">
                        <p><span class="span1">Levels:</span>
                            @forelse($department->levels->pluck('name') as $name)
                            <a href="">{{$name}}</a> , 
                            @empty
                             <span>No Level Added Yet.</span>
                            @endforelse
                          
                        </p>
                    </div>
            	</div>
            	<div class="col-md-4">
            		<a href="/departments" class="btn btn-info"><--Back</a>
            	</div>
            	
            </div>
   </div>
@endsection