<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>travelogue</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body class="antialiased">
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class='content__post'>
                <h2>日付</h2>
                <p>{{ $post->date }}</p>
                <h2>本文</h2>
                <p>{{ $post->body }}</p>
                <h2>スケジュール</h2>
                @foreach($post->timeschedules as $timeschedule)
                    <p>{{ $timeschedule->date }}</p>
                    <p>{{ $timeschedule->time }}</p>
                    <p>{{ $timeschedule->schedule }}</p>
                @endforeach
                

                
            </div>
        </div>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a><br>
        <p>投稿作成:{{ Auth::user()->name }}</p>
        <div class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>