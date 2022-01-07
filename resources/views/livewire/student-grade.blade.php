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
                @foreach($grade as $gradePerSubject)
                <tr>
                <td>{{ $gradePerSubject->id }}</td>
                <td>{{ $gradePerSubject->class->subject->name }}</td>

                <td>{{ number_format($gradePerSubject->first, 2) }}</td>
                <td>{{ number_format($gradePerSubject->second, 2) }}</td>
                <td>{{ number_format($gradePerSubject->third, 2) }}</td>
                <td>{{ number_format($gradePerSubject->fourth, 2) }}</td>
                <td>{{ number_format(($gradePerSubject->first + $gradePerSubject->second +  $gradePerSubject->third + $gradePerSubject->fourth) / 4, 2)}}</td>

              </tr>
              @endforeach
            @endforeach

        </tbody>
      </table>
</div>
