<?php

namespace App\Http\Livewire;

use App\Models\Tenis;
use Livewire\Component;
use Livewire\WithFileUploads;

class ModalAnexaSnk extends Component
{
    use WithFileUploads;
    
    public $tenis;
    public $marca;
    public $imgs;
    public $desc;

    protected $rules = [
        'tenis' => 'required',
        'marca' => 'required',
        'imgs' => 'required|image|mimes:jpeg,png,svg,jpg,gif',
    ];

    protected $messages = [
        'tenis.required' => 'O nome do tênis é obrigatório',
        'marca.required' => 'A marca do tênis é obrigatória',
    ];
    
    public function insertTenis()
    {
        $tenis = new Tenis();
        $this->validate();

        $tenis->TENIS = $this->tenis;
        $tenis->MARCA = $this->marca;
        $tenis->IMG_TENIS = $this->imgs->getClientOriginalName();
        $tenis->DESC_TENIS = $this->desc;
        $tenis->CD_USUARIO = session('user_cd');
        $tenis->save();
       
        session()->flash('message', 'Sneaker cadastrado com sucesso');

        $this->emit('refreshComponent');
        $this->dispatchBrowserEvent('closeModal');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.modal-anexa-snk');
    }
}
