@extends('admin.layouts.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom">
                                <h4 class="mb-0">Edit Testimonial</h4>
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

                                <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Client Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $testimonial->name) }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="designation" class="form-label">Designation / Role</label>
                                        <input type="text" name="designation" id="designation" class="form-control" value="{{ old('designation', $testimonial->designation) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="rating" class="form-label">Rating <span class="text-danger">*</span></label>
                                        <select name="rating" id="rating" class="form-select" required>
                                            <option value="5" {{ old('rating', $testimonial->rating) == '5' ? 'selected' : '' }}>5 Stars</option>
                                            <option value="4" {{ old('rating', $testimonial->rating) == '4' ? 'selected' : '' }}>4 Stars</option>
                                            <option value="3" {{ old('rating', $testimonial->rating) == '3' ? 'selected' : '' }}>3 Stars</option>
                                            <option value="2" {{ old('rating', $testimonial->rating) == '2' ? 'selected' : '' }}>2 Stars</option>
                                            <option value="1" {{ old('rating', $testimonial->rating) == '1' ? 'selected' : '' }}>1 Star</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Feedback / Comment <span class="text-danger">*</span></label>
                                        <textarea name="comment" id="comment" rows="6" class="form-control" required>{{ old('comment', $testimonial->comment) }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" id="status" class="form-select" required>
                                            <option value="1" {{ old('status', $testimonial->status) == '1' ? 'selected' : '' }}>Approved / Active</option>
                                            <option value="0" {{ old('status', $testimonial->status) == '0' ? 'selected' : '' }}>Pending / Inactive</option>
                                        </select>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary px-4">
                                            <i class="fa-solid fa-floppy-disk me-1"></i> Update Testimonial
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
