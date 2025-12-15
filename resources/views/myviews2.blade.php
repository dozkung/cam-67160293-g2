@extends('Template.default')

{{-- @section('content')


    <?php
        $name = "deecubpee";
        $array = [10, 20, 30, 40, 50];
    ?>

    <h1>Hello from PHP</h1>
    <h1>{{ "hello world" }}</h1>
    <h1>{{ $name }}</h1>
    <?php
         var_dump($array);
         print_r($array);
         echo "<br/>";

         foreach ($array as $value) {
            echo $value . "<br/>";
         }
    ?>


    <h1>ดีครับ</h1>

    <input
        type="text"
        id="myinput"
        value="input text value"
    />

    <button onclick="myfunc()">ตรวจสอบ</button>

@endsection --}}


@push('scripts')
   <script>
(() => {
    const form = document.querySelector('.needs-validation');
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
})();
</script>



@endpush
