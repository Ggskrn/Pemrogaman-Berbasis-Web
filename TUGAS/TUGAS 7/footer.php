    </main>
    
    <footer style="background: var(--primary); color: white; padding: 3rem 0; margin-top: 3rem;">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="font-family: 'Playfair Display', serif; font-size: 1.2rem;">
                TUGAS<span style="color: var(--gold);">7</span> • PHP Gagas Cahya Kamajengan 4F
            </div>
            <div style="text-align: right;">
                <p style="margin: 0; font-size: 0.9rem; opacity: 0.8;">&copy; <?php echo date('Y'); ?> All Rights Reserved</p>
                <p style="margin: 0.5rem 0 0 0; font-size: 0.8rem; opacity: 0.6;">Designed by me</p>
            </div>
        </div>
    </footer>
    
    <style>
        footer {
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }
    </style>
</body>
</html>