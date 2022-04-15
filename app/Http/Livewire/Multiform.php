<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Ilovepdf\Ilovepdf;
use App\Models\Data;

class Multiform extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $phone;
    public $dateofbirth;
    public $gender;
    public $address;
    public $kel;
    public $kec;
    public $city;
    public $province;
    public $degree;
    public $school;
    public $study;
    public $graduation;
    public $gpa;
    public $cv;

    public $totalSteps = 4;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multiform');
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'name' => 'required|string',
                'email' => 'required|email:filter|unique:datas,email',
                'phone' => 'required',
                'dateofbirth' => 'required',
                'gender' => 'required',
            ]);
        } else if ($this->currentStep == 2) {
            $this->validate([
                'address' => 'required',
                'kel' => 'required',
                'kec' => 'required',
                'city' => 'required',
                'province' => 'required',
            ]);
        } else if ($this->currentStep == 3) {
            $this->validate([
                'degree' => 'required',
                'school' => 'required',
                'study' => 'required',
                'graduation' => 'required',
                'gpa' => 'required',
            ]);
        }
    }

    public function register()
    {
        $this->resetErrorBag();
        if ($this->currentStep == 4) {
            $this->validate([
                'cv' => 'required|mimes:pdf',
            ]);
        }

        $cv_name = 'CV_' . $this->cv->getClientOriginalName();
        $ilovepdf = new Ilovepdf('project_public_c1df73264cbfe873df6d17608c6fd938_KODln200eaabab9889d0f538d8306ed6fe6f5', 'secret_key_8ce84fbcb8997f95f85aeeb97b132658_qDmlwd1f6b7a6dbe38a960b89975bdd7e9e8f');
        $myTask = $ilovepdf->newTask('compress');
        $file1 = $myTask->addFile($this->cv);
        $upload_compress = $file1->storeAs('compress', $cv_name . '_compress');


        if ($upload_compress) {
            $value = array(
                "name" => $this->name,
                "email" => $this->email,
                "phone" => $this->phone,
                "dateofbirth" => $this->dateofbirth,
                "gender" => $this->gender,
                "address" => $this->address,
                "kel" => $this->kel,
                "kec" => $this->kec,
                "city" => $this->city,
                "province" => $this->province,
                "degree" => $this->degree,
                "school" => $this->school,
                "study" => $this->study,
                "graduation" => $this->graduation,
                "gpa" => $this->gpa,
                "cv" => $cv_name,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );
            Data::insert($value);
            $this->reset();
            $this->currentStep = 1;
            return redirect('');
        }
    }
}
