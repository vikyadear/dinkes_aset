<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\RuanganComponent;
use App\Models\Pegawai;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class PegawaiComponent extends Component
{   
    use WithPagination;

    public $nama, $nip, $alamat, $phone, $pegawai_id;
    public $search;
    public $searchInput =''; 

    #[\Livewire\Attributes\Url(as: false)]
    public $page = [];

    public $isEdit = false;

    protected $rules = [
        'nama' => 'required',
        'nip' => 'required',
        'alamat' => 'required',
        'phone' => 'required',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function resetInput()
    {
        $this->nama='';
        $this->nip='';
        $this->alamat='';
        $this->phone='';
        $this->search='';
        $this->searchInput='';
        $this->isEdit=false;
        $this->resetPage();
    }

    public function simpan()
    {
        try {
            $this->validate([
                'nama' => 'required',
                'nip' => 'required|unique:pegawais,nip',
                'alamat' => 'required',
                'phone' => 'required',
            ],[
                'nama' => 'Nama pegawai tidak boleh kosong.',
                'nip' => 'Nip pegawai tidak boleh kosong.',
                'nip.unique' => 'NIP sudah terdaftar. Gunakan NIP lain.',
                'alamat' => 'Alamat pegawai tidak boleh kosong.',
                'phone' => 'No Telephone pegawai tidak boleh kosong.', 
            ]);

            Pegawai::create([
                'nama'=>$this->nama,
                'nip'=>$this->nip,
                'alamat'=>$this->alamat,
                'phone'=>$this->phone,
            ]);

            $this->js('toastr.success("Data telah tersimpan")');
            $this->resetInput();
            $this->resetPage();
        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->validator->errors()->all();
            foreach ($errors as $error) {
                $this->js("toastr.error('{$error}')");
            }
        }
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        $this->pegawai_id = $pegawai->id;
        $this->nama = $pegawai->nama;
        $this->nip = $pegawai->nip;
        $this->alamat = $pegawai->alamat;
        $this->phone = $pegawai->phone;
        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'phone' => 'required',
        ],[
            'nama' => 'Nama pegawai tidak boleh kosong.',
            'nip' => 'Nip pegawai tidak boleh kosong.',
            'alamat' => 'Alamat pegawai tidak boleh kosong.',
            'phone' => 'No Telephone pegawai tidak boleh kosong.', 
        ]);

        $pegawai = Pegawai::findOrFail($this->pegawai_id);

        $pegawai->update([
            'nama'=>$this->nama,
            'nip'=>$this->nip,
            'alamat'=>$this->alamat,
            'phone'=>$this->phone,
        ]);

        $this->js('toastr.warning("Data telah diperbaharui")');
        $this->resetInput();
        $this->resetPage();
    }

    public function delete($id)
    {
        $pegawai=Pegawai::findOrFail($id);

        $pegawai->delete();
        $this->js('toastr.error("Data telah dihapus")');
        $this->resetInput();
        $this->resetPage();
    }

    public function render()
    {
        $pegawais = Pegawai::where(function($query) {
                    $query->where('nama', 'like', '%' . $this->search . '%')
                        ->orWhere('nip', 'like', '%' . $this->search . '%');
                    })
                    ->latest()
                    ->simplePaginate(10);

        return view('livewire.pegawai-component',['pegawais'=>$pegawais])
            ->layout('layouts.app');
    }
}
