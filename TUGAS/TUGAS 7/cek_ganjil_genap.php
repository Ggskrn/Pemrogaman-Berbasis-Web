<?php 
$pageTitle = "Cek Genap/Ganjil";
include 'header.php';

$angka = isset($_GET['angka']) ? intval($_GET['angka']) : rand(1, 100);
$status = ($angka % 2 == 0) ? 'genap' : 'ganjil';
?>

<div class="card">
    <h1>Analisis Bilangan</h1>
    
    <div style="background: #f8f9fa; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
        <form method="GET" action="" style="display: flex; gap: 1rem; align-items: center;">
            <label for="angka" style="font-weight: 600;">Masukkan Angka:</label>
            <input type="number" id="angka" name="angka" value="<?= $angka ?>" min="1" style="padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; width: 100px;">
            <button type="submit" style="background: var(--primary); color: white; border: none; padding: 0.5rem 1.5rem; border-radius: 4px; cursor: pointer; transition: background 0.3s ease;">Analisis</button>
            <button type="button" onclick="window.location.href='?angka=<?= rand(1, 100) ?>'" style="background: var(--secondary); color: white; border: none; padding: 0.5rem 1.5rem; border-radius: 4px; cursor: pointer; transition: background 0.3s ease;">Acak Angka</button>
        </form>
    </div>
    
    <div style="text-align: center; margin: 3rem 0;">
        <div style="display: inline-block; position: relative;">
            <div style="width: 200px; height: 200px; border-radius: 50%; background: <?= $status == 'genap' ? '#2ecc71' : '#e74c3c' ?>; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                <span style="font-size: 3rem; font-weight: bold; color: white;"><?= $angka ?></span>
            </div>
            <div style="position: absolute; bottom: -20px; left: 50%; transform: translateX(-50%); background: white; padding: 0.5rem 1.5rem; border-radius: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); font-weight: bold; text-transform: uppercase; color: <?= $status == 'genap' ? '#2ecc71' : '#e74c3c' ?>;">
                <?= $status ?>
            </div>
        </div>
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 3rem;">
        <div style="background: #f1f8fe; padding: 1.5rem; border-radius: 8px; border-left: 4px solid #3498db;">
            <h3 style="margin-top: 0; color: #3498db;">Fakta Bilangan</h3>
            <ul style="margin-bottom: 0;">
                <li>Angka ini adalah <?= $angka ?> (<?= number_format($angka) ?>)</li>
                <li>Merupakan bilangan <?= $status ?></li>
                <li>Pangkat dua: <?= $angka ** 2 ?></li>
                <li>Akar kuadrat: <?= round(sqrt($angka), 2) ?></li>
            </ul>
        </div>
        
        <div style="background: #fef9f1; padding: 1.5rem; border-radius: 8px; border-left: 4px solid var(--gold);">
            <h3 style="margin-top: 0; color: var(--gold);">Klasifikasi</h3>
            <ul style="margin-bottom: 0;">
                <li>Status: <?= $status ?></li>
                <li>Kategori: <?= $angka > 50 ? 'Besar' : 'Kecil' ?></li>
                <li>Prima: <?= isPrime($angka) ? 'Ya' : 'Tidak' ?></li>
                <li>Kelipatan 5: <?= $angka % 5 == 0 ? 'Ya' : 'Tidak' ?></li>
            </ul>
        </div>
    </div>
</div>

<?php 
function isPrime($num) {
    if ($num <= 1) return false;
    if ($num <= 3) return true;
    if ($num % 2 == 0 || $num % 3 == 0) return false;
    for ($i = 5; $i * $i <= $num; $i += 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
    }
    return true;
}

include 'footer.php'; 
?>