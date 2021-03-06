<?php

namespace App\Interfaces;

interface ICache
{
	public function has($key);

    public function put($key, $json);
    
    public function get($key);
}