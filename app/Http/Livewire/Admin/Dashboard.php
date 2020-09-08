<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use DB;
use Auth;


class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
