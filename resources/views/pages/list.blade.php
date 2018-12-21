<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Marks</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
@foreach ($student as $user)
  <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->marks}}</td>
      <td><a href="{{route('student.edit',$user->id) }}">Edit</a></td>
      <td>{{ Form::open(['action'=>['Student@delete',$user->id], 'method' => 'DELETE']) }}
          <input type="submit" value="delete" class="btn-info">
          {{ Form::close()}}
      </td>
    </tr>
@endforeach
  
  </tbody>
</table>
</div>