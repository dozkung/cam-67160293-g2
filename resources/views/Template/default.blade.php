<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
    body.bg-gradient {
        background: #44c6eeff;;
        min-height: 100vh;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form {
        background: rgba(253, 253, 253, 1);
        border-radius: 20px;
        padding: 40px 60px;
        width: 900px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    #index {
        width: 100%;
        height: 120px;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #000102ff;
        resize: vertical;
    }

    h1 {
        font-family: "";
        text-align: center;
        color: #000102ff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 1);
    }
</style>
</head>

<body class="bg-gradient">

<div class="form">
    <h1 class="my-4">Workshop #HTML - FORM</h1>

    <form class="needs-validation" novalidate>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ชื่อ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="ชื่อของคุณ" required>
                <div class="invalid-feedback">กรุณากรอกชื่อ</div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">นามสกุล</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="นามสกุลของคุณ" required>
                <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">อายุ</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" min="1" required>
                <div class="invalid-feedback">กรุณากรอกอายุ</div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">วัน/เดือน/ปีเกิด</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" required>
                <div class="invalid-feedback">กรุณาเลือกวันเกิด</div>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">เพศ</label>
            <div class="col-sm-6">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" required>
                    <label class="form-check-label">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender">
                    <label class="form-check-label">หญิง</label>
                </div>
                <div class="invalid-feedback d-block"></div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">รูป</label>
            <div class="col-sm-6">
                <input type="file" class="form-control" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ที่อยู่</label>
            <div class="col-sm-10">
                <textarea id="index" class="form-control" required></textarea>
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">สีที่ชอบ</label>
            <div class="col-sm-4">
                <input list="colorList" class="form-control" required>
                <datalist id="colorList">
                    <option value="แดง">
                    <option value="ส้ม">
                    <option value="ชมพู">
                    <option value="น้ำเงิน">
                    <option value="เขียว">
                    <option value="เหลือง">
                    <option value="ม่วง">
                    <option value="ขาว">
                    <option value="ดำ">
                </datalist>
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">เพลงที่ชอบ</label>
            <div class="col-sm-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="music" required>
                    <label class="form-check-label">เพื่อชีวิต</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="music">
                    <label class="form-check-label">ลูกทุ่ง</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="music">
                    <label class="form-check-label">อื่นๆ</label>
                </div>
                <div class="invalid-feedback d-block"></div>
            </div>
        </div>

        <div class="row mb-4">
            <label class="col-sm-2"></label>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label">ยินยอมให้เก็บข้อมูล</label>
                    <div class="invalid-feedback">ต้องยินยอมก่อนส่งข้อมูล</div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-success ms-3">Submit</button>
        </div>
    </form>
</div>
@yield('content')
</div>
@stack('scripts')
</body>
</html>
