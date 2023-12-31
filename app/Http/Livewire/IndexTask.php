<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;
class IndexTask extends Component
{
    protected $listeners = [ 
        'indexTask'
    ];
    public function render()
    {
        $task = Task::orderBy('id','desc')->limit(10)->get(); 
        return view('livewire.index-task', ['task'=>$task]);
    }

    public function indexTask($task){ 
        //dd($task);
    }
}
