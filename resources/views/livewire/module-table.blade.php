<div>
    <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>file</th>
          <th>Description</th>

        </thead>
        <tbody>
            @foreach ($modules as $module)
                <tr>
                <td>{{ $module->id }}</td>
                <td>{{ $module->file }}</td>

                <td>{{ $module->description }}</td>

                <td><button class="btn btn-danger btn-sm" wire:click="delete({{ $module->id }})">Delete</button>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>
