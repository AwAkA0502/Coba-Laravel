<!DOCTYPE html>
<html>
<head>
    <title>Daftar Design</title>
    @vite('resources/css/app.css')
</head>
<body class="px-[120px] py-[60px]">
    <h1>Daftar Design</h1>

    <div class="">
    @foreach ($designs as $design)
        <div class="border p-4 rounded-xl mb-2 bg-purple-500">
            <h2>{{ $design->nama_design }}</h2>
            <p><strong>Deskripsi:</strong> {{ $design->deskripsi }}</p>
            <p><strong>Harga:</strong> Rp. {{ number_format($design->harga, 2) }}</p>
            <p><strong>Code Design:</strong> {{ $design->code_design }}</p>
            <p><strong>Pembuat Design:</strong> {{ $design->pembuat_design }}</p>

            @if ($design->gambar)
                <p><img src="{{ asset($design->gambar) }}" alt="{{ $design->nama_design }}" style="max-width: 300px; height: auto;"></p>
            @endif
        </div>
    @endforeach
    </div>
    
</body>
</html>
