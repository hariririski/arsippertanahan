<?php
$label_kondisi;
$jumlah_kondisi;
$i=0;
foreach($data_kondisi as $kondisi){
  $label_kondisi[$i]=$kondisi->nama_kondisi;
  $id_kondisi[$i]=$kondisi->id_kondisi;
  $jumlah_kondisi[$i]=0;
  $i++;
}
$i=0;
foreach($g1_buku_tanah as $bt){
  foreach($data_kondisi as $kondisi){
    if($kondisi->id_kondisi==$bt->id_kondisi){
      $jumlah_kondisi[$i]+=$bt->jumlah;
    }
  }
  $i++;
}
$i=0;
foreach($g1_surat_ukur as $su){
  foreach($data_kondisi as $kondisi){
    if($kondisi->id_kondisi==$su->id_kondisi){
      $jumlah_kondisi[$i]+=$su->jumlah;
    }
  }
  $i++;
}
$i=0;
foreach($g1_warkah as $warkah){
  foreach($data_kondisi as $kondisi){
    if($kondisi->id_kondisi==$warkah->id_kondisi){
      $jumlah_kondisi[$i]+=$warkah->jumlah;
    }
  }
  $i++;
}

?>
<script type="text/javascript">
$(function() {
    "use strict";
    // New chart
        new Chart(document.getElementById("chart3"), {
            type: 'pie',
            data: {
                labels: [
                  <?php foreach ($label_kondisi as $kondisi) {
                    echo '"'."$kondisi".'",';
                  }?>
                ],
                datasets: [{
                    label: "Arsip Pertanahan",
                    backgroundColor: ["#f44336", "#e91e63", "#9c27b0", "#673ab7", "#2196f3","#009688","#8bc34a","#ffeb3b","#ff9800","#ff5722","#9e9e9e","#795548"],
                    data: [
                      <?php foreach ($jumlah_kondisi as $jumlah) {
                        echo '"'."$jumlah".'",';
                      }?>
                    ]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Kondisi Arsip Pertanahan'
                }
            }
        });

        new Chart(document.getElementById("chart4"), {
        type: 'horizontalBar',
        data: {
            labels: [
              <?php
              foreach($g2_jenis_hak as $jenis_hak){
                echo '"'.$jenis_hak->nama_jenis_hak.'",';
              }
              ?>
            ],
            datasets: [{
                label: "Sertipikat/Buku Tanah",
                backgroundColor: ["#f44336", "#e91e63", "#9c27b0", "#673ab7", "#2196f3","#009688","#8bc34a","#ffeb3b","#ff9800","#ff5722","#9e9e9e","#795548"],
                data: [
                  <?php
                  foreach($g2_jenis_hak as $jenis_hak){
                    echo '"'.$jenis_hak->jumlah.'",';
                  }
                  ?>
                ]
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Arsip Pertanahan Berdasarkan Jenis Hak'
            }
        }
    });

    new Chart(document.getElementById("chart1"), {
        type: 'line',
        data: {
            labels: [<?php foreach ($tgl_pinjam as $data) {echo'"'.$data->tgl_pinjam.'"'.",";}?>],
            datasets: [{
                data: [<?php foreach ($pinjam_buku_tanah as $data) {echo $data->jumlah.",";}?>],
                label: "Buku Tanah",
                borderColor: "#ffeb3b",
                fill: false
            }, {
                data: [<?php foreach ($pinjam_surat_ukur as $data) {echo $data->jumlah.",";}?>],
                label: "Surat ukur",
                borderColor: "#ff0000",
                fill: false
            }, {
                data: [<?php foreach ($pinjam_warkah as $data) {echo $data->jumlah.",";}?>],
                label: "Warkah",
                borderColor: "#1bff08",
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
