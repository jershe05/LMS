<div>
    <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>Date</th>
          <th>Description</th>
          <th>Video</th>
        </thead>
        <tbody>
            @foreach ($classes as $class)
            @foreach ($class->class->onlineMeetings as $onlineMeeting)
            <tr>
                <td>{{ $onlineMeeting->id }}</td>
                <td>{{ $onlineMeeting->date }}</td>

                <td>{{ $onlineMeeting->description }}</td>
                <td><span class="btn" wire:click="watch('{{ $onlineMeeting->video_link }}')" data-toggle="modal" data-target=".watch">Watch</span></td>

              </tr>
            @endforeach

            @endforeach

        </tbody>
      </table>

      <div class="modal fade watch"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Watch</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                @if($watchContent)
                    <x-embed url="{{ $watchContent }}" />
                @endif

            </div>
          </div>
        </div>
      </div>
</div>
