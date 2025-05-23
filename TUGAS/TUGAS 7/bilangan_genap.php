<?php 
$pageTitle = "Bilangan Genap";
include 'header.php'; 
?>

<div class="card">
    <h1>Deret Bilangan Genap</h1>
    
    <div style="background: #f8f9fa; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
        <form method="GET" action="" style="display: flex; gap: 1rem; align-items: center;">
            <label for="max" style="font-weight: 600;">Tampilkan hingga:</label>
            <input type="number" id="max" name="max" value="<?php echo isset($_GET['max']) ? $_GET['max'] : 10; ?>" min="2" max="100" style="padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
            <button type="submit" style="background: var(--primary); color: white; border: none; padding: 0.5rem 1.5rem; border-radius: 4px; cursor: pointer; transition: background 0.3s ease;">Generate</button>
        </form>
    </div>
    
    <?php
    $max = isset($_GET['max']) ? intval($_GET['max']) : 10;
    $bilangan_genap = [];
    
    for ($i = 2; $i <= $max; $i += 2) {
        $bilangan_genap[] = $i;
    }
    ?>
    
    <div style="margin-top: 2rem;">
        <h3 style="margin-bottom: 1rem;">Hasil Deret (2 - <?= $max ?>):</h3>
        
        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
            <?php foreach ($bilangan_genap as $bilangan): ?>
                <div style="background: var(--primary); color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; font-weight: bold; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                    <?= $bilangan ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <div style="margin-top: 3rem; background: linear-gradient(135deg, var(--primary), var(--secondary)); color: white; padding: 1.5rem; border-radius: 8px;">
        <h3 style="margin-top: 0; color: white;">Statistik Deret</h3>
        <div style="display: flex; gap: 2rem;">
            <div style="flex: 1;">
                <p style="font-size: 2rem; margin: 0; color: var(--gold); font-weight: bold; text-align: center;">
                    <?= count($bilangan_genap) ?>
                </p>
                <p style="text-align: center; margin: 0.5rem 0 0 0; opacity: 0.8;">Total Bilangan</p>
            </div>
            <div style="flex: 1;">
                <p style="font-size: 2rem; margin: 0; color: var(--gold); font-weight: bold; text-align: center;">
                    <?= array_sum($bilangan_genap) ?>
                </p>
                <p style="text-align: center; margin: 0.5rem 0 0 0; opacity: 0.8;">Jumlah Total</p>
            </div>
            <div style="flex: 1;">
                <p style="font-size: 2rem; margin: 0; color: var(--gold); font-weight: bold; text-align: center;">
                    <?= count($bilangan_genap) > 0 ? array_sum($bilangan_genap)/count($bilangan_genap) : 0 ?>
                </p>
                <p style="text-align: center; margin: 0.5rem 0 0 0; opacity: 0.8;">Rata-rata</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>