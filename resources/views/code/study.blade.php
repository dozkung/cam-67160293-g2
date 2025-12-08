<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <p></p><a href="https://www.google.com"  target="blank">google</a>
    <p></p><a href="html101">goto singin</a><br> 
    <img width="700" height="400" src="https://www.beartai.com/wp-content/uploads/2020/05/Conan_001-600x465.png" alt="โคนัน"><br>
 -->

    <table>  
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Shin</td>
            <td>ichi</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Kudo</td>
            <td>Ran</td>
        </tr>
    </table>

    <ul>
        <li>coffee</li>
        <li>milk</li>
        <li>tea</li>
    </ul>
    <ol>
        <li>apple</li>
        <li>banana</li>
        <li>grape</li>
    </ol>
<!-- ctrl / -->
    <b>ตัวหนา</b>
    <strong>impotant</strong>
    <i>ตัวเอียง</i>
    <em>emphasize</em>
    <u>ขีดเส้นใต้</u>
    <mark>เน้นข้อความ</mark>
    <small>ตัวเล็ก</small>
    <del>ข้อความที่ถูกลบ</del><br><br><br>

    <form action="">
        <fieldset>
            <legend> Personol inFo</legend>
            <label for="fname">First Name</label>        <!-- ป้ายข้อความก่อนช่องกรอก -->
            <input type="text" id="fname" name="First Name" placeholder="enter your First Name"> <br>
            <label for="lname">Last Name</label>         <!-- ป้ายข้อความก่อนช่องกรอก -->
            <input type="text" id="lname" name="Last Name" placeholder="enter your Last Name"> <br>
        </fieldset>
        <br>

        <label for="cars">Choose a car:</label>
        <select name="cars" id="cars">
           <option value="volvo">Volvo</option>
           <option value="saab">Saab</option>
           <option value="fiat">Fiat</option>
           <option value="audi">Audi</option>
        </select> <br>

        <textarea name="Text" id="Text"></textarea> <br>

        <button type="submis">submis </button><br><br>

        <label for="fruits">Choose a fruit:</label>
        <input list="fruits" name="fruits">
        <datalist id="fruits">
            <option value="Apple">
            <option value="Banana">
            <option value="Cherry">
        </datalist>


    </form>

</body>
</html>