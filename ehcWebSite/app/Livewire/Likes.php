<?php

namespace App\Livewire;
 
use Livewire\Component;

use App\Models\Blog;
use App\Models\BlogLike;

class Likes extends Component
{

    public Blog $blog;
    public $hasLiked = false;
    public $ip_address;
    public $userAgent;
   
    public function mount(Blog $blog, $ip_address, $userAgent)
    {
        $this->blog = $blog;
        $this->ip_address = $ip_address;
        $this->userAgent = $userAgent;
        $this->checkIfLiked();
    }

    public function render()
    {
    
        return view('livewire.likes',[
            'likeCount' => $this->blog->likes()->count(),
        ]);
    }

    public function like()
    {
        $existingLike = BlogLike::where('ip_address', $this->ip_address)
            ->where('user_agent', $this->userAgent)
            ->where('blog_id', $this->blog->id)
            ->first();

        if ($existingLike) {
            
            $existingLike->delete();
            $this->hasLiked = false;
        } else {
            
            BlogLike::create([
                'ip_address' => $this->ip_address,
                'user_agent' => $this->userAgent,
                'blog_id' => $this->blog->id,
            ]);
            $this->hasLiked = true;
        }
     
    }

    private function checkIfLiked()
    {
        $this->hasLiked = BlogLike::where('ip_address', $this->ip_address)
            ->where('user_agent', $this->userAgent)
            ->where('blog_id', $this->blog->id)
            ->exists();
    }

}
