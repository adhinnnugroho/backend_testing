<x-app-layout>
    <div class="min-h-screen bg-gray-100 font-sans">
        <!-- Top Header -->
        <x-organisms.header />

        <!-- Navigation Bar -->
        <x-organisms.navbar />

        <!-- Main Content -->
        <div class="px-0">
            <!-- Page Header (Title + Breadcrumb) -->
            <x-organisms.page-header />

            <!-- Action Bar -->
            <div class="px-6 pb-6">
                <x-atoms.button>
                    New User
                </x-atoms.button>
            </div>
            
            <!-- Page Content Placeholder -->
            <div class="px-6">
                <!-- Table or other content would go here -->
            </div>
        </div>
    </div>
</x-app-layout>
