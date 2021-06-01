<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Auth;

class Notifikasi extends Component
{
    public $notifikasi;
    public $counter;

    protected $listeners = [
        'saranDitambahkan' => 'updateNotif'
    ];

    public function updateNotif()
    {
        $this->notifikasi = Auth::user()->unreadNotifications->take(3);
        $this->counter = Auth::user()->unreadNotifications->count();
    }

    public function mount()
    {
        $this->notifikasi = Auth::user()->unreadNotifications->take(3);
        $this->counter = Auth::user()->unreadNotifications->count();
    }

    public function render()
    {
        return view('livewire.notifikasi', [
            'notifikasi' => $this->notifikasi,
            'counter' => $this->counter
        ]);
    }
}
