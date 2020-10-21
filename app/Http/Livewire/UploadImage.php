<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImage extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $photo;
    public $message;

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
        'photo' => 'image|max:1024', // 1MB Max
    ];

    public function updatedPhoto()
    {
        $this->validate();
    }

    public function submitForm()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'photo' => $this->photo->store('photos')
        ]);

        $this->resetForm();
        session()->flash('message', 'Data successfully saved.');
    }

    private function resetForm()
    {
        $this->title = '';
        $this->content = '';
        $this->photo = '';
    }

    public function render()
    {
        return view('livewire.upload-image');
    }
}
