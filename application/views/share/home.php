<script type="text/javascript">
$(function() {
    "use strict";
    // New chart
        new Chart(document.getElementById("chart3"), {
            type: 'pie',
            data: {
                labels: ["Africa", "Asia", "Europe", "Latin America"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#36a2eb", "#ff6384", "#4bc0c0", "#ffcd56", "#07b107"],
                    data: [2478, 5267, 3734, 2784]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Predicted world population (millions) in 2050'
                }
            }
        });

        new Chart(document.getElementById("chart4"), {
        type: 'horizontalBar',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#03a9f4", "#e861ff", "#08ccce", "#e2b35b", "#e40503"],
                data: [8478, 6267, 5534, 4784, 3433]
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

    new Chart(document.getElementById("chart1"), {
        type: 'line',
        data: {
            labels: [4500, 3500, 3200, 3050, 2700, 2450, 2200, 1750, 1499, 2050],
            datasets: [{
                data: [86, 114, 106, 106, 107, 111, 133, 221, 783, 2478],
                label: "Buku Tanah",
                borderColor: "#3e95cd",
                fill: false
            }, {
                data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
                label: "Surat ukur",
                borderColor: "#36a2eb",
                fill: false
            }, {
                data: [168, 170, 178, 190, 203, 276, 408, 547, 675, 734],
                label: "Warkah",
                borderColor: "#07b107",
                fill: false
            }]
        },
        options: {
            title: {
                display: true,
                text: 'World population per region (in millions)'
            }
        }
    });

    var chart = c3.generate({
        bindto: '#sales',
        data: {
            columns: [
                ['Sales', 5, 6, 3, 7, 9, 10, 14, 12, 11, 9, 8, 7, 10, 6, 12, 10, 8]
            ],
            type: 'area-spline'
        },
        axis: {
            y: {
                show: false,
                tick: {
                    count: 0,
                    outer: false
                }
            },
            x: {
                show: false,
            }
        },
        padding: {
            top: 0,
            right: -8,
            bottom: -28,
            left: -8,
        },
        point: {
            r: 0,
        },
        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#fff']
        }
    });

    // ==============================================================
    // Revanue topbox
    // ==============================================================
    var chart = c3.generate({
        bindto: '#revenue',
        data: {
            columns: [
                ['Sales', 1, 6, 12, 7, 9, 5, 14, 12, 18, 9, 8, 7, 10, 6, 12, 10, 8]
            ],
            type: 'area-spline'
        },
        axis: {
            y: {
                show: false,
                tick: {
                    count: 0,
                    outer: false
                }
            },
            x: {
                show: false,
            }
        },
        padding: {
            top: 0,
            right: -8,
            bottom: -28,
            left: -8,
        },
        point: {
            r: 0,
        },
        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#fff']
        }
    });


    var chart = c3.generate({
        bindto: '#sales2',
        data: {
            columns: [
                ['2011', 45],
                ['2012', 15],
                ['2013', 27]
            ],

            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            width: 15,
        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#40c4ff', '#2961ff', '#ff821c']
        }
    });


    var barEl = $("#visits");
    var barValues = [40,32,65,53,62,55,24,67,45,70,45,56,34,67,76,32,65,53,62,55];
    var barValueCount = barValues.length;
    var visits = function(){
         barEl.sparkline(barValues, {
            type: 'bar',
            height: 78,
            barWidth: 3,
            barSpacing: 5,
            zeroAxis: false,
            tooltipSuffix: ' Visits',
            barColor: 'rgba(0,0,0,.25)'
        });
        $('#monthlysales').sparkline([4, 5, 0, 10, 9, 12, 4, 9, 4, 5, 3], {
            type: 'bar',
            width: '100%',
            height: '70',
            barWidth: '2',
            resize: true,
            barSpacing: '6',
            barColor: '#a880fa'
        });
    }



    $(window).on('resizeEnd', function(){
            visits();
    })

    visits();

});



</script>
