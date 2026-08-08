@extends('admin.layouts.index')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
    @include('components.message')

    <div class="page-wrapper">
        <div class="page-content">
            @include('admin.layouts.sessionmsg')

            <div class="container">
                <div class="d-flex justify-content-between mb-3">
                    <h2>Career Category List</h2>
                    <a href="{{ route('admin.career_category.create') }}" class="btn btn-primary">Add Category</a>
                </div>
                <div class="table-responsive">
                    <table id="careercategorytable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loaded via AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#careercategorytable').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: '{{ route('admin.career_category.get') }}',
                    dataSrc: 'data'
                },
                columns: [
                    {
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {
                        data: 'name',
                        render: function(data) {
                            return `<span class="text-uppercase">${data}</span>`;
                        }
                    },
                    {
                        data: 'status',
                        render: function(data) {
                            return data == 1 
                                ? '<span class="badge bg-success">Active</span>' 
                                : '<span class="badge bg-danger">Inactive</span>';
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                            <a href="/admin/career-category-edit/${row.id}">
                                <i class="fa-solid fa-pen text-secondary me-2"></i>
                            </a>
                            <a href="javascript:void(0);" class="delete-category text-danger" data-id="${row.id}" title="Delete">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            `;
                        }
                    }
                ]
            });

            $(document).on('click', '.delete-category', function() {
                let id = $(this).data('id');
                deleteCategory(id);
            });
        });

        function deleteCategory(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/career-category-delete/${id}`,
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#careercategorytable').DataTable().ajax.reload();
                            Swal.fire("Deleted!", "Category has been deleted.", "success");
                        },
                        error: function(error) {
                            Swal.fire("Error!", "Something went wrong.", "error");
                        }
                    });
                }
            });
        }
    </script>
@endpush
