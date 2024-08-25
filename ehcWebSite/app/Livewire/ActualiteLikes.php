<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Actualite;
use App\Models\actualiteLike;

class ActualiteLikes extends Component
{
    public Actualite $actualite;
    public $hasLiked = false;
    public $ip_address;
    public $userAgent;
   
    public function mount(Actualite $actualite, $ip_address, $userAgent)
    {
        $this->actualite = $actualite;
        $this->ip_address = $ip_address;
        $this->userAgent = $userAgent;
        $this->checkIfLiked();
    }

    public function render()
    {
        return view('livewire.actualite-likes',[
            'likeCount' => $this->actualite->likes()->count(),
        ]);
    }
    public function like()
    {
        $existingLike = actualiteLike::where('ip_address', $this->ip_address)
            ->where('user_agent', $this->userAgent)
            ->where('actualite_id', $this->actualite->id)
            ->first();

        if ($existingLike) {
            
            $existingLike->delete();
            $this->hasLiked = false;
        } else {
            
            actualiteLike::create([
                'ip_address' => $this->ip_address,
                'user_agent' => $this->userAgent,
                'actualite_id' => $this->actualite->id,
            ]);
            $this->hasLiked = true;
        }
     
    }

    private function checkIfLiked()
    {
        $this->hasLiked = actualiteLike::where('ip_address', $this->ip_address)
            ->where('user_agent', $this->userAgent)
            ->where('actualite_id', $this->actualite->id)
            ->exists();
    }

}
