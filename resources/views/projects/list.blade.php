<div class="table-container">
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Created</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->created_at ?? null }}</td>
            </tr>
        @endforeach
    </table>
</div>
