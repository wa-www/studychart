@extends('layouts.application')

@section('title')
投稿一覧   
@endsection

@section('header')

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">studychart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="studies/create">新規</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            会員メニュー
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/login">ログイン</a>
            <a class="dropdown-item" href="/register">新規登録</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout">ログアウト</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="bk"></div>
@endsection


@section('aside')
アサイド
  <div class="list-group">
    <button type="button" class="list-group-item list-group-item-action active">
      マイページ
    </button>
    <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
    <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
    <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
    <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
  </div>
@endsection


@section('content')
内容
  @foreach($studies as $study)
    {{$study->date}}
    {{$study->field}}
  @endforeach

  @foreach($studies as $study)
    {{-- <div class="card card-content"> --}}
      <div class="card-body">
        <p class="card-text"><small class="text-muted">{{$study->date}}</small></p>
        <h5 class="card-title">{{$study->field}}</h5>
        <p class="card-text">{{$study->hour}}時間{{$study->minute}}分</p>
        <p class="card-text">{{$study->content}}</p>
        <p class="card-text"><small class="text-muted">投稿者：{{$study->user->name}}</small></p>
        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
      </div>
      {{-- @if($study->image_url!=null) --}}
        <img src="/storage/images/{{$study->image_path}}" class="card-img-top" name="image_path" width="100px" height="80px" alt="...">
      {{-- @endif --}}
    {{-- </div> --}}
  @endforeach

@endsection

@section('footer')
フッター
@endsection