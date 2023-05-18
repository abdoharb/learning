<?php

namespace MrHarb\Learning;

use Illuminate\Support\Facades\Request;

class CreateNewUser
{
    public function create(Request $request){
        $this->save(['name' => 'name', 'email' => 'email']);
        var_dump($request->all());
    }

    private function save(array $data){
        print_r($data);
    }
}
