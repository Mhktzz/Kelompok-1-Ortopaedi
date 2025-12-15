@extends('layouts.dashboard')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">

        {{-- CARD --}}
        <div class="p-6 bg-white shadow rounded-xl">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Total Pasien</p>
                    <h3 class="text-2xl font-bold">120</h3>
                </div>
                <i class="fas fa-users text-3xl text-[#519D9E]"></i>
            </div>
        </div>

        <div class="p-6 bg-white shadow rounded-xl">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Kunjungan Hari Ini</p>
                    <h3 class="text-2xl font-bold">18</h3>
                </div>
                <i class="fas fa-calendar-check text-3xl text-[#519D9E]"></i>
            </div>
        </div>

        <div class="p-6 bg-white shadow rounded-xl">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Dokter Aktif</p>
                    <h3 class="text-2xl font-bold">6</h3>
                </div>
                <i class="fas fa-user-md text-3xl text-[#519D9E]"></i>
            </div>
        </div>

        <div class="p-6 bg-white shadow rounded-xl">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Stok Obat</p>
                    <h3 class="text-2xl font-bold">245</h3>
                </div>
                <i class="fas fa-pills text-3xl text-[#519D9E]"></i>
            </div>
        </div>

    </div>

    {{-- TABLE --}}
    <div class="mt-10 bg-white shadow rounded-xl">
        <div class="p-6 border-b">
            <h2 class="text-lg font-semibold">Kunjungan Terbaru</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left">Nama Pasien</th>
                        <th class="px-6 py-3 text-left">Dokter</th>
                        <th class="px-6 py-3 text-left">Tanggal</th>
                        <th class="px-6 py-3 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="px-6 py-4">Ahmad Fauzi</td>
                        <td class="px-6 py-4">Dr. Andi</td>
                        <td class="px-6 py-4">15 Des 2025</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs text-green-700 bg-green-100 rounded-full">
                                Selesai
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
