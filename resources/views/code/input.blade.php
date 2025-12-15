<!--resources/views/html101.blade.php-->
<!DOCTYPE html>
<html>
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
        font-family: "Sofia";
        text-align: center;
        color: #000102ff;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 1);
    }
</style>

</head>
<body class="bg-gradient">
    <div class="form">
        <h1 class="my-4">Workshop #HTML - FORM</h1>

        <form>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">ชื่อ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="ชื่อของคุณ">
                </div>
            </div>

            <div class="row mb-3">
                <label for="lastname" class="col-sm-2 col-form-label">นามสกุล</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" placeholder="นามสกุลของคุณ">
                </div>
            </div>

            <div class="row mb-3">
                <label for="Age" class="col-sm-2 col-form-label">อายุ</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="Age" min="1">
                </div>
            </div>

            <div class="row mb-3">
                <label for="birthday" class="col-sm-2 col-form-label">วัน/เดือน/ปีเกิด</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="birthday">
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">เพศ</label>
                <div class="col-sm-6">
                    <input class="form-check-input" type="radio" name="gender" id="male"> ชาย
                    <input class="form-check-input ms-3" type="radio" name="gender" id="female"> หญิง
                </div>
            </div>


            <div class="row mb-3">
                <label for="picture" class="col-sm-2 col-form-label">รูป</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" id="picture">
                </div>
            </div>


            <div class="row mb-3">
                <label for="index" class="col-sm-2 col-form-label">ที่อยู่</label>
                <div class="col-sm-10">
                    <textarea name="index" id="index"></textarea>
                </div>
            </div>


            <div class="row mb-3">
                <label for="color" class="col-sm-2 col-form-label">สีที่ชอบ</label>
                <div class="col-sm-4">
                    <input list="colorList" name="color" id="color" class="form-control">
                    <datalist id="colorList">
                        <option value="แดง">
                        <option value="ส้ม">
                        <option value="ชมพู">
                        <option value="น้ำเงิน">
                        <option value="เขียว">
                        <option value="เหลือง">
                        <option value="ม่วง">
                        <option value="ขาว">
                        <option value="น้ำตาล">
                        <option value="เทา">
                        <option value="ดำ">

                    </datalist>
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">เพลงที่ชอบ</label>
                <div class="col-sm-8">
                    <input type="radio" name="sing"> เพื่อชีวิต
                    <input type="radio" name="sing" class="ms-3"> ลูกทุ่ง
                    <input type="radio" name="sing" class="ms-3"> อื่นๆ
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-2"></label>
                <div class="col-sm-8">
                    <input class="form-check-input" type="checkbox" name="aree" id="agree"> ยินยอมให้เก็บข้อมูล
                </div>
            </div>


            <div class="text-center mt-4">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-success ms-3">Submit</button>
            </div>


        </form>
    </div>
</body>
<html>
