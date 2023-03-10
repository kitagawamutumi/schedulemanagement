<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>スケジュール管理</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   </head>
   <x-app-layout>
    <body class="antialiased">
        <form action = "/schedules/{{ $schedule->id }}" method="POST">
            @csrf
            @method('PUT')
            <h2>編集画面</h2>
            <div class= "title">
                <input type="text" name="schedule[title]"　placeholder="タイトル" value="{{ $schedule->title }}">
                <p class="title__error" style="color:red">{{ $errors->first('schedule.title') }}</p>
            </div>
           <div class="sub_title">
                <input type="text" name="schedule[sub_title]"　placeholder="目標"  value="{{ $schedule->sub_title }}">
                <p class="sub_title__error" style="color:red">{{ $errors->first('schedule.sub_title') }}</p>
            </div>
            <div class="start_at">
                <label for="start_at">開始日</label>
                <input type="date" name="schedule[start_at]" >
                <p class="start_at__error" style="color:red">{{ $errors->first('schedule.start_at') }}</p>
            </div>
            <div class="due_at">
                <label for="due_at">期限日</label>
                <input type="date" name="schedule[due_at]" >
                <p class="due_at__error" style="color:red">{{ $errors->first('schedule.due_at') }}</p>
            </div>
            <div class="body">
                <textarea name="schedule[body]" placeholder="内容">{{ $schedule->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('schedule.body') }}</p>
            </div>
            <input type="submit" value="更新" style="color:white" class="bg-black rounded-md px-1 py-1">
        </from>
     <div class='footer'>
         <a href="/schedules/{{ $schedule->id }}" style="color:white" class="bg-black rounded-md px-1 py-1">戻る</a>
     </div>
    </body>
    </x-app-layout>
</html>
