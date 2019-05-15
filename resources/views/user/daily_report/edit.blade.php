@extends ('common.user')
@section ('content')

<h1 class="brand-header">日報編集</h1>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => ['report.update',$daily_report->id], 'method' => 'put']) !!}
      {!! Form::input('hidden', 'user_id','4', ['class' => 'form-control']) !!}
      <div class="form-group form-size-small">
        {!! Form::input('date', 'reporting_time',$daily_report->reporting_time->format('Y-m-d'), ['class' => 'form-control']) !!}
      <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::input('text', 'title',$daily_report->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}        
      <span class="help-block"></span>
      </div>
      <div class="form-group">
        {!! Form::textarea('contents', $daily_report->contents, ['class' => 'form-control', 'placeholder' => '本文']) !!}
      <span class="help-block"></span>
      </div>
      {!! Form::submit('update', ['name' => 'confirm', 'class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection

