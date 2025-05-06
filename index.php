<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Nilai Ujian - Martin.H</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    
</head>
<body>
    <header class="header">
        <div class="nav-container">
            <div class="logo">Nilai<span>App</span></div>
            <ul class="nav-links">
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i> About</a></li>
                <li><a href="#"><i class="fas fa-graduation-cap"></i> Courses</a></li>
                <li><a href="#"><i class="fas fa-phone-alt"></i> Contact</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
        <h1>Form Cek Nilai Ujian</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="nama"><i class="fas fa-user"></i> Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email valid" required>
            </div>
            <div class="form-group">
                <label for="nilai"><i class="fas fa-star"></i> Nilai Ujian:</label>
                <input type="number" id="nilai" name="nilai" placeholder="0-100" required min="0" max="100">
            </div>
            <button type="submit"><i class="fas fa-paper-plane"></i> Submit</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST["nama"]);
            $email = htmlspecialchars($_POST["email"]);
            $nilai = (int)$_POST["nilai"];
            
            if ($nilai > 70) {
                $status = "LULUS";
                $statusClass = "pass";
            } else {
                $status = "REMEDIAL";
                $statusClass = "fail";
            }
            
            echo "<div class='result'>";
            echo "<div class='result-title'>Hasil Penilaian:</div>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Nilai:</strong> $nilai</p>";
            echo "<p><strong>Status:</strong> <span class='$statusClass'>$status</span></p>";
            echo "</div>";
        }
        ?>
    </div>
    
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> NilaiApp by Martin.H. All rights reserved.</p>
    </footer>
</body>
</html>