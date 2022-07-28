<?php
include "Transaccion.php";
class Cuenta{
    private $saldo;
    private $transacciones= array();
    private $cliente;
    function __construct($saldo,$cliente){
        $this->saldo=$saldo;// Se necesita un monto inicial para abrir una cuenta
        $this->cliente=$cliente; //Asociamos el cliente a la cuenta
    }
    public function abonar($cantidad){
        if ($cantidad>0) {
            //Creamos un objeto de tipo transaccion
            //Observamos que la clase cuenta es la encargada de crear los objetos de tipo Transaccion
            $transaccion = new Transaccion("Abono",$cantidad);
            $this->transacciones[]=$transaccion;//Agregamos la transaccion a la lista
            $this->saldo+=$cantidad;
        }else{
            echo "Transaccion no permitida";
        }
    }

    public function retirar($cantidad){
        if ($cantidad>0 && $this->saldo>0) {
            
            if ($this->saldo < $cantidad) {
                $transaccion = new Transaccion("Retiro",$this->saldo);
                $this->transacciones[]=$transaccion;//Agregamos la transaccion a la lista
                //Si el saldo es menor que el retiro se coloca a 0 el saldo
                $this->saldo=0;
                echo "Cuenta sin fondos <br>";
            }else{
                $transaccion = new Transaccion("Retiro",$cantidad);
                $this->transacciones[]=$transaccion;
                $this->saldo-=$cantidad;
            }
        }else{
            echo "Transaccion no valida <br>";
        }
    }

    public function __toString(){
        //
        $transaccionesHechas="";
        foreach ($this->transacciones as $key) {
            $transaccionesHechas=$transaccionesHechas.$key."<br>";
        }
        return "El ". $this->cliente. " con saldo: ". $this->saldo."ha realizado las transacciones: <br>".$transaccionesHechas;
    }

    function __destruct(){
        //Cuando se elimina la cuenta se eliminan los objetos tipo transaccion
        unset($this->transacciones);
    }
}