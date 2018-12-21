<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">
<div class="col-8"> 
{{ Form::open(['action'=>['Student@update',$task->id], 'method' => 'patch']) }}
<div class="form-group"> 
   {!! Form::label('student', 'Student') !!}
      {!! Form::text('name', $task->name, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	  {!! Form::label('mark', 'Mark') !!}
      {!! Form::number('mark', $task->marks, ['class' => 'form-control']) !!}
</div>
  <input type="submit" value="Send Request" class="btn-info">
</div>
{{ Form::close()}}
</div>