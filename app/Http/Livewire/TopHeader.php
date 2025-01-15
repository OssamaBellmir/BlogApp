<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class TopHeader extends Component
{
    public $author;

    protected $listeners = [
        'updateTopHeader'=> '$refresh'

];

    public function mount(){
        if (auth('web')->check()) {
            $this->author = User::find(auth('web')->id());
        } else {
            $this->author = null; // Ou gérez cela selon vos besoins
        }
    }

    public function render()
    {
        return view('livewire.top-header');
    }
}
