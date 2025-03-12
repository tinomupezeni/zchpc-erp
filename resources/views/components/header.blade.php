<!-- Header -->
<header class="bg-white fixed w-full z-1 shadow-md top-0">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center space-x-4">
            <h1 class="flex items-center justify-center text-xl font-semibold text-gray-500">
                <span class="text-blue-500">
                    <!-- You can replace this with an image or SVG for the logo -->
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-blue-500">
                        <path d="M12 2L4 6V18L12 22L20 18V6L12 2Z" fill="currentColor"></path>
                    </svg>
                </span>
                <span>ZCHPC HR</span>
            </h1>
        </div>
        <div class="relative">
            <!-- Profile Menu Button -->
            <button onclick="toggleProfileMenu()" class="flex items-center justify-between w-full px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition-all duration-300 ease-in-out cursor-pointer" aria-label="Profile Menu Toggle" aria-haspopup="true">
                <div class="flex items-center space-x-3">
                    <span class="bg-blue-500 text-white p-2 rounded-full text-sm font-semibold">A</span>
                    <span class="text-gray-800 font-medium">HR Admin</span>
                </div>
                <svg class="ml-2 text-gray-500 transform transition-transform duration-200 ease-in-out" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 10L12 15L17 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>

            <!-- Profile Menu Dropdown -->
            <div id="profile-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-10 hidden">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>
</header>

<!-- JavaScript for toggling the menu -->
<script>
    function toggleProfileMenu() {
        const menu = document.getElementById('profile-menu');
        menu.classList.toggle('hidden');
    }
</script>