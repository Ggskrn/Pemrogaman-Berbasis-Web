<?php 
$pageTitle = "Home";
include 'header.php'; 
?>

<div class="card">
    <h1>Selamat Datang di TUGAS 7 Saya</h1>
    <p style="font-size: 1.1rem; line-height: 1.8;">GAGAS CAHYA KAMAJENGAN</p>
</div>

<div class="card">
    <h2>Menu Latihan</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 1.5rem;">
        <a href="kendaraan.php" style="text-decoration: none;">
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--gold);">
                <h3 style="margin-top: 0; color: var(--primary);">Jenis Kendaraan</h3>
                <p style="color: #666;">Analisis kendaraan berdasarkan jumlah roda</p>
            </div>
        </a>
        
        <a href="bilangan_genap.php" style="text-decoration: none;">
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--gold);">
                <h3 style="margin-top: 0; color: var(--primary);">Bilangan Genap</h3>
                <p style="color: #666;">Deret bilangan genap 2-10</p>
            </div>
        </a>
        
        <a href="daftar_hewan.php" style="text-decoration: none;">
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--gold);">
                <h3 style="margin-top: 0; color: var(--primary);">Daftar Hewan</h3>
                <p style="color: #666;">Koleksi berbagai nama hewan</p>
            </div>
        </a>
            </div>
        </a>
    </div>
</div>

<?php include 'footer.php'; ?>