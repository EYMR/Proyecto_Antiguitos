<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormViniloRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class FormVinilo extends Controller
{
    public function FormVinilos(){
        return view('auth.FormVinilos');
}

public function registerVinilo(FormViniloRequest $request){
    $vinil = User::create($request->validated());
    return redirect('/FormVinilos')->with('success', 'Account created successfully');
}
}
