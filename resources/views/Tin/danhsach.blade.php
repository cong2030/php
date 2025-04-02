@extends('layouts.app')
@section('content')
<table class="table">
    <tr><th>ID</th><th>Tiêu đề</th><th>Tóm tắt</th><th>Hình ảnh</th><th>Hành động</th></tr>
    @foreach ($tinList as $tin)
        <tr>
            <td>{{ $tin->id }}</td>
            <td>{{ $tin->tieuDe }}</td>
            <td>{{ $tin->tomTat }}</td>
            <td><img src="{{ $tin->urlHinh }}" width="100"></td>
            <td>
                <a href="/tin/sua/{{ $tin->id }}">Sửa</a> |
                <a href="/tin/xoa/{{ $tin->id }}">Xóa</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection