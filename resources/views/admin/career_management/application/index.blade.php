@extends('admin.layouts.index')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
    @include('components.message')

    <div class="page-wrapper">
        <div class="page-content">
            @include('admin.layouts.sessionmsg')

            <div class="container">
                <div class="d-flex justify-content-between mb-3">
                    <h2>Job Applications Received</h2>
                </div>
                <div class="table-responsive">
                    <table id="applicationtable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Experience</th>
                                <th>Department</th>
                                <th>Role</th>
                                <th>Submitted At</th>
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

    <!-- Details & Cover Letter Modal -->
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Application Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Full Name:</strong> <span id="modalName"></span>
                        </div>
                        <div class="col-md-6">
                            <strong>Email:</strong> <span id="modalEmail"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Phone:</strong> <span id="modalPhone"></span>
                        </div>
                        <div class="col-md-6">
                            <strong>Experience:</strong> <span id="modalExperience"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Department:</strong> <span id="modalDept"></span>
                        </div>
                        <div class="col-md-6">
                            <strong>Role Applied:</strong> <span id="modalRole"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label font-weight-bold"><strong>Cover Letter / Short Bio:</strong></label>
                        <div class="p-3 bg-light border rounded" id="modalCoverLetter" style="white-space: pre-wrap;"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label font-weight-bold"><strong>Additional Comments:</strong></label>
                        <div class="p-3 bg-light border rounded" id="modalComments" style="white-space: pre-wrap;"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" id="modalDownloadBtn" class="btn btn-success"><i class="fa-solid fa-download me-1"></i> Download Resume</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
            let table = $('#applicationtable').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: '{{ route('admin.career_application.get') }}',
                    dataSrc: 'data'
                },
                columns: [
                    {
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    { data: 'full_name' },
                    { data: 'email' },
                    { data: 'phone' },
                    { data: 'experience_details' },
                    {
                        data: 'category.name',
                        render: function(data) {
                            return data ? data.toUpperCase() : 'N/A';
                        }
                    },
                    { data: 'role' },
                    { 
                        data: 'created_at',
                        render: function(data) {
                            return new Date(data).toLocaleString();
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                            <div class=" d-flex justify-content-center align-items-center pt-3">
                            <button class="btn btn-sm btn-info view-details me-1 h-100" data-row='${JSON.stringify(row)}' title="View Profile">
                                <i class="fa-solid fa-eye "></i>
                            </button>
                            <a href="/admin/career-application-download/${row.id}" class="btn btn-sm btn-success me-1" title="Download Resume">
                                <i class="fa-solid fa-download text-black"></i>
                            </a>
                            <button class="btn btn-sm btn-danger delete-application" data-id="${row.id}" title="Delete Application">
                                <i class="fa-solid fa-trash-can text-black"></i>
                            </button>
                            </div>
                            `;
                        }
                    }
                ]
            });

            // View details modal
            $(document).on('click', '.view-details', function() {
                let rowData = $(this).data('row');
                
                $('#modalName').text(rowData.full_name);
                $('#modalEmail').text(rowData.email);
                $('#modalPhone').text(rowData.phone);
                $('#modalExperience').text(rowData.experience_details);
                $('#modalDept').text(rowData.category ? rowData.category.name.toUpperCase() : 'N/A');
                $('#modalRole').text(rowData.role);
                $('#modalCoverLetter').text(rowData.cover_letter);
                $('#modalComments').text(rowData.additional_comments || 'No additional comments.');
                
                $('#modalDownloadBtn').attr('href', `/admin/career-application-download/${rowData.id}`);
                
                $('#detailsModal').modal('show');
            });

            // Delete application
            $(document).on('click', '.delete-application', function() {
                let id = $(this).data('id');
                deleteApplication(id);
            });
        });

        function deleteApplication(id) {
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
                        url: `/admin/career-application-delete/${id}`,
                        type: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#applicationtable').DataTable().ajax.reload();
                            Swal.fire("Deleted!", "Application has been deleted.", "success");
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
