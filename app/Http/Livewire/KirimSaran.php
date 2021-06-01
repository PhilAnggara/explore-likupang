<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KirimSaran extends Component
{
    public function toEmit()
    {
        // dd('toEmit Berhasil');
        $this->emit('saranDitambahkan');
    }

    public function render()
    {
        return view('livewire.kirim-saran');
    }
}
