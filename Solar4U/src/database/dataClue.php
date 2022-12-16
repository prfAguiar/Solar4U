<?php
require_once "dataClueDetail.php";

$clues_cost = array(
    array(
        'id' => 1,
        'icon' => 'assets/shower.svg',
        'info' => 'Entendendo o chuveiro, o maior
        inimigo da conta de energia.'

    ),
    
    array(
        'id' => 2,
        'icon' => 'assets/refrigerator.svg',
        'info' => 'Como uma geladeira estragada pode
        custar caro na conta de energia.'

    ),
    
    array(
        'id' => 3,
        'icon' => 'assets/lamp.svg',
        'info' => 'Quanto custa uma lâmpada acesa 24
        horas por dia no final do mês?'

    )
);

$clues_discount = array(
    array(
        'id' => 1,
        'icon' => 'assets/green.svg',
        'info' => 'Telhado Verde<br>
        O que é? E como se beneficiar?'

    ),
    
    array(
        'id' => 2,
        'icon' => 'assets/money.svg',
        'info' => 'Tarifa Social<br>
        Como saber se tenho direito?'

    ),
    
    array(
        'id' => 3,
        'icon' => 'assets/panel.svg',
        'info' => 'Painéis Solares<br>
        Realmente valem o investimento?'

    )
);



function getDetailCostById($id, $clues_cost_detail){
    foreach($clues_cost_detail as $key => $value){
        if($value['id'] == $id){
            return $value['detail'];
        }
    }

}

function getDetailDiscountById($id, $clues_discount_detail){
    foreach($clues_discount_detail as $key => $value){
        if($value['id'] == $id){
            return $value['detail'];
        }
    }
}

?>