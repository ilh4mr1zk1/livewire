<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivewireController extends Controller {

    public function index() {
        $data = "Hello World";
        return view('livewire', ['datas' => $data]);
    }

}
