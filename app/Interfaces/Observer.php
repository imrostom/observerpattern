<?php

namespace App\Interfaces;

interface Observer
{
    function update(Subject $subject);
}