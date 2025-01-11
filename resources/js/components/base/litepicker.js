(function () {
    "use strict";

    // Get today's date in "YYYY-MM-DD" format
    const today = dayjs().format('YYYY-MM-DD');

    // Litepicker
    $(".datepicker").each(function () {
        let minDate = $(this).data("min-date") || null;
        let maxDate = $(this).data("max-date") || null;
        let defaultDate = $(this).data("default-date") || null;

        // Replace "today" keyword with today's date
        minDate = minDate === 'today' ? today : minDate;
        maxDate = maxDate === 'today' ? today : maxDate;

        // Extract min and max year from minDate and maxDate
        const minYear = minDate ? dayjs(minDate).year() : 1924;
        const maxYear = maxDate ? dayjs(maxDate).year() : dayjs().year(); // Defaults to current year

        let options = {
            autoApply: false,
            singleMode: false,
            numberOfColumns: 2,
            numberOfMonths: 2,
            showWeekNumbers: true,
            format: $(this).data("format") || "D MMM, YYYY",
            minDate: minDate || undefined,
            maxDate: maxDate || undefined,
            startDate: defaultDate || undefined,
            dropdowns: {
                minYear: minYear,
                maxYear: maxYear,
                months: true,
                years: true,
            },
        };

        // Adjust for single mode if required
        if ($(this).data("single-mode")) {
            options.singleMode = true;
            options.numberOfColumns = 1;
            options.numberOfMonths = 1;
        }

        // If a default date is provided, set it
        if (defaultDate) {
            $(this).val(dayjs(defaultDate).format(options.format));
        } else if (!$(this).val()) {
            // If no value is present in the input, use the default logic
            let date = dayjs().format(options.format);
            date += !options.singleMode
                ? " - " + dayjs().add(1, "month").format(options.format)
                : "";
            $(this).val(date);
        }

        // Initialize the Litepicker for this input field
        new Litepicker({
            element: this,
            ...options,
        });
    });

})();
