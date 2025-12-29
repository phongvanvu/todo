<div>
    <div class="mb-6">
        <a href="{{ route('tasks.index') }}" class="text-sm text-gray-500 hover:text-red-600 flex items-center gap-1">
            ← Quay lại Danh sách công việc
        </a>
    </div>

    <h2 class="text-xl font-bold mb-6">Quản lý Dự án</h2>

    <form wire:submit.prevent="addProject" class="mb-8 p-4 bg-gray-50 rounded-lg border border-gray-100">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
            <input type="text" wire:model="name" placeholder="Tên dự án mới..." 
                class="col-span-2 text-sm border border-gray-200 rounded px-3 py-2 outline-none focus:border-red-400">
            <input type="color" wire:model="color" class="w-full h-10 border-none bg-transparent cursor-pointer">
        </div>
        <button type="submit" class="mt-3 w-full bg-gray-800 text-white text-xs font-bold py-2 rounded hover:bg-black transition">
            Tạo dự án mới
        </button>
    </form>

    <div class="space-y-3">
        @foreach($projects as $project)
        <div class="flex items-center justify-between p-3 border border-gray-100 rounded-lg hover:shadow-sm transition">
            @if($editingProjectId === $project->id)
                <div class="flex gap-2 w-full">
                    <input type="text" wire:model="editName" class="flex-1 text-sm border rounded px-2">
                    <input type="color" wire:model="editColor" class="w-10">
                    <button wire:click="updateProject" class="text-xs text-green-600 font-bold">Lưu</button>
                    <button wire:click="resetEdit" class="text-xs text-gray-400">Hủy</button>
                </div>
            @else
                <div class="flex items-center gap-3">
                    <div class="w-3 h-3 rounded-full" style="background-color: {{ $project->color }}"></div>
                    <span class="font-medium text-gray-700">{{ $project->name }}</span>
                </div>
                <div class="flex gap-3">
                    <button wire:click="edit({{ $project->id }})" class="text-xs text-blue-500 hover:underline">Sửa</button>
                    <button wire:click="deleteProject({{ $project->id }})" wire:confirm="Xóa dự án sẽ xóa toàn bộ công việc bên trong. Tiếp tục?" class="text-xs text-red-400 hover:text-red-600">Xóa</button>
                </div>
            @endif
        </div>
        @endforeach
    </div>
</div>