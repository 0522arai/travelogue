<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>travelogue</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1 class="title">編集画面</h1>
        <div class='content'>
            <form action="/posts/{{ $post->id }}" method='POST'>
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>Title</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__date'>
                    <h2>Date</h2>
                    <input type='text' name='post[date]' value="{{ $post->date }}">
                </div>
                <div class='content__body'>
                    <h2>Body</h2>
                    <input type='text' name='post[body]' value='{{ $post->body }}'>
                </div>
                <div class='content__category'>
                    <h2>Category</h2>
                    <select name="post[category_id]">
                    </select>
                </div>
                <input type='submit' value='store'>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </form>
    </body>
</html>