@extends('layouts.app')

@section('content')
           <div class="col-md-9 contain">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
             <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Specialization</th>
                      <th scope="col">Salary</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                      <td>{{$teacher->name}}</td>
                      <td>{{$teacher->specialization}} </td>
                      <td>{{$teacher->salary}}</td>
                      <td>
                           <form action="/teachers/{{$teacher->id}}" method="post">
                              @method('DELETE')
                              @csrf
                              <a href="/teachers/{{$teacher->id}}/edit" class="btn btn-success">Edit</a>
                              <button class="btn btn-danger">Delete</button>
                              <a href="/teachers/{{$teacher->id}}" class="btn btn-primary">Full Info</a>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
         </table>
          <a href="/teachers/create" style="margin-top: 10px" class="btn btn-primary btn-lg">Add Teacher</a>
     </div>
    
     </div>
@endsection
