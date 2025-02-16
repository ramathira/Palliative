@extends('../themes/' . $activeTheme)

@section('subhead')
    <title>Sparshamayi</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                <div class="text-base font-medium group-[.mode--light]:text-white">
                    Calendar
                </div>
                <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                    <a href="{{ route('palliative_nurse.create_schedule') }}">
                        <x-base.button
                            class="group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"
                            variant="primary"
                        >
                            <x-base.lucide
                                class="mr-3 h-4 w-4 stroke-[1.3]"
                                icon="CopyPlus"
                            />
                            Add New Schedule
                        </x-base.button>
                    </a>
                </div>
            </div>
            <div class="mt-3.5 flex flex-col gap-x-6 gap-y-10 lg:flex-row">
              
                <div class="flex w-full flex-col gap-y-9">
                    <div class="box box--stacked flex flex-col p-5">
                        <x-calendar />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

{{-- <div id="calendarModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="bg-white p-6 rounded-lg w-96 relative">
        <!-- Close Button (X) -->
        <button id="closeModalIcon" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">
            &times;
        </button>

        <h2 class="text-lg font-semibold">Schedule Details</h2>
        <p id="modalDate" class="text-gray-600 mt-2"></p>

        <!-- Close Button -->
        <button id="closeModal" class="mt-4 px-4 py-2 bg-red-500 text-white rounded">Close</button>
    </div>
</div> --}}





<div class="flex flex-col p-5 box box--stacked">
    <x-base.preview-component>
        <div
            class="flex flex-col pb-5 mb-5 border-b border-dashed border-slate-300/70 sm:flex-row sm:items-center">
           
           
        </div>
        <div>
        
            <div
                class="relative mb-4 mt-7 rounded-[0.6rem] border border-slate-200/80 dark:border-darkmode-400">               
                <div class="mt-4 flex flex-col gap-3.5 px-5 py-2">
                    <x-base.preview>
                        <!-- BEGIN: Slide Over Content -->
                        <x-base.slideover   id="superlarge-slide-over-size-preview"
                                                size="xl" class="fixed inset-0 bg-black bg-opacity-50 z-50 overflow-y-auto max-h-[120vh]">
                            <x-base.slideover.panel class="bg-white shadow-lg z-50">
                                <x-base.slideover.title class="p-5">
                                    <h2 class="mr-auto text-base font-medium text-primary">
                                        Work Plan for <span id="clicked_date"></span>
                                    </h2>
                                </x-base.slideover.title>
                                <x-base.slideover.description>
                                    <table class="min-w-full bg-white border border-gray-300">
                                        <thead>
                                            <tr class="bg-gray-200">
                                                <th class="border px-4 py-2">Planned Time</th>
                                                <th class="border px-4 py-2">Subcentre Name</th>
                                                <th class="border px-4 py-2">Ward Name</th>
                                                <th class="border px-4 py-2">Patient Name</th>                                                                                            
                                                <th class="border px-4 py-2">Age</th>
                                                <th class="border px-4 py-2">Gender</th>
                                            </tr>
                                        </thead>
                                        <tbody id="schedule-table-body">
                                           
                                        </tbody>
                                    </table>
                                    
                                </x-base.slideover.description>
                            </x-base.slideover.panel>
                        </x-base.slideover>
                        
                        <!-- END: Slide Over Content -->
                    </x-base.preview>
                   
                </div>
            </div>
           
        </div>
    </x-base.preview-component>
</div>




@endsection
@push('custom-scripts')
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script>
    // Pass dynamic data from Blade to JavaScript
    const calendarData = {
        initialDate: "{{ $initialDate }}", // Dynamically passed from controller or Blade
        events: @json($events), // Dynamically passed from controller or Blade
    };

    document.addEventListener('DOMContentLoaded', function () {
    const calendarElement = document.querySelector('.full-calendar');
    const slideOver = document.getElementById("superlarge-slide-over-size-preview");
    if (calendarElement  && slideOver) {
        let calendar = new Calendar(calendarElement, {
            plugins: [interactionPlugin, dayGridPlugin, timeGridPlugin, listPlugin],
            droppable: true,
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
            },
            initialDate: calendarData.initialDate, 
            events: calendarData.events,           
            navLinks: true,
            dayMaxEvents: true,
            dateClick: function(info) {
                 // Show the slide-over
                 slideOver.classList.add("show");
                slideOver.style.display = "block";
                // Prevent background scrolling when slide-over is open

                document.body.style.overflow = 'hidden';  // Disable body scroll

                document.querySelector('.full-calendar').style.overflow = 'hidden';  // Disable calendar scroll
            //    if (slideOver) {                    
                    // Set the clicked date
                    document.getElementById('clicked_date').innerText = `: ${formatDate(info.dateStr)}`;

                    // Clear previous table content
                    const tableBody = document.getElementById("schedule-table-body");
                    tableBody.innerHTML = "";

                    // Fetch data from Laravel controller
                    jQuery.ajax({
                        url: '/get_day_plan_palliative_nurse/' + info.dateStr,
                        type: 'GET',
                        dataType: 'json',
                        success: function (response) {
                            if (response.length > 0) {
                                response.forEach(function(data) {
                                    let row = `
                                        <tr>
                                            <td class="border px-4 py-2">${data.plan_time}</td>
                                             <td class="border px-4 py-2">${data.sub_centre}</td>
                                             <td class="border px-4 py-2">${data.ward_name}</td>
                                          <td class="border px-4 py-2">${data.first_name} ${data.second_name}</td>                                                                                   
                                            <td class="border px-4 py-2">${data.age}</td>
                                            <td class="border px-4 py-2">${data.gender}</td>
                                        </tr>
                                    `;
                                    tableBody.innerHTML += row;
                                });
                            } else {
                                tableBody.innerHTML = `
                                    <tr>
                                        <td colspan="6" class="border px-4 py-2 text-center text-gray-500">
                                            No schedules found for this date.
                                        </td>
                                    </tr>
                                `;
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error fetching schedule:', error);
                        }
                    });
               // }
            },
            drop: function (info) {
                if ($("#checkbox-events").length && $("#checkbox-events")[0].checked) {
                    $(info.draggedEl).parent().remove();

                    if ($("#calendar-events").children().length == 1) {
                        $("#calendar-no-events").removeClass("hidden");
                    }
                }
            },
        });

        calendar.render();
    }

     // Close slide-over and enable background scroll
     document.getElementById("superlarge-slide-over-size-preview").addEventListener("click", function(event) {
    if (event.target === this) {
        this.style.display = "none"; // Hide the slide-over
        document.body.style.overflow = ''; // Enable body scroll
        document.querySelector('.full-calendar').style.overflow = ''; // Enable calendar scroll

    }
    });

});


function formatDate(dateStr) {
    const date = new Date(dateStr); // Convert the date string into a Date object

    // Use the Date object's method to format it as dd-MM-YYYY
    const day = ("0" + date.getDate()).slice(-2); // Adds leading zero if the day is single digit
    const month = ("0" + (date.getMonth() + 1)).slice(-2); // Adds leading zero if the month is single digit
    const year = date.getFullYear();

    return `${day}-${month}-${year}`;
}


</script>
@endpush
