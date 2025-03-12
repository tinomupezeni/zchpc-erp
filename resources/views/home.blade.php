@extends('layouts.app')

@section('content')
<body>
    <x-header />

    <div class="flex fixed">
        <!-- Sidebar -->
        <aside class="bg-white shadow-sm min-h-screen z-100">
            <nav class="p-4">
                <div class="space-y-2">
                    @php
                    $tabs = [
                        ['name' => 'dashboard', 'icon' => 'fa-chart-bar'],
                        ['name' => 'employees', 'icon' => 'fa-users'],
                        ['name' => 'attendance', 'icon' => 'fa-calendar-check'],
                        ['name' => 'payroll', 'icon' => 'fa-dollar-sign'],
                        ['name' => 'reports', 'icon' => 'fa-file-archive'],
                        ['name' => 'settings', 'icon' => 'fa-cog'],
                    ];
                    @endphp

                    @foreach ($tabs as $tab)
                    <button
                        class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg cursor-pointer whitespace-nowrap 
                           {{ $loop->first ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50' }}"
                        data-tab="{{ $tab['name'] }}"
                        onclick="toggleComponent('{{ $tab['name'] }}')">
                        <i class="fas {{ $tab['icon'] }} text-lg"></i>
                        <span class="capitalize">{{ ucfirst($tab['name']) }}</span>
                    </button>
                    @endforeach
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="p-6 flex-1">
            <div id="dashboard" class="tab-content hidden"> <!-- Initially hidden -->
                <x-home-data />
            </div>

            <div id="employees" class="tab-content"> <!-- Default visible -->
                <x-employees />
            </div>
        </div>
    </div>

    <script>
        function toggleComponent(tabName) {
            console.log(tabName);
            
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));

            // Show the selected tab
            document.getElementById(tabName)?.classList.remove('hidden');

            // Remove active styles from all buttons
            document.querySelectorAll('[data-tab]').forEach(tab => {
                tab.classList.remove('bg-blue-50', 'text-blue-600');
                tab.classList.add('text-gray-600', 'hover:bg-gray-50');
            });

            // Add active styles to the clicked button
            document.querySelector(`[data-tab="${tabName}"]`)?.classList.add('bg-blue-50', 'text-blue-600');
        }

        // Set the default tab to "employees" on page load
        document.addEventListener('DOMContentLoaded', function () {
            toggleComponent('dashboard');
        });
    </script>
</body>
