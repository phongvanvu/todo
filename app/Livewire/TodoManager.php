<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Task;
use Livewire\Component;

class TodoManager extends Component
{
    public $title = ''; // Lưu tiêu đề công việc đang nhập
    public $project_id = null; // Dự án đang chọn khi tạo task
    public $filter_project = null; // Lọc danh sách theo dự án

    // Hàm thêm công việc
    public function addTask()
    {
        $this->validate(['title' => 'required|max:255']);

        Task::create([
            'title' => $this->title,
            'project_id' => $this->project_id // Lưu project_id
        ]);

        $this->title = '';
    }

    // Hàm bật/tắt trạng thái hoàn thành
    public function toggleTask($id)
    {
        $task = Task::find($id);
        $task->update(['is_completed' => !$task->is_completed]);
    }

    // Hàm xóa công việc
    public function deleteTask($id)
    {
        Task::destroy($id);
    }

    public function render()
    {
        $query = Task::query();

        // Nếu người dùng đang lọc theo dự án cụ thể
        if ($this->filter_project) {
            $query->where('project_id', $this->filter_project);
        }

        return view('livewire.todo-manager', [
            'tasks' => $query->latest()->get(),
            'projects' => Project::all()
        ])->layout('layouts.app');
    }
}
