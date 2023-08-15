<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>travelogue</title>
    </head>
    <body>
        <h1>travelogue</h1>
        <form action="/posts" method="POST">
            @csrf 
            <div class='title'>
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div>
                <h2>Date</h2>
                <input type="text" name="post[date]" placeholder="日付" value="{{ old('post.date') }}"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="目的、感想等">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="timeschedule">
                <h2>Date</h2>
                <input type="text" name="timeschedule[date]" placeholder="3/20" value="{{ old('timeschedule.date') }}" />
            </div>
            <div class="timeschedule">
                <h2>Time</h2>
                <input type="text" name="timeschedule[time]" placeholder="9:00" value="{{ old('timeschedule.time') }}" />
            </div>
            <div class="timeschedule">
                <h2>Schedule</h2>
                <input type="text" name="timeschedule[schedule]" placeholder="出発" value="{{ old('timeschedule.schedule') }}" />
            </div>
            <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class='back'>
            [<a href="/">back</a>]
        </div>
    </body>
</html>