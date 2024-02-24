<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
   <h1>There are tasks</h1>

   <div>
        <ul>
            {{-- @if (count($tasks)) --}}
                @forelse ($tasks as $task )
                    <li><a href="{{ route('tasks.show',['id'=>$task->id])}}">{{ $task -> title }}  </a></li>  
                @empty
                <p>There are no tasks</p>
                @endforelse 
            {{-- @endif --}}
        </ul>
        <p></p>
   </div>
</body>
</html>