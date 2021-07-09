<?php

namespace App\Http\Livewire;

use App\Models\Usuarios;
use Livewire\Component;

class CadastraUser extends Component
{
    public $nome;
    public $email;
    public $senha;

    protected $rules = [
        'nome' => 'required',
        'email' => 'required|email',
        'senha' => 'required'
    ];

    protected $messages = [
        'nome.required' => 'O campo nome é obrigatório',
        'email.required' => 'O campo e-mail é obrigatório',
        'senha.required' => 'O campo senha é obrigatório'
    ];

    public function registerUser()
    {
        $user = new Usuarios();
        $this->validate();

        $user->NOME = $this->nome;
        $user->EMAIL = $this->email;
        $user->SENHA = $this->senha;
        $user->save();

        session()->flash("message", "Usuário cadastrado com sucesso");
        
        $this->reset();
    }

    public function render()
    {
        return view('livewire.cadastra-user');
    }
}
