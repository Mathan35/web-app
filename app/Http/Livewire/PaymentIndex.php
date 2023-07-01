<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use Livewire\Component;

class PaymentIndex extends Component
{
    public $start_date;
    public $end_date;

    public function render()
    {
        $query = Payment::orderBy('created_at', 'desc');

        if ($this->start_date != null) {
            $query->whereDate('created_at', '>', $this->start_date);
        }

        if ($this->end_date != null) {
            $query->whereDate('created_at', '<', $this->end_date);
        }

        $payments = $query->paginate(10);

        return view('livewire.payment-index', compact('payments'));
    }

    public function resetFilter()
    {
        $this->start_date = null;
        $this->end_date = null;
    }
}
