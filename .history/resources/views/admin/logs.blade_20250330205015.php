<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <div class="flex flex-col w-full">
                    <h1 class="text-[3rem]">Logs</h1>
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
                            <td>{{ $log->user->name ?? 'Guest' }}</td>
                            <td>{{ $log->user->name ?? 'Guest' }}</td>
                            <td>{{ $log->user->name ?? 'Guest' }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
