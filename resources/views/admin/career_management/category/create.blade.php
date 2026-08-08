@extends('admin.layouts.index')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container">
                <div class="d-flex justify-content-between mb-3">
                    <h2>Create Career Category</h2>
                    <a href="{{ route('admin.career_category.index') }}" class="btn btn-primary">Back</a>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.career_category.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-lg-6">
                                    <label for="name" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="e.g. Biomedical Service Engineers" required value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 col-lg-6">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 mt-4">
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
