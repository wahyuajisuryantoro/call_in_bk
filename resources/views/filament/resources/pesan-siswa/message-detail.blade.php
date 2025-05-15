<div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100">
    <!-- Header Pesan -->
    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-6 text-white">
        <div class="flex justify-between items-start">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center text-white font-bold text-lg border-2 border-white/50">
                    {{ strtoupper(substr($pesan->nama, 0, 1)) }}
                </div>
                <div>
                    <h3 class="text-xl font-bold">{{ $pesan->nama }}</h3>
                    <div class="flex items-center text-blue-100 text-sm mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <span>{{ $pesan->email }}</span>
                    </div>
                </div>
            </div>
            <div class="bg-white/20 backdrop-blur-sm rounded-lg px-3 py-1 text-sm flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
                {{ $pesan->created_at->locale('id')->isoFormat('dddd, D MMMM YYYY - HH:mm') }}
            </div>
        </div>
        <div class="mt-6">
            <h2 class="text-2xl font-bold">{{ $pesan->judul }}</h2>
            <div class="h-1 w-16 bg-white/50 rounded-full mt-2"></div>
        </div>
    </div>
    
    <!-- Isi Pesan -->
    <div class="p-6">
        <div class="bg-gray-50 rounded-xl p-6 border border-gray-100">
            <div class="prose max-w-none text-gray-700">
                <p class="whitespace-pre-line text-lg">{{ $pesan->isi }}</p>
            </div>
        </div>
    </div>
    
    <!-- Footer Pesan -->
    <div class="bg-gray-50 border-t border-gray-100 p-4 flex justify-between items-center">
        <div class="text-sm text-gray-500 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
            Pesan ini dikirim melalui form kontak website
        </div>
        <div class="flex gap-2">
            <button type="button" onclick="window.location.href='mailto:{{ $pesan->email }}?subject=Re: {{ $pesan->judul }}'" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm flex items-center gap-2 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                </svg>
                Balas
            </button>
            <button type="button" x-on:click="close" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors text-sm flex items-center gap-2 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                Tutup
            </button>
        </div>
    </div>
</div>