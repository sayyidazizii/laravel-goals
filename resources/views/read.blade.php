<table class="table table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Goasl</th>
        <th>amount</th>
        <th>current</th>
        <th>balance</th>
        <th>duedate</th>
        <th>Action</th>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->image }}</td>
        <td>{{ $item->goals }}</td>
        <td>{{ $item->amount }}</td>
        <td>{{ $item->current }}</td>
        <td>{{ $item->balance }}</td>
        <td>{{ $item->duedate }}</td>
        <td>
            <button class="btn btn-warning" onClick="show({{ $item->id }})">Edit</button>
            <button class="btn btn-danger" onClick="destroy({{ $item->id }})">Delete</button>
        </td>
    </tr>
    @endforeach

</table>