<?php

namespace App\Http\Livewire\Shortlink;

use Livewire\Component;
use App\Models\ShortLink;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    public $link;
    public $user_id;

    protected $rules = [
        'link' => 'required'
    ];

    public function submit()
    {
        $this->validate();

        if(Auth::check()){
            $this->user_id = Auth::user()->id;
        }else{
            $this->user_id = null;
        }
        

        $input['link'] = $this->link;
        $input['code'] = Str::random(6);
        $input['user_id'] = $this->user_id;
   
        ShortLink::create($input);

        $this->emit('StoreLink',$input);

        if(!Auth::check()){
            session()->flash('link',$input['link']);
            session()->flash('code',$input['code']);
        }
    }

    public function render()
    {
        return view('livewire.shortlink.create');
    }
}
