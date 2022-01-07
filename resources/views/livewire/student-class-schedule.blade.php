<div>
    <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>Day</th>
          <th>Time</th>

        </thead>
        <tbody>
            @foreach ($studentClasses as $studentClass)
             @foreach ($studentClass->classes as $class)

                @foreach ($class->schedules as $schedule)

                <tr>
                    <td>{{ $schedule->id }}</td>
                    <td>{{ $schedule->days }}</td>
                    <td>From : {{ date("g:i a", strtotime($schedule->from)) }} To: {{ date("g:i a", strtotime($schedule->to))}}</td>

                </tr>
                @endforeach

             @endforeach

            @endforeach

        </tbody>
      </table>
</div>
