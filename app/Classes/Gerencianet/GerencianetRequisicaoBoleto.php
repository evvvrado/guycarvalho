<?php

namespace App\Classes\Gerencianet;
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

class GerencianetRequisicaoBoleto{

    public $clientId;
    public $clientSecret;
    public $options;
    public $items = array();
    public $notify_url;
    public $customer;
    public $juros_mora;
    public $discount;
    public $conditional_discount;
    public $boleto;

    public function __construct(){
        $this->clientId = env('GERENCIANET_CLIENT');
        $this->clientSecret = env('GERENCIANET_SECRET');
        $this->notify_url = env('GERENCIANET_NOTIFY');
        $this->options = [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'sandbox' => true // altere conforme o ambiente (true = homologação e false = producao)
        ];
    }

    public function addCustomer($customer){
        $this->customer = $customer;
    }

    public function addItem($item){
        $this->items[] = $item;
    }

    public function addJurosMora($juros_mora){
        $this->juros_mora = $juros_mora;
    }

    public function addDesconto($discount){
        $this->discount = $discount;
    }

    public function addDescontoCondicional($conditional_discount){
        $this->conditional_discount = $conditional_discount;
    }

    public function addBoleto($boleto){
        $boleto['customer'] = $this->customer;
        if($this->discount)
            $boleto['discount'] = $this->discount;
        if($this->conditional_discount)
            $boleto['conditional_discount'] = $this->conditional_discount;
        $this->boleto = $boleto;
    }

    public function gerarBoleto(){
        $payment = [
            'banking_billet' => $this->boleto
        ];
        $body = [
            'items' => $this->items,
            'metadata' => [
                'notification_url' => $this->notify_url
            ],
            'payment' => $payment
        ];
        try {
            $api = new Gerencianet($this->options);
            $pay_charge = $api->oneStep([],$body);
            echo '<pre>';
            print_r($pay_charge);
            echo '<pre>';
            
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function alterarDataBoleto($charge_id, $nova_data){
        $params = [
            'id' => $charge_id
        ];
        
        $body = [
            'expire_at' => $nova_data
        ];
        
        try {
            $api = new Gerencianet($this->options);
            $charge = $api->updateBillet($params, $body);
            return 200;
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function enviarBoletoEmail($charge_id, $email){
        $params = [
            'id' => $charge_id
        ];
        
        $body = [
            'email' => $email
        ];
        
        try {
            $api = new Gerencianet($this->options);
            $response = $api->resendBillet($params, $body);
            print_r($response);
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function cancelarTransacao($charge_id){
        $params = [
            'id' => $charge_id
        ];
           
        try {
            $api = new Gerencianet($this->options);
            $charge = $api->cancelCharge($params, []);
            return 200;
        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

}

?>