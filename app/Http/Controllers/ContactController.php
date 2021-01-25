<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request) {

        $validate = $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'birthday' => 'required',
           'company' => 'required',
        ]);

        Contact::insert($validate);
    }

    public function show($id) {

        return Contact::find($id);

    }

    public function update(Request $request) {

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'birthday' => 'required',
            'company' => 'required',
        ]);

        Contact::update($validate)->where(id, $request->input('id'));
    }

    public function destroy(Request $request) {


        Contact::create();
    }
}
