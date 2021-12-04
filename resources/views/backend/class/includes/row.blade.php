<x-livewire-tables::bs4.table.cell>
   {{ $row->subject_name }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->user_name }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->grade }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    @include('backend.class.includes.actions', ['row' => $row])
</x-livewire-tables::bs4.table.cell>
