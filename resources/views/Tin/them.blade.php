@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Thêm Tin</h2>
    <form action="/tin/them" method="post">
        @csrf
        <p>Tiêu đề: <input name="tieuDe" class="form-control"></p>
        <p>Tóm tắt: <textarea name="tomTat" class="form-control"></textarea></p>
        <p>Hình ảnh: <input name="urlHinh" class="form-control"></p>
        <p>Loại tin: 
            <select name="idLT" class="form-control">
                <option value="1">Xã hội</option>
                <option value="3">Du lịch</option>
            </select>
        </p>
        <p><button type="submit" class="btn btn-primary">Thêm tin</button></p>
    </form>
</div>
@endsection