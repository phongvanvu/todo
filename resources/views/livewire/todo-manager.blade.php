<div>
    <div class="flex justify-end mb-4">
        <a href="{{ route('projects.index') }}" class="text-xs font-semibold text-gray-400 hover:text-[#dc4c3e] transition">
            ⚙️ Quản lý dự án
        </a>
    </div>

    <div class="flex gap-4 mb-6 border-b border-gray-100 pb-2 overflow-x-auto">
        <button wire:click="$set('filter_project', null)" 
            class="text-sm font-medium transition-all {{ is_null($filter_project) ? 'text-[#dc4c3e] border-b-2 border-[#dc4c3e]' : 'text-gray-500 hover:text-gray-700' }}">
            Tất cả
        </button>
        @foreach($projects as $project)
            <button wire:click="$set('filter_project', {{ $project->id }})" 
                class="text-sm font-medium whitespace-nowrap transition-all {{ $filter_project == $project->id ? 'text-[#dc4c3e] border-b-2 border-[#dc4c3e]' : 'text-gray-500 hover:text-gray-700' }}">
                {{ $project->name }}
            </button>
        @endforeach
    </div>

    <form wire:submit.prevent="addTask" class="mb-8 group">
        <div class="flex flex-col gap-3 p-3 border border-gray-200 rounded-lg focus-within:border-gray-400 transition-all shadow-sm">
            <input type="text" wire:model="title" required autocomplete="off"
                placeholder="Thêm việc mới..." 
                class="w-full text-sm outline-none">
            
            <div class="flex justify-between items-center border-t border-gray-50 pt-2">
                <select wire:model="project_id" class="text-xs border-none bg-gray-50 rounded px-2 py-1 outline-none text-gray-600">
                    <option value="">📁 Hộp thư đến</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}"># {{ $project->name }}</option>
                    @endforeach
                </select>

                <button type="submit" class="bg-[#dc4c3e] text-white text-xs font-bold px-4 py-1.5 rounded-md">
                    Thêm nhiệm vụ
                </button>
            </div>
        </div>
    </form>

    <div class="space-y-1">
        @forelse($tasks as $task)
            <div class="flex items-start gap-3 p-3 hover:bg-gray-50 rounded-lg group border-b border-gray-50 last:border-0" wire:key="task-{{ $task->id }}">
                <button wire:click="toggleTask({{ $task->id }})" 
                    class="mt-0.5 w-5 h-5 rounded-full border-2 flex items-center justify-center transition-all
                    {{ $task->is_completed ? 'bg-gray-400 border-gray-400' : 'border-gray-300 hover:border-gray-400' }}">
                    @if($task->is_completed)
                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    @endif
                </button>

                <div class="flex-1 flex items-center justify-between">
                    <div>
                        <p class="text-[15px] {{ $task->is_completed ? 'line-through text-gray-400' : 'text-gray-700' }}">
                            {{ $task->title }}
                        </p>
                        @if($task->project)
                            <span class="text-[10px] font-medium text-gray-400 uppercase"># {{ $task->project->name }}</span>
                        @endif
                    </div>
                    <button wire:click="deleteTask({{ $task->id }})" wire:confirm="Xóa?" class="opacity-0 group-hover:opacity-100 text-gray-400 hover:text-red-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </button>
                </div>
            </div>
        @empty
            <div class="py-12 text-center text-gray-400 text-sm">Không có công việc nào.</div>
        @endforelse
    </div>
</div>