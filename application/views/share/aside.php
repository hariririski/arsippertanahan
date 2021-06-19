<aside class="left-sidebar">
    <ul id="slide-out" class="sidenav">
        <li class="side-wrap">
            <ul class="collapsible">
                <li class="small-cap"><span class="hide-menu">PERSONAL</span></li>
                <li>
                    <a href="<?php echo base_url(); ?>home" class="collapsible-header"><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard</span></a>

                </li>
                <li>
                    <a href="<?php echo base_url(); ?>scan" class="collapsible-header"><i class="material-icons">dashboard</i><span class="hide-menu">Qr Code</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>scan2" class="collapsible-header"><i class="material-icons">dashboard</i><span class="hide-menu">Qr Code 2</span></a>
                </li>
                <?php
                  if($this->session->userdata("level")==1 or $this->session->userdata("level")==2){
                ?>
                <li>
                    <a href="javascript: void(0);" class="collapsible-header has-arrow two-column"><i class="material-icons">collections_bookmark</i><span class="hide-menu">Arsip</span></a>
                    <div class="collapsible-body">
                        <ul>
                          <li><a href="<?php echo base_url(); ?>databukutanah"><i class="material-icons">event_note</i><span class="hide-menu">Data Buku Tanah</span></a></li>
                          <li><a href="<?php echo base_url(); ?>kondisibukutanah"><i class="material-icons">event_note</i><span class="hide-menu">Kondisi Buku Tanah</span></a></li>
                          <li><a href="<?php echo base_url(); ?>datasuratukur"><i class="material-icons">event_note</i><span class="hide-menu">Data Surat Ukur</span></a></li>
                          <li><a href="<?php echo base_url(); ?>pinjam"><i class="material-icons">event_note</i><span class="hide-menu">Kondisi Surat Ukur</span></a></li>
                          <li><a href="<?php echo base_url(); ?>datawarkah"><i class="material-icons">event_note</i><span class="hide-menu">Data Warkah</span></a></li>
                          <li><a href="<?php echo base_url(); ?>pinjam"><i class="material-icons">event_note</i><span class="hide-menu">Kondisi Warkah</span></a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="javascript: void(0);" class="collapsible-header has-arrow two-column"><i class="material-icons">library_add</i><span class="hide-menu">Peminjaman</span></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>datapinjam"><i class="material-icons">library_add</i><span class="hide-menu">Data Peminjaman</span></a></li>
                            <li><a href="<?php echo base_url(); ?>kembali"><i class="material-icons">library_add</i><span class="hide-menu">Pengembalian</span></a></li>
                            <li><a href="<?php echo base_url(); ?>susun"><i class="material-icons">library_add</i><span class="hide-menu">Arsip Belum Susun</span></a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="javascript: void(0);" class="collapsible-header has-arrow two-column"><i class="material-icons">assignment</i><span class="hide-menu">Laporan</span></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="inbox-email.html"><i class="material-icons">email</i><span class="hide-menu">library_add</span></a></li>
                        </ul>
                    </div>
                </li>
              <?php }?>
                  <?php
                    switch ($this->session->userdata("level")){
                      case 1:
                    ?>
                <li>
                    <a href="javascript: void(0);" class="collapsible-header has-arrow two-column"><i class="material-icons">settings</i><span class="hide-menu">Setings</span></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>dataprovinsi"><i class="material-icons">add_circle</i><span class="hide-menu">Provinsi</span></a></li>
                            <li><a href="<?php echo base_url(); ?>datalemari"><i class="material-icons">add_circle</i><span class="hide-menu">Lemari</span></a></li>
                            <li><a href="<?php echo base_url(); ?>datajenishak"><i class="material-icons">add_circle</i><span class="hide-menu">Jenis Hak</span></a></li>
                            <li><a href="<?php echo base_url(); ?>datakondisi"><i class="material-icons">add_circle</i><span class="hide-menu">Kondisi</span></a></li>
                            <li><a href="<?php echo base_url(); ?>datawaktupelayanan"><i class="material-icons">add_circle</i><span class="hide-menu">Waktu Pelayanan</span></a></li>
                            <li><a href="<?php echo base_url(); ?>dataadmin"><i class="material-icons">add_circle</i><span class="hide-menu">Admin</span></a></li>
                            <li><a href="<?php echo base_url(); ?>datapegawai"><i class="material-icons">add_circle</i><span class="hide-menu">Pegawai</span></a></li>
                            <li><a href="<?php echo base_url(); ?>uploadcsv"><i class="material-icons">add_circle</i><span class="hide-menu">Upload CSV</span></a></li>
                        </ul>
                    </div>
                </li>
                    <?php
                      break;
                    }
                    ?>

            </ul>
        </li>
    </ul>
</aside>
