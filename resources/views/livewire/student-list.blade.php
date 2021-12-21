<div>
    <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </thead>
        <tbody>
            @foreach ($studentList as $list)
                <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->user->name }}</td>
                <td><button class="btn btn-danger btn-sm" wire:click="delete({{ $list->id }})">Delete</button>
              </tr>
            @endforeach

        </tbody>
      </table>

</div>
