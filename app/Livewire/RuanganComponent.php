<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ruangan;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class RuanganComponent extends Component
{   
    use WithPagination;

    public  $nama, $ruangan_id;
    
    public $search;
    public $searchInput =''; 

    #[\Livewire\Attributes\Url(as: false)]
    public $page = [];

    public $isEdit = false;

    protected $rules = [
        'nama' => 'required',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetInput()
    {
        $this->nama='';
        $this->ruangan_id=null;
        $this->isEdit=false;
        $this->search='';
        $this->searchInput='';
        $this->resetPage();
    }

    public function simpan()
    {
        $this->validate([
            'nama'=> 'required',
        ],[
            'nama.required' => 'Nama ruangan tidak boleh kosong',
        ]);

        Ruangan::create([
            'nama'=>$this->nama,
        ]);

        // session()->flash('message','Data tersimpan');
        $this->js('toastr.success("Data berhasil disimpan")');
        $this->resetInput();
        $this->resetPage();
    }

    public function edit($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        $this->ruangan_id = $ruangan->id;
        $this->nama = $ruangan->nama;
        $this->isEdit = true;
    }
    
    public function update()
    {
        $this->validate([
            'nama'=>'required',
        ],[
            'nama'=>'Nama ruangan tidak boleh kosong.',
        ]);

        $ruangan = Ruangan::findOrFail($this->ruangan_id);

        $ruangan-> update([
            'nama'=>$this->nama,
        ]);
        $this->js('toastr.warning("Data telah diperbaharui")');
        $this->resetInput();
        $this->resetPage();
    }

    public function delete($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        $ruangan->delete();
        $this->js('toastr.error("Data telah dihapus")');
        $this->resetInput();    
        $this->resetPage();
    }

    public function render()
    {
        $ruangans = Ruangan::where('nama', 'like', '' .$this->search.'%')
                            ->latest()
                            ->simplePaginate(10);

        return view('livewire.ruangan-component', ['ruangans'=> $ruangans])->layout('layouts.app');
    }
}
