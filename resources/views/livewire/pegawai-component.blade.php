<div class="min-h-screen items-center justify-center bg-gray-100 p-2 mb-6">
    <div class="w-full max-w-8xl bg-white shadow-md rounded-lg overflow-hidden">

        <div class="bg-blue-500 text-white px-4 py-2 font-semibold text-lg flex justify-between items-center">
            <span>Data Pengguna Aset</span>
            <!-- Tombol Aksi Simpan/Update -->
            <div class="flex flex-wrap items-center gap-2">
                @if ($isEdit)
                    <button title="Update" style="cursor: pointer;" wire:click="update" class="flex items-center gap-2 bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-lg text-sm transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                        </svg>
                    </button>
                    <button title="Batal" style="cursor: pointer;" wire:click="resetInput" class="flex items-center gap-2 bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded-lg text-sm transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                @else
                    <button
                        title="Save"
                        style="cursor: pointer;"
                        class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded-lg text-sm transition"
                        wire:click="simpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" class="size-6">
                            <path d="M21 12.4V7l-4-4H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7.4l2-2H5V5h11.17L19 7.83v6.57zM15 15c0 1.66-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3M6 6h9v4H6zm13.99 10.25l1.77 1.77L16.77 23H15v-1.77zm3.26.26l-.85.85l-1.77-1.77l.85-.85c.2-.2.51-.2.71 0l1.06 1.06c.2.2.2.52 0 .71"/>
                        </svg>
                    </button>
                @endif
            </div>
        </div>


        <div class="p-4 text-gray-700">
            <div class="mb-4">
                <div class="relative">
                    <input type="text" id="nip" wire:model="nip" placeholder="NIP"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-500 transition
                            @error('nip') border-red-500 pr-10 @enderror">
                    
                    {{-- Tanda seru --}}
                    @error('nip')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01M12 4a8 8 0 100 16 8 8 0 000-16z" />
                            </svg>
                        </div>
                    @enderror
                </div>

                {{-- Teks error --}}
                @error('nip')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>  
            <div class="mb-4">
                <div class="relative">
                    <input type="text" id="nama" wire:model="nama" placeholder="Nama pegawai"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-500 transition
                            @error('nama') border-red-500 pr-10 @enderror">
                    
                    {{-- Tanda seru --}}
                    @error('nama')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01M12 4a8 8 0 100 16 8 8 0 000-16z" />
                            </svg>
                        </div>
                    @enderror
                </div>

                {{-- Teks error --}}
                @error('nama')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>  
            <div class="mb-4">
                <div class="relative">
                    <textarea id="alamat" wire:model="alamat" placeholder="Alamat"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-500 transition
                            @error('alamat') border-red-500 pr-10 @enderror" rows="3"></textarea>
                    {{-- Tanda seru --}}
                    @error('alamat')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01M12 4a8 8 0 100 16 8 8 0 000-16z" />
                            </svg>
                        </div>
                    @enderror
                </div>

                {{-- Teks error --}}
                @error('alamat')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <div class="relative">
                    <input type="number" id="phone" wire:model="phone" placeholder="No Telephone"
                        class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-500 transition
                            @error('phone') border-red-500 pr-10 @enderror">
                    
                    {{-- Tanda seru --}}
                    @error('phone')
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01M12 4a8 8 0 100 16 8 8 0 000-16z" />
                            </svg>
                        </div>
                    @enderror
                </div>

                {{-- Teks error --}}
                @error('phone')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>  
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 mt-4">
                    <thead class="bg-gray-200">
                        <tr>
                            <th style="width: 5%; text-align: center" class="px-3 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NO</th>
                            <th style="width: 15%; text-align: center" class="px-3 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIP</th>
                            <th style="width: 25%; text-align: center" class="px-3 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NAMA</th>
                            <th style="width: 30%; text-align: center" class="px-3 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ALAMAT</th>
                            <th style="width: 10%; text-align: center" class="px-3 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">PHONE</th>                        
                            <th style="width: 15%; text-align: center" class="px-3 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($pegawais as $p)
                        <tr>
                            <td style="text-align: center" class="px-3 py-2 whitespace-nowrap text-sm text-gray-900">{{$loop->iteration}}</td>
                            <td class="px-3 py-2 whitespace-nowrap text-sm text-gray-900">{{$p->nip}}</td>
                            <td class="px-3 py-2 whitespace-nowrap text-sm text-gray-900">{{$p->nama}}</td>
                            <td class="px-3 py-2 whitespace-nowrap text-sm text-gray-900">{{$p->alamat}}</td>
                            <td class="px-3 py-2 whitespace-nowrap text-sm text-gray-900">{{$p->phone}}</td>
                            <td style="text-align: center" class="px-3 py-2 whitespace-nowrap text-sm text-gray-900">
                                <button title="Edit" style="cursor: pointer;" class="bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-1 px-3 rounded-lg shadow-md transition duration-200" wire:click="edit({{ $p->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </button>
                                <button title="Delete" style="cursor: pointer;" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-1 px-3 rounded-lg shadow-md transition duration-200" wire:click="delete({{ $p->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 italic px-3 whitespace-nowrap text-sm text-gray-900">
                                Data tidak ada
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Pagination -->
        <div class="flex justify-end mb-4 mr-4">
            {{ $pegawais->links() }}
        </div>
    </div>
</div>