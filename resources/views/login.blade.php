<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('content')

<body>
    <x-header />
    <div class="flex fixed">
        <x-dashboard />
    </div>
    
    
</body>

<script>
    function toggleComponent(tabName) {
        const tabs = document.querySelectorAll('[data-tab]');
        tabs.forEach(tab => {
            if (tab.getAttribute('data-tab') === tabName) {
                tab.classList.add('bg-blue-50', 'text-blue-600');
            } else {
                tab.classList.remove('bg-blue-50', 'text-blue-600');
            }
        });
    }
</script>

@endsection
