<?php
namespace App\Model;

use ActiveRecord\Model;

class VendaItem extends Model
{
    static $table_name = 'vendaItem';

    static $has_one = array(
        array('produto', 'foreign_key' => 'idproduto')
    );
}