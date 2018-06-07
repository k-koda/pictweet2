<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pictweet</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>

  <body>
    <header class="header">
      <div class="header__bar row">
        <h1 class="grid-6"><a href="/">Pictweet</a></h1>
        <div class="search__bar grid-6">
          <form action='/tweets/search' accept-charset="UTF-8" method="get">
            <input class="search__query" name="keyword" placeholder="キーワードで検索" type="text" value="">
          </form>
          <form accept-charset="utf-8" action="/" class="js-search-submit" method="get"></form>
        </div>
        <div class="user_nav grid-6">
          @if (Auth::check())
            <span>
              {{ Auth::user()->name }}
              <ul class="user__info">
                <li>
                  <a href="/users/{{ Auth::user()->id }}">マイページ</a>
                  <a href="/logout">ログアウト</a>
                </li>
              </ul>
            </span>
            <a class="post" href="/tweets/create">投稿する</a>
          @else
            <a class="post" href="/login">ログイン</a>
            <a class="post" href="/register">新規登録</a>
          @endif
        </div>
      </div>
    </header>

    @yield ('content')
  </body>
</html>
