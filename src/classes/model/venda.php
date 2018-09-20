<?php
namespace App\Model;

use ActiveRecord\Model;

class Venda extends Model
{
    static $table_name = 'venda';
    static $primary_key = 'idvenda';

    static $has_many = array(
        array('vendaItem')
    );
}