<?php
namespace App\Model;

use ActiveRecord\Model;

class Produto extends Model
{
    static $table_name = 'produto';

    static $primary_key = 'idproduto';
}