<div>
    <table class="table table-hover">
        <thead class="text-warning">
          <th>ID</th>
          <th>file</th>
          <th>Description</th>

        </thead>
        <tbody>
            @foreach ($classes as $class)
            @foreach ($class->class->modules as $module)
                <tr>
                <td>{{ $module->id }}</td>
                <td>{{ $module->file }}</td>

                <td>{{ $module->description }}</td>


              </tr>
              @endforeach
            @endforeach

        </tbody>
      </table>
</div>
