<!-- resources/views/components/sidebar.blade.php -->
<aside class="bg-white shadow-sm  min-h-screen z-100">
    <nav class="p-4">
        <div class="space-y-2">
            @php
                $tabs = [
                    ['name' => 'dashboard', 'url' => '/hr', 'icon' => 'fa-chart-bar'],
                    ['name' => 'employees', 'url' => '/hr/employees', 'icon' => 'fa-users'],
                    ['name' => 'attendance', 'url' => '/hr/attendance', 'icon' => 'fa-calendar-check'],
                    ['name' => 'payroll', 'url' => '/hr/payroll', 'icon' => 'fa-dollar-sign'],
                    ['name' => 'reports', 'url' => '/hr/leave', 'icon' => 'fa-file-archive'],
                    ['name' => 'settings', 'url' => '/hr/settings', 'icon' => 'fa-cog'],
                ];
                $currentRoute = request()->path();
            @endphp
            
            @foreach ($tabs as $tab)
                <a href="{{ url($tab['url']) }}"
                   class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg cursor-pointer whitespace-nowrap 
                          {{ request()->is(ltrim($tab['url'], '/')) ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50' }}">
                    <i class="fas {{ $tab['icon'] }} text-lg"></i>
                    <span class="capitalize">{{ ucfirst($tab['name']) }}</span>
                </a>
            @endforeach
        </div>
    </nav>
</aside>
