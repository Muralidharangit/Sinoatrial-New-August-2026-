@extends('admin.layouts.index')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        .star-rating {
            color: #ffc107;
        }
        .status-badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .status-active {
            background-color: #d1e7dd;
            color: #0f5132;
        }
        .status-inactive {
            background-color: #f8d7da;
            color: #842029;
        }
    </style>
@endsection

@section('content')
    @include('components.message')

    <div class="page-wrapper">
        <div class="page-content">
            @include('admin.layouts.sessionmsg')

            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Testimonial List</h2>
                    <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary">
                        <i class="fa-solid fa-plus me-1"></i> Add Testimonial
                    </a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="testimonialTable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loaded dynamically via AJAX -->
                                </tbody>
                            </table>
                        </div>
                    </div>
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
            $('#testimonialTable').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: '{{ route('admin.testimonial.get') }}',
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
                        data: 'name'
                    },
                    {
                        data: 'designation',
                        render: function(data) {
                            return data ? data : '<em class="text-muted">N/A</em>';
                        }
                    },
                    {
                        data: 'rating',
                        render: function(data) {
                            let starsHtml = '<span class="star-rating">';
                            for (let i = 1; i <= 5; i++) {
                                if (i <= data) {
                                    starsHtml += '<i class="fa-solid fa-star"></i>';
                                } else {
                                    starsHtml += '<i class="fa-regular fa-star"></i>';
                                }
                            }
                            starsHtml += '</span>';
                            return starsHtml;
                        }
                    },
                    {
                        data: 'comment',
                        render: function(data) {
                            return data.length > 60 ? data.substring(0, 60) + '...' : data;
                        }
                    },
                    {
                        data: 'status',
                        render: function(data) {
                            if (data == 1) {
                                return '<span class="status-badge status-active">Approved</span>';
                            } else {
                                return '<span class="status-badge status-inactive">Pending</span>';
                            }
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                                <div class="d-flex gap-2">
                                    <a href="/admin/testimonial-edit/${row.id}" class="text-primary me-2" title="Edit">
                                        <i class="fa-solid fa-pen-to-square fs-5"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="delete-testimonial text-danger" data-id="${row.id}" title="Delete">
                                        <i class="fa-solid fa-trash-can fs-5"></i>
                                    </a>
                                </div>
                            `;
                        }
                    }
                ]
            });

            // Handle delete button click
            $(document).on('click', '.delete-testimonial', function() {
                let id = $(this).data('id');
                deleteTestimonial(id);
            });
        });

        function deleteTestimonial(id) {
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
                        url: `/admin/testimonial-delete/${id}`,
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#testimonialTable').DataTable().ajax.reload();
                            Swal.fire("Deleted!", "Testimonial has been deleted.", "success");
                            showAlert(response.success, 'success');
                        },
                        error: function(error) {
                            let errorMessage = error.responseJSON?.error || "Something went wrong.";
                            showAlert(errorMessage, 'error');
                        }
                    });
                }
            });
        }

        function showAlert(message, type) {
            let alertId = type === 'success' ? 'successAlert' : 'errorAlert';
            let alertClass = type === 'success' ? 'alert-success' : 'alert-danger';

            $('#' + alertId).remove();

            let alertHtml = `
                <div id="${alertId}" class="alert ${alertClass} alert-dismissible fade show" role="alert"
                     style="position: fixed; right: 30px; top: 30px; z-index: 9999; width: 250px;">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;

            $('body').append(alertHtml);

            setTimeout(function() {
                $('#' + alertId).fadeOut('slow', function() {
                    $(this).remove();
                });
            }, 3000);
        }
    </script>
@endpush
