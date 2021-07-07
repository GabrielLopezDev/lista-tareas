<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class TaskComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $task_id, $title, $body;
    public $view = 'create';

    public function render()
    {
        return view('livewire.task-component', [
            'tasks' => Task::orderBy('id', 'desc')->paginate(8)
        ]);
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);

        Task::create([
            'title' => $this->title,
            'body'  => $this->body,
        ]);

        $this->title = '';
        $this->body  = '';
    }

    public function edit($id)
    {
        $task = Task::find($id);

        $this->task_id = $task->id;
        $this->title   = $task->title;
        $this->body    = $task->body;

        $this->view  = 'edit';
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);

        $task = Task::find($this->task_id);

        $task->update([
            'title' => $this->title,
            'body'  => $this->body,
        ]);

        $this->default();
    }

    public function destroy($id)
    {
        Task::destroy($id);
    }

    public function default()
    {
        $this->title = '';
        $this->body  = '';

        $this->view  = 'create';
    }
}
