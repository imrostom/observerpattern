<?php

namespace App\Library;

use App\Interfaces\Observer;
use App\Interfaces\Subject;

class Newspaper implements Subject
{
    public string $post;
    private array $observers = array();

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function send($post)
    {
        $this->post = $post;
        $this->notify();
    }

    public function notify()
    {
        foreach ($this->observers as $reader) {
            $reader->update($this);
        }
    }
}