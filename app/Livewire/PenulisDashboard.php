<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
class PenulisDashboard extends Component
{
    public function mount()
    {
        $this->posts = Post::all(); // Replace with appropriate query
    }
    public function render()
    {
        return view('livewire.penulis-dashboard', ['posts' => $this->posts])->layout('layouts.app', ['title' => 'Penulis Dashboard']);
    }
}
