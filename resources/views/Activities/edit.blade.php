@extends('layouts.app')
@section('content')

           <div class="card contain" style="width: 700px">
                <div class="card-header">Update Activity</div>
                <div class="card-body">
            <form action="/activities/{{$activity->id}}" method="POST">
              @csrf
              @method('PUT')
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" name="name" value="{{$activity->name}}" placeholder="Enter Activity Full Name"><br />
                <label for="exampleFormControlSelect2">Select Activity Assistant</label>
              <select class="form-control" id="exampleFormControlSelect2" name="teacher_id">
                @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->name}} , Qualf-  {{$teacher->qualfication}}</option>
                @endforeach
                
              </select>
              </div>
              <div class="col">
                <textarea class="form-control" style="height: 125px" placeholder="Enter Activity Descripion" name="description">{{$activity->description}}</textarea>
              </div>
            </div>
            <br>
            <button class="form-control btn btn-primary"> Update</button>
          </form>
                </div>
            </div>
@endsection