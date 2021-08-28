<?php

namespace App\Http\Livewire\Table;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $perPage = 10;
    public $search  = '';
    public $type    = 0;

    protected $listeners = ['destroy'];

    public function destroy($id)
    {
        User::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.table.users', [
            'items' => User::search($this->search, $this->type)->paginate($this->perPage)
        ]);
    }
}
