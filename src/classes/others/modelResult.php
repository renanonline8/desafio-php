<?php
namespace App\Others;

final class ModelResult
{
    private $results;

    public function __construct($modelResult)
    {
        $this->results = [];
        foreach ($modelResult as $key => $value) {
            array_push($this->results, $value->to_array());
        }
    }

    public function toArray()
    {
        return $this->results;
    }
}