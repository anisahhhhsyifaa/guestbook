@extends('layouts.app')

@section('content')
<div class="pages-heding">
    <div class="page-title mb-3">
        <h3> 
            <span class="bi bi-people"></span>
            Guest List
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body"> 
            <a href="{{route('admin.guest.index')}}" class="btn btn-outline-secondary mb-2">Kembali</a>

            <table class="table table-striped table-brodered">
                <tr>
                    <th>NO</th>
                    <td>{{ $institutions->no }}</Strong></td>
                </tr>
                <tr>
                    <th>Fullname</th>
                    <td>{{ $institutions->fullname }}</Strong></td>
                </tr>
                <tr>
                    <th>Phonenumber</th>
                    <td>{{ $institutions-> }}</Strong></td>
                </tr>
                <tr>
                    <td>Created_at</td>
                    <td>{{ Carbon\Carbon::parse($institutions->created_at)->format('DD MMMM Y HH:mm') }}</td>
                </tr>
                <tr>
                    <td>Updated_at</td>
                    <td>{{ Carbon\Carbon::parse($institutions->updated_at)->format('DD MMMM Y HH:mm') }}</td>
                </tr>
            </table>
            </div>
        </div>
</div>
@endsection