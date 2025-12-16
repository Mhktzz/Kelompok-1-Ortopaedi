<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Victory RME - Rekam Medis</title>
    {{-- Asumsi Anda menggunakan Vite untuk Tailwind CSS --}}
    @vite('resources/css/app.css') 
    {{-- Memuat Font Awesome untuk ikon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        
        {{-- START SIDEBAR--}}
        <aside class="flex flex-col w-64 bg-white border-r border-gray-200 shadow-xl">
            
            {{-- LOGO/TITLE DI POJOK KIRI ATAS --}}
            <div class="flex items-center justify-start h-16 border-b border-gray-200 p-4">
                {{-- Ganti path '/images/logo-victory.png' dengan path logo Anda yang sebenarnya --}}
                <img src="{{ asset('images/logo-victory.png') }}" alt="Logo Victory RME" class="h-8 w-auto mr-3">
                <span class="text-xl font-semibold text-[#519D9E]">Victory RME</span>
            </div>
            
            {{-- Navigation --}}
            <nav class="flex-1 overflow-y-auto pt-4">
                {{-- Urutan Menu: Dashboard, Kelola User, Data Pasien, Rekam Medis (Aktif), Master Data Medis --}}
                <a href="{{ route('dashboard.index') ?? '#' }}" class="flex items-center px-4 py-3 text-gray-600 hover:bg-cyan-50 hover:text-cyan-600">
                    <i class="fas fa-tachometer-alt mr-3 w-5"></i> Dashboard
                </a>
                <a href="{{ route('kelola_user.index') ?? '#' }}" class="flex items-center px-4 py-3 text-gray-600 hover:bg-cyan-50 hover:text-cyan-600">
                    <i class="fas fa-users mr-3 w-5"></i> Kelola User
                </a>
                
                {{-- DATA PASIEN --}}
                <a href="{{ route('data_pasien.index') ?? '#' }}" class="flex items-center px-4 py-3 text-gray-600 hover:bg-cyan-50 hover:text-cyan-600">
                    <i class="fas fa-user-injured mr-3 w-5"></i> Data Pasien
                </a>
                
                {{-- REKAM MEDIS (Link Aktif)--}}
                <a href="{{ route('rekam_medis.index') ?? '#' }}" class="flex items-center px-4 py-3 bg-pink-100 text-pink-600 font-semibold border-l-4 border-pink-500">
                    <i class="fas fa-file-medical mr-3 w-5"></i> Rekam Medis
                </a>
                
                {{-- MASTER DATA MEDIS --}}
                <a href="{{ route('master_data.index') ?? '#' }}" class="flex items-center px-4 py-3 text-gray-600 hover:bg-cyan-50 hover:text-cyan-600">
                    <i class="fas fa-database mr-3 w-5"></i> Master Data Medis
                </a>
            </nav>
        </aside>
        {{-- END SIDEBAR --}}

        {{-- START MAIN CONTENT AREA --}}
        <main class="flex-1 flex flex-col overflow-hidden">
            
            {{-- START NAVBAR / HEADER--}}
            <header class="flex items-center justify-between h-16 bg-white border-b border-gray-200 shadow-md px-6">
                {{-- Page Title in Header --}}
                <div class="text-lg font-medium text-gray-700 flex items-center">
                    <button class="mr-4 text-gray-500 hover:text-gray-700 md:hidden">
                        <i class="fas fa-bars"></i>
                    </button>
                    Rekam Medis
                    <span class="text-sm text-gray-500 ml-3 hidden sm:inline">Selamat Datang, Super Admin!</span>
                </div>
                
                {{-- User Profile (Super Admin)--}}
                <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-2 cursor-pointer p-2 rounded-lg transition">
                        <span class="text-sm text-gray-500 hidden md:block">Super Admin</span>
                        <i class="fas fa-caret-down text-gray-500 text-xs"></i>
                        <span class="w-8 h-8 flex items-center justify-center rounded-full bg-cyan-600 text-white font-bold">S</span>
                    </div>
                </div>
            </header>
            {{-- END NAVBAR / HEADER --}}

            {{-- START SCROLLABLE CONTENT SECTION --}}
            <div class="flex-1 overflow-y-auto bg-gray-100 p-6 space-y-6">
                
                {{-- CARD UTAMA REKAM MEDIS --}}
                <div class="bg-white p-6 rounded-xl shadow-md">
                    
                    {{-- HEADER--}}
                    <div class="border-b pb-4 mb-4">
                        <h2 class="text-2xl font-bold text-gray-800">Rekam Medis</h2>
                        <p class="text-sm text-gray-500">Akses dan kelola seluruh rekam medis pasien</p>
                    </div>

                    {{-- STATS CARDS REKAM MEDIS--}}
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                        
                        {{-- Card 1: Total Rekam Medis --}}
                        <div class="bg-gray-100 p-4 rounded-lg shadow-sm flex items-center space-x-4 border-l-4 border-cyan-500">
                            <i class="fas fa-file-invoice text-2xl text-cyan-600"></i>
                            <div>
                                <p class="text-xs text-gray-500">Total Rekam Medis</p>
                                <h3 class="text-xl font-bold text-gray-800">4</h3>
                            </div>
                        </div>

                        {{-- Card 2: Rekam Medis Lengkap --}}
                        <div class="bg-green-50 p-4 rounded-lg shadow-sm flex items-center space-x-4 border-l-4 border-green-500">
                            <i class="fas fa-check-circle text-2xl text-green-600"></i>
                            <div>
                                <p class="text-xs text-gray-500">Rekam Medis Lengkap</p>
                                <h3 class="text-xl font-bold text-green-800">3</h3>
                            </div>
                        </div>

                        {{-- Card 3: Perlu Dilengkapi --}}
                        <div class="bg-red-50 p-4 rounded-lg shadow-sm flex items-center space-x-4 border-l-4 border-red-500">
                            <i class="fas fa-exclamation-triangle text-2xl text-red-600"></i>
                            <div>
                                <p class="text-xs text-gray-500">Perlu Dilengkapi</p>
                                <h3 class="text-xl font-bold text-red-800">1</h3>
                            </div>
                        </div>

                    </div>

                    {{-- KONTROL TABEL (SHOW, SEARCH, FILTER)--}}
                    <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 md:space-x-4 mb-4">
                        
                        {{-- Show Entries --}}
                        <div class="flex items-center space-x-2 text-sm text-gray-600">
                            <span>Show</span>
                            <select class="border border-gray-300 rounded-md p-1 focus:ring-pink-500 focus:border-pink-500">
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                            </select>
                            <span>entries</span>
                        </div>

                        {{-- Search & Filter --}}
                        <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 w-full md:w-auto">
                            <div class="relative w-full sm:w-64">
                                <input type="text" placeholder="Cari pasien, NIK, atau No..." class="border border-gray-300 rounded-md py-2 pl-10 pr-4 w-full text-sm focus:ring-cyan-500 focus:border-cyan-500">
                                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            </div>
                            <input type="text" placeholder="mm/dd/yyyy" class="border border-gray-300 rounded-md py-2 px-4 w-full sm:w-32 text-sm focus:ring-cyan-500 focus:border-cyan-500">
                            <select class="border border-gray-300 rounded-md py-2 px-4 focus:ring-cyan-500 focus:border-cyan-500 w-full sm:w-auto text-sm">
                                <option>Semua Status</option>
                                <option>Lengkap</option>
                                <option>Belum Lengkap</option>
                            </select>
                        </div>
                    </div>

                    {{-- TABEL DATA REKAM MEDIS--}}
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
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                {{-- Row 1: Lengkap --}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">RM-2024-001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Agus Prasetyo</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3301012345670001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Dr. Budi Santoso</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">8 Des 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Lengkap
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-1">
                                        <button title="Lihat" class="text-cyan-600 hover:text-cyan-900 p-2"><i class="fas fa-eye"></i></button>
                                        <button title="Edit" class="text-orange-600 hover:text-orange-900 p-2"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                {{-- Row 2: Lengkap --}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">RM-2024-002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Rina Kurniawati</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3301014567890002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Dr. Budi Santoso</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10 Des 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Lengkap
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-1">
                                        <button title="Lihat" class="text-cyan-600 hover:text-cyan-900 p-2"><i class="fas fa-eye"></i></button>
                                        <button title="Edit" class="text-orange-600 hover:text-orange-900 p-2"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                {{-- Row 3: Belum Lengkap --}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">RM-2024-003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Dimas Aditya</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3301015678901234</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Dr. Sarah Wijaya</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12 Des 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Belum Lengkap
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-1">
                                        <button title="Lihat" class="text-cyan-600 hover:text-cyan-900 p-2"><i class="fas fa-eye"></i></button>
                                        <button title="Lengkapi" class="text-orange-600 hover:text-orange-900 p-2"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                {{-- Row 4: Lengkap --}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">RM-2024-004</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Sari Dewi</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3301016789012345</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Dr. Ahmad Hidayat</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">13 Des 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Lengkap
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-1">
                                        <button title="Lihat" class="text-cyan-600 hover:text-cyan-900 p-2"><i class="fas fa-eye"></i></button>
                                        <button title="Edit" class="text-orange-600 hover:text-orange-900 p-2"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                {{-- Anda bisa menggunakan loop @foreach di sini untuk menampilkan data dari database --}}
                            </tbody>
                        </table>
                    </div>

                    {{-- PAGINATION--}}
                    <div class="mt-4 flex justify-end items-center space-x-2 text-sm">
                        <span class="px-3 py-1 border border-gray-300 rounded-md text-gray-600 disabled:opacity-50">
                            Previous
                        </span>
                        <span class="px-3 py-1 bg-cyan-600 text-white rounded-md">1</span>
                        <span class="px-3 py-1 border border-gray-300 rounded-md text-gray-600">
                            Next
                        </span>
                    </div>

                </div>

            </div>
            {{-- END SCROLLABLE CONTENT SECTION --}}

        </main>
        {{-- END MAIN CONTENT AREA --}}
    </div>

</body>
</html>