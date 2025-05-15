<!DOCTYPE html>
<html>
<head>
    <title>{{ $pengaturan->nama_situs ?? 'Website Sekolah' }} - Pesan Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .content {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .footer {
            font-size: 12px;
            text-align: center;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #eee;
            color: #777;
        }
        .message-detail {
            margin-bottom: 10px;
        }
        .message-detail strong {
            display: inline-block;
            min-width: 80px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>{{ $pengaturan->nama_situs ?? 'Website Sekolah' }}</h2>
        <p>Pesan Baru Diterima</p>
    </div>
    
    <div class="content">
        <div class="message-detail">
            <strong>Dari:</strong> {{ $pesan->nama }} ({{ $pesan->email }})
        </div>
        <div class="message-detail">
            <strong>Judul:</strong> {{ $pesan->judul }}
        </div>
        <div class="message-detail">
            <strong>Tanggal:</strong> {{ $pesan->created_at->format('d M Y H:i') }}
        </div>
        
        <div style="margin-top: 20px;">
            <strong>Pesan:</strong>
            <p style="white-space: pre-line;">{{ $pesan->isi }}</p>
        </div>
    </div>
    
    <div class="footer">
        <p>Email ini dikirim secara otomatis dari {{ $pengaturan->nama_situs ?? 'Website Sekolah' }}</p>
        <p>{{ $pengaturan->alamat ?? 'Alamat belum diisi' }}</p>
    </div>
</body>
</html>