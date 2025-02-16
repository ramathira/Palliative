(function () {
    "use strict";

    // Chart
    const chartEl = $(".report-bar-chart-6");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");

            // Generate random data for the datasets
            // const data1 = Array.from({ length: 15 }, () => _.random(1, 100));
            // const data2 = Array.from({ length: 15 }, () => _.random(1, 100));

              const data1 =['5','7','12','13','18','16','12','12','18','16','12','12','21','15','23'];
              const data2 =['15','9','22','19','8','19','2','16','12','6','22','3','12','19','21'];
            // Set the maximum value for the Y-axis manually or dynamically
            const maxDataValue = Math.max(...data1, ...data2);
            const roundedMax = Math.ceil(maxDataValue / 10) * 10; // Round up to nearest 10

            const reportBarChart6 = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: Array.from(
                        { length: 15 },
                        (_, index) => index + 15
                    ),
                    datasets: [
                        {
                            categoryPercentage: 0.5,
                            barPercentage: 0.8,
                            borderRadius: 2,
                            data: data1,
                            borderWidth: 1,
                            borderColor: getColor("primary", 0.7),
                            backgroundColor: getColor("primary", 0.35),
                        },
                        {
                            categoryPercentage: 0.5,
                            barPercentage: 0.8,
                            borderRadius: 2,
                            data: data2,
                            borderWidth: 1,
                            borderColor: getColor("success", 0.7),
                            backgroundColor: getColor("success", 0.35),
                        },
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    scales: {
                        x: {
                            ticks: {
                                color: getColor("slate.500", 0.7),
                            },
                            grid: {
                                display: false,
                            },
                            border: {
                                display: false,
                            },
                        },
                        y: {
                            ticks: {
                                stepSize: 10, // Force Y-axis ticks to increment by 10
                                color: getColor("slate.500", 0.9),
                                beginAtZero: true,
                            },
                            grid: {
                                color: getColor("slate.200", 0.7),
                            },
                            border: {
                                display: false,
                            },
                            min: 0, // Force Y-axis to start at 0
                            max: roundedMax, // Dynamically calculated max value
                        },
                    },
                },
            });

            // Watch CSS variable color changes
            helper.watchCssVariables(
                "html",
                ["color-primary", "color-success"],
                (newValues) => {
                    reportBarChart6.data.datasets[0].borderColor = getColor(
                        "primary",
                        0.7
                    );
                    reportBarChart6.data.datasets[0].backgroundColor = getColor(
                        "primary",
                        0.35
                    );
                    reportBarChart6.data.datasets[1].borderColor = getColor(
                        "success",
                        0.7
                    );
                    reportBarChart6.data.datasets[1].backgroundColor = getColor(
                        "success",
                        0.35
                    );
                    reportBarChart6.update();
                }
            );
        });
    }
})();
