@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="table-title bg-primary text-white p-3">
            <h4 class="mb-0"> {{ $title }}</h4>
        </div>
        <form action="{{ route('admin.lienhe.update', $deTailLienHe->id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="">Trạng thái liên hệ</label>
            <select name="trang_thai" id="" class="form-control">
                @if ($deTailLienHe->trang_thai == 1)
                    <option value="1" {{ $deTailLienHe->trang_thai == 1 ? 'selected' : '' }}>Chưa liên hệ</option>
                    <option value="2" {{ $deTailLienHe->trang_thai == 2 ? 'selected' : '' }}>Đã liên hệ</option>
                @elseif($deTailLienHe->trang_thai == 2)
                    <option value="2" {{ $deTailLienHe->trang_thai == 2 ? 'selected' : '' }}>Đã liên hệ</option>
                @endif
            </select>
            <br><button class="btn btn-outline-info">Cập nhật trạng thái</button>
        </form>
    </div>
@endsection
