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
        <form action = "/schedules" method="POST">
            @csrf
            <h2>内容</h2>
            <input type="text" name="schedule[title]" placeholder="タイトル"/>
            <input type="text" name="schedule[sub_title]" placeholder="目標"/>
            <label for="schedule_at">開始日</label>
            <input type="date" name="schedule[start_at]" >
            <label for="schedule_at">期限日</label>
            <input type="date" name="schedule[due_at]" >
            <input type="hidden" name="schedule[user_id]" value="{{Auth::id()}}">
            <div class="body">
                <textarea name="schedule[body]" placeholder="内容"></textarea>
            </div>
            <input type="submit" value="登録">
        </from>
     <div class='footer'>
         <a href="/">戻る</a>
     </div>
    </body>
    </x-app-layout>
</html>
