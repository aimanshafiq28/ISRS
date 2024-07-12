<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function testdb(): string
    {
        return view('test_db');
    }
}
