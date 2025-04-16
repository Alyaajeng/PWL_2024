@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Manage Kategori</span>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}

                {{-- Tombol Add Kategori di bawah tabel --}}
                <div class="mt-3 d-flex justify-content-start">
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm">Add Kategori</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
    <script>
        $(document).ready(function() {
            $('#kategori-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('kategori.index') }}",
                columns: [
                    { data: 'kategori_id', name: 'kategori_id' },
                    { data: 'kategori_kode', name: 'kategori_kode' },
                    { data: 'kategori_nama', name: 'kategori_nama' },
                    { 
                        data: 'kategori_id', 
                        name: 'kategori_id', 
                        orderable: false, 
                        searchable: false,
                        render: function(data) {
                            return `
                                <a href="/kategori/${data}/edit" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="${data}">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            `;
                        }
                    }
                ]
            });
        
            // Handle Delete dengan AJAX
            $(document).on('click', '.delete-btn', function() {
                var id = $(this).data('id');
                if (confirm('Apakah Anda yakin ingin menghapus kategori ini?')) {
                    $.ajax({
                        url: '/kategori/' + id,
                        type: 'DELETE',
                        data: { _token: '{{ csrf_token() }}' },
                        success: function(response) {
                            alert(response.message); // Tampilkan pesan sukses
                            $('#kategori-table').DataTable().ajax.reload(); // Refresh DataTables
                        },
                        error: function(xhr) {
                            alert('Terjadi kesalahan: ' + xhr.responseText);
                        }
                    });
                }
            });
        });
        </script>
        
@endpush
