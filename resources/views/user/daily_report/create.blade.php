@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => 'report.store', 'method' => 'get']) !!}
        {!! Form::input('hidden', 'user_id',null, ['class' => 'form-control']) !!}
        <div class="form-group form-size-small">
      {!! Form::input('data', 'reporting_time',date("Y/m/d"),['class' => 'form-control']) !!}
      <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::input('text', 'title',null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        <!-- <input class="form-control" placeholder="Title" name="title" type="text"> -->
        <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::textarea('contents', null, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
        <!-- <textarea class="form-control" placeholder="Content" name="contents" cols="50" rows="10"></textarea> -->
        <span class="help-block"></span>
      </div>
      {!! Form::submit('create', ['name' => 'confirm', 'class' => 'btn btn-success pull-right']) !!}
      <!-- <button type="submit" class="btn btn-success pull-right">Add</button> -->
    {!! Form::close() !!}
  </div>
</div>

@endsection

