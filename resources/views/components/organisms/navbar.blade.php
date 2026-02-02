<nav class="bg-zinc-800 text-white h-10 flex items-center px-6 relative z-40">
    <x-molecules.nav-item href="#" :active="false">
        <i class='bx bxs-home'></i>
    </x-molecules.nav-item>
    <x-molecules.nav-item href="#">Activities</x-molecules.nav-item>
    <x-molecules.nav-item href="#">Relationships</x-molecules.nav-item>
    <x-molecules.nav-item href="#">Transactions</x-molecules.nav-item>
    <x-molecules.nav-item href="#">Inventory</x-molecules.nav-item>

    <x-molecules.nav-item href="#" :active="true">
        Settings
        <x-slot:dropdown>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm">Users</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm">Roles</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-sm">Employee</a>
        </x-slot:dropdown>
    </x-molecules.nav-item>

    <x-molecules.nav-item href="#">Report</x-molecules.nav-item>
</nav>
