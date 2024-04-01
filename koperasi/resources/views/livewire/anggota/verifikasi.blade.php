<div class="container mx-auto mt-8">
    @include('components.alert')
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIK</th>
                    <th scope="col" class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Anggota</th>
                    <th scope="col" class="px-6 py-4">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $user)
                <tr class="transition-all hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->nik }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->status_anggota }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-center items-center">
                        <button class="bg-green-100 text-green-600 px-4 py-2 rounded-full hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50 transition-colors duration-200" wire:click="verify_anggota({{ $user->id }})">
                            Verifikasi
                        </button>
                        <div class="w-4"></div>
                        <button class="bg-red-100 text-red-600 px-4 py-2 rounded-full hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50 transition-colors duration-200" wire:click="reject_anggota({{ $user->id }})">
                            Reject
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
