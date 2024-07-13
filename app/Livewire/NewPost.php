<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class NewPost extends Component
{

    #[Validate('required|string')]
    public string $content = '';

    public function postMessage()
    {
        $this->validate();

        $post = new Post();
        $post->content = $this->content;
        $post->number_of_images = 0;
        $post->user_id = Auth::id();
        $post->save();

        session()->flash('status', 'Post successfully posted.');
    }

    public function render()
    {
        return view('livewire.new-post');
    }

}
