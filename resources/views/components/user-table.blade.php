@props(['users'])

<div class="card-sb bg-white p-4">
    <table class="w-full text-center border-collapse table-sb">
        <thead>
            <tr>
                <th class="py-3 px-4 text-sm font-semibold">ID</th>
                <th class="py-3 px-4 text-sm font-semibold">Nama</th>
                <th class="py-3 px-4 text-sm font-semibold">NPM</th>
                <th class="py-3 px-4 text-sm font-semibold">Kelas</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($users as $user)
                <tr class="hover:opacity-90 transition duration-300">
                    <td class="py-3 px-4">{{ $user->id }}</td>
                    <td class="py-3 px-4">{{ $user->nama }}</td>
                    <td class="py-3 px-4">{{ $user->nim }}</td>
                    <td class="py-3 px-4">{{ data_get($user, 'kelas.nama_kelas') ?? (data_get($user, 'kelas') ?? '-') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
