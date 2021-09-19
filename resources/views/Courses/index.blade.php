@extends('layouts.app')

@section('content')
           <div class="col-md-9 contain">
            <div class="table-wrapper-scroll-y my-custom-scrollbar" style="width: 720px">
             <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Department</th>
                      <th scope="col">Level</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($courses as $course)
                    <tr>
                      <td>{{$course->name}}</td>
                      <td>{{$course->department->apperviation}}</td>
                      <td>{{$course->level->name}}</td>
                      <td>
                          <form action="/courses/{{$course->id}}" method="post">
                              @method('DELETE')
                              @csrf
                              <a href="/courses/{{$course->id}}/edit" class="btn btn-success">Edit</a>
                              <button class="btn btn-danger">Delete</button>
                              <a href="/courses/{{$course->id}}" class="btn btn-primary">Full Info</a>
                          </form>
                      </td>
                     </tr>
                      @endforeach
                    
                  </tbody>
         </table>
          <a href="/courses/create" style="margin-top: 10px" class="btn btn-primary btn-lg">Add Course</a>
     </div>
    
     </div>
@endsection
