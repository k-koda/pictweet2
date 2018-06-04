@extends ('layout')

@section ('content')
  <div class="contents row">
    <div class="content_post" style="background-image: url({{ $tweet->image }});">
      <div class="more">
        <span><img src='/images/arrow_top.png'></span>
        <ul class="more_list">
          <a href="/tweets/{{ $tweet->id }}">詳細</a>
          @if (Auth::user()->id == $tweet->user->id)
            <li>
              <a href="/tweets/{{ $tweet->id }}/edit">編集</a>
            </li>
            <li>
              <a href="/tweets/{{ $tweet->id }}/delete">削除</a>
            </li>
          @endif
        </ul>
      </div>

      <p>{{ $tweet->text }}</p>
      <span class="name">
        <a href="#"><span>投稿者</span>{{ $tweet->user->name }}</a>
      </span>
    </div>

    <div class="container">
    <!--ここからフォーム-->
    @if (Auth::check())
      {{ Form::open(['url' => "/tweets/{$tweet->id}/comments"]) }}
      <textarea cols="30" name="text" placeholder="コメントする" rows="2"></textarea>
      <input type="submit" value="SENT"
      {{ Form::close() }}
    @endif
    </div>
  </div>
@endsection
