<?php

namespace App\Http\Livewire;

use Illuminate\Session\SessionManager;
use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;
    private const CACHE_KEY = 'counter_value';
    private SessionManager $session;

    public function boot(SessionManager $session): void
    {
        $this->session = $session;
    }

    public function mount(SessionManager $session): void
    {
        $this->counter = ((int)$session->get(self::CACHE_KEY)) ?? 0;
    }

    public function increment()
    {
        $this->setCounter($this->counter + 1);
    }

    public function resetCounter(): void
    {
        $this->setCounter(0);
    }


    public function render()
    {
        return view('livewire.counter');
    }

    private function setCounter(int $counter): void
    {
        $this->counter = $counter;
        $this->session->put(self::CACHE_KEY, $this->counter);
    }
}
