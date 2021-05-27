<?php

namespace App\Http\Livewire;

use App\Models\Saran;
use Livewire\Component;

class Notifikasi extends Component
{
    public $notif = 0;

    protected $listener = [
        'saranDitambahkan' => 'updateNotif'
    ];

    public function updateNotif()
    {
        $this->notif = Saran::all()->count();
    }

    public function mount()
    {
        $this->notif = Saran::all()->count();
    }

    public function render()
    {
        return view('livewire.notifikasi', [
            'notif' => $this->notif
        ]);
    }
}
