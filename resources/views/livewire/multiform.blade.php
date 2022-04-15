<div>
    <form wire:submit.prevent="register">
        {{-- Step 1 --}}
        @if ($currentStep == 1)
            <div class="step-1" style="margin-top:30px">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        Step 1/4 - Personal Details
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    Name
                                    <input type="text" class="form-control" placeholder="Your Name" wire:model="name"
                                        id="name" onkeyup='saveValue(this);' />
                                    @error('name')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    Email
                                    <input type="text" class="form-control" placeholder="Your Email"
                                        wire:model="email" id="email" onkeyup='saveValue(this);'>
                                    @error('email')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    Phone
                                    <input type="text" class="form-control" placeholder="Your Phone"
                                        wire:model="phone" id="phone" onkeyup='saveValue(this);'>
                                    @error('phone')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    Date of Birth
                                    <input type="text" class="form-control" placeholder="Date of Birth"
                                        wire:model="dateofbirth" id="dateofbirth" onkeyup='saveValue(this);'>
                                    @error('dateofbirth')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    Gender
                                    <select class="form-control" wire:model="gender">
                                        <option value="" selected>Choose Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Step 2 --}}
        @if ($currentStep == 2)
            <div class="step-2" style="margin-top:30px">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        Step 2/4 - Address
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            Address
                            <textarea type="text" class="form-control" placeholder="Your Address" cols="2" rows="2" wire:model="address"
                                id="address" onkeyup='saveValue(this);'></textarea>
                            @error('address')
                                <small class="text-while">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    Kelurahan
                                    <input type="text" class="form-control" placeholder="Your Kelurahan"
                                        wire:model="kel" id="kel" onkeyup='saveValue(this);'>
                                    @error('kel')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    Kecamatan
                                    <input type="text" class="form-control" placeholder="Your Kecamatan"
                                        wire:model="kec" id="kec" onkeyup='saveValue(this);'>
                                    @error('kec')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    City
                                    <input type="text" class="form-control" placeholder="Your City" wire:model="city"
                                        id="city" onkeyup='saveValue(this);'>
                                    @error('city')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    Province
                                    <input type="text" class="form-control" placeholder="your Province"
                                        wire:model="province" id="province" onkeyup='saveValue(this);'>
                                    @error('province')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Step 3 --}}
        @if ($currentStep == 3)
            <div class="step-3" style="margin-top:30px">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        Step 3/4 - Education
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    Degree
                                    <select class="form-control" wire:model="degree">
                                        <option value="" selected>Choose Degree</option>
                                        <option value="male">SMP</option>
                                        <option value="sma">SMA/SMK</option>
                                        <option value="d3">D3</option>
                                        <option value="s1">D4/S1</option>
                                    </select>
                                    @error('degree')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    GPA
                                    <input type="text" class="form-control" placeholder="Your GPA" wire:model="gpa"
                                        id="gpa" onkeyup='saveValue(this);'>
                                    @error('gpa')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    School
                                    <input type="text" class="form-control" placeholder="Your School Name"
                                        wire:model="school" id="school" onkeyup='saveValue(this);'>
                                    @error('school')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    Study
                                    <input type="text" class="form-control" placeholder="Your Study/Major"
                                        wire:model="study" id="study" onkeyup='saveValue(this);'>
                                    @error('study')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    Graduation
                                    <select class="form-control" wire:model="graduation">
                                        <option value="" selected>Choose Graduation Year</option>
                                        <option value="male">2021</option>
                                        <option value="female">2022</option>
                                    </select>
                                    @error('graduation')
                                        <small class="text-while">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Step 4 --}}
        @if ($currentStep == 4)
            <div class="step-2" style="margin-top:30px">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        Step 4/4 - CV Document Upload
                    </div>
                    <div class="card-body">
                        <i>*Files that are allowed to be uploaded are only those with a .pdf extension.</i>
                        <div class="form-group">
                            CV
                            <input type="file" class="form-control" wire:model="cv">
                            @error('cv')
                                <small class="text-while">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="action-button d-flex justify-content-between bg-white pt-2 pb-2">
            @if ($currentStep == 1)
                <div></div>
            @endif
            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif
            @if ($currentStep == 4)
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif
        </div>
    </form>
</div>
<script type="text/javascript">
    document.getElementById("name").value = getSavedValue("name");
    document.getElementById("email").value = getSavedValue("email");
    document.getElementById("phone").value = getSavedValue("phone");
    document.getElementById("dateofbirth").value = getSavedValue("dateofbirth");
    document.getElementById("address").value = getSavedValue("address");
    document.getElementById("kel").value = getSavedValue("kel");
    document.getElementById("kec").value = getSavedValue("kec");
    document.getElementById("city").value = getSavedValue("city");
    document.getElementById("province").value = getSavedValue("province");
    document.getElementById("gpa").value = getSavedValue("gpa");
    document.getElementById("school") school.value = getSavedValue("school");
    document.getElementById("study").value = getSavedValue("study");

    function saveValue(e) {
        var id = e.id;
        var val = e.value;
        localStorage.setItem(id, val);
    }

    function getSavedValue(v) {
        if (!localStorage.getItem(v)) {
            return "";
        }
        return localStorage.getItem(v);
    }
</script>
