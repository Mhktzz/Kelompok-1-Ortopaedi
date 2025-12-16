<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Victory RME - Kelola Rekam Medis</title>
    {{-- Asumsi Anda menggunakan Vite untuk Tailwind CSS --}}
    @vite('resources/css/app.css') 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        {{-- START SIDEBAR --}}
        <aside class="flex flex-col w-64 bg-white border-r border-gray-200 shadow-xl">
            {{-- Logo/Title --}}
            <div class="flex items-center justify-center h-16 border-b border-gray-200">
                <span class="text-xl font-semibold text-[#519D9E]">Victory RME</span>
            </div>
            
            {{-- Navigation --}}
            <nav class="flex-1 overflow-y-auto pt-4">
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-cyan-50 hover:text-cyan-600">
                    <i class="fas fa-tachometer-alt mr-3 w-5"></i> Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-cyan-50 hover:text-cyan-600">
                    <i class="fas fa-users mr-3 w-5"></i> Kelola User
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-cyan-50 hover:text-cyan-600">
                    <i class="fas fa-user-injured mr-3 w-5"></i> Data Pasien
                </a>
                {{-- Link Aktif: Rekam Medis--}}
                <a href="#" class="flex items-center px-4 py-3 bg-pink-100 text-pink-600 font-semibold border-l-4 border-pink-500">
                    <i class="fas fa-file-medical mr-3 w-5"></i> Rekam Medis
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-cyan-50 hover:text-cyan-600">
                    <i class="fas fa-database mr-3 w-5"></i> Master Data Medis
                </a>
            </nav>
        </aside>
        {{-- END SIDEBAR --}}

        {{-- START MAIN CONTENT AREA --}}
        <main class="flex-1 flex flex-col overflow-hidden">
            
            {{-- START NAVBAR / HEADER --}}
            <header class="flex items-center justify-between h-16 bg-white border-b border-gray-200 shadow-md px-6">
                {{-- Page Title in Header--}}
                <div class="text-lg font-medium text-gray-700">
                    Rekam Medis
                </div>
                
                {{-- User Profile (Super Admin)--}}
                <div class="flex items-center space-x-3">
                    <div class="text-sm text-gray-500 hidden md:block">Selamat Datang, **Super Admin**!</div>
                    <div class="flex items-center space-x-2 cursor-pointer hover:bg-gray-100 p-2 rounded-lg transition">
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-cyan-600 text-white font-bold">S</span>
                        <div class="flex flex-col leading-tight hidden sm:block">
                            <span class="text-sm font-semibold text-gray-800">Super Admin</span>
                            <span class="text-xs text-gray-500">Superadmin</span>
                        </div>
                        <i class="fas fa-caret-down text-gray-500 text-xs"></i>
                    </div>
                </div>
            </header>
            {{-- END NAVBAR / HEADER --}}

            {{-- START CONTENT SECTION --}}
            <div class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                
                {{-- HEADER HALAMAN & DESKRIPSI--}}
                <h1 class="text-xl font-semibold text-gray-800">Rekam Medis</h1>
                <p class="mt-1 text-gray-600 text-sm">Akses dan kelola seluruh rekam medis pasien</p>

                {{-- SUMMARY CARDS (Total, Lengkap, Belum Lengkap)--}}
                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">

                    {{-- Card 1: Total Rekam Medis--}}
                    <div class="bg-white p-5 rounded-xl shadow-md flex items-center justify-between border-l-4 border-cyan-500">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Rekam Medis</p>
                            <h2 class="text-3xl font-bold text-cyan-600 mt-1">4</h2>
                        </div>
                        <div class="bg-cyan-100 p-3 rounded-xl text-cyan-500">
                            <i class="fas fa-folder text-xl"></i>
                        </div>
                    </div>

                    {{-- Card 2: Rekam Medis Lengkap--}}
                    <div class="bg-white p-5 rounded-xl shadow-md flex items-center justify-between border-l-4 border-green-500">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Rekam Medis Lengkap</p>
                            <h2 class="text-3xl font-bold text-green-600 mt-1">3</h2>
                        </div>
                        <div class="bg-green-100 p-3 rounded-xl text-green-500">
                            <i class="fas fa-check-circle text-xl"></i>
                        </div>
                    </div>

                    {{-- Card 3: Perlu Dilengkapi--}}
                    <div class="bg-white p-5 rounded-xl shadow-md flex items-center justify-between border-l-4 border-red-500">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Perlu Dilengkapi</p>
                            <h2 class="text-3xl font-bold text-red-600 mt-1">1</h2>
                        </div>
                        <div class="bg-red-100 p-3 rounded-xl text-red-500">
                            <i class="fas fa-file-alt text-xl"></i>
                        </div>
                    </div>
                </div>

                {{-- DATA TABLE CONTAINER--}}
                <div class="mt-8 bg-white p-6 rounded-xl shadow-md">

                    {{-- PENCARIAN & FILTER--}}
                    <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">

                        {{-- Show Entries--}}
                        <div class="flex items-center space-x-2">
                            <label for="show-entries" class="text-sm text-gray-600">Show</label>
                            <select id="show-entries" class="border border-gray-300 rounded-lg text-sm p-2 focus:ring-cyan-500 focus:border-cyan-500">
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                            </select>
                            <span class="text-sm text-gray-600">entries</span>
                        </div>

                        {{-- Search & Filters--}}
                        <div class="flex flex-wrap gap-3 items-center">
                            {{-- Search --}}
                            <div class="relative">
                                <input type="text" placeholder="Cari pasien, NIK, atau No."
                                    class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg text-sm w-full md:w-64 focus:ring-cyan-500 focus:border-cyan-500">
                                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            </div>
                            
                            {{-- Date Filter --}}
                            <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="mm/dd/yyyy"
                                class="px-4 py-2 border border-gray-300 rounded-lg text-sm w-full md:w-auto focus:ring-cyan-500 focus:border-cyan-500">
                                
                            {{-- Status Filter --}}
                            <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm w-full md:w-auto focus:ring-cyan-500 focus:border-cyan-500">
                                <option>Semua Status</option>
                                <option>Lengkap</option>
                                <option>Belum Lengkap</option>
                            </select>
                        </div>
                    </div>

                    {{-- TABLE--}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Rekam Medis</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Pasien</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIK</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dokter</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Kunjungan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                {{-- Data Row 1 (Lengkap)--}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">RM-2024-001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Agus Prasetyo</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3301012345670001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Dr. Budi Santoso</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">8 Des 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Lengkap
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium flex justify-center space-x-2">
                                        <button title="Lihat Detail" class="text-cyan-600 hover:text-cyan-900 p-2 rounded-full hover:bg-gray-100">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button title="Edit" class="text-orange-500 hover:text-orange-700 p-2 rounded-full hover:bg-gray-100">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Data Row 2 (Lengkap)--}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">RM-2024-002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Rina Kurniawati</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3301014567890002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Dr. Budi Santoso</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10 Des 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Lengkap
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium flex justify-center space-x-2">
                                        <button title="Lihat Detail" class="text-cyan-600 hover:text-cyan-900 p-2 rounded-full hover:bg-gray-100">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button title="Edit" class="text-orange-500 hover:text-orange-700 p-2 rounded-full hover:bg-gray-100">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Data Row 3 (Belum Lengkap)--}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">RM-2024-003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Dimas Aditya</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3301015678901234</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Dr. Sarah Wijaya</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12 Des 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Belum Lengkap
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium flex justify-center space-x-2">
                                        <button title="Lihat Detail" class="text-cyan-600 hover:text-cyan-900 p-2 rounded-full hover:bg-gray-100">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button title="Edit" class="text-orange-500 hover:text-orange-700 p-2 rounded-full hover:bg-gray-100">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Data Row 4 (Lengkap)--}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">RM-2024-004</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Sari Dewi</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3301016789012345</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Dr. Ahmad Hidayat</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">13 Des 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Lengkap
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium flex justify-center space-x-2">
                                        <button title="Lihat Detail" class="text-cyan-600 hover:text-cyan-900 p-2 rounded-full hover:bg-gray-100">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button title="Edit" class="text-orange-500 hover:text-orange-700 p-2 rounded-full hover:bg-gray-100">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                    {{-- PAGINATION--}}
                    <div class="mt-6 flex justify-end items-center space-x-2">
                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100" disabled>
                            Previous
                        </button>
                        <span class="px-4 py-2 bg-cyan-600 text-white rounded-lg text-sm font-semibold">
                            1
                        </span>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-100">
                            Next
                        </button>
                    </div>
                </div>
            </div>
            {{-- END CONTENT SECTION --}}

        </main>
        {{-- END MAIN CONTENT AREA --}}
    </div>

</body>
</html>