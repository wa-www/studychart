@extends('layouts.application')

@section('title')
投稿一覧   
@endsection

@section('header')
トップページの背景
  <div class="bk"></div>
@endsection

@section('content')
内容
  @foreach($studies as $study)
    {{$study->date}}
    {{$study->field}}
  @endforeach

  @foreach($studies as $study)
    <div class="card">
      <div class="card-body">
        <p class="card-text"><small class="text-muted">{{$study->date}}</small></p>
        <h5 class="card-title">{{$study->field}}</h5>
        <p class="card-text">{{$study->hour}}時間{{$study->minute}}分</p>
        <p class="card-text">{{$study->content}}</p>
        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
      </div>
      <img src="..." class="card-img-top" alt="...">
    </div>
  @endforeach

@endsection

@section('footer')
フッター
@endsection