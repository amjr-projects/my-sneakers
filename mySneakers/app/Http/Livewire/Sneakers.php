<?php

namespace App\Http\Livewire;

use App\Http\Controllers\SneakersController;
use App\Models\Tenis;
use Livewire\Component;

class Sneakers extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function deleteTenis($cd)
    {
        if ($cd) {
            Tenis::where('CD_TENIS', $cd)->delete();
            $this->dispatchBrowserEvent('delete');
            $this->render();
        }
    }

    private function getSneakers()
    {
        $snkController = new SneakersController();
        $snk = $snkController->getAllSneakers();
        return $snk;
    }

    public function render()
    {
        $snks = $this->getSneakers();
        return view('livewire.sneakers', ['snks' => $snks]);
    }
}
