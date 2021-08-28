<?php

namespace App\Http\Livewire\Table;

use App\Models\User;
use Livewire\Component;

class Admins extends Component
{
    public $perPage = 10;
    public $search  = '';
    public $type    = 1;

    protected $listeners = ['destroy'];

    public function destroy($id)
    {
        User::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.table.admins', [
            'items' => User::search($this->search, $this->type)->paginate($this->perPage)
        ]);
    }
}
