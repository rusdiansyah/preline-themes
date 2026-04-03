<?php

use Livewire\Component;
use App\Models\SettingApp;

new class extends Component {
    public $title = 'Settings';
    public $id = 1,
        $nama_aplikasi,
        $nama_instansi,
        $alamat_instansi,
        $email,
        $website,
        $logo;

    public function mount()
    {
        $setting = SettingApp::find($this->id);
        if ($setting) {
            $this->nama_aplikasi = $setting->nama_aplikasi;
            $this->nama_instansi = $setting->nama_instansi;
            $this->alamat_instansi = $setting->alamat_instansi;
            $this->email = $setting->email;
            $this->website = $setting->website;
        }
    }
    public function save()
    {
        // Validasi data
        $this->validate([
            'nama_aplikasi' => 'required|string|max:255',
            'nama_instansi' => 'required|string|max:255',
            'alamat_instansi' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
        ]);

        // Simpan data ke database atau lakukan tindakan lain sesuai kebutuhan
        SettingApp::updateOrCreate(
            ['id' => $this->id],
            [
                'nama_aplikasi' => $this->nama_aplikasi,
                'nama_instansi' => $this->nama_instansi,
                'alamat_instansi' => $this->alamat_instansi,
                'email' => $this->email,
                'website' => $this->website,
            ],
        );

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Settings berhasil disimpan',
            'icon' => 'success',
        ]);
    }

    public function render()
    {
        return $this->view()->layout('layouts::app');
    }
};
?>

<div>
    <x-card title="Settings">
        <form wire:submit.prevent="save">
            <x-form.input nama="nama_aplikasi" label="Nama Aplikasi" />
            <x-form.input nama="nama_instansi" label="Nama Instansi" />
            <x-form.input nama="alamat_instansi" label="Alamat Instansi" />
            <x-form.input nama="email" label="Email" type="email" />
            <x-form.input nama="website" label="Website" />

            <x-button.save type="submit" />
        </form>
    </x-card>
</div>
