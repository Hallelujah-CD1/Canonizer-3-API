<?php

namespace App\Helpers;

interface ResourceInterface
{
    public function jsonResponse($modelType, $data);
}
