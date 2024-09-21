<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;


class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.admin-dashboard')->layout('layouts.admin', ['title' => 'Admin Dashboard']);
    }
}
