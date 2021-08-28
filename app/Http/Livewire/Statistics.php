<?php

namespace App\Http\Livewire;

use App\Models\Complain;
use App\Models\Customer;
use App\Models\Inquire;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Statistics extends Component
{
   /* public $customerCount;
    public $complainCount;
    public $inquireCount;
    public $orderCount;
    public $from;
    public $to;

    public function mount()
    {
        $this->customerCount = Customer::count();
        $this->complainCount = Complain::count();
        $this->inquireCount = Inquire::count();
        $this->orderCount = Order::count();
    }

    public function updatedFrom()
    {
        $this->filter();
    }

    public function updatedTo()
    {
        $this->filter();
    }

    private function filter()
    {
        if ($this->from == null || $this->to == null) {
            return;
        }

        $this->customerCount = $this->getCount('customers');
        $this->complainCount = $this->getCount('complains');
        $this->inquireCount  = $this->getCount('inquires');
        $this->orderCount    = $this->getCount('orders');
    }

    private function getCount($table)
    {
        return DB::table($table)
            ->whereDate('created_at', '>=', $this->from)
            ->whereDate('created_at', '<=', $this->to)->count();
    }

    public function render()
    {
        return view('livewire.statistics');
    }*/
}
