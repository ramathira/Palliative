@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Palliative Care</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12 sm:col-span-10 sm:col-start-2">          
            
         
            <div class="mt-7 step" >
                <div class="box box--stacked flex flex-col">
                    <div class="p-7">
                        <input type="hidden" value="{{ $patient_id }}" name="patient_id" >
                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Diagnosis </div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           <div class="mt-4 w-full flex-1 xl:mt-0">                                
                                <x-base.preview>
                                    <x-base.tom-select
                                        class="w-full"
                                        data-placeholder="Select the Diagnosis"
                                        multiple
                                        id="diagnosis-select"
                                        name="diagnosis"
                                    >                                                                                                          
                                    </x-base.tom-select>
                                </x-base.preview>                                                   
                            </div>
                        </div> 
                       
                     
                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Diagnosis details</div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                              Write with the help of Hospital Records
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">
                                <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                placeholder="Type disease details..."
                                name="diagnosis_details"
                                />                                   
                            </div>                               
                        </div>                        
                    </div>    
                    
                   

                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Disease Diagnosed Date</div>
                                        <div
                                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Required
                                        </div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                        രോഗം കണ്ടെത്തിയ തീയതി 
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                               
                               
                                            <x-base.litepicker
                                                class="mx-auto block"
                                                data-single-mode="true"
                                                 name="diagnosis_date"
                                                 data-min-date="1924-01-01"                                               
                                                 
                                            />
                                        
                                       
                            </div>
                    </div>

                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">General Condition prior to Disease</div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    രോഗം വന്നതിനു മുമ്പുള്ള അവസ്ഥാ 
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">
                                <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                placeholder="Type  details..."
                                name="prior_condition"
                                />                                   
                            </div>                               
                        </div>
                    </div> 

                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Treatment Availed From</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                  Hospital name
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                        class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                        type="text"
                                        placeholder="Hospital Name"
                                        id="hospital_name"
                                          name="hospital_name"
                                        
                                    />
                                    
                                </div>
                               
                            </div>
                        </div>

                        

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Name of Doctor</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <x-base.form-input
                                    class="first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0"
                                    type="text"
                                    placeholder="Doctor's Name"
                                    id="doctor_name"
                                      name="doctor_name"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Treament Type</div>
                                    </div>
                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                <div class="flex flex-col items-center md:flex-row">
                                    <div
                                        class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <x-base.form-check>
                                        
                                            <input type="radio" id="checkbox-switch-public" name="treatment_type" value="1" >
                                            <x-base.form-check.label for="checkbox-switch-public">
                                                Public 
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>
                                    <div
                                        class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&:not(:first-child):not(:last-child)]:-mt-px [&:not(:first-child):not(:last-child)]:rounded-none [&:not(:first-child):not(:last-child)]:md:-ml-px [&:not(:first-child):not(:last-child)]:md:mt-0">
                                        <x-base.form-check>                                         
                                            <input type="radio" id="checkbox-switch-private" name="treatment_type" value="2" >
                                            <x-base.form-check.label for="checkbox-switch-private">
                                                Private
                                            </x-base.form-check.label>
                                        </x-base.form-check>
                                    </div>                                   
                                </div> 
                            </div>
                        </div>

                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Treatment Details</div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    ചികിത്സാ വിവരങ്ങൾ 
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">
                            <x-base.preview>                                            
                                            <div class="mt-3">                                              
                                                <div class="flex flex-col mt-2 sm:flex-row">
                                                    <x-base.form-check class="mr-2">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-4"
                                                            type="checkbox"
                                                             class="toggle-checkbox"
                                                               data-target="#allopathy-textarea"
                                                            value="1"
                                                            name="allopathy"
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-4">
                                                          Allopathy
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-5"
                                                            type="checkbox"
                                                            value="1"
                                                             class="toggle-checkbox"
                                                              data-target="#ayurveda-textarea"
                                                               name="ayurveda"
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-5">
                                                          Ayurveda
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                    <x-base.form-check class="mt-2 mr-2 sm:mt-0">
                                                        <x-base.form-check.input
                                                            id="checkbox-switch-6"
                                                            type="checkbox"
                                                            value="1"
                                                             class="toggle-checkbox"
                                                              data-target="#homeopathy-textarea"
                                                              name="homeopathy"
                                                        />
                                                        <x-base.form-check.label for="checkbox-switch-6">
                                                           Homeopathy
                                                        </x-base.form-check.label>
                                                    </x-base.form-check>
                                                </div>
                                            </div>
                                            
                                          
                                        </x-base.preview>                                 
                            </div>                               
                        </div>
                    </div> 


                    <!-- Textarea for Allopathy -->

                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center ">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                                             
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">
                                <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16 hidden"
                                placeholder="Enter details for allopathy treatment"
                                name="allopathy_treatment"
                                id="allopathy-textarea"
                                />                                  
                            </div>                               
                        </div>                        
                    </div>  
                    <!-- Textarea for Ayurveda -->
                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center ">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                                                      
                                </div>                              
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">                               
                                <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16 hidden"
                                placeholder="Enter details for ayurveda treatment"
                                name="ayurveda_treatment"
                                id="ayurveda-textarea"
                                />                                  
                            </div>                               
                        </div>                        
                    </div>  
                    <!-- Textarea for Homeopathy -->
                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center ">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                          
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">                               
                                <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16 hidden"
                                placeholder="Enter details for homeopathy treatment"
                                name="homeopathy_treatment"
                                id="homeopathy-textarea"
                                />                                  
                            </div>                               
                        </div>                        
                    </div>


                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Present Health Condition</div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                    രോഗം വന്നതിനു ശേഷമുള്ള അവസ്ഥാ 
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 w-full flex-1 xl:mt-0">
                            <div class="flex flex-col items-center md:flex-row">
                                <x-base.form-textarea
                                class="-mb-1.5 resize-none rounded-xl pr-16"
                                placeholder="Present Health Condition"
                                name="present_condition"
                                />                                   
                            </div>                               
                        </div>
                    </div> 


                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Treatment Category </div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        {{-- <div class="mt-3 w-full flex-1 xl:mt-0">
                            <x-base.form-select id="treatment-type-select" name="treatment_category"  >
                            <option value="">Select treatment Type</option> 
                            </x-base.form-select>
                        </div> --}}

                        <div class="mt-3 w-full flex-1 xl:mt-0">                                
                            <x-base.preview>
                                <x-base.tom-select
                                    class="w-full"
                                    data-placeholder="Select Treatment Types"
                                    multiple
                                    id="treatment-type-select"
                                    name="treatment_category"
                                >                                                                                                          
                                </x-base.tom-select>
                            </x-base.preview>                                                   
                        </div>
                    </div> 

                    <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                        <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                            <div class="text-left">
                                <div class="flex items-center">
                                    <div class="font-medium">Comfort Devices </div>
                                    <div
                                        class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                        Required
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                        <div class="mt-3 w-full flex-1 xl:mt-0">                                
                            <x-base.preview>
                                <x-base.tom-select
                                    class="w-full"
                                    data-placeholder="Select the Comfort Devices"
                                    multiple
                                    id="comfortdevices-select"
                                    name="comfortdevices"
                                >                                                                                                          
                                </x-base.tom-select>
                            </x-base.preview>                                                   
                        </div>
                       
                    </div>
                  
                     


                  
                      
                    </div>
               
                </div>
            </div>


    <div class="box flex border-t border-slate-200/80 px-7 py-5 md:justify-end">

                        <x-base.button
                            class="w-full border-primary/50 px-10 md:w-auto"
                            variant="outline-primary"
                            id="next-button"
                        >
                            <x-base.lucide
                                class="-ml-2 mr-2 h-4 w-4 stroke-[1.3]"
                                
                            />
                            Submit
                        </x-base.button>
                    </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}
 <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>


