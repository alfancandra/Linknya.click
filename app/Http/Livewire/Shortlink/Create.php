<?php

namespace App\Http\Livewire\Shortlink;

use Livewire\Component;
use App\Models\ShortLink;
use Illuminate\Support\Str;

class Create extends Component
{
    public $link;

    protected $rules = [
        'link' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        $input['link'] = $this->link;
        $input['code'] = Str::random(6);
   
        ShortLink::create($input);

        session()->flash('message','Link has been generated');
    }

    public function render()
    {
        return view('livewire.shortlink.create');
    }
}