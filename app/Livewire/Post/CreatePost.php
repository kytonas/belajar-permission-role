<?php
namespace App\Livewire\Post;

use Livewire\Component;

class CreatePost extends Component
{
    public function render()
    {
        return view('livewire.post.create-post')->layout('layouts.app', ['title' => 'Create Post']);
    }
}
