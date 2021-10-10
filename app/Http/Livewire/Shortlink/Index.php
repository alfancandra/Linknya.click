<?php

namespace App\Http\Livewire\Shortlink;

use Livewire\Component;
use App\Models\ShortLink;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $editedLinkIndex = null;
    public $links = [];

    protected $rules = [
        'links.*.code' => ['required']
    ];

    protected $validationAttributes = [
        'links.*.code' => ['code']
    ];

    protected $listeners = ['StoreLink'];

    public function mount()
    {
        $this->links = ShortLink::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.shortlink.index',[
            'shortlinks' => ShortLink::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->get()->toArray()
        ]);
    }

    public function editLink($linkIndex)
    {
        $this->editedLinkIndex = $linkIndex;
    }

    public function saveLink($linkIndex)
    {
        $link = $this->links[$linkIndex] ?? NULL;
        $getSameCode = ShortLink::where('code',$link['code'])->first();
        if(!is_null($link) && $link['code'] != null){
            $editedLink = ShortLink::find($link['id']);
            if($editedLink&&!$getSameCode){
                $editedLink->update($link);
            }else{
                session()->flash('error','Link Sudah Dipakai');
            }
        }else{
            session()->flash('error','Tidak Boleh Kosong');
        }
        $this->editedLinkIndex = null;
    }

    public function cancel()
    {
        $this->editedLinkIndex = null;
    }

    public function StoreLink($input)
    {
        $this->links = ShortLink::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->get()->toArray();
    }
}
