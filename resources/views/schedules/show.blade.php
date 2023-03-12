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
     <h1 class='title'>
         {{ $schedule->title }}
     </h1>
     <div class='content'>
        <div class='content_schedule'>
            <h3>詳細</h3>
            <p class='title'>{{ $schedule->title}}</p>
            <p class='sub_title'>{{ $schedule->sub_title}}</p>
            <p class='body'>{{ $schedule->body}}</p>
            <p class='schedule_at'>{{ $schedule->start_at}}</p>
            <p class='schedule_at'>{{ $schedule->due_at}}</p>
        </div>
        
     </div>
     <div class='edit'>
         <a href="/schedules/{{ $schedule->id }}/edit" style="color:white" class="bg-black rounded-md px-1 py-1">編集</a>
     </div>
     <div class='footer'>
         <a href="/" style="color:white" class="bg-black rounded-md px-1 py-1">戻る</a>
     </div>
    </body>
    </x-app-layout>
</html>
