@extends('layouts.dashboard')

@section('title', 'Tambah Data ICD-10')
@section('page-title', 'Tambah Data ICD-10')

@section('content')

    {{-- BACKDROP --}}
    <div class="fixed inset-0 z-40 bg-opacity-40"></div>

    {{-- MODAL --}}
    <div class="fixed inset-0 z-50 flex items-center justify-center">

        <div class="w-full max-w-lg bg-white shadow-lg rounded-xl">

            {{-- HEADER --}}
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <h2 class="text-lg font-semibold text-gray-800">
                    Tambah Data ICD-10
                </h2>

                <a href="{{ route('dashboard.superadmin.icd10.index') }}" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times"></i>
                </a>
            </div>

            {{-- FORM --}}
            <form action="{{ route('dashboard.superadmin.icd10.store') }}" method="POST">
                @csrf

                <div class="px-6 py-4 space-y-4">

                    {{-- KODE ICD --}}
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">
                            Kode ICD-10
                        </label>
                        <input type="text" name="kode"
                            class="w-full px-4 py-2 text-sm border rounded-lg focus:ring focus:ring-teal-200"
                            placeholder="Contoh: A00" value="{{ old('kode') }}" required>
                        @error('kode')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- NAMA PENYAKIT --}}
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">
                            Nama Penyakit
                        </label>
                        <input type="text" name="nama_penyakit"
                            class="w-full px-4 py-2 text-sm border rounded-lg focus:ring focus:ring-teal-200"
                            placeholder="Contoh: Kolera" value="{{ old('nama_penyakit') }}" required>
                        @error('nama_penyakit')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- KATEGORI --}}
                    <div>
                        <label class="block mb-1 text-sm font-medium text-gray-700">
                            Kategori
                        </label>
                        <input type="text" name="kategori"
                            class="w-full px-4 py-2 text-sm border rounded-lg focus:ring focus:ring-teal-200"
                            placeholder="Contoh: Penyakit Infeksi" value="{{ old('kategori') }}" required>
                        @error('kategori')
                            <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                {{-- FOOTER --}}
                <div class="flex justify-end gap-3 px-6 py-4 border-t">
                    <a href="{{ route('dashboard.superadmin.icd10.index') }}"
                        class="px-4 py-2 text-sm text-gray-700 border rounded-lg hover:bg-gray-100">
                        Batal
                    </a>

                    <button type="submit" class="px-4 py-2 text-sm text-white bg-green-600 rounded-lg hover:bg-green-700">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>

@endsection
