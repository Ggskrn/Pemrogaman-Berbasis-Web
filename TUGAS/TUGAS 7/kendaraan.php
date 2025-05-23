<?php 
$pageTitle = "Jenis Kendaraan";
include 'header.php'; 

$roda = 4; // Nilai bisa diubah
?>

<div class="card">
    <h1>Analisis Jenis Kendaraan</h1>
    
    <div style="background: #f8f9fa; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
        <form method="GET" action="" style="display: flex; gap: 1rem; align-items: center;">
            <label for="roda" style="font-weight: 600;">Masukkan Jumlah Roda:</label>
            <input type="number" id="roda" name="roda" value="<?php echo isset($_GET['roda']) ? $_GET['roda'] : $roda; ?>" min="1" max="12" style="padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
            <button type="submit" style="background: var(--primary); color: white; border: none; padding: 0.5rem 1.5rem; border-radius: 4px; cursor: pointer; transition: background 0.3s ease;">Analisis</button>
        </form>
    </div>
    
    <?php
    if (isset($_GET['roda'])) {
        $roda = intval($_GET['roda']);
    }
    
    echo '<div style="background: #fff9f9; padding: 1.5rem; border-radius: 8px; border-left: 4px solid var(--accent);">';
    echo '<h3 style="margin-top: 0;">Hasil Analisis:</h3>';
    
    switch ($roda) {
        case 1:
            echo "<p>Kendaraan dengan <strong>$roda roda</strong>: <span style='color: var(--accent);'>Unicycle</span></p>";
            break;
        case 2:
            echo "<p>Kendaraan dengan <strong>$roda roda</strong>: <span style='color: var(--accent);'>Sepeda Motor</span></p>";
            break;
        case 3:
            echo "<p>Kendaraan dengan <strong>$roda roda</strong>: <span style='color: var(--accent);'>Becak/Tricycle</span></p>";
            break;
        case 4:
            echo "<p>Kendaraan dengan <strong>$roda roda</strong>: <span style='color: var(--accent);'>Mobil</span></p>";
            break;
        case 6:
            echo "<p>Kendaraan dengan <strong>$roda roda</strong>: <span style='color: var(--accent);'>Truk</span></p>";
            break;
        case 8:
            echo "<p>Kendaraan dengan <strong>$roda roda</strong>: <span style='color: var(--accent);'>Truk Gandeng</span></p>";
            break;
        default:
            echo "<p>Jenis kendaraan dengan <strong>$roda roda</strong> <span style='color: var(--accent);'>tidak dikenali</span> dalam sistem kami.</p>";
    }
    
    echo '</div>';
    ?>
</div>

<?php include 'footer.php'; ?>