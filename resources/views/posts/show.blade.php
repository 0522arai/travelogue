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
        
        <p>投稿作成:{{ $post->user->name }}</p>
        
        <div class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</div>
        
        <div class="btn-group">
            @if (Auth::id() != $post->user_id)
            
            @if (Auth::user()->is_favorite($post->id))
                {!! Form::open(['route' =>['favorites.unfavorite', $post->id], 'method' => 'delete']) !!}
                    {!! Form::submit('いいね!を外す', ['class' => "button btn btn-warning"]) !!}
                {!! Form::close() !!}
            @else
                {!! Form::open(['route' => ['favorites.favorite', $post->id]]) !!}
                    {!! Form::submit('いいね!を付ける', ['class' => "button btn btn-warning"]) !!}
                {!! Form::close() !!}
            @endif
            
            @endif
        </div>

        <form action="/comments/{{$post->id}}" method="POST">
            @csrf
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="comment[comment]" placeholder="いいですね">{{ old('comment.comment') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('comment.comment') }}</p>
            </div>
            <input type="submit" value="store">
        </form>
        
        <div class="comments"> 
        
            @foreach($post->comments as $comment)
            
            <div class='comment'>
            
                <a href="/user/{{$post->user->id}}">{{ $comment->user->name }}より</a>
                <p>{{ $comment->comment }}</p>
                
                <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteComment({{ $comment->id }})">delete</button>
                </form>
            </div>
            
            @endforeach
        </div>
            
        <script>
            function deleteComment(id) {
                'use strict'
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>