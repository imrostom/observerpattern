<?php

namespace App\Library;

use App\Interfaces\Observer;
use App\Interfaces\Subject;

class Reader implements Observer
{

    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(Subject $subject)
    {
        echo '<b>' . $this->name . '</b> get notification <b>' . $subject->post . '</b><br>';
    }
}