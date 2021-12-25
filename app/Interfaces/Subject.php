<?php

namespace App\Interfaces;

interface Subject
{
    function attach(Observer $observer);

    function detach(Observer $observer);

    function notify();
}