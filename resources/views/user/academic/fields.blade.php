<div class="row">
    <div class="d-flex mb-1">
        <a href="#" class="me-25">
            <img src="{{ isset($academic_detail) && $academic_detail ? asset('storage/' . $academic_detail->image) : asset('app-assets/images/no_image_icon.jpg') }}"
                id="account-upload-img" class="uploadedAvatar rounded me-50" alt="degree image" height="100"
                width="100" />
        </a>
        <div class="d-flex align-items-end mt-75 ms-1">
            <div>
                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                <input type="file" id="account-upload" name="degree_image" hidden accept="image/*" />
                <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
        <label for="name">Select Your Qualification:</label>
        {{ html()->select('qualification', ['' => 'Select', 'matriculation' => 'Matriculation', 'fsc_pre_engineering' => 'Fsc Pre Engineering', 'fsc_pre_medical' => 'Fsc Pre Medical', 'fa_simple' => 'FA Simple', 'fa_with_math_or_it' => 'FA Math/IT', 'dae_electical' => 'DAE Electrical', 'dae_mechanical' => 'DAE Mechanical', 'dae_civil' => 'DAE Civil', 'dae_chemical' => 'DAE Chemical', 'i_com' => 'ICom'])->class('form-control form-control-sm') }}
    </div>
    <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
        <label for="name">Select University/Board:</label>
        {{ html()->select('board_university_name', ['' => 'Select', 'dg_khan_board' => 'Dg Khan Board', 'multan_board' => 'Multan Board', 'sargodha_board' => 'Sargodha Board'])->class('form-control form-control-sm') }}
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
        <label for="name">Enter Roll No:</label>
        {{ html()->text('roll_no')->class('form-control form-control-sm') }}
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
        <label for="name">Enter Degree Exam Year:</label>
        {{ html()->date('degree_exam_year')->class('form-control form-control-sm') }}
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
        <label for="name">Enter Total Marks:</label>
        {{ html()->text('total_marks')->class('form-control form-control-sm') }}
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
        <label for="name">Enter Obtained Marks:</label>
        {{ html()->text('obtained_marks')->class('form-control form-control-sm') }}
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0 mt-1">
        <input type="submit" value="Save Qualification" name="submit" class="btn btn-success">
    </div>
    @push('js_scripts')
        <script>
            $(document).ready(function() {
                var form = $('.validate-form'),
                    accountUploadImg = $('#account-upload-img'),
                    accountUploadBtn = $('#account-upload'),
                    accountUserImage = $('.uploadedAvatar'),
                    accountResetBtn = $('#account-reset');

                if (accountUserImage) {
                    var resetImage = accountUserImage.attr('src');
                    accountUploadBtn.on('change', function(e) {
                        var reader = new FileReader(),
                            files = e.target.files;
                        reader.onload = function() {
                            if (accountUploadImg) {
                                accountUploadImg.attr('src', reader.result);
                            }
                        };
                        reader.readAsDataURL(files[0]);
                    });

                    accountResetBtn.on('click', function() {
                        accountUserImage.attr('src', resetImage);
                    });
                }
            });
        </script>
    @endpush
