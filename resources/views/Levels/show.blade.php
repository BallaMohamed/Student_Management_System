@extends('layouts.app')
@section('content')

  <div class="card contain" style="width: 700px">
         <div class="card-header">{{$level->name}} <span class="span1">|</span> {{$level->department->name}} Department</div>
            <div class="card-body">
            	<div class="row">
            		<div class="col-md-10">
            			<p><span class="span1">Description:</span>{{$level->description}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Created_at:</span>{{$level->created_at->diffForHumans()}}</p>
            		</div>
            		<div class="col-md-10">
            			<p><span class="span1">Appreviation:</span>{{$level->apperviation}}</p>
            		</div>
                    <div class="col-md-10">
                        <?php 
                        $count = 0 ;
                           foreach ($level->students as  $student) {
                               $count++;
                           }
                           echo "<p><span class='span1'>Tatal Student:</span> ".$count ." Students</p>";
                         
                        ?>
                        
                    </div>
                    <div class="col-md-10">
                        <p><span class="span1">Courses:</span>
                            @forelse($level->courses->pluck('name') as $name)
                            <a href="">{{$name}}</a> , 

                            @empty
                             <span>No Course Added Yet.</span>
                            @endforelse
                          
                        </p>
                    </div>
            	</div>
            	<div class="col-md-4">
            		<a href="/levels" class="btn btn-info"><--Back</a>
            	</div>
            	
            </div>
   </div>
@endsection