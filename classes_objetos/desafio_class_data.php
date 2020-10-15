<div class="titulo">Desafio Data</div>
<?php
    class Data{
        public $dia = '01';
        public $mes = '01';
        public $ano = 1970;

        public function Exibir(){
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    $dataDefault = new Data();
    echo 'Data: '. $dataDefault ->Exibir().'<br>';

    $data_1 = new Data();
    $data_1 ->dia = 22;
    $data_1 ->mes = '02';
    $data_1 ->ano = 1995;
    echo 'Data: '. $data_1 ->Exibir().'<br>';
?>