<?php
// fancy.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fancy PHP Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            text-align: center;
            overflow-x: hidden;
        }
        h1 {
            margin-top: 50px;
            font-size: 3em;
            animation: fadeInDown 2s ease;
        }
        p {
            font-size: 1.2em;
            animation: fadeInUp 2s ease;
        }
        .card {
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            padding: 20px;
            margin: 30px auto;
            width: 60%;
            backdrop-filter: blur(10px);
            animation: zoomIn 1.5s ease;
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
        button {
            background: #ff6a00;
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #ff9500;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <h1>✨ Welcome to My Fancy Page ✨</h1>
    <p>This page is powered by PHP with stylish animations.</p>

    <div class="card">
        <?php
        $date = date("l, F j, Y");
        echo "<h2>Today is $date</h2>";
        echo "<p>Enjoy the smooth animations and modern design!</p>";
        ?>
        <button onclick="alert('You clicked the fancy button!')">Click Me</button>
    </div>
</body>
</html>
