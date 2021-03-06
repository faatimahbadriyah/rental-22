@extends('layouts.template')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Create new post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/profiles" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="fullname">Nama lengkap</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Input nama lengkap">
                @error('fullname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">Jenis kelamin</label>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="Input jenis kelamin">
                @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address"
                    placeholder="Tuliskan alamat lengkap">
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone"
                    placeholder="Tuliskan nomor telfon yang dapat dihubungi">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="Upload foto kamu di sini"
                    style="height: 2.75rem !important;">
                @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit profil baru</button>
        </div>
    </form>
</div>

@endsection