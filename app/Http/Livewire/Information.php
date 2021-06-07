<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wisata;
use App\Models\User;
use App\Models\Saran;

use Carbon\Carbon;

class Information extends Component
{
    public $wisata;
    public $user;
    public $saran_hari;
    public $saran_bulan;

    public function updateInfo()
    {
        $this->wisata = Wisata::all()->count();
        $this->user = User::where('roles', 'USER')->count();
        $this->saran_hari = Saran::whereDate('created_at', Carbon::today())->count();
        $this->saran_bulan = Saran::whereMonth('created_at', Carbon::now()->month)->count();
    }

    public function mount()
    {
        $this->wisata = Wisata::all()->count();
        $this->user = User::where('roles', 'USER')->count();
        $this->saran_hari = Saran::whereDate('created_at', Carbon::today())->count();
        $this->saran_bulan = Saran::whereMonth('created_at', Carbon::now()->month)->count();
    }

    public function render()
    {
        return view('livewire.information', [
            'wisata' => $this->wisata,
            'user' => $this->user,
            'saran_hari' => $this->saran_hari,
            'saran_bulan' => $this->saran_bulan
        ]);
    }
}
