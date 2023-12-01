@extends('layouts')

@section('content')
<div class="row">
    <div class="mx-auto my-5 px-5 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah User</h5>
                <form method="POST" action="{{ url('/') }}/event">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputTitle" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputTitle">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescription" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleInputDescription" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDate" class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="exampleInputDate">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTime" class="form-label">Time</label>
                        <input type="time" name="time" class="form-control" id="exampleInputTime">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputLocation" class="form-label">Location</label>
                        <textarea class="form-control" name="location" id="exampleInputLocation" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAvailableSlot" class="form-label">Available Slot</label>
                        <input type="number" name="slots_available" class="form-control" id="exampleInputAvailableSlot">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
