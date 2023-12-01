@extends('layouts')

@section('content')
<div class="row">
    <div class="mx-auto my-5 px-5 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title d-inline">Data Users</h5>
                <a href="{{ url('/') }}/user/create" class="btn float-end btn-sm btn-success">Tambah</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $item)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ url('/') }}/user/{{ $item->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <form class="d-inline" method="POST" onsubmit="return confirm('Yakin menghapus {{ $item->name }}?')" action="{{ url('/') }}/user/{{ $item->id }}">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-sm d-inline btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-12 row">
                    {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
                {{-- div class="col-12 clearfix">
                    <nav aria-label="Page navigation example" class="float-end">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            @php
                                $startPage = 1;
                                $endPage = 3;
                                if($users->currentPage() == 1) {
                                    $startPage = 1;
                                    $endPage = $users->currentPage() + 3;
                                } elseif($users->total() - $users->lastPage() < 3) {
                                    $startPage = $users->currentPage() - 1;
                                    $endPage = $users->lastPage();
                                } else {
                                    $startPage = $users->currentPage() - 1;
                                    $endPage = $users->currentPage() + 3;
                                }
                            @endphp
                            @foreach ($users->getUrlRange($startPage, $endPage) as $key => $item)
                            <li class="page-item"><a class="page-link" href="{{ $item }}">{{ $key }}</a></li>
                            @endforeach
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
