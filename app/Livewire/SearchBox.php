<?php

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{

    public $search = '';


    // this for live search 
    // public function updatedSearch() {
    //     $this->dispatch('search', search : $this->search);
    // }

    // Button Click Search 
    public function update() {
        $this->dispatch('search', search : $this->search); 
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
