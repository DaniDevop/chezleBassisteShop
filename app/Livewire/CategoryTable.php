<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryTable extends Component
{

    public $categoryAll=[];
    public $editRaw=false;
    public $categoryData=[];


    public function mount(){
        $this->categoryAll=Category::all();
    }
   
    public function edit($id){

        $category = Category::find($id);
        $this->editRaw = true;
        $this->categoryData = [
            'id' => $category->id,
            'category' => $category->category,
            'status' => $category->status,
            'created_at' => $category->created_at,
            'updated_at' => $category->updated_at,
        ];

    }


    public function reloadData(){
        $this->categoryAll=Category::all();

    }

    public function update(){
        $category = Category::find( $this->categoryData['id']);
        $category->category=$this->categoryData['category'];
        $category->status=$this->categoryData['status'];
        $category->touch();
        $category->save();
        toastr()->info("Category update avec succes");
        $this->reloadData();
            $this->editRaw =false;

    }

    public function render()
    {
       
        return view('livewire.category-table',[
            'categoryAll'=>$this->categoryAll
        ]);
    }
}
