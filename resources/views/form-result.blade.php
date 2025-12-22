<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ผลลัพธ์การกรอกแบบฟอร์ม</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body.bg-gradient {
            background: #44c6eeff;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .result-box {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px 60px;
            width: 900px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #000102ff;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 30px;
        }

        .result-row {
            display: flex;
            margin-bottom: 12px;
        }

        .result-label {
            width: 200px;
            font-weight: bold;
            color: #333;
        }

        .result-value {
            color: #000;
        }
    </style>
</head>

<body class="bg-gradient">

<div class="result-box">
    <h1>ข้อมูลที่คุณกรอก</h1>

    <div class="result-row">
        <div class="result-label">ชื่อ :</div>
        <div class="result-value">{{ $first_name }}</div>
    </div>

    <div class="result-row">
        <div class="result-label">นามสกุล :</div>
        <div class="result-value">{{ $last_name }}</div>
    </div>

    <div class="result-row">
        <div class="result-label">อายุ :</div>
        <div class="result-value">{{ $age }}</div>
    </div>

    <div class="result-row">
        <div class="result-label">วันเกิด :</div>
        <div class="result-value">{{ $birthday }}</div>
    </div>

    <div class="result-row">
        <div class="result-label">เพศ :</div>
        <div class="result-value">{{ $gender }}</div>
    </div>

    <div class="result-row">
        <div class="result-label">ที่อยู่ :</div>
        <div class="result-value">{{ $address }}</div>
    </div>

    <div class="result-row">
        <div class="result-label">สีที่ชอบ :</div>
        <div class="result-value">{{ $favorite_color }}</div>
    </div>

    <div class="result-row">
        <div class="result-label">เพลงที่ชอบ :</div>
        <div class="result-value">{{ $music }}</div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ url('/') }}" class="btn btn-primary px-4">
            กลับไปหน้าแบบฟอร์ม
        </a>
    </div>
</div>

</body>
</html>
