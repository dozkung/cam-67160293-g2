@extends('template.default')
@section('title', 'My Controller')
@section('header1', 'My view')

@section('content')
    <form action="#" method="post">
        @csrf
        <div class="mb-3">
            <label for="num">ป้อนข้อมูลแม่สูตรคูณ</label>
            <input type="number" id="num" name="num">
            <button type="submit">ส่งข้อมูล</button>
        </div>
    </form>
@endsection
