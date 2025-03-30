<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <div class="flex flex-col w-full">
                    <h1 class="text-[3rem]">Logs</h1>
                    <table class="border border-black-300">
                        <thead>
                            <tr>
                                <th class="border border-black-300">User</th>
                                <th class="border border-black-300">Action</th>
                                <th class="border border-black-300">Details</th>
                                <th class="border border-black-300">IP address</th>
                                <th class="border border-black-300">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logs as $log)
                            <tr>
                                <td class="border border-white-300">{{ $log->user->name ?? 'Guest' }}</td>
                                <td class="border border-white-300">{{ $log->action }}</td>
                                <td class="border border-white-300">{{ $log->details }}</td>
                                <td class="border border-white-300">{{ $log->ip }}</td>
                                <td class="border border-white-300">{{ $log->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $logs->links() }}
                </div>
            </div>
        </main>
    </x-slot>
</x-base>
