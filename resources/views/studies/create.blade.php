@extends('layouts.application')

@section('title')
投稿一覧   
@endsection

@section('content')
  <form action="studies" mathod="post">
    {{csrf_field()}}

    <div class="form-group">
      <label for="inputAddress">勉強日時</label>
      <input class="form-control" type="text" placeholder="Readonly input here..." readonly>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="field">分野</label>
        <input class="form-control" type="text" placeholder="Default input" id="field">
      </div>
      <div class="form-group col-md-3">
        <label for="studytime">時間</label>
        <select id="studytime" class="form-control">
          <option selected>Choose...</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="studytime">分</label>
        <select id="studytime" class="form-control">
          <option selected>Choose...</option>
          <option>00</option>
          <option>30</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">詳細</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">添付</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary">登録</button>

  </form>


内容
@endsection

@section('footer')
フッター
@endsection