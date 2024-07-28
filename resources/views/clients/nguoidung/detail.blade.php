@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="container">
        <!-- Header -->
        <div class="profile-header d-flex align-items-center">
            <img src="{{ Storage::url($user->anh_dai_dien) }}" alt="" class="profile-pic">
            <div>
                <h2>{{ $user->ho_ten }}</h2>
                <p class="text-muted">{{ $user->chuc_vu_id == 1 ? 'Admin' : 'Khách hàng' }}</p>
            </div>
        </div>

        <!-- Details -->
        <div class="profile-details">
            <h4>Thông tin chi tiết</h4>
            <ul class="list-group">
                <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li><br>
                <li class="list-group-item"><strong>Giới tính:</strong>
                    @if (isset($user->gioi_tinh))
                        {{ $user->gioi_tinh == 0 ? 'Nam' : 'Nữ' }}
                    @else
                        Thông tin chưa được cập nhật
                    @endif
                </li><br>
                <li class="list-group-item"><strong>Địa chỉ:</strong>
                    @if (!empty($user->dia_chi))
                        {{ $user->dia_chi }}
                        @else
                        Thông tin chưa được cập nhật
                    @endif
                </li><br>
                <li class="list-group-item"><strong>Ngày sinh:</strong> 
                    @if (!empty($user->ngay_sinh))
                        {{ $user->ngay_sinh }}
                        @else
                            Thông tin chưa được cập nhật
                    @endif
                </li><br>
                <li class="list-group-item"><strong>Số điện thoại:</strong> {{ $user->so_dien_thoai }}</li>
            </ul>
        </div>

        <!-- Edit Button -->
        <a href="{{ route('/formcapnhat', $user->id) }}" class="btn btn-primary btn-edit">Chỉnh sửa thông tin</a>
    </div>
    </div>
@endsection
