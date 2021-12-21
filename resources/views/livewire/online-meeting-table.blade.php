<div>
    <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>Date</th>
          <th>Description</th>
          <th>Video</th>
        </thead>
        <tbody>
            @foreach ($onlineMeetings as $onlineMeeting)
                <tr>
                <td>{{ $onlineMeeting->id }}</td>
                <td>{{ $onlineMeeting->date }}</td>

                <td>{{ $onlineMeeting->description }}</td>
                <td>{{ $onlineMeeting->video_link }}</td>
                <td><button class="btn btn-danger btn-sm" wire:click="delete({{ $onlineMeeting->id }})">Delete</button>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>
