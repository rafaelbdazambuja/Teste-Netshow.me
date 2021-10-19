<?php

namespace Tests\Browser;

use App\Models\Contact;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateContactTest extends DuskTestCase
{
    /** @test */
    public function fill_end_submit_contact_form_and_check_successs()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact/create')
            ->type('name','Nome do usuário teste')
            ->type('email','testuser@netshow.me')
            ->type('phone','(51) 99989-9232')
            ->type('message','Mensagem teste')            
            ->attach('file', storage_path('app/public/testing/blank.pdf'))
            ->press('Salvar')
            ->assertPathIs('/contact')
            ->assertSee('Contato realizado com sucesso.');
        });

        $row = Contact::where('email','testuser@netshow.me')->first();
        if($row){
            $row->delete();
        }        
    }
}
