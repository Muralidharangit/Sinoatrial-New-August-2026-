@extends('admin.layouts.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="d-flex justify-content-between mb-3">
                    <h2>Create Job Posting</h2>
                    <a href="{{ route('admin.career_job.index') }}" class="btn btn-primary">Back</a>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.career_job.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label">Job Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}" placeholder="e.g. Senior Biomedical Service Engineer">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="career_category_id" class="form-label">Category / Department <span class="text-danger">*</span></label>
                                    <select class="form-select text-uppercase" id="career_category_id" name="career_category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('career_category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('career_category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="location" class="form-label">Location <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="location" name="location" required value="{{ old('location') }}" placeholder="e.g. Chennai, TN">
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="type" class="form-label">Job Type <span class="text-danger">*</span></label>
                                    <select class="form-select" id="type" name="type" required>
                                        <option value="Full-Time" {{ old('type') == 'Full-Time' ? 'selected' : '' }}>Full-Time</option>
                                        <option value="Part-Time" {{ old('type') == 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                                        <option value="Contract" {{ old('type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                                        <option value="Internship" {{ old('type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="1" {{ old('status', '1') == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="qualification" class="form-label">Qualification <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="qualification" name="qualification" required value="{{ old('qualification') }}" placeholder="e.g. B.E / B.Tech / Diploma in Biomedical Engineering">
                                    @error('qualification')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="experience" class="form-label">Experience Required <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="experience" name="experience" required value="{{ old('experience') }}" placeholder="e.g. 3 to 5 Years">
                                    @error('experience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="salary" class="form-label">Salary Details (Optional)</label>
                                    <input type="text" class="form-control" id="salary" name="salary" value="{{ old('salary') }}" placeholder="e.g. Competitive (Based on expertise)">
                                    @error('salary')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="responsibilities" class="form-label">Roles & Responsibilities <span class="text-danger">*</span> <small class="text-muted">(Enter each responsibility on a new line)</small></label>
                                    <textarea class="form-control" id="responsibilities" name="responsibilities" rows="5" required placeholder="Install, calibrate, maintain and repair critical equipment&#10;Provide troubleshooting support&#10;Conduct routine preventative maintenance">{{ old('responsibilities') }}</textarea>
                                    @error('responsibilities')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="skills" class="form-label">Required Skills <span class="text-danger">*</span> <small class="text-muted">(Enter each skill on a new line)</small></label>
                                    <textarea class="form-control" id="skills" name="skills" rows="4" required placeholder="Excellent diagnostic skills&#10;Experience with patient simulator systems&#10;Strong communication">{{ old('skills') }}</textarea>
                                    @error('skills')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary px-4">Submit <i class='bx bx-right-arrow-alt ms-2'></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
