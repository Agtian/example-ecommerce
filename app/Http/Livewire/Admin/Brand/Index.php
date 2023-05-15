<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Brand;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name, $slug, $status;

    public function rules()
    {
        return [
            'name'      => 'required|string',
            'slug'      => 'required|string',
            'status'    => 'nullable'
        ];
    }

    public function resetInput()
    {
        $this->name = NULL;
        $this->slug = NULL;
        $this->status = NULL;
    }

    public function render()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.brand.index', ['brands' => $brands])
            ->extends('layouts.admin')
            ->section('content');
    }

    public function storeBrand()
    {
        $validatedData = $this->validate();
        Brand::create([
            'name'  => $this->name,
            'slug'  => Str::slug($this->slug),
            'status'=> $this->status == true ? '1' : '0',
        ]);

        session()->flash('message', 'Brand added successfully.');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }
}