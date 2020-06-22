@extends('layouts.application')

@section('title')
投稿一覧   
@endsection

@section('header')
トップページの背景
@endsection

@section('content')
内容
  @foreach($studies as $study)
    {{$study->date}}
    {{$study->field}}
  @endforeach

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    <img src="..." class="card-img-top" alt="...">
  </div>

@endsection

@section('footer')
フッター
@endsection