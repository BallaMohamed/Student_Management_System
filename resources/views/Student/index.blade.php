@extends('layouts.app')
@section('content')
           <div class="col-md-9 contain">
            <div class="table-wrapper-scroll-y my-custom-scrollbar" style="width:720px">
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
                    @foreach($students as $student)
                    <tr>
                      <td>{{$student->name}}</td>
                      <td>{{$student->department->apperviation}}</td>
                      <td>{{$student->level->name}}</td>
                      <td>
                          <form action="/students/{{$student->id}}" method="post">
                              @method('DELETE')
                              @csrf
                              <a href="/students/{{$student->id}}/edit" class="btn btn-success">Edit</a>
                              <button class="btn btn-danger">Delete</button>
                              <a href="/students/{{$student->id}}" class="btn btn-primary">Full Info</a>
                          </form>
                         
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
         </table>
          <a href="/students/create" style="margin-top: 10px" class="btn btn-primary btn-lg">Add Student</a>
     </div>
     </div>
@endsection
