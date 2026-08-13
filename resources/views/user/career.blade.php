<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Sinoatrial, Medical, Technologies, Careers, Job Openings, Employment, Hiring">
    <meta name="description" content="Explore career opportunities at Sinoatrial Medical Technologies. Join our team of passionate engineers, sales professionals, and administrators." />
    <meta name="author" content="Syscorp" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Careers - Sinoatrial Medical Technologies</title>
    @include('user.layouts.link')

    <style>
        /* Core styling matching the brand theme */
        .badge-tag {
            background-color: rgba(36, 87, 170, 0.1);
            color: #2457aa;
            font-size: 14px;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 50px;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 15px;
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 700;
            color: #000a2d;
            margin-bottom: 20px;
        }

        .section-title h2 span {
            color: #2457aa;
        }

        /* Workplace Values & Culture Cards */
        .value-card {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border-bottom: 4px solid transparent;
        }

        .value-card:hover {
            transform: translateY(-8px);
            border-bottom-color: #2457aa;
            box-shadow: 0 15px 35px rgba(36, 87, 170, 0.1);
        }

        .value-icon-box {
            width: 60px;
            height: 60px;
            background: rgba(36, 87, 170, 0.08);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: #2457aa;
            font-size: 28px;
            transition: all 0.3s ease;
        }

        .value-card:hover .value-icon-box {
            background: #2457aa;
            color: #fff;
        }

        .value-title {
            font-size: 20px;
            font-weight: 700;
            color: #000a2d;
            margin-bottom: 12px;
        }

        .value-desc {
            font-size: 15px;
            color: #555;
            line-height: 1.6;
        }

        /* Why Work With Us List */
        .benefit-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .benefit-icon {
            width: 45px;
            height: 45px;
            background: rgba(36, 87, 170, 0.08);
            color: #2457aa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .benefit-content h4 {
            font-size: 18px;
            font-weight: 700;
            color: #000a2d;
            margin-bottom: 6px;
        }

        .benefit-content p {
            font-size: 14px;
            color: #555;
            margin: 0;
            line-height: 1.5;
        }

        /* Job Openings Interactive Department Section */
        .dept-tabs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-bottom: 40px;
        }

        .dept-tab-btn {
            background: #fff;
            border: 2px solid #e1e7ec;
            color: #000a2d;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .dept-tab-btn:hover,
        .dept-tab-btn.active {
            background: #2457aa;
            border-color: #2457aa;
            color: #fff;
            box-shadow: 0 8px 20px rgba(36, 87, 170, 0.2);
        }

        .job-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
            border: 1px solid #f0f4f8;
            transition: all 0.3s ease;
        }

        .job-card:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            border-color: rgba(36, 87, 170, 0.15);
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 15px;
            border-bottom: 1px solid #f0f4f8;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .job-title-area h3 {
            font-size: 22px;
            font-weight: 700;
            color: #000a2d;
            margin-bottom: 8px;
        }

        .job-meta-badges {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .job-meta-badge {
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 4px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .badge-dept {
            background: rgba(36, 87, 170, 0.08);
            color: #2457aa;
        }

        .badge-loc {
            background: rgba(255, 145, 0, 0.08);
            color: #ff9100;
        }

        .badge-type {
            background: rgba(40, 167, 69, 0.08);
            color: #28a745;
        }

        .btn-view-details {
            background: transparent;
            border: 2px solid #2457aa;
            color: #2457aa;
            padding: 8px 18px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .btn-view-details:hover {
            background: #2457aa;
            color: #fff;
        }

        .job-details-content {
            display: none;
            padding-top: 15px;
            border-top: 1px solid #f0f4f8;
            margin-top: 15px;
            animation: fadeIn 0.4s ease forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .details-heading {
            font-size: 16px;
            font-weight: 700;
            color: #000a2d;
            margin-top: 15px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .details-heading i {
            color: #2457aa;
        }

        .details-text-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 15px;
        }

        .details-text-list li {
            position: relative;
            padding-left: 20px;
            font-size: 14.5px;
            color: #555;
            margin-bottom: 6px;
            line-height: 1.5;
        }

        .details-text-list li::before {
            content: "•";
            color: #2457aa;
            font-weight: bold;
            font-size: 18px;
            position: absolute;
            left: 5px;
            top: -2px;
        }

        .details-row-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
            background: #f8fafc;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .details-grid-item small {
            color: #777;
            display: block;
            margin-bottom: 3px;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 600;
        }

        .details-grid-item span {
            font-weight: 600;
            color: #000a2d;
            font-size: 14.5px;
        }

        .btn-apply-job {
            background: #2457aa;
            border: none;
            color: #fff;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .btn-apply-job:hover {
            background: #1c488d;
            box-shadow: 0 4px 12px rgba(36, 87, 170, 0.3);
        }

        /* Application Form Section Styles */
        .app-form-section {
            background: #f4f7fa;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.03);
            border: 1px solid #eef2f6;
        }

        .form-title-area {
            text-align: center;
            margin-bottom: 35px;
        }

        .form-title-area h3 {
            font-size: 28px;
            font-weight: 700;
            color: #000a2d;
            margin-bottom: 10px;
        }

        .form-title-area p {
            color: #666;
            font-size: 15px;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group-custom {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group-custom label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #000a2d;
            font-size: 14px;
        }

        .input-icon-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon-wrapper i {
            position: absolute;
            left: 15px;
            color: #2457aa;
            font-size: 18px;
            pointer-events: none;
        }

        .custom-form-input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1.5px solid #e1e8ed;
            border-radius: 8px;
            background: #fff;
            color: #000a2d;
            font-size: 14.5px;
            outline: none;
            transition: all 0.3s;
        }

        .custom-form-input:focus {
            border-color: #2457aa;
            box-shadow: 0 0 0 3px rgba(36, 87, 170, 0.1);
        }

        textarea.custom-form-input {
            padding: 12px 15px 12px 45px;
        }

        .input-icon-wrapper.textarea-icon i {
            top: 15px;
        }

        .file-upload-wrapper {
            border: 2px dashed #ccd5db;
            border-radius: 8px;
            background: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
            cursor: pointer;
            transition: all 0.3s;
        }

        .file-upload-wrapper:hover,
        .file-upload-wrapper.dragover {
            border-color: #2457aa;
            background: rgba(36, 87, 170, 0.02);
        }

        .file-upload-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .upload-icon {
            font-size: 32px;
            color: #2457aa;
            margin-bottom: 10px;
            display: block;
        }

        .upload-text {
            font-weight: 600;
            color: #000a2d;
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
        }

        .upload-hint {
            font-size: 12px;
            color: #777;
            display: block;
        }

        .file-selected-name {
            font-size: 13px;
            font-weight: 600;
            color: #28a745;
            margin-top: 10px;
            display: none;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .error-msg {
            color: #dc3545;
            font-size: 12.5px;
            margin-top: 5px;
            display: block;
            font-weight: 500;
        }

        .btn-submit-custom {
            background: #2457aa;
            border: none;
            color: #fff;
            padding: 14px 35px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(36, 87, 170, 0.2);
        }

        .btn-submit-custom:hover {
            background: #1c488d;
            box-shadow: 0 8px 20px rgba(36, 87, 170, 0.35);
            transform: translateY(-2px);
        }

        .btn-submit-custom:disabled {
            background: #8fa7ce;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .no-jobs-msg {
            text-align: center;
            padding: 30px;
            font-style: italic;
            color: #666;
            background: #f8fafc;
            border-radius: 8px;
            border: 1px dashed #e1e7ec;
        }
    </style>
</head>

<body>

    <!-- preloader start-->
    @include('user.layouts.loader')
    <!-- preloader start end-->

    <!--header start-->
    @include('user.layouts.header', ['categories' => $categories])
    <!--header end-->

    <main>
        <!-- Breadcrumb Hero Banner Section -->
        @include('user.layouts.breadcrumb', [
            'title' => 'Careers',
            'subtitle' => 'JOIN OUR DEDICATED TEAM',
            'subtitle_icon' => 'ri-briefcase-line',
            'description' => 'Build a rewarding career in medical technology. Explore opportunities to grow, innovate, and make a difference in healthcare diagnostics.',
            'hero_icon' => '12.png',
            'items' => [
                ['label' => 'Home', 'url' => route('home'), 'icon' => 'ri-home-4-line'],
                ['label' => 'Careers', 'active' => true, 'icon' => 'ri-briefcase-line']
            ]
        ])

        <!-- 2. Job Openings Management Section -->
        <section class="job-openings-section pb-100 bg-light pt-5">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <span class="badge-tag">Current Openings</span>
                    <h2>Explore <span>Available Opportunities</span></h2>
                    <p class="text-muted">Find a role that matches your skills and passions. Select a department to view available roles.</p>
                </div>

                <!-- Department Tabs -->
                <div class="dept-tabs">
                    <button class="dept-tab-btn active" onclick="filterDepartment(this, 'all')">All Departments</button>
                    @foreach($careerCategories as $cCat)
                        <button class="dept-tab-btn" onclick="filterDepartment(this, 'dept-{{ $cCat->id }}')">{{ $cCat->name }}</button>
                    @endforeach
                </div>

                <!-- Listings Container -->
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        @php $hasJobs = false; @endphp
                        @foreach($careerCategories as $cCat)
                            @foreach($cCat->jobs as $job)
                                @php $hasJobs = true; @endphp
                                <div class="job-card" data-department="dept-{{ $cCat->id }}">
                                    <div class="job-header">
                                        <div class="job-title-area">
                                            <h3>{{ $job->title }}</h3>
                                            <div class="job-meta-badges">
                                                <span class="job-meta-badge badge-dept"><i class="ri-briefcase-line"></i> {{ $cCat->name }}</span>
                                                <span class="job-meta-badge badge-loc"><i class="ri-map-pin-line"></i> {{ $job->location }}</span>
                                                <span class="job-meta-badge badge-type"><i class="ri-time-line"></i> {{ $job->type }}</span>
                                            </div>
                                        </div>
                                        <button class="btn-view-details" onclick="toggleJobDetails(this)">View Details & Apply</button>
                                    </div>

                                    <div class="job-details-content">
                                        <div class="details-row-grid">
                                            <div class="details-grid-item">
                                                <small>Qualification</small>
                                                <span>{{ $job->qualification }}</span>
                                            </div>
                                            <div class="details-grid-item">
                                                <small>Experience Required</small>
                                                <span>{{ $job->experience }}</span>
                                            </div>
                                            @if($job->salary)
                                                <div class="details-grid-item">
                                                    <small>Salary / Details</small>
                                                    <span>{{ $job->salary }}</span>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="details-heading">
                                            <i class="ri-shield-user-line"></i> Roles & Responsibilities
                                        </div>
                                        <ul class="details-text-list">
                                            @foreach(explode("\n", str_replace("\r", "", $job->responsibilities)) as $resp)
                                                @if(trim($resp) !== '')
                                                    <li>{{ trim($resp) }}</li>
                                                @endif
                                            @endforeach
                                        </ul>

                                        <div class="details-heading">
                                            <i class="ri-tools-line"></i> Required Skills
                                        </div>
                                        <ul class="details-text-list">
                                            @foreach(explode("\n", str_replace("\r", "", $job->skills)) as $skill)
                                                @if(trim($skill) !== '')
                                                    <li>{{ trim($skill) }}</li>
                                                @endif
                                            @endforeach
                                        </ul>

                                        <div class="mt-4 text-end">
                                            <button class="btn-apply-job" onclick="applyForJob('{{ $cCat->id }}', '{{ $job->title }}')">
                                                <i class="ri-send-plane-2-fill"></i> Apply Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach

                        <!-- No Jobs Fallback -->
                        <div id="noJobsMessage" class="no-jobs-msg" style="{{ $hasJobs ? 'display: none;' : '' }}">
                            <i class="ri-briefcase-4-line" style="font-size: 36px; color: #2457aa; margin-bottom: 10px; display: block;"></i>
                            <h5 style="font-weight: 700; color: #000a2d; margin-bottom: 6px;">No Jobs Available</h5>
                            <p style="margin: 0; color: #666;">Currently there are no open vacancies in this department. Please feel free to submit a general application below.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Online Job Application System Section -->
        <section id="applicationFormSection" class="ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="app-form-section">
                            <div class="form-title-area">
                                <h3>Online <span>Job Application</span></h3>
                                <p>Submit your candidate profile below. Our HR recruitment specialists will review your application details shortly.</p>
                            </div>

                            <form id="careerApplicationForm" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <label for="fullName">Full Name *</label>
                                            <div class="input-icon-wrapper">
                                                <input type="text" name="full_name" id="fullName" class="custom-form-input" placeholder="Enter your full name" required>
                                                <i class="ri-user-line"></i>
                                            </div>
                                            <small id="nameError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <label for="emailAddress">Email Address *</label>
                                            <div class="input-icon-wrapper">
                                                <input type="email" name="email" id="emailAddress" class="custom-form-input" placeholder="Enter your email address" required>
                                                <i class="ri-mail-line"></i>
                                            </div>
                                            <small id="emailError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <label for="phoneNumber">Phone Number *</label>
                                            <div class="input-icon-wrapper">
                                                <input type="tel" name="phone" id="phoneNumber" class="custom-form-input" placeholder="Enter 10-digit mobile number" required>
                                                <i class="ri-phone-line"></i>
                                            </div>
                                            <small id="phoneError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Experience Years -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <label for="experienceDetails">Experience Details *</label>
                                            <div class="input-icon-wrapper">
                                                <select name="experience_details" id="experienceDetails" class="custom-form-input" required style="padding-left: 45px; -webkit-appearance: none; appearance: none;">
                                                    <option value="" disabled selected>Select your experience level</option>
                                                    <option value="Fresher / Entry Level">Fresher / Entry Level</option>
                                                    <option value="1 - 3 Years">1 - 3 Years</option>
                                                    <option value="3 - 5 Years">3 - 5 Years</option>
                                                    <option value="5+ Years">5+ Years</option>
                                                </select>
                                                <i class="ri-time-line"></i>
                                            </div>
                                            <small id="experienceError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Applied Department -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <label for="appliedDepartment">Applied Department *</label>
                                            <div class="input-icon-wrapper">
                                                <select name="department" id="appliedDepartment" class="custom-form-input" required style="padding-left: 45px; -webkit-appearance: none; appearance: none;">
                                                    <option value="" disabled selected>Select Department</option>
                                                    @foreach($careerCategories as $cCat)
                                                        <option value="{{ $cCat->id }}">{{ $cCat->name }}</option>
                                                    @endforeach
                                                </select>
                                                <i class="ri-building-line"></i>
                                            </div>
                                            <small id="departmentError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Applied Role -->
                                    <div class="col-md-6">
                                        <div class="form-group-custom">
                                            <label for="appliedRole">Applied Role / Job Title *</label>
                                            <div class="input-icon-wrapper">
                                                <input type="text" name="role" id="appliedRole" class="custom-form-input" placeholder="e.g. Senior Engineer" required>
                                                <i class="ri-user-settings-line"></i>
                                            </div>
                                            <small id="roleError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Resume Upload -->
                                    <div class="col-12">
                                        <div class="form-group-custom">
                                            <label>Upload Resume * (PDF / DOCX formats, Max 5MB)</label>
                                            <div class="file-upload-wrapper" id="uploadArea">
                                                <i class="ri-upload-cloud-2-line upload-icon"></i>
                                                <span class="upload-text">Drag and drop file here, or click to choose</span>
                                                <span class="upload-hint">Supported formats: .pdf, .docx, .doc (Max: 5MB)</span>
                                                <input type="file" id="resumeUpload" name="resume" class="file-upload-input" accept=".pdf,.docx,.doc" required>
                                                <div id="fileSelected" class="file-selected-name">
                                                    <i class="ri-checkbox-circle-fill"></i>
                                                    <span id="selectedFileName"></span>
                                                </div>
                                            </div>
                                            <small id="resumeError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Cover Letter / Bio -->
                                    <div class="col-12">
                                        <div class="form-group-custom">
                                            <label for="coverLetter">Cover Letter / Short Bio *</label>
                                            <div class="input-icon-wrapper textarea-icon">
                                                <textarea name="cover_letter" id="coverLetter" class="custom-form-input" placeholder="Briefly introduce yourself and explain why you're a good fit for this role..." rows="4" required></textarea>
                                                <i class="ri-chat-1-line"></i>
                                            </div>
                                            <small id="coverLetterError" class="error-msg"></small>
                                        </div>
                                    </div>

                                    <!-- Additional Comments -->
                                    <div class="col-12">
                                        <div class="form-group-custom">
                                            <label for="additionalComments">Additional Comments (Optional)</label>
                                            <div class="input-icon-wrapper textarea-icon">
                                                <textarea name="additional_comments" id="additionalComments" class="custom-form-input" placeholder="Any additional information, expected notice period, or salary expectations..." rows="3"></textarea>
                                                <i class="ri-chat-quote-line"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12 mt-3">
                                        <button type="submit" id="btnSubmitApp" class="btn-submit-custom">
                                            <i class="ri-send-plane-fill"></i>
                                            <span>Submit Job Application</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->

    <!-- Javascript -->
    @include('user.layouts.script')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Filter Jobs by Department
        function filterDepartment(btn, dept) {
            // Update active state of filter buttons
            $(".dept-tab-btn").removeClass("active");
            if (btn) {
                $(btn).addClass("active");
            }

            let matchedCount = 0;

            if (dept === 'all') {
                $(".job-card").show();
                matchedCount = $(".job-card").length;
            } else {
                $(".job-card").each(function() {
                    if ($(this).attr("data-department") === dept) {
                        $(this).show();
                        matchedCount++;
                    } else {
                        $(this).hide();
                    }
                });
            }

            if (matchedCount === 0) {
                $("#noJobsMessage").show();
            } else {
                $("#noJobsMessage").hide();
            }
        }

        // Toggle job accordion detail panels
        function toggleJobDetails(btn) {
            let details = $(btn).closest(".job-card").find(".job-details-content");
            
            // Check if it's already visible
            let isVisible = details.is(":visible");

            // Close all details in other cards
            $(".job-details-content").slideUp(300);
            $(".btn-view-details").text("View Details & Apply");

            if (!isVisible) {
                details.slideDown(300);
                $(btn).text("Hide Details");
            }
        }

        // When user clicks Apply inside a detail section
        function applyForJob(deptVal, roleVal) {
            // Select appropriate department in form select
            $("#appliedDepartment").val(deptVal).change();
            // Fill in the role text input
            $("#appliedRole").val(roleVal);

            // Smooth scroll to form section
            $('html, body').animate({
                scrollTop: $("#applicationFormSection").offset().top - 100
            }, 800);

            // Highlight the form section with a short subtle outline blink
            $("#fullName").focus();
        }

        $(document).ready(function() {
            // Drag and drop events for file uploader
            let uploadArea = $("#uploadArea");
            let fileInput = $("#resumeUpload");
            let fileSelectedBox = $("#fileSelected");
            let selectedFileNameText = $("#selectedFileName");

            fileInput.on("change", function(e) {
                let files = e.target.files;
                handleFileSelection(files);
            });

            uploadArea.on("dragover", function(e) {
                e.preventDefault();
                uploadArea.addClass("dragover");
            });

            uploadArea.on("dragleave", function(e) {
                e.preventDefault();
                uploadArea.removeClass("dragover");
            });

            uploadArea.on("drop", function(e) {
                e.preventDefault();
                uploadArea.removeClass("dragover");
                let files = e.originalEvent.dataTransfer.files;
                if (files.length > 0) {
                    fileInput[0].files = files; // Bind file list
                    handleFileSelection(files);
                }
            });

            function handleFileSelection(files) {
                if (files.length === 0) return;
                
                let file = files[0];
                let fileName = file.name;
                let fileSizeMB = file.size / (1024 * 1024);
                let allowedExtensions = /(\.pdf|\.docx|\.doc)$/i;

                // Clear previous errors
                $("#resumeError").text("");

                // Validate extension
                if (!allowedExtensions.exec(fileName)) {
                    $("#resumeError").text("Invalid file type. Please upload a PDF or Word document (.docx, .doc).");
                    resetFileUploader();
                    return;
                }

                // Validate file size (max 5MB)
                if (fileSizeMB > 5) {
                    $("#resumeError").text("File is too large. Maximum allowed size is 5MB.");
                    resetFileUploader();
                    return;
                }

                // If valid, display selected name
                selectedFileNameText.text(fileName + " (" + fileSizeMB.toFixed(2) + " MB)");
                fileSelectedBox.css("display", "inline-flex");
            }

            function resetFileUploader() {
                fileInput.val("");
                selectedFileNameText.text("");
                fileSelectedBox.hide();
            }

            // Client-side Form Validation and Submission
            $("#careerApplicationForm").submit(function(e) {
                e.preventDefault();

                // Reset error messages
                $(".error-msg").text("");

                // Read values
                let fullName = $("#fullName").val().trim();
                let email = $("#emailAddress").val().trim();
                let phone = $("#phoneNumber").val().trim();
                let experience = $("#experienceDetails").val();
                let department = $("#appliedDepartment").val();
                let role = $("#appliedRole").val().trim();
                let resume = fileInput[0].files;
                let coverLetter = $("#coverLetter").val().trim();

                let isValid = true;

                // Validation rules
                if (fullName.length === 0) {
                    $("#nameError").text("Please enter your full name.");
                    isValid = false;
                }

                // Email check
                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    $("#emailError").text("Please enter a valid email address.");
                    isValid = false;
                }

                // Phone check: 10 digits
                let phoneRegex = /^[0-9]{10}$/;
                if (!phoneRegex.test(phone)) {
                    $("#phoneError").text("Please enter a valid 10-digit mobile number.");
                    isValid = false;
                }

                if (!experience) {
                    $("#experienceError").text("Please select your experience level.");
                    isValid = false;
                }

                if (!department) {
                    $("#departmentError").text("Please select a department.");
                    isValid = false;
                }

                if (role.length === 0) {
                    $("#roleError").text("Please specify the applied role.");
                    isValid = false;
                }

                if (resume.length === 0) {
                    $("#resumeError").text("Please upload your resume.");
                    isValid = false;
                }

                if (coverLetter.length === 0) {
                    $("#coverLetterError").text("Please enter your cover letter or short bio.");
                    isValid = false;
                }

                if (!isValid) {
                    // Scroll to first error
                    let firstError = $(".error-msg").filter(function() {
                        return $(this).text() !== "";
                    }).first();
                    
                    if (firstError.length > 0) {
                        $('html, body').animate({
                            scrollTop: firstError.closest(".form-group-custom").offset().top - 120
                        }, 500);
                    }
                    return;
                }

                // Process AJAX submission
                let btn = $("#btnSubmitApp");
                let originalText = btn.html();
                
                // Set loading state
                btn.prop("disabled", true).html('<i class="ri-loader-4-line ri-spin"></i> Submitting Application...');

                let formData = new FormData($("#careerApplicationForm")[0]);
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    url: "{{ route('career.apply') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Reset loader
                        btn.prop("disabled", false).html(originalText);

                        if (response.success) {
                            // Reset form and file uploader
                            $("#careerApplicationForm")[0].reset();
                            resetFileUploader();

                            // Display beautiful success alert matching the brand
                            Swal.fire({
                                title: "Application Submitted Successfully!",
                                text: response.message,
                                icon: "success",
                                confirmButtonText: "Done",
                                confirmButtonColor: "#2457aa",
                                allowOutsideClick: false
                            });
                        } else {
                            Swal.fire({
                                title: "Submission Failed",
                                text: response.message || "Something went wrong.",
                                icon: "error",
                                confirmButtonColor: "#2457aa"
                            });
                        }
                    },
                    error: function(xhr) {
                        btn.prop("disabled", false).html(originalText);
                        let errorMsg = "Something went wrong. Please check your fields and try again.";
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMsg = xhr.responseJSON.message;
                        }
                        Swal.fire({
                            title: "Submission Error",
                            text: errorMsg,
                            icon: "error",
                            confirmButtonColor: "#2457aa"
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
