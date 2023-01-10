<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PainelController extends Controller
{
    private $user;


    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(){

        $title = "DashBoard";
        
        return view('Painel.painel.index');

    }
}
