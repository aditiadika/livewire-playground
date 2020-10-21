<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class LoadMoreUserList extends Component
{
    public $perPage = 5;
    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->perPage = $this->perPage + 5;
    }

    public function render()
    {
        $users = User::latest()->paginate($this->perPage);
        $this->emit('userStore');

        return view('livewire.load-more-user-list', compact('users'));
    }
}
