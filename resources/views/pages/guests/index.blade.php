@extends('layouts.app')

@section('content')
<div class="pages-heding">
    <div class="page-title mb-3">
        <h3> 
            <span class="bi bi-people"></span>
            Guests
        </h3>
    </div> 
    <a href="{{ route('admin.institution.create') }}" class="btn btn-primary mb-3"><span class="bi bi-plus-circle"></span> </a>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th> No</Th>
                            <th> Guest Name</Th>
                            <th> From</th>
                            <th> PHone Number</th>
                            <th> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach  ($guests as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->fullname }}</td>
                            <td>{{ $item->from }}</td>
                            <td>{{ $item->phonenumber }}</td>

                            <td>
                                <a href="{{ route('admin.guests.show', $item->id)}}" 
                                    class="btn btn-outline-secondary btn-sm me-1">
                                    <span class="bi bi-eye"></span>
                                    Show
                                </a>
                                
                                <a href="#" class="btn btn-danger btn-sm me-1">
                                    <span class="bi bi-trash"></span>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('/vendors/simple-datatables/style.css')}}">
@endpush
@push('scripts')
<script src="{{ asset('/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Simple Datatable
    let datatable = document.querySelector('#datatable');
    new simpleDatatables.DataTable(datatable);
</script>
@endpush