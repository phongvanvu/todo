<div>
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
                placeholder="Tên công việc (ví dụ: Học Laravel...)" 
                class="w-full text-sm outline-none placeholder:text-gray-400">
            
            <div class="flex justify-between items-center border-t border-gray-50 pt-2">
                <select wire:model="project_id" class="text-xs border-none bg-gray-50 rounded px-2 py-1 outline-none text-gray-600 cursor-pointer hover:bg-gray-100">
                    <option value="">📁 Hộp thư đến</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}"># {{ $project->name }}</option>
                    @endforeach
                </select>

                <button type="submit" 
                    class="bg-[#dc4c3e] hover:bg-[#b53d32] text-white text-xs font-bold px-4 py-1.5 rounded-md transition-colors shadow-sm">
                    Thêm nhiệm vụ
                </button>
            </div>
        </div>
    </form>

    <div class="space-y-1">
        @forelse($tasks as $task)
        <div class="flex items-start gap-3 p-3 hover:bg-gray-50 rounded-lg group transition-colors border-b border-gray-50 last:border-0" wire:key="task-{{ $task->id }}">
            
            <button wire:click="toggleTask({{ $task->id }})" 
                class="mt-0.5 w-5 h-5 rounded-full border-2 flex items-center justify-center transition-all
                {{ $task->is_completed ? 'bg-gray-400 border-gray-400' : 'border-gray-300 hover:border-gray-400' }}">
                @if($task->is_completed)
                    <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                @endif
            </button>

            <div class="flex-1 flex items-center justify-between">
                <div>
                    <p class="text-[15px] leading-relaxed transition-all {{ $task->is_completed ? 'line-through text-gray-400' : 'text-gray-700' }}">
                        {{ $task->title }}
                    </p>
                    @if($task->project)
                        <span class="text-[10px] font-medium text-gray-400 uppercase tracking-wider">
                            # {{ $task->project->name }}
                        </span>
                    @endif
                </div>

                <button wire:click="deleteTask({{ $task->id }})" 
                    wire:confirm="Bạn có chắc chắn muốn xóa công việc này?"
                    class="opacity-0 group-hover:opacity-100 p-1 hover:bg-gray-200 rounded text-gray-400 hover:text-red-600 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        @empty
        <div class="flex flex-col items-center justify-center py-12 text-center text-gray-400">
            <p class="text-sm">Không tìm thấy công việc nào trong mục này.</p>
        </div>
        @endforelse
    </div>
</div>