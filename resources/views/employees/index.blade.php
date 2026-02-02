<x-app-layout>
    <div class="px-0">
        <!-- Page Header (Title + Breadcrumb) -->
        <x-organisms.page-header />

        <!-- Action Bar -->
        <div class="px-6 pb-6">
            <a href="{{ route('employees.create') }}"
                class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-sm font-semibold text-xs text-white hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-700 focus:outline-hidden focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Tambah Karyawan
            </a>
        </div>

        <!-- Page Content Placeholder -->
        <div class="px-6">
            <div class="bg-white shadow-sm border border-gray-200 rounded-sm overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Nama</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Jabatan</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Kota Asal</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Tanggal Lahir</th>
                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($employees as $employee)
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">{{ $employee->name_employee }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ optional($employee->position)->position_name }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ optional($employee->hometown)->home_town_name }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700">
                                    {{ \Illuminate\Support\Carbon::parse($employee->date_of_birth)->format('d M Y') }}
                                </td>
                                <td class="px-4 py-2 text-sm text-right">
                                    <a href="{{ route('employees.edit', $employee) }}"
                                        class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                                    <form action="{{ route('employees.destroy', $employee) }}" method="POST"
                                        class="inline-block" onsubmit="return confirm('Hapus karyawan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-8 text-center text-gray-500 text-sm">Tidak ada data
                                    karyawan ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $employees->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