<script>
document.addEventListener("DOMContentLoaded", function () { 

    const nextButton = document.getElementById("next-button");
    const steps = document.querySelectorAll('.step');
    let currentStep = 0;


    // Event listener for "Next" button
    document.getElementById("next-button").addEventListener("click", function () {
        saveDiagnosisStepData(currentStep);
    });



    function saveDiagnosisStepData(step) {
    const data = {};
    const inputs = steps[step].querySelectorAll("input, select,textarea");
    const nextButton = document.querySelector("#next-button"); // Assuming your button has this ID
    const formData = {};
    // 🔒 Disable the next button immediately
    nextButton.disabled = true;
    nextButton.textContent = 'Saving...'; 

    inputs.forEach(input => {
        if (input.name) {
            if (input.type === 'radio' && !input.checked) return; // Skip unchecked radio buttons
            else if (input.type === 'checkbox' && !input.checked) return; 
            if (input.classList.contains('tom-select')) {
                    const selectedOptions = Array.from(input.options)
                        .filter(option => option.selected)
                        .map(option => option.value);
                    data[input.name] = selectedOptions;
                    formData[input.name] = selectedOptions;
                } else {
                data[input.name] = input.value;
                formData[input.name] = input.value;
            }
        }
    });

    if (formData.patient_id) {
        data.patient_id = formData.patient_id; 
    }

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    fetch("/save-patient-disease", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken
        },
        body: JSON.stringify(data) 
    })
    .then(response => response.json())
    .then(responseData => {
        if (responseData.success === false) {
            displayValidationErrors(responseData.errors);
            nextButton.disabled = false;
            nextButton.textContent = 'Next';
        } else {
            if (currentStep < steps.length - 1) {
                steps[currentStep].style.display = "none";
                currentStep++;
                steps[currentStep].style.display = "block";
                updateButtons();
              
            } else {
              
         //       submitFormData(); 
         window.location.replace(`/patient_profile/${data.patient_id}`);
            }
        }
    })
    .catch(error => {
        console.error("Error saving step data:", error);
        nextButton.disabled = false;
        nextButton.textContent = 'Next';
    });
}


    // Display validation errors for the current step
    function displayValidationErrors(errors) {
        const errorElements = document.querySelectorAll('.error-message');
        errorElements.forEach(errorElement => errorElement.remove());

        for (const [fieldName, errorMessages] of Object.entries(errors)) {
            const inputField = document.querySelector(`[name="${fieldName}"]`);
            if (inputField && inputField.closest('.step').style.display !== 'none') {
                const errorMessageContainer = document.createElement('div');
                errorMessageContainer.classList.add('error-message');
                errorMessageContainer.textContent = errorMessages.join(', ');
                inputField.parentElement.appendChild(errorMessageContainer);
            }
        }
    }

    // Final submission of the form
    function submitFormData() {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch("/submit-patient-form", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken
            },
            body: JSON.stringify(formData) // Send the full form data after all steps
        })
        .then(response => response.json())
        .then(responseData => {
            if (responseData.success) {
                alert("Form successfully submitted!");
            } else {
                displayValidationErrors(responseData.errors);
            }
        })
        .catch(error => {
            console.error("Error submitting final form data:", error);
        });
    }

    // Update button states based on current step
    function updateButtons() {
        // document.getElementById("prev-button").style.display = currentStep === 0 ? "none" : "inline-block";
        document.getElementById("next-button").textContent = currentStep === steps.length - 1 ? "Submit" : "Next";
    }

    // Initialize button states
    updateButtons();
});




