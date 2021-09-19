@extends('layouts.app')
@section('content')
           <div class="col-md-9 contain">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
             <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Appreviation</th>
                      <th scope="col">Study fees</th>
                      <th scope="col">Created_at</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($department as $dept)
                    <tr>
                      <td>{{$dept->name}}</td>
                      <td>{{$dept->apperviation}}</td>
                      <td>{{$dept->study_fees}}</td>
                      <td>{{$dept->created_at->diffForHumans()}}</td>
                      <td>
                          <form action="/departments/{{$dept->id}}" method="post">
                              @method('DELETE')
                              @csrf
                              <a href="/departments/{{$dept->id}}/edit" class="btn btn-success">Edit</a>
                              <button class="btn btn-danger">Delete</button>
                              <a href="/departments/{{$dept->id}}" class="btn btn-primary">Full Info</a>
                          </form>
                         
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
         </table>
          <a href="/departments/create" style="margin-top: 10px" class="btn btn-primary">Create New Department</a>
     </div>
     </div>
@endsection
