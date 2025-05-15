<div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
    @if($pengaturan)
        <div class="px-4 py-5 border-b border-gray-200 dark:border-gray-700 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                Informasi Pengaturan Situs
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-400">
                Detail pengaturan situs yang aktif
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-4 py-5 sm:p-6">
            <div class="md:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Nama Situs</h4>
                        <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $pengaturan->nama_situs }}</p>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Email</h4>
                        <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $pengaturan->email }}</p>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Telepon</h4>
                        <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $pengaturan->telepon }}</p>
                    </div>
                    
                    <div class="md:col-span-2">
                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Alamat</h4>
                        <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $pengaturan->alamat }}</p>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Facebook</h4>
                        <p class="mt-1 text-sm text-gray-900 dark:text-white">
                            @if($pengaturan->facebook)
                                <a href="{{ $pengaturan->facebook }}" target="_blank" class="text-primary-600 hover:underline">
                                    {{ $pengaturan->facebook }}
                                </a>
                            @else
                                -
                            @endif
                        </p>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Instagram</h4>
                        <p class="mt-1 text-sm text-gray-900 dark:text-white">
                            @if($pengaturan->instagram)
                                <a href="{{ $pengaturan->instagram }}" target="_blank" class="text-primary-600 hover:underline">
                                    {{ $pengaturan->instagram }}
                                </a>
                            @else
                                -
                            @endif
                        </p>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Twitter</h4>
                        <p class="mt-1 text-sm text-gray-900 dark:text-white">
                            @if($pengaturan->twitter)
                                <a href="{{ $pengaturan->twitter }}" target="_blank" class="text-primary-600 hover:underline">
                                    {{ $pengaturan->twitter }}
                                </a>
                            @else
                                -
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-center items-center">
                @if($pengaturan->logo)
                    <div>
                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-2 text-center">Logo Situs</h4>
                        <img src="{{ asset('storage/' . $pengaturan->logo) }}" alt="Logo Situs" class="max-w-full h-auto">
                    </div>
                @else
                    <div class="text-center p-6 bg-gray-100 dark:bg-gray-700 rounded">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                            Belum ada logo
                        </p>
                    </div>
                @endif
            </div>
        </div>
    @else
        <div class="px-4 py-5 sm:p-6 text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">Belum ada pengaturan</h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Silakan klik tombol "Simpan Pengaturan" untuk menambahkan konfigurasi situs.
            </p>
        </div>
    @endif
</div>