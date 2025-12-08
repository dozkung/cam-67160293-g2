<!-- @extends('Template.default')
@section('content')
    <h1>ดีครับ</h1>
    <input type="text" id="myinput" value="input text value"/>
    <button onclick="myfunc()" on>ตรวจสอบ</button></button>
@endsection

@push('scripts')
    <h1>ดีครับ</h1>
 @endpush

 @push('scripts')
    <h1>ดีครับ2</h1>
 @endpush

@push('scripts')
    <script>
     function myfunc(){
         
    }
        consoloe.log(document.getElementById('myinput').value);
    </script>
@endpush -->