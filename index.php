<?php require 'date.php'; ?>
<!DOCTYPE html>
<html lang="km">
<head>
<meta charset="UTF-8">
<title>Khmer Date</title>

<style>
    body {
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Khmer OS Battambang', 'Noto Serif Khmer', serif;
    }

    .date-box {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 40px 60px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        text-align: center;
    }

    .date-text {
        font-size: 42px;
        color: #ffffff;
        font-weight: bold;
        letter-spacing: 1px;
        text-shadow: 2px 4px 10px rgba(0,0,0,0.4);
    }
</style>
</head>

<body>

<div class="date-box">
    <div class="date-text">
        <?= $khmerDate ?>
    </div>
</div>

</body>
</html>
