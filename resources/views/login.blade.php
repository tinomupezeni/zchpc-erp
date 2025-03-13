<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-center text-2xl font-bold mb-8"></i>ZCHPC ERP Login</h2>

        @if (session('status'))
        <div class="mb-4 text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="relative">
                    <!-- <i class="absolute text-gray-400 fas fa-envelope"></i> -->
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="mb-4 flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    <span class="ml-2 text-sm text-gray-600">Remember Me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                    Forgot Password?
                </a>
            </div>

            <button type="submit"
             
                class="w-full px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700">
                Login
            </button>
        </form>
    </div>
</div>

@endsection