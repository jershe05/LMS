<div>
    <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>Day</th>
          <th>Time</th>
          <th>Action</th>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                <td>{{ $schedule->id }}</td>
                <td>{{ $schedule->days }}</td>
                <td>From : {{ date("g:i a", strtotime($schedule->from)) }} To: {{ date("g:i a", strtotime($schedule->to))}}</td>
                <td><button class="btn btn-danger btn-sm" wire:click="delete({{ $schedule->id }})">Delete</button>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>
