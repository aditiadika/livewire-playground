<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
	public $name;
	public $email;
	public $phone;
	public $message;

	protected $rules = [
		'name' => 'required',
		'email' => 'required|email',
		'phone' => 'required',
		'message' => 'required',
	];

	public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

	public function submitForm()
	{
		$this->validate();

		$contact['name'] = $this->name;
		$contact['email'] = $this->email;
		$contact['phone'] = $this->phone;
		$contact['message'] = $this->message;

		$this->resetForm();
        session()->flash('message', 'Data successfully saved.');
	}

	private function resetForm()
	{
		$this->name = '';
		$this->email = '';
		$this->phone = '';
		$this->message = '';
	}

    public function render()
    {
        return view('livewire.contact-form');
    }
}
