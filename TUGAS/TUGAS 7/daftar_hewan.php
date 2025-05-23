<?php 
$pageTitle = "Daftar Hewan";
include 'header.php';

$hewan = ["Kucing", "Anjing", "Kelinci", "Burung", "Ikan", "Kuda", "Sapi", "Ular", "Kadal", "Kelelawar"];
?>

<div class="card">
    <h1>Daftar Hewan Premium</h1>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
        <?php foreach ($hewan as $index => $nama): ?>
            <div style="background: white; border-radius: 8px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease; border-top: 3px solid var(--gold);">
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 40px; height: 40px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                        <?= $index + 1 ?>
                    </div>
                    <h3 style="margin: 0; color: var(--primary);"><?= $nama ?></h3>
                </div>
                <div style="margin-top: 1rem; display: flex; justify-content: space-between;">
                    <span style="font-size: 0.8rem; color: #666;">ID: H<?= str_pad($index + 1, 3, '0', STR_PAD_LEFT) ?></span>
                    <span style="font-size: 0.8rem; color: var(--accent); font-weight: 600;">
                        <?= strlen($nama) ?> huruf
                    </span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div style="margin-top: 3rem; background: #f8f9fa; padding: 1.5rem; border-radius: 8px;">
        <h3 style="margin-top: 0;">Statistik Koleksi</h3>
        <div style="display: flex; gap: 2rem;">
            <div style="flex: 1;">
                <p style="font-size: 2.5rem; margin: 0; color: var(--primary); font-weight: bold; text-align: center;">
                    <?= count($hewan) ?>
                </p>
                <p style="text-align: center; margin: 0.5rem 0 0 0; color: #666;">Total Hewan</p>
            </div>
            <div style="flex: 1;">
                <p style="font-size: 2.5rem; margin: 0; color: var(--primary); font-weight: bold; text-align: center;">
                    <?= max(array_map('strlen', $hewan)) ?>
                </p>
                <p style="text-align: center; margin: 0.5rem 0 0 0; color: #666;">Huruf Terpanjang</p>
            </div>
            <div style="flex: 1;">
                <p style="font-size: 2.5rem; margin: 0; color: var(--primary); font-weight: bold; text-align: center;">
                    <?= min(array_map('strlen', $hewan)) ?>
                </p>
                <p style="text-align: center; margin: 0.5rem 0 0 0; color: #666;">Huruf Terpendek</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>