<?php

namespace App\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Todo extends Component
{

    public $title = '';
    public $id_todo = 0;
    public $isEdit = false;

    public function save(){

        if($this->id_todo != 0){
            ModelsTodo::find($this->id_todo)->update(['title' => $this->title]);
        }else{
            ModelsTodo::create(['title' => $this->title]);
        }

        $this->reset();
    }

    public function edit($id){

        $todo = ModelsTodo::find($id);

        $this->id_todo = $todo->id;
        $this->isEdit = true;
        $this->title = $todo->title;
    }


    public function delete($id){
        ModelsTodo::find($id)->delete();
        
    }
    
    public function render()
    {
        return view('livewire.todo', [
            'todos' => ModelsTodo::orderBy('id','desc')->get()
        ]);
    }
}
