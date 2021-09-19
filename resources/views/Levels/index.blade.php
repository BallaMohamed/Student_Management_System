@extends('layouts.app')
@section('content')
           <div class="col-md-9 contain">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
             <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Department</th>
                      <th scope="col">Created_at</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($levels as $level)
                    <tr>
                      <td>{{$level->name}}</td>
                      <td>{{$level->department->name}}</td>
                      <td>{{$level->created_at->diffForHumans()}}</td>
                      <td>
                          <form action="/levels/{{$level->id}}" method="post">
                              @method('DELETE')
                              @csrf
                              <a href="/levels/{{$level->id}}/edit" class="btn btn-success">Edit</a>
                              <button class="btn btn-danger">Delete</button>
                              <a href="/levels/{{$level->id}}" class="btn btn-primary">Full Info</a>
                          </form>
                         
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
         </table>
          <a href="/levels/create" style="margin-top: 10px" class="btn btn-primary btn-lg">Create Level</a>
     </div>
     </div>
@endsection
