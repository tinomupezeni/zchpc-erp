<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('content')

<body>
    <x-header />
    <div class="flex fixed">
        <x-dashboard />
    </div>
    <div class="ml-40 t-20">
        <div class="min-h-screen w-full mt-20 p-10">
            <div class="flex">
                <main class="flex-1 p-6">
                    <div class="space-y-6">
                        <!-- Employee Management Header -->
                        <div class="flex justify-between items-center">
                            <h2 class="text-2xl font-semibold text-gray-800">Employee Management</h2>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center space-x-2 cursor-pointer" onclick="setShowModal(true)">
                                <i class="fas fa-plus"></i>
                                <span>Add Employee</span>
                            </button>
                        </div>

                        <!-- Employee Grid -->
                        <x-all-employees :employees="$employees" />

                    </div>
                </main>
            </div>
        </div>

        <div id="modal" class="hidden">
            <x-add-employee />
        </div>

    </div>


</body>

<script>
    function setShowModal(show) {
        const modal = document.getElementById('modal');
        if (show) {
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }
</script>