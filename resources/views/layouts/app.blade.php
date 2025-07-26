<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body>
    <div class="flex h-screen bg-gray-100">

        <!-- sidebar -->
        <!-- <div class="hidden md:flex flex-col w-64 bg-gray-800 rounded-50xl"> -->
        <!-- <div id="sidebar" class="hidden md:flex flex-col w-64 bg-gray-800 rounded-50xl fixed inset-y-0 left-0 z-40 md:relative md:translate-x-0 transform transition-transform duration-300 ease-in-out"> -->
        <div id="sidebar" class="hidden md:flex flex-col w-64 bg-gray-800 rounded-50xl fixed inset-y-0 left-0 z-50 h-screen md:h-auto md:relative md:translate-x-0 transform transition-transform duration-300 ease-in-out">

            <div class="flex flex-col flex-1 overflow-y-auto">
                <!-- <nav class="flex flex-col flex-1 overflow-y-auto bg-gradient-to-b from-gray-700 to-blue-500 px-2 py-4 gap-10 rounded-50xl"> -->
                <nav class="flex flex-col flex-1 overflow-y-auto bg-gradient-to-b from-gray-700 to-blue-500 px-2 py-4 gap-10 rounded-50xl min-h-screen">
                    <div>
                        <a href="#" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            Dashboard
                        </a>
                    </div>

                    <div class="flex flex-col flex-1 gap-1"> 
                        <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-400 hover:bg-opacity-25 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin-right: 80 px">
                                <path fill="currentColor" fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6l2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2z" clip-rule="evenodd" />
                            </svg>
                            Home
                        </a>
                        
                        <div x-data="{ openMaster: false }" class="flex flex-col gap-3 text-gray-100">
                            <!-- Tombol Master -->
                            <button @click="openMaster = !openMaster" 
                                class="flex items-center justify-between px-4 py-2 hover:bg-gray-400 hover:bg-opacity-25 rounded-2xl w-full">
                                <span class="flex items-center">
                                    <!-- Icon utama Master -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin-right: 8px">
                                        <path fill="none" stroke="currentColor" stroke-width="2" d="M16 7h3v4h-3zm-7 8h11M9 11h4M9 7h4M6 18.5a2.5 2.5 0 1 1-5 0V7h5.025M6 18.5V3h17v15.5a2.5 2.5 0 0 1-2.5 2.5h-17" />
                                    </svg>
                                    Asset
                                </span>
                                <!-- Icon panah bawah -->
                                <svg :class="{ 'rotate-180': openMaster }" class="w-4 h-4 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <!-- Submenu Master -->
                            <div x-show="openMaster" x-collapse class="ml-6 flex flex-col gap-1">

                                <!-- Pegawai -->
                                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin-right: 8px">
                                        <path fill="none" stroke="currentColor" stroke-width="2" d="M16 7h3v4h-3zm-7 8h11M9 11h4M9 7h4M6 18.5a2.5 2.5 0 1 1-5 0V7h5.025M6 18.5V3h17v15.5a2.5 2.5 0 0 1-2.5 2.5h-17" />
                                    </svg>
                                    Asset Barang
                                </a>

                            </div>
                        </div>

                        <div x-data="{ openMaster: false }" class="flex flex-col gap-3 text-gray-100">
                            <!-- Tombol Master -->
                            <button @click="openMaster = !openMaster" 
                                class="flex items-center justify-between px-4 py-2 hover:bg-gray-400 hover:bg-opacity-25 rounded-2xl w-full">
                                <span class="flex items-center">
                                    <!-- Icon utama Master -->
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                    Master
                                </span>
                                <!-- Icon panah bawah -->
                                <svg :class="{ 'rotate-180': openMaster }" class="w-4 h-4 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <!-- Submenu Master -->
                            <div x-show="openMaster" x-collapse class="ml-6 flex flex-col gap-1">

                                <!-- Pegawai -->
                                <a wire:navigate href="/pegawai"
                                    class="flex items-center px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                    </svg>
                                    Pengguna
                                </a>

                                <!-- Ruangan -->
                                <a wire:navigate href="/ruangan"
                                    class="flex items-center px-4 py-2 hover:bg-gray-700 rounded-lg">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 7v10a1 1 0 001 1h16a1 1 0 001-1V7M3 7l9-4 9 4" />
                                    </svg>
                                    Ruangan
                                </a>
                            </div>
                        </div>

                    </div>  
                </nav>
            </div>
        </div>
    
        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="flex items-center justify-between h-16 bg-white border-b border-gray-200 sticky top-0 z-50">
                        <!-- Hamburger Button: visible only on mobile -->
                <button style="cursor: pointer;" id="menu-toggle" class="md:hidden text-gray-600 hover:text-gray-800 focus:outline-none ml-5">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>    
                <div class="flex items-center px-4">
            
                    <!-- <div class="relative mx-auto text-gray-600">
                        <input class="border border-gray-300 h-10 w-96 px-5 pr-16 rounded-lg text-sm placeholder-current focus:outline-none dark:bg-gray-500 dark:border-gray-50 dark:text-gray-200"
                               type="search" name="search" placeholder="Search">
                        <button type="submit" class="absolute left-0 top-0 mt-3 mr-4">
                            <svg class="text-gray-600 dark:text-gray-200 h-4 w-4 fill-current"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                 viewBox="0 0 56.966 56.966" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 
                                 s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 
                                 c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 
                                 s-17-7.626-17-17S14.61,6,23.984,6z"/>
                            </svg>
                        </button>
                    </div> -->
                </div>
                <!-- notification -->
                <!-- Tambahkan Alpine.js (jika belum ada) -->
                <!-- <script src="//unpkg.com/alpinejs" defer></script> -->

                <div class="relative mr-4 p-4" x-data="{ open: false }">
                    <button @click="open = !open" style="cursor: pointer;" class="flex items-center space-x-2 text-gray-600 hover:text-gray-800 dark:text-gray-200 dark:hover:text-gray-300">
                        <!-- Icon User -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <span class="font-bold">User</span>
                    </button>

                    <!-- Dropdown -->
                    <div x-show="open" @click.outside="open = false"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg border dark:bg-gray-800 z-50">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                            Ganti Password
                        </a>
                        <form method="POST" action="">
                            @csrf
                            <button style="cursor: pointer;" type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="p-4 mb-8">
                <!-- <h1 class="text-2xl font-bold">Welcome to my dashboard!</h1>
                <p class="mt-2 text-gray-600">This is an example dashboard using Tailwind CSS.</p> -->
                {{ $slot }}
            </div>
            <footer class="fixed bottom-0 left-0 w-full text-center bg-white border-b border-gray-300 text-black py-4 px-4">
                <p>&copy; {{ date('Y') }} Asset Management System</p>
            </footer>
        </div>
        
    </div>

    @livewireScripts

    <!-- <script>
        // Fungsi untuk mengaktifkan kembali event JS seperti toggle sidebar
        function reinitializeUI() {
            // Contoh: kalau kamu pakai toggle dengan id tertentu
            document.querySelectorAll('[data-toggle="sidebar"]').forEach(btn => {
                btn.onclick = () => {
                    document.getElementById('sidebar').classList.toggle('hidden');
                };
            });

            // Tambahkan inisialisasi lain di sini (dropdown, tooltip, dll.)
        }

        // Panggil saat pertama kali halaman dimuat
        document.addEventListener('DOMContentLoaded', reinitializeUI);

        // Panggil ulang setiap kali navigasi selesai
        window.addEventListener('livewire:navigated', reinitializeUI);
    </script> -->

    <!-- Toastr + jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        toastr.options = {
            "positionClass": "toast-top-right",
            "timeOut": "3000",
        };
    </script>

    <script>
        function reinitializeUI() {
            const toggle = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar');

            if (toggle && sidebar) {
                toggle.onclick = () => {
                    sidebar.classList.toggle('hidden');
                };
            }

            // Tambahan lain jika perlu (dropdown, tooltip, dsb.)
        }

        // Pertama kali halaman dimuat
        document.addEventListener('DOMContentLoaded', reinitializeUI);

        // Setelah wire:navigate selesai
        window.addEventListener('livewire:navigated', () => {
            reinitializeUI();
        });
    </script>
    
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('menu-toggle');
            const sidebar = document.getElementById('sidebar');

            toggle.addEventListener('click', () => {
                sidebar.classList.toggle('hidden');
            });
        });
    </script> -->
<script>
    document.addEventListener('livewire:load', function () {
        window.confirmDelete = function(id) {
            Swal.fire({
                title: 'Yakin?',
                text: "Data akan dihapus!",
                icon: 'warning',
                width: 300,
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'text-sm rounded-md',
                    confirmButton: 'text-sm px-2 py-1',
                    cancelButton: 'text-sm px-2 py-1'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteConfirmed', id);
                }
            });
        };
    });
</script>
</body>
</html>