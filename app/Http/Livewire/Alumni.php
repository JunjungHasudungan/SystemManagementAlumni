<?php

namespace App\Http\Livewire;

use App\Models\{
        User,
    };
use Livewire\Component;

class Alumni extends Component
{
    public  $alumnis,
            $name,
            $email,
            $is_create = false,
            $is_edit = false,
            $is_detail = false;

    public function render()
    {
        return view('livewire.alumni',[
            $this->alumnis = User::with('role')->where('role_id', '>', 1)->get(),
        ]);
    }

    public function openCreateModal()
    {
        return $this->is_create = true;
    }

    public function closeCreateModal()
    {
        return $this->is_create = false;
    }

    public function openEditModal()
    {
        return $this->is_edit = true;
    }

    public function closeEditModal()
    {
        return $this->is_edit = false;
    }

    public function openDetailModal()
    {
        return $this->is_detail = true;
    }

    public function closeDetailModal()
    {
        return $this->is_detail = false;
    }

    public function editAlumni($id_alumni)
    {
        $this->openEditModal();

        dd('Testing Open Edit Modal');
    }

    public function detailAlumni($id_alumnu)
    {
        dd('Testing open detail alumni');
        $this->openDetailModal();

    }
}
