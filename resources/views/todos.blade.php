<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách công việc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex justify-center p-10">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Danh sách công việc</h1>

        <form action="{{ route('tasks.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="flex gap-2">
                <input type="text" name="title" placeholder="Thêm công việc mới..." 
                    class="flex-1 border-b-2 border-gray-200 focus:border-red-500 outline-none px-2 py-1 transition-all">
                <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600 transition">Thêm</button>
            </div>
        </form>

        <ul class="space-y-3">
            @foreach($tasks as $task)
            <li class="flex items-center justify-between group border-b border-gray-100 pb-2">
                <div class="flex items-center gap-3">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf @method('PATCH')
                        <button type="submit" class="w-5 h-5 rounded-full border-2 {{ $task->is_completed ? 'bg-green-500 border-green-500' : 'border-gray-300' }} flex items-center justify-center">
                            @if($task->is_completed)
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            @endif
                        </button>
                    </form>
                    <span class="{{ $task->is_completed ? 'line-through text-gray-400' : 'text-gray-700' }}">
                        {{ $task->title }}
                    </span>
                </div>
                
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="opacity-0 group-hover:opacity-100 transition">
                    @csrf @method('DELETE')
                    <button class="text-gray-400 hover:text-red-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    </button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>