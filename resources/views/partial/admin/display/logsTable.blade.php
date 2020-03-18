<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Table</th>
            <th>Row ID</th>
            <th>Action</th>
            <th>Created at</th>
            <th>IP Address</th>
            <th>Attempt Result</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($logs as $log)
            <tr>
                <td>{{$log->id}}</td>
                <td>
                    @if ($log->user_id == null)
                        -
                    @else
                        {{$log->user->username}}
                    @endif
                </td>
                <td>{{$log->table->name}}</td>
                <td>
                    @if ($log->row_id == null)
                        -
                    @else
                        {{$log->row_id}}
                    @endif
                </td>
                <td>{{$log->action->name}}</td>
                <td>{{$log->created_at}}</td>
                <td>{{$log->ip_address}}</td>
                <td>
                    @if ($log->success == 1)
                        <span class="text-success">Success</span>
                    @else
                        <span class="text-danger">Fail</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$logs->links()}}
