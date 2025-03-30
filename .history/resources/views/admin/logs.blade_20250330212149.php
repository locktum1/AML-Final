<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[auto] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <div class="flex flex-col w-full">
                    <h1 class="text-[3rem]">Logs</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Action</th>
                                <th>Details</th>
                                <th>IP address</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logs as $log)
                            <tr>
                                <td>{{ $log->user->name ?? 'Guest' }}</td>
                                <td>{{ $log->action }}</td>
                                <td>{{ $log->details }}</td>
                                <td>{{ $log->ip }}</td>
                                <td>{{ $log->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
