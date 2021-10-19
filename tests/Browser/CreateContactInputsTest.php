<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateContactInputsTest extends DuskTestCase
{
    /** @test */
    public function check_if_phone_validation_is_working(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact/create')
            ->type('phone','(51) 12345-6789')
            ->press('Salvar')
            ->assertSee('Número de telefone inválido.');
        });
    }

    /** @test */
    public function check_if_email_validation_is_working(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact/create')
            ->type('email','Valor inválido de e-mail')
            ->press('Salvar')
            ->assertSee('O e-mail inserido é inválido.');
        });
    }

    /** @test */
    public function check_if_attach_extension_validation_is_working(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact/create')
            ->attach('file', storage_path('app/public/testing/blank.jpg'))
            ->press('Salvar')
            ->assertSee('Apenas arquivos com extensões pdf, doc, docx, odt, txt são permitidos.');
        });
    }

    /** @test */
    public function check_if_attach_maxsize_validation_is_working(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact/create')
            ->attach('file', storage_path('app/public/testing/big.jpg'))
            ->press('Salvar')
            ->assertSee('O tamanho do arquivo não pode ser maior que 500 kilobytes.');
        });
    }

    /** @test */
    public function check_if_inputs_required_validation_is_working(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact/create')
            ->press('Salvar')
            ->assertSee('O campo nome é obrigatório.')
            ->assertSee('O campo e-mail é obrigatório.')
            ->assertSee('O campo telefone é obrigatório.')
            ->assertSee('O campo mensagem é obrigatório.')
            ->assertSee('O campo arquivo anexo é obrigatório.')
            ->assertPathIs('/contact/create');
        });
    }
}
