<x-livewire-tables::bs4.table.cell>
   {{ $row->name }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->email }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    @include('backend.teacher.includes.actions', ['row' => $row])
</x-livewire-tables::bs4.table.cell>
