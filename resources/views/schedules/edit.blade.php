<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>スケジュール管理</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   </head>
    <body class="antialiased">
        <form action = "/schedules/{{ $schedule->id }}" method="POST">
            @csrf
            @method('PUT')
            <h2>編集画面</h2>
            <div class="body">
                <div class= "title">
                    <input type="text" name="schedule[title]" value="{{ $schedule->title }}">
                </div>
               <div class="sub_title">
                <input type="text" name="schedule[sub_title]" value="{{ $schedule->sub_title }}">
                </div>
                <div class="start_at">
                <label for="start_at">開始日</label>
                <input type="date" name="schedule[start_at]" >
                </div>
                <div class="due_at">
                <label for="due_at">期限日</label>
                <input type="date" name="schedule[due_at]" >
                </div>
                <textarea name="schedule[body]" placeholder="サブ目標を設定してください">{{ $schedule->body }}</textarea>
            </div>
            
            <input type="submit" value="更新">
        </from>
     <div class='footer'>
         <a href="/schedules/{{ $schedule->id }}">戻る</a>
     </div>
    </body>
</html>
