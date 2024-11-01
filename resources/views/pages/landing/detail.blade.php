@extends('layouts.landing')

@section('title', 'Home')

@section('content')
    
    {{-- Hero Section     --}}
    <section class="flex items-center justify-center h-screen">
        <div class="container">
            <h1>{{ $news->title }}</h1>
            <div id="editorjs-view"></div>
        </div>
    </section>

@endsection

@push('after-script')
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>

    <script>
        // Ambil data JSON dari database (dalam kolom content)
        const contentData = JSON.parse(@json($news->content));

        // Inisialisasi Editor.js dalam mode read-only
        const editor = new EditorJS({
            holder: 'editorjs-view',  // ID div tempat konten akan ditampilkan
            readOnly: true,  // Set ke read-only agar user tidak bisa mengedit
            data: contentData,  // Masukkan data JSON yang diambil dari database
            tools: {
                
                header: { class: Header, inlineToolbar: ['link'] },
                // Tambahkan tools lainnya sesuai dengan konfigurasi Editor.js kamu
            }
        });
    </script>
@endpush