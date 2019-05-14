@extends ('common.user')
@section ('content')

<h1 class="brand-header">日報編集</h1>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => ['report.edit','$daily_report->id'], 'method' => 'GET']) !!}
      {!! Form::input('hidden', 'user_id','4', ['class' => 'form-control']) !!}
      <!-- <input class="form-control" name="user_id" type="hidden" value="4"> -->
      <div class="form-group form-size-small">
        {!! Form::input('date', 'reporting_time',null, ['class' => 'form-control']) !!}
        <!-- <input class="form-control" name="reporting_time" type="date"> -->
      <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::input('text', 'title','null', ['class' => 'form-control', 'placeholder' => 'Title']) !!}        
        <!-- <input class="form-control" placeholder="Title" name="title" type="text"> -->
      <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::textarea('contents', null, ['class' => 'form-control', 'placeholder' => '本文']) !!}
        <!-- <textarea class="form-control" placeholder="本文" name="contents" cols="50" rows="10">本文</textarea> -->
      <span class="help-block"></span>
      </div>
      {!! Form::submit('edit', ['name' => 'confirm', 'class' => 'btn btn-success pull-right']) !!}
      <!-- <button type="submit" class="btn btn-success pull-right">Update</button> -->
    {!! Form::close() !!}
  </div>
</div>

@endsection

