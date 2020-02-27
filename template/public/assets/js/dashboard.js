(function($) {
    "use strict";
    $(function() {
        var lineChartStyleOption_1 = {
            scales: {
                yAxes: [
                    {
                        display: false
                    }
                ],
                xAxes: [
                    {
                        display: false
                    }
                ]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 1
                },
                line: {
                    tension: 0
                }
            },
            stepsize: 100
        };
        if ($("#revenue-chart").length) {
            $("#revenue-chart").sparkline("html", {
                enableTagOptions: true,
                width: "100%",
                height: "70",
                fillColor: "false",
                barWidth: 2,
                barSpacing: 10,
                chartRangeMin: 0
            });
        }
        if ($("#dashboard-area-chart").length) {
            var lineChartCanvas = $("#dashboard-area-chart")
                .get(0)
                .getContext("2d");
            var data = {
                labels: ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
                datasets: [
                    {
                        label: "Product",
                        data: [3, 3, 8, 5, 7, 4, 6, 4, 6, 3],
                        backgroundColor: "#2196f3",
                        borderColor: "#0c83e2",
                        borderWidth: 1,
                        fill: true
                    },
                    {
                        label: "Product",
                        data: [7, 5, 14, 7, 12, 6, 10, 6, 11, 5],
                        backgroundColor: "#19d895",
                        borderColor: "#15b67d",
                        borderWidth: 1,
                        fill: true
                    }
                ]
            };
            var options = {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                    yAxes: [
                        {
                            gridLines: {
                                color: "#F2F6F9"
                            },
                            ticks: {
                                beginAtZero: true,
                                min: 0,
                                max: 20,
                                stepSize: 10
                            }
                        }
                    ],
                    xAxes: [
                        {
                            gridLines: {
                                color: "#F2F6F9"
                            },
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    ]
                },
                legend: {
                    display: false
                },
                elements: {
                    point: {
                        radius: 2
                    }
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                },
                stepsize: 1
            };
            var lineChart = new Chart(lineChartCanvas, {
                type: "line",
                data: data,
                options: options
            });
        }
        if ($("#trafficDoughnutChart").length) {
            var doughnutChartCanvas = $("#trafficDoughnutChart")
                .get(0)
                .getContext("2d");
            var doughnutPieData = {
                datasets: [
                    {
                        data: [70, 20],
                        backgroundColor: [primaryColor, successColor],
                        borderColor: [primaryColor, successColor]
                    }
                ],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: ["Chrome", "Firefox", "Safari", "Opera", "IE"]
            };
            var doughnutPieOptions = {
                cutoutPercentage: 70,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                showScale: true,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            };
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: "doughnut",
                data: doughnutPieData,
                options: doughnutPieOptions
            });
        }
        if ($("#sourceLineChart").length) {
            var sourceLineChartCanvas = $("#sourceLineChart")
                .get(0)
                .getContext("2d");
            var sourceLineChart = new Chart(sourceLineChartCanvas, {
                type: "line",
                data: {
                    labels: [
                        "2011",
                        "2012",
                        "2013",
                        "2014",
                        "2015",
                        "2016",
                        "2017",
                        "2018"
                    ],
                    datasets: [
                        {
                            label: "Desktop",
                            data: [0, 16, 3, 5, 2, 12, 9, 3],
                            borderColor: successColor,
                            backgroundColor: successColor,
                            borderWidth: 2,
                            fill: false
                        },
                        {
                            label: "Mobile",
                            data: [0, 23, 7, 12, 40, 17, 26, 13],
                            borderColor: primaryColor,
                            backgroundColor: primaryColor,
                            borderWidth: 2,
                            fill: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    elements: {
                        point: {
                            radius: 2
                        }
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },
                    legend: false,
                    stepsize: 20,
                    scales: {
                        xAxes: [
                            {
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                    display: true
                                }
                            }
                        ],
                        yAxes: [
                            {
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0.05)",
                                    display: true
                                }
                            }
                        ]
                    }
                }
            });
        }
        if ($("#statistics-chart").length) {
            var barChartCanvas = $("#statistics-chart")
                .get(0)
                .getContext("2d");
            var barChart = new Chart(barChartCanvas, {
                type: "bar",
                data: {
                    labels: [
                        "Day 1",
                        "Day 2",
                        "Day 3",
                        "Day 4",
                        "Day 5",
                        "Day 6",
                        "Day 7",
                        "Day 8",
                        "Day 9",
                        "Day 10"
                    ],
                    datasets: [
                        {
                            label: "Revenue",
                            data: [39, 19, 25, 16, 31, 39, 23, 20, 23, 18],
                            backgroundColor: successColor
                        },
                        {
                            label: "Sales",
                            data: [27, 12, 26, 15, 21, 27, 13, 19, 32, 22],
                            backgroundColor: primaryColor
                        }
                    ]
                },
                options: {
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },

                    scales: {
                        responsive: true,
                        maintainAspectRatio: true,
                        yAxes: [
                            {
                                stacked: true,
                                display: false,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0.03)"
                                }
                            }
                        ],
                        xAxes: [
                            {
                                stacked: true,
                                display: false,
                                barPercentage: 0.3,
                                gridLines: {
                                    display: false
                                }
                            }
                        ]
                    },
                    legend: {
                        display: false
                    }
                }
            });
        }
        if ($("#review-rating-1").length) {
            $("#review-rating-1").barrating({
                theme: "css-stars",
                showSelectedRating: false,
                initialRating: 4
            });
        }
        if ($("#review-rating-2").length) {
            $("#review-rating-2").barrating({
                theme: "css-stars",
                showSelectedRating: false,
                initialRating: 5
            });
        }
        if ($("#review-rating-3").length) {
            $("#review-rating-3").barrating({
                theme: "css-stars",
                showSelectedRating: false,
                initialRating: 3
            });
        }
        if ($("#review-rating-4").length) {
            $("#review-rating-4").barrating({
                theme: "css-stars",
                showSelectedRating: false,
                initialRating: 4
            });
        }
        if ($("#review-rating-5").length) {
            $("#review-rating-5").barrating({
                theme: "css-stars",
                showSelectedRating: false,
                initialRating: 2
            });
        }
        if ($("#trafficSourceDoughnutChart").length) {
            var doughnutChartCanvas = $("#trafficSourceDoughnutChart")
                .get(0)
                .getContext("2d");
            var doughnutPieData = {
                datasets: [
                    {
                        data: [185, 85, 15],
                        backgroundColor: [
                            "rgba(38,52,73,0.5)",
                            successColor,
                            dangerColor
                        ],
                        borderColor: [
                            "rgba(38,52,73,0.1)",
                            successColor,
                            dangerColor
                        ]
                    }
                ],

                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: ["Human Resources", "Manger", "Other"]
            };
            var doughnutPieOptions = {
                cutoutPercentage: 75,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                showScale: true,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            };
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: "doughnut",
                data: doughnutPieData,
                options: doughnutPieOptions
            });
        }
        if ($("#source-graph-1").length) {
            var lineChartCanvas = $("#source-graph-1")
                .get(0)
                .getContext("2d");
            var data = {
                labels: [
                    "Day 1",
                    "Day 2",
                    "Day 3",
                    "Day 4",
                    "Day 5",
                    "Day 6",
                    "Day 7"
                ],
                datasets: [
                    {
                        label: "Profit",
                        data: [1, 3, 7, 4, 1, 9, 6],
                        borderColor: [warningColor],
                        borderWidth: 2,
                        fill: false
                    }
                ]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: "line",
                data: data,
                options: lineChartStyleOption_1
            });
        }
        if ($("#source-graph-2").length) {
            var lineChartCanvas = $("#source-graph-2")
                .get(0)
                .getContext("2d");
            var data = {
                labels: [
                    "Day 1",
                    "Day 2",
                    "Day 3",
                    "Day 4",
                    "Day 5",
                    "Day 6",
                    "Day 7"
                ],
                datasets: [
                    {
                        label: "Profit",
                        data: [1, 4, 8, 3, 4, 6, 1],
                        borderColor: [successColor],
                        borderWidth: 2,
                        fill: false
                    }
                ]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: "line",
                data: data,
                options: lineChartStyleOption_1
            });
        }
        if ($("#UsersDoughnutChart").length) {
            var doughnutChartCanvas = $("#UsersDoughnutChart")
                .get(0)
                .getContext("2d");
            var doughnutPieData = {
                datasets: [
                    {
                        data: [80, 34, 100],
                        backgroundColor: [
                            successColor,
                            primaryColor,
                            secondaryColor
                        ],
                        borderColor: [
                            successColor,
                            primaryColor,
                            secondaryColor
                        ]
                    }
                ],
                labels: ["Request", "Email"]
            };
            var doughnutPieOptions = {
                cutoutPercentage: 70,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                showScale: true,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            };
            var doughnutChart = new Chart(doughnutChartCanvas, {
                type: "doughnut",
                data: doughnutPieData,
                options: doughnutPieOptions
            });
        }
        if ($("#conversionBarChart").length) {
            var barChartCanvas = $("#conversionBarChart")
                .get(0)
                .getContext("2d");
            var barChart = new Chart(barChartCanvas, {
                type: "bar",
                data: {
                    labels: [
                        "Day 1",
                        "Day 2",
                        "Day 3",
                        "Day 4",
                        "Day 5",
                        "Day 6",
                        "Day 7",
                        "Day 8",
                        "Day 9",
                        "Day 10"
                    ],
                    datasets: [
                        {
                            label: "Amount Due",
                            data: [39, 19, 25, 16, 31, 39, 12, 18, 33, 24],
                            backgroundColor: primaryColor,
                            borderColor: primaryColor,
                            borderWidth: 0
                        }
                    ]
                },
                options: {
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    },

                    scales: {
                        responsive: true,
                        maintainAspectRatio: true,
                        yAxes: [
                            {
                                display: false,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0.03)"
                                }
                            }
                        ],
                        xAxes: [
                            {
                                display: false,
                                barPercentage: 0.4,
                                gridLines: {
                                    display: false
                                }
                            }
                        ]
                    },
                    legend: {
                        display: false
                    }
                }
            });
        }
        if ($("#source-graph-3").length) {
            var lineChartCanvas = $("#source-graph-3")
                .get(0)
                .getContext("2d");
            var data = {
                labels: [
                    "Day 1",
                    "Day 2",
                    "Day 3",
                    "Day 4",
                    "Day 5",
                    "Day 6",
                    "Day 7"
                ],
                datasets: [
                    {
                        label: "Profit",
                        data: [8, 12, 5, 4, 1, 12, 4],
                        borderColor: [dangerColor],
                        borderWidth: 2,
                        fill: false
                    }
                ]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: "line",
                data: data,
                options: lineChartStyleOption_1
            });
        }
        if ($("#source-graph-4").length) {
            var lineChartCanvas = $("#source-graph-4")
                .get(0)
                .getContext("2d");
            var data = {
                labels: [
                    "Day 1",
                    "Day 2",
                    "Day 3",
                    "Day 4",
                    "Day 5",
                    "Day 6",
                    "Day 7"
                ],
                datasets: [
                    {
                        label: "Profit",
                        data: [6, 9, 3, 4, 2, 5, 6],
                        borderColor: [warningColor],
                        borderWidth: 2,
                        fill: false
                    }
                ]
            };

            var lineChart = new Chart(lineChartCanvas, {
                type: "line",
                data: data,
                options: lineChartStyleOption_1
            });
        }
        if ($("#product-area-chart").length) {
            var lineChartCanvas = $("#product-area-chart")
                .get(0)
                .getContext("2d");
            var data = {
                labels: [
                    "2013",
                    "2014",
                    "2014",
                    "2015",
                    "2016",
                    "2017",
                    "2018"
                ],
                datasets: [
                    {
                        label: "Support",
                        data: [150, 200, 150, 220, 350, 275, 365],
                        backgroundColor: "rgba(52,110,240,0.7)",
                        borderColor: "rgba(52,110,240,0.8)",
                        borderWidth: 2,
                        fill: true
                    },
                    {
                        label: "Product",
                        data: [300, 400, 300, 440, 700, 550, 730],
                        backgroundColor: "rgba(0,187,248,0.7)",
                        borderColor: "rgba(0,187,248,0.8)",
                        borderWidth: 2,
                        fill: true
                    }
                ]
            };
            var options = {
                scales: {
                    yAxes: [
                        {
                            display: false
                        }
                    ],
                    xAxes: [
                        {
                            display: false
                        }
                    ]
                },
                legend: {
                    display: false
                },
                elements: {
                    point: {
                        radius: 3
                    },
                    line: {
                        tension: 0
                    }
                },
                stepsize: 1
            };
            var lineChart = new Chart(lineChartCanvas, {
                type: "line",
                data: data,
                options: options
            });
        }
    });
})(jQuery);
