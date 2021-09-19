@extends('layouts.app')

@section('content')
           <div class="col-md-9 contain">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
             <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th scope="col">#ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Assistant</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($activities as $act)
                    <tr>
                      <td>{{$act->id}}</td>
                      <td>{{$act->name}}</td>
                      <td>{{$act->teacher->name}}</td>
                      <td>
                          <form action="/activities/{{$act->id}}" method="POST">
                              @method('DELETE')
                              @csrf
                              <a href="/activities/{{$act->id}}/edit" class="btn btn-success">Edit</a>
                              <button class="btn btn-danger">Delete</button>
                               <a href="/activities/{{$act->id}}" class="btn btn-primary">Full Info</a>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
         </table>
          <a href="/activities/create" style="margin-top: 10px" class="btn btn-primary btn-lg">Add Activity</a>
     </div>
    
     </div>
@endsection
