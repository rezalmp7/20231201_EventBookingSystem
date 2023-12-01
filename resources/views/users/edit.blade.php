@extends('layouts')

@section('content')
<div class="row">
    <div class="mx-auto my-5 px-5 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit User</h5>
                <form method="POST" action="{{ url('/') }}/user/{{ $user->id }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="exampleInputName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword" class="form-label">Ganti Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
