<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agenda Sekolah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Agenda Sekolah
                </div>
                <div class="card">
                    <div class="p-6 2xl:-space-y-2">April</div>
                    <ul>
                        <li>PSB</li>
                        <li>Testing Gelombang 2</li>
                        <li>Upacara Pembukaan</li>
                        <li>Sambutan Kepala Sekolah</li>
                        <li>Perlombaan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>