<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách công việc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#fafafa] flex justify-center p-4 md:p-10">
    <div class="w-full max-w-2xl bg-white shadow-sm border border-gray-200 rounded-xl p-6 md:p-8">
        
        <header class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-2">
                <h1 class="text-2xl font-bold text-gray-900">Danh sách công việc</h1>
                <span class="bg-gray-100 text-gray-500 text-xs font-medium px-2.5 py-0.5 rounded-full">
                    {{ $tasks->count() }}
                </span>
            </div>
        </header>

        <form action="{{ route('tasks.store') }}" method="POST" class="mb-8 group">
            @csrf
            <div class="flex flex-col gap-3 p-3 border border-gray-200 rounded-lg focus-within:border-gray-400 transition-all">
                <input type="text" name="title" required autocomplete="off"
                    placeholder="Tên công việc (ví dụ: Học Laravel trong 2h...)" 
                    class="w-full text-sm outline-none placeholder:text-gray-400">
                
                <div class="flex justify-end items-center border-t border-gray-50 pt-2">
                    <button type="submit" 
                        class="bg-[#dc4c3e] hover:bg-[#b53d32] text-white text-sm font-semibold px-4 py-1.5 rounded-md transition-colors shadow-sm">
                        Thêm nhiệm vụ
                    </button>
                </div>
            </div>
            @error('title')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </form>

        <div class="space-y-1">
            @forelse($tasks as $task)
            <div class="flex items-start gap-3 p-3 hover:bg-gray-50 rounded-lg group transition-colors border-b border-gray-50 last:border-0">
                
                <form action="{{ route('tasks.update', $task) }}" method="POST" class="mt-0.5">
                    @csrf @method('PATCH')
                    <button type="submit" 
                        class="w-5 h-5 rounded-full border-2 flex items-center justify-center transition-all
                        {{ $task->is_completed ? 'bg-gray-400 border-gray-400' : 'border-gray-300 hover:border-gray-400' }}">
                        @if($task->is_completed)
                            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                            </svg>
                        @endif
                    </button>
                </form>

                <div class="flex-1 flex items-center justify-between">
                    <span class="text-[15px] leading-relaxed transition-all {{ $task->is_completed ? 'line-through text-gray-400' : 'text-gray-700' }}">
                        {{ $task->title }}
                    </span>

                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" 
                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa công việc này?')"
                        class="opacity-0 group-hover:opacity-100 transition-opacity">
                        @csrf @method('DELETE')
                        <button type="submit" class="p-1 hover:bg-gray-200 rounded text-gray-400 hover:text-red-600 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <div class="flex flex-col items-center justify-center py-12 text-center">
                <img src="https://todoist.com/_next/static/images/empty-state@2x.png" class="w-48 mb-4 opacity-50">
                <p class="text-gray-500 font-medium">Hôm nay bạn cần làm gì?</p>
                <p class="text-gray-400 text-sm">Mọi công việc sẽ hiện ra ở đây.</p>
            </div>
            @endforelse
        </div>

    </div>
</body>
</html>