<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 7 - <?php echo $pageTitle ?? 'PHP Premium'; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #34495e;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --gold: #f1c40f;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 2rem 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }
        
        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gold);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 1px;
        }
        
        .logo span {
            color: var(--gold);
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 0.5px;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        nav a:hover {
            color: var(--gold);
        }
        
        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--gold);
            transition: width 0.3s ease;
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        main {
            padding: 3rem 0;
            min-height: 70vh;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            padding: 2rem;
            margin-bottom: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.12);
        }
        
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            color: var(--primary);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        h1::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: var(--gold);
            bottom: -10px;
            left: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">TUGAS<span>7</span></div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="kendaraan.php">Kendaraan</a></li>
                    <li><a href="bilangan_genap.php">Bilangan</a></li>
                    <li><a href="daftar_hewan.php">Hewan</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="container">