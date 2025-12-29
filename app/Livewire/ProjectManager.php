<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectManager extends Component
{
    public $name = '';
    public $color = '#dc4c3e';
    public $editingProjectId = null;
    public $editName = '';
    public $editColor = '';

    // Thêm dự án mới
    public function addProject()
    {
        $this->validate(['name' => 'required|max:50']);
        Project::create(['name' => $this->name, 'color' => $this->color]);
        $this->reset(['name', 'color']);
    }

    // Kích hoạt chế độ chỉnh sửa
    public function edit($id)
    {
        $project = Project::find($id);
        $this->editingProjectId = $id;
        $this->editName = $project->name;
        $this->editColor = $project->color;
    }

    // Cập nhật dự án
    public function updateProject()
    {
        $this->validate(['editName' => 'required|max:50']);
        $project = Project::find($this->editingProjectId);
        $project->update(['name' => $this->editName, 'color' => $this->editColor]);
        $this->resetEdit();
    }

    public function resetEdit() { $this->editingProjectId = null; }

    // Xóa dự án
    public function deleteProject($id)
    {
        Project::destroy($id);
    }

    public function render()
    {
        return view('livewire.project-manager', [
            'projects' => Project::all()
        ])->layout('layouts.app'); // Sửa lại đường dẫn chuẩn ở đây
    }
}
