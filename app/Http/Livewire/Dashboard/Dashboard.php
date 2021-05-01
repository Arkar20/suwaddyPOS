<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Order;
use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Carbon;

class Dashboard extends Component
{
    public $totalrevenue;
    public $totalOrder;
    public $totalCustomers;
    public $todayOrders;
    public $monthlyrevenue;

    public function mount()
    {
        $order = Order::query();
        $this->totalrevenue = $order->sum('total_cost');
        $this->totalOrder = $order->count();
        $this->totalCustomers = Customer::all()->count();
        $this->monthlyrevenue = $order
            ->whereMonth('order_date', now('m'))
            ->sum('total_cost');
        $this->todayOrders = Order::whereDate(
            'created_at',
            'like',
            '%' . Carbon::today()->toDateString() . '%'
        )->count();
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
