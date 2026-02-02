<x-app-layout>
    <div class="px-6 py-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-light text-gray-700">Tambah Karyawan</h1>
            <a href="{{ route('employees.index') }}" class="text-sm text-gray-600 hover:text-gray-800">Kembali</a>
        </div>
        <div class="bg-white shadow-sm border border-gray-200 rounded-sm p-6">
            <form method="POST" action="{{ route('employees.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama</label>
                    <input name="name_employee" value="{{ old('name_employee') }}"
                        class="mt-1 block w-full rounded-sm border-gray-300 text-sm" />
                    @error('name_employee')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Jabatan</label>
                    <select name="position_id" class="mt-1 block w-full rounded-sm border-gray-300 text-sm">
                        <option value="">Pilih jabatan</option>
                        @foreach ($positions as $pos)
                            <option value="{{ $pos->id }}" @selected(old('position_id') == $pos->id)>{{ $pos->position_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('position_id')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kota Asal</label>
                    <select name="home_town_id" class="mt-1 block w-full rounded-sm border-gray-300 text-sm">
                        <option value="">Pilih kota asal</option>
                        @foreach ($hometowns as $ht)
                            <option value="{{ $ht->id }}" @selected(old('home_town_id') == $ht->id)>{{ $ht->home_town_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('home_town_id')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}"
                        class="mt-1 block w-full rounded-sm border-gray-300 text-sm" />
                    @error('date_of_birth')
                        <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex justify-end space-x-2">
                    <a href="{{ route('employees.index') }}"
                        class="px-4 py-2 text-sm border rounded-sm text-gray-700">Batal</a>
                    <button type="submit" class="px-4 py-2 text-sm bg-blue-500 text-white rounded-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
