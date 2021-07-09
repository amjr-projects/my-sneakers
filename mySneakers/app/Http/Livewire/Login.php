<?php

namespace App\Http\Livewire;

use App\Models\Usuarios;
use DateInterval;
use DateTime;
use Firebase\JWT\JWT;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $senha;

    protected $rules = [
        'email' => 'required|email',
        'senha' => 'required'
    ];

    protected $messages = [
        'email.required' => 'O campo e-mail é obrigatório',
        'senha.required' => 'O campo senha é obrigatório'
    ];

    private function showUsers()
    {
        $user = Usuarios::where("email", "=", $this->email)->first();
        return $user;
    }

    public function registerLogin()
    {
        $dataUser = (object) array();

        $this->validate();

        $users = $this->showUsers();
        if (!isset($users)) {
            session()->flash("message", "Usuário não existe, verifique o e-mail e a senha");
            $this->reset();
        } else {
            if ($users->SENHA === $this->senha) {
                $dataUser->cd_usuario = $users->CD_USUARIO;
                $dataUser->nome = $users->NOME;
                $dataUser->email = $users->EMAIL;
                $dataUser->exp = (new DateTime())->add(new DateInterval('P2D'))->getTimestamp();
                session(['token' => JWT::encode($dataUser, 'jcj', 'HS256')]);
                return redirect('/allTenis');
            } else {
                session()->flash("message", "Senha inválida");
                $this->reset();
            }
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
