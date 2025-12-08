<!--resources/views/html101.blade.php-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
     <style>
        .form {
            margin-top: 80px;
        }

        .field {
                width: auto;
                margin: auto;
        }
        .fron{

        }
    </style>
    
</head>
<body>

    <div class="form">
        <h1 class="text-center my-5" style="margin-left:-100px;">Workshop #HTML - FORM</h1><br>

        <fieldset>
            <form class="mx-auto" style="max-width: 850px;" >

                <div class="row mb-3">
                    <label for="name" class="col-sm-2 offset-sm-2 col-form-label">ชื่อ</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="name" placeholder="ชื่อของคุณ">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="lastname" class="col-sm-2 offset-sm-2 col-form-label">นามสกุล</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="lastname" placeholder="นามสกุลของคุณ">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Age" class="col-sm-2 offset-sm-2 col-form-label">อายุ</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="Age" min="1">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="birthday" class="col-sm-2 offset-sm-2 col-form-label">วัน/เดือน/ปีเกิด</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="birthday">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 offset-sm-2 col-form-label">เพศ</label>
                    <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male">
                            <label class="form-check-label" for="male">ชาย</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female">
                            <label class="form-check-label" for="female">หญิง</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="picture" class="col-sm-2 offset-sm-2 col-form-label">รูป</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control" id="picture">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="index" class="col-sm-2 offset-sm-2 col-form-label">ที่อยู่</label>
                    <div class="col-sm-5">
                        <textarea name="index" id="index" style="width: 250px;"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="color" class="col-sm-2 offset-sm-2 col-form-label">สีที่ชอบ</label>
                    <div class="col-sm-2">
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
                    <label class="col-sm-2 offset-sm-2 col-form-label">เพลงที่ชอบ</label>
                    <div class="col-sm-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sing" id="lift">
                            <label class="form-check-label" for="lift">เพื่อชีวิต</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sing" id="lutung">
                            <label class="form-check-label" for="lutung">ลูกทุ่ง</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sing" id="else">
                            <label class="form-check-label" for="else">อื่นๆ</label>
                        </div>
                    </div>
                </div>
                <br>


                <div class="row mb-3">
                    <div class="offset-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="aree" id="agree" value="agree">
                            <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
                        </div>  
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2 offset-sm-2">
                        <button type="reset" class="btn btn-secondary" >Reset</button>
                    </div>

                    <div class="col-sm-5 text-end">
                        <button type="submit" class="btn btn-success"  >Submit</button>
                    </div>
                </div>
            </form>
        </fieldset>

    </div>    
</body>
</html>
