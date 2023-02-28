<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>スケジュール管理</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
     <h1>スケジュール管理</h1>
     <a href ="/schedules/create">新規作成</a>
     <div class='schedules'>
         @foreach($schedules as $schedule)
            <div class='schedule'>
                <a href="/schedules/{{ $schedule->id }}"><h2 class='title'>{{ $schedule->title}}</h2></a>
                <h3 class='sub_title'>{{ $schedule->sub_title}}</h3>
                <p class='body'>{{ $schedule->body}}</p>
                <p class='schedule_at'>{{ $schedule->start_at}}</p>
                <p class='schedule_at'>{{ $schedule->due_at}}</p>
                <form action="/schedules/{{ $schedule->id }}" id="form_{{ $schedule->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $schedule->id}})">削除</button>
                </form>
            </div>
         @endforeach
     </div>
     <script>
         function deletePost(id){
             'use strict'
             
             if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
         }
         
     </script>
    </body>
</html>
