
<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title></title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css">
        <link href="dist/css/tabulator.min.css" rel="stylesheet">
        <script type="text/javascript" src="dist/js/tabulator.min.js"></script>
        <script type="text/javascript" src="https://oss.sheetjs.com/sheetjs/xlsx.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.5/jspdf.plugin.autotable.js"></script>

        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
      <?php echo $this->load->view('share/mobilemenu', '', TRUE);?>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
      <?php echo $this->load->view('share/profile', '', TRUE);?>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <?php echo $this->load->view('share/dekstopmenu', '', TRUE);?>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            Pencarian Buku Tanah
                        </h2>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <!-- BEGIN: Simple Editor -->
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <form action="<?php echo base_url(); ?>caribukutanah1" method="GET" enctype="multipart/form-data">
                                  <div id="inline-form" class="p-5">
                                      <div class="preview">
                                          <div class="grid grid-cols-12 gap-3">
                                              <select class="form-select form-control col-span-5" aria-label=".form-select-lg example" id="provinsi" name="idProv">

                                               <?php
                                                 foreach($dataProvinsi as $dataProvinsi){
                                               ?>
                                                 <option value="<?php echo $dataProvinsi->idProv; ?>"><?php echo $dataProvinsi->namaProv; ?></option>
                                               <?php } ?>
                                              </select>
                                              <select class="form-select form-control col-span-5 getKota" aria-label=".form-select-lg example" id="kota" name="idKota">
                                                <?php
                                                  foreach($dataKota as $dataKota){
                                                ?>
                                                  <option value="<?php echo $dataKota->idKota; ?>"><?php echo $dataKota->namaKota; ?></option>
                                                <?php } ?>
                                              </select>
                                              <select class="form-select form-control col-span-5 getKec" aria-label=".form-select-lg example" id="kec" name="idKec">
                                               <option value="">Kecamatan</option>
                                               <?php
                                                 foreach($dataKecamatan as $dataKecamatan){
                                               ?>
                                                 <option value="<?php echo $dataKecamatan->idKec; ?>"><?php echo $dataKecamatan->namaKec; ?></option>
                                               <?php } ?>
                                              </select>
                                              <select class="form-select form-control col-span-3 getDesa" aria-label=".form-select-lg example" name="idDesa">
                                               <option value="">Desa</option>

                                              </select>
                                              <select class="form-select form-control col-span-5" aria-label=".form-select-lg example" name="idJenisHak">
                                                <option value="">Jenis Hak</option>
                                                <?php
                                                  foreach($dataJenisHak as $dataJenisHak){
                                                ?>
                                                  <option value="<?php echo $dataJenisHak->idJenisHak; ?>"><?php echo $dataJenisHak->namaJenisHak; ?></option>
                                                <?php } ?>
                                              </select>
                                              <input type="text" class="form-control col-span-3" placeholder="No Hak" aria-label="default input inline 1" name="noHak">
                                              <button align="right" class=" form-control col-span-5 btn btn-primary">Cari</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                            </div>
                        </div>
                        <!-- END: Simple Editor -->
                    </div>

                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <!-- BEGIN: Simple Editor -->
                        <div class="col-span-12 lg:col-span-12">
                            <div class="box">
                                <form action="<?php echo base_url(); ?>caribukutanah1" method="GET" enctype="multipart/form-data" >
                                  <div id="inline-form" class="p-5">
                                      <div class="preview">
                                          <div class="grid grid-cols-12 gap-3">
                                              <input type="text" class="form-control col-span-6" placeholder="No Hak Pada Barcode" aria-label="default input inline 1" name="id" autofocus=”autofocus”>
                                              <button align="right" class=" form-control col-span-5 btn btn-primary">Cari</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                            </div>
                        </div>
                        <!-- END: Simple Editor -->
                    </div>

                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <!-- BEGIN: Simple Editor -->

                        <div class="col-span-12 lg:col-span-12">

                            <div class="intro-y box">
                              <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                    <h2 class="font-medium text-base mr-auto">
                                        Data Buku Tanah
                                    </h2>
                                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                      <button id="download-csv" class="btn btn-primary w-24 mr-2 mb-2">CSV</button>
                                      <button id="download-json" class="btn btn-primary w-24 mr-1 mb-2">JSON</button>
                                      <button id="download-xlsx" class="btn btn-primary w-24 mr-1 mb-2">XLSX</button>
                                      <button id="download-pdf" class="btn btn-primary w-24 mr-1 mb-2">PDF</button>
                                      <button id="download-html" class="btn btn-primary w-24 mr-1 mb-2">HTML</button>
                                    </div>
                                </div>

                              <div id="players"></div>
                            <script type="text/javascript">
                                var tabledata = [{
                                        playerid: 1,
                                        playername: "Virat Kohli",
                                        price: "17",
                                        team: "RCB",
                                        joiningdate: '<a href="#"><button align="right" class=" form-control col-span-5 btn btn-primary">Cari</button></a>'
                                    }, {
                                        playerid: 2,
                                        playername: "Rohit Sharma",
                                        price: "15",
                                        team: "MI",
                                        joiningdate: "02/01/2020"
                                    }, {
                                        playerid: 3,
                                        playername: "MS Dhoni",
                                        price: "15",
                                        team: "CSK",
                                        joiningdate: "03/01/2020"
                                    }, {
                                        playerid: 4,
                                        playername: "Shreyas Iyer",
                                        price: "7",
                                        team: "RCB",
                                        joiningdate: "04/01/2020"
                                    }, {
                                        playerid: 5,
                                        playername: "KL Rahul",
                                        price: "11",
                                        team: "KXIP",
                                        joiningdate: "05/01/2020"
                                    }, {
                                        playerid: 6,
                                        playername: "Dinesh Karthik",
                                        price: "7",
                                        team: "KKR",
                                        joiningdate: "06/01/2020"
                                    }, {
                                        playerid: 7,
                                        playername: "Steve Smith",
                                        price: "12",
                                        team: "RR",
                                        joiningdate: "07/01/2020"
                                    }, {
                                        playerid: 8,
                                        playername: "David Warner",
                                        price: "12",
                                        team: "SRH",
                                        joiningdate: "08/01/2020"
                                    }, {
                                        playerid: 9,
                                        playername: "Kane Williamson",
                                        price: "3",
                                        team: "SRH",
                                        joiningdate: "09/01/2020"
                                    }, {
                                        playerid: 10,
                                        playername: "Jofra Archer",
                                        price: "7",
                                        team: "RR",
                                        joiningdate: "10/01/2020"
                                    }, {
                                        playerid: 11,
                                        playername: "Andre Russell",
                                        price: "9",
                                        team: "KKR",
                                        joiningdate: "11/01/2020"
                                    }, {
                                        playerid: 12,
                                        playername: "Chris Gayle",
                                        price: "2",
                                        team: "KXIP",
                                        joiningdate: "12/01/2020"
                                    },

                                ];

                                var table = new Tabulator("#players", {
                                    height: 580,
                                    data: tabledata,
                                    layout: "fitColumns",
                                    pagination: "local",
                                    paginationSize: 10,
                                    tooltips: true,
                                    columns: [{
                                            title: "Player Name",
                                            field: "playername",
                                            sorter: "string",
                                            width: 150,
                                            headerFilter: "input"
                                        }, {
                                            title: "Player Price",
                                            field: "price",
                                            sorter: "number",
                                            hozAlign: "left",
                                            formatter: "progress",
                                        },

                                        {
                                            title: "Team",
                                            field: "team",
                                            sorter: "string",
                                            hozAlign: "center",
                                            editor: "select",
                                            headerFilter: true,
                                            headerFilterParams: {
                                                "RCB": "RCB",
                                                "MI": "MI",
                                                "KKR": "KKR",
                                            }
                                        }, {
                                            title: "Joining Date",
                                            field: "joiningdate",
                                            formatter:"html",
                                            hozAlign: "center"
                                        },
                                    ],

                                });


                                        //trigger download of data.csv file
                                        document.getElementById("download-csv").addEventListener("click", function(){
                                            table.download("csv", "data.csv");
                                        });

                                        //trigger download of data.json file
                                        document.getElementById("download-json").addEventListener("click", function(){
                                            table.download("json", "data.json");
                                        });

                                        //trigger download of data.xlsx file
                                        document.getElementById("download-xlsx").addEventListener("click", function(){
                                            table.download("xlsx", "data.xlsx", {sheetName:"My Data"});
                                        });

                                        //trigger download of data.pdf file
                                        document.getElementById("download-pdf").addEventListener("click", function(){
                                            table.download("pdf", "data.pdf", {
                                                orientation:"portrait", //set page orientation to portrait
                                                title:"Example Report", //add title to report
                                            });
                                        });

                                        //trigger download of data.html file
                                        document.getElementById("download-html").addEventListener("click", function(){
                                            table.download("html", "data.html", {style:true});
                                        });
                            </script>
                            </div>
                        </div>
                        <!-- END: Simple Editor -->
                    </div>

                </div>
                <!-- END: Content -->
            </div>
        </div>

        <!-- BEGIN: JS Assets-->
        <script src="dist/js/markerclusterer.js"></script>
        <script src="dist/js/js.js"></script>
        <script src="dist/js/app.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/jquery-3.3.1.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#provinsi').change(function(){
              var id=$(this).val();
              $.ajax({
                url : "<?php echo base_url();?>Provinsi/getKota",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                  var html = '';
                  var i;
                  html += '<option value="">Pilih Kota</option>';
                  for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].idKota+'">'+data[i].namaKota+'</option>';
                  }
                  $('.getKota').html(html);

                }
              });
            });
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#kota').change(function(){
              var id=$(this).val();
              $.ajax({
                url : "<?php echo base_url();?>Provinsi/getKec",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                  var html = '';
                  var i;
                  html += '<option value="">Pilih Kecamatan</option>';
                  for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].idKec+'">'+data[i].namaKec+'</option>';
                  }
                  $('.getKec').html(html);

                }
              });
            });
          });
        </script>
        <script type="text/javascript">
          $(document).ready(function(){
            $('#kec').change(function(){
              var id=$(this).val();
              $.ajax({
                url : "<?php echo base_url();?>Provinsi/getDesa",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                  var html = '';
                  var i;
                  html += '<option value="">Pilih Desa</option>';
                  for(i=0; i<data.length; i++){
                    html += '<option value="'+data[i].idDesa+'">'+data[i].namaDesa+'</option>';
                  }
                  $('.getDesa').html(html);

                }
              });
            });
          });
        </script>


        <!-- END: JS Assets-->
    </body>
</html>