$(document).ready(function() { 

    jQuery.ajax({
    url: '/get_diagnosis',
    type: 'GET',
    dataType: 'json',
    success: function (response) {
        var diagSelect = jQuery('#diagnosis-select')[0].tomselect; 
diagSelect.clearOptions(); 
diagSelect.addOption({value: '', text: 'Select a Diagnosis'}); 

response.forEach(function(data) { 
    diagSelect.addOption({value: data.id, text: data.diagnosis});
});

diagSelect.refreshOptions();
    },
    error: function (xhr, status, error) {
        console.error('Error fetching diagnosis:', error);
    }
});


    jQuery.ajax({
    url: '/get_treatment_types',
    type: 'GET',
    dataType: 'json',
    success: function (response) {
        const $select = jQuery('#treatment-type-select');

        if ($select.length) {
            // Clear existing options
            $select[0].tomselect.clearOptions();
            
            response.forEach(function (data) {
                $select[0].tomselect.addOption({ value: data.id, text: data.treatment_type });
            });
        } else {
            console.error('Treament type select element not found.');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching treatment type:', error);
    }
});


    jQuery.ajax({
    url: '/get_comfort_devices',
    type: 'GET',
    dataType: 'json',
    success: function (response) {
        const $select = jQuery('#comfortdevices-select');

        if ($select.length) {
            // Clear existing options
            $select[0].tomselect.clearOptions();
            
            response.forEach(function (data) {
                $select[0].tomselect.addOption({ value: data.id, text: data.comfort_device_name });
            });
        } else {
            console.error('Comfort select element not found.');
        }
    },
    error: function (xhr, status, error) {
        console.error('Error fetching diagnosis:', error);
    }
});



    jQuery('.toggle-checkbox').change(function () {
        // Get the target text area using the `data-target` attribute
        var target = jQuery(this).data('target');
        
        if (jQuery(this).is(':checked')) {
            // Show the text area if the checkbox is checked
            jQuery(target).removeClass('hidden');
        } else {
            // Hide the text area if the checkbox is unchecked
            jQuery(target).addClass('hidden');
        }
    });


    jQuery('.character_only').on('keypress', function (e) {
    var charCode = e.which || e.keyCode;
    if (!/[a-zA-Z\s]/.test(String.fromCharCode(charCode))) {
        e.preventDefault(); 
    }
    });

    $('.numbers-only').on('keypress', function (e) {
        // Allow digits and control characters like backspace, delete, etc.
        var charCode = e.which || e.keyCode;
        // Check if the key is not a number or control character
        if (!(charCode >= 48 && charCode <= 57) && charCode !== 8 && charCode !== 9 && charCode !== 46) {
            e.preventDefault();
        }
    });
});



    </script>
    @endpush