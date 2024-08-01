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
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="table-title bg-primary text-white p-3">
        <h4 class="mb-0">{{ $title }}</h4>
    </div>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
            <tr>
                <th class="text-center">Mã đơn hàng</th>
                <th class="text-center">Ngày đặt</th>
                <th class="text-center">Tổng tiền</th>
                <th class="text-center">Trạng thái</th>
                <th class="text-center">Hành động</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach ($listDonHang as $item)
                <tr>
                    <th class="text-center">{{ $item->ma_don_hang }}</th>
                    <td class="text-center">{{ $item->created_at->format('d-m-Y') }}</td>
                    <td class="text-danger text-center">
                        <strong>{{ number_format($item->tong_tien, 0, '', '.') }} đ</strong>
                    </td>
                    <td class="text-danger text-center">
                        <form action="{{ route('admin.donhang.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <select class="form-control" name="trang_thai_don_hang" onchange="confirmSubmit(this)"
                                data-default-value="{{ $item->trang_thai_don_hang }}">
                                @foreach ($trangThaiDonHang as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ $key == $item->trang_thai_don_hang ? 'selected' : '' }}
                                        {{ $key == $type_huy_don_hang ? 'disabled' : '' }}>
                                        {{ $value }}</option>
                                @endforeach
                            </select>
                        </form>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.donhang.show', $item->id) }}">
                            <button class="btn btn-outline-info">Xem chi tiết</button>
                        </a>
                        @if ($item->trang_thai_don_hang === $type_huy_don_hang)
                            <form action="{{ route('admin.donhang.destroy', $item->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-outline-danger" onclick="return confirm('Bạn có muốn xóa không')">
                                    Xóa
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('js')
    <script>
        function confirmSubmit(selectElement) {
            var form = selectElement.form;
            var selectedOption = selectElement.options[selectElement.selectedIndex].text;
            var defaultValue = selectElement.getAttribute('data-default-value');

            if (confirm('Bạn có chắc chắn thay đổi trạng thái đơn hàng thành "' + selectedOption + '" không?')) {
                form.submit();
            } else {
                selectElement.value = defaultValue;
            }
        }
    </script>
@endsection
