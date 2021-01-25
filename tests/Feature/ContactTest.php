<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Contact;

class ContactTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function a_contact_can_be_added() {

        $this->withoutExceptionHandling();

        $response = $this->post('/api/contact', $this->contact_array());

        $contact = Contact::first();

        $this->assertCount(1, Contact::all());
        $this->assertEquals('Jenaro Gonzalez', $contact->name);
        $this->assertEquals('gonzalezsanchez2@outlook.com', $contact->email);
        $this->assertEquals('06/15/1992', $contact->birthday);
        $this->assertEquals('Priefert', $contact->company);
    }

    /** @test */
    public function a_contact_can_be_shown() {

        $this->withoutExceptionHandling();

        $contact = factory(Contact::class)->create();

        $this->get('/api/contact/'. $contact->id);

        $contact = Contact::first();

        $this->assertCount(1, Contact::all());

    }

    /** @test */
    public function a_contact_field_required() {

        $this->withoutExceptionHandling();

        collect(['name', 'email', 'birthday', 'company'])
            ->each( function ($field) {

                $response = $this->post('/api/contact',
                    array_merge($this->contact_array(), [$field => '']));

                $response->assertSessionHasErrors($field);
                $this->assertCount(0, Contact::all());
            });

    }

    /** @test */
    public function a_contact_can_be_patched() {

        $contact = factory(Contact::class)->create();

        $this->patch('/api/contact/'. $contact->id);

        $contact = $contact->fresh();

        $this->assertEquals('Jenaro Gonzalez', $contact->name);
        $this->assertEquals('gonzalezsanchez2@outlook.com', $contact->email);
        $this->assertEquals('06/15/1992', $contact->birthday);
        $this->assertEquals('Priefert', $contact->company);

    }

    private function contact_array() {

        return [
          'name' => 'Jenaro Gonzalez',
          'birthday' => '06/15/1992',
          'email' => 'gonzalezsanchez2@outlook.com',
          'company' => 'Priefert',
        ];
    }

}
