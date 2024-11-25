<?php

namespace App\Livewire;

use App\Models\Tenant;
use Livewire\Component;

class TenantForm extends Component
{   
    public $company_name, $name, $email, $domain, $password, $password_confirmation;

    protected $rules = [
        'company_name' => 'nullable|string|max:255',
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:tenants,email',
        'domain' => 'required|string|max:255|unique:domains,domain',
        'password' => 'required|string|min:8|confirmed',
    ];

    public function submit()
    {
        $this->validate();

        $Tenant = Tenant::create([
            'company_name' => $this->company_name,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $Tenant->domains()->create([
            'domain' => $this->domain.'.'.config('app.domain')
        ]);

        session()->flash('message', 'Tenant created successfully!');
        return redirect()->route('tenants.index'); // Adjust the route as needed
    }

    public function render()
    {
        return view('livewire.tenant-form')->layout('layouts.app');
    }
}
