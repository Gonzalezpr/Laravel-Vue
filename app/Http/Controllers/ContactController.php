<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    public function store(Request $request) {

        $validate = $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'birthday' => 'required',
           'company' => 'required',
        ]);

        $contact = Contact::insert($validate);

        return response($contact, Response::HTTP_CREATED);
    }

    public function show($id) {

        $contact =  Contact::find($id);

        return response($contact)->setStatusCode(Response::HTTP_OK);

    }

    public function update(Request $request) {

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'birthday' => 'required',
            'company' => 'required',
        ]);

        $contact = Contact::update($validate)->where(id, $request->input('id'));

        return response($contact)->setStatusCode(Response::HTTP_OK);
    }

    public function destroy(Contact $contact) {

        $contact->delete();

        return response([], Response::HTTP_NO_CONTENT);
    }
}
