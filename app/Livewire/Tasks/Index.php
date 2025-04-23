<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class Index extends Component
{
    use WithPagination;

    public function taskDelete(int $id): void
    {
        $this->dispatch('confirm', id: $id);
    }

    #[On('delete')]
    public function delete($id)
    {
        Task::find($id)->delete();
    }

    public function render(): View
    {
        return view('livewire.tasks.index', [
            'tasks' => Task::paginate(10),
        ]);
    }
}
