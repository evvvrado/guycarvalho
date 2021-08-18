<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Gerencianet\GerencianetRequisicaoBoleto;

class GerencianetController extends Controller
{
    //
    public function teste(){
        $gerencianet = new GerencianetRequisicaoBoleto();
        $gerencianet->enviarBoletoEmail(1334034, 'gusouza980@gmail.com');
        // $gerencianet->addItem([
        //     'name' => 'Item 1', // nome do item, produto ou serviço
        //     'amount' => 1, // quantidade
        //     'value' => 1000 
        // ]);
        // $gerencianet->addItem([
        //     'name' => 'Item 2', // nome do item, produto ou serviço
        //     'amount' => 3, // quantidade
        //     'value' => 2000 
        // ]);
        // $gerencianet->addCustomer([
        //     'name' => 'Gorbadoc Oldbuck', // nome do cliente
        //     'cpf' => '94271564656', // cpf válido do cliente
        //     'phone_number' => '5144916523', // telefone do cliente
        // ]);

        // $gerencianet->addDesconto([
        //     'type' => 'currency',
        //     'value' => 10
        // ]);

        // $gerencianet->addJurosMora([
        //     'fine' => 200,
        //     'interest' => 33
        // ]);

        // $gerencianet->addDescontoCondicional([
        //     'type' => 'percentage', // seleção do tipo de desconto 
        //     'value' => 200, // porcentagem de desconto
        //     'until_date' => '2021-07-05' // data máxima para aplicação do desconto
        // ]);

        // $gerencianet->addBoleto([
        //     'expire_at' => '2021-07-08', // data de vencimento do titulo
        //     'message' => 'teste\nteste\nteste\nteste', // mensagem a ser exibida no boleto
        // ]);

        // $gerencianet->gerarBoleto();

        // dd($gerencianet->boleto);
    }
}
