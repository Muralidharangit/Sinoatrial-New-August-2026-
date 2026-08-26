@extends('admin.layouts.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom">
                                <h4 class="mb-0">Add Testimonial</h4>
                                <a href="{{ route('admin.testimonial.index') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa-solid fa-arrow-left me-1"></i> Back
                                </a>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('admin.testimonial.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Client Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Dr. Jane Doe" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="designation" class="form-label">Designation / Role</label>
                                        <input type="text" name="designation" id="designation" class="form-control" value="{{ old('designation') }}" placeholder="e.g. Chief Medical Officer">
                                    </div>

                                    <div class="mb-3">
                                        <label for="rating" class="form-label">Rating <span class="text-danger">*</span></label>
                                        <select name="rating" id="rating" class="form-select" required>
                                            <option value="5" {{ old('rating') == '5' ? 'selected' : '' }}>5 Stars</option>
                                            <option value="4" {{ old('rating') == '4' ? 'selected' : '' }}>4 Stars</option>
                                            <option value="3" {{ old('rating') == '3' ? 'selected' : '' }}>3 Stars</option>
                                            <option value="2" {{ old('rating') == '2' ? 'selected' : '' }}>2 Stars</option>
                                            <option value="1" {{ old('rating') == '1' ? 'selected' : '' }}>1 Star</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Feedback / Comment <span class="text-danger">*</span></label>
                                        <textarea name="comment" id="comment" rows="6" class="form-control" placeholder="Write the feedback comment here..." required>{{ old('comment') }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" id="status" class="form-select" required>
                                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Approved / Active</option>
                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Pending / Inactive</option>
                                        </select>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary px-4">
                                            <i class="fa-solid fa-floppy-disk me-1"></i> Save Testimonial
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
