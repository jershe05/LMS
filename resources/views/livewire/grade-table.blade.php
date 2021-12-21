<div>
    <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>Name</th>
          <th>1st</th>
          <th>2nd</th>
          <th>3rd</th>
          <th>4th</th>
          <th>Final</th>

        </thead>
        <tbody>
            @foreach ($grades as $grade)
                <tr>
                <td>{{ $grade->id }}</td>
                <td>{{ $grade->user->name }}</td>

                <td>{{ number_format($grade->first, 2) }}</td>
                <td>{{ number_format($grade->second, 2) }}</td>
                <td>{{ number_format($grade->third, 2) }}</td>
                <td>{{ number_format($grade->fourth, 2) }}</td>
                <td>{{ number_format(($grade->first + $grade->second +  $grade->third + $grade->fourth) / 4, 2)}}</td>

              </tr>
            @endforeach

        </tbody>
      </table>
</div>
