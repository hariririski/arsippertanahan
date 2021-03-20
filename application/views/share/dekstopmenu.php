<nav class="side-nav">
    <ul>
        <li>

            <a href="<?php echo base_url(); ?>home" class="side-menu <?php echo $this->uri->segment('1')=='home'?'side-menu--active':''; ?> ">
                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                <div class="side-menu__title">
                    Beranda
                    <div class="side-menu__sub-icon"> </div>
                </div>
            </a>

        </li>

        <li>
            <a href="side-menu-light-inbox.html" class="side-menu <?php echo base_url(); ?>home" class="side-menu <?php echo $this->uri->segment('1')=='home'?'side-menu--active':''; ?> ">
                <div class="side-menu__icon"> <i data-feather="book"></i> </div>
                <div class="side-menu__title"> Buku Tanah </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-file-manager.html" class="side-menu <?php echo base_url(); ?>home" class="side-menu <?php echo $this->uri->segment('1')=='home'?'side-menu--active':''; ?> ">
                <div class="side-menu__icon"> <i data-feather="book"></i> </div>
                <div class="side-menu__title"> Surat Ukur </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-point-of-sale.html" class="side-menu <?php echo base_url(); ?>home" class="side-menu <?php echo $this->uri->segment('1')=='home'?'side-menu--active':''; ?> ">
                <div class="side-menu__icon"> <i data-feather="book"></i> </div>
                <div class="side-menu__title"> Warkah </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-chat.html" class="side-menu <?php echo base_url(); ?>home" class="side-menu <?php echo $this->uri->segment('1')=='home'?'side-menu--active':''; ?> ">
                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                <div class="side-menu__title"> Peminjaman </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-post.html" class="side-menu <?php echo base_url(); ?>home" class="side-menu <?php echo $this->uri->segment('1')=='home'?'side-menu--active':''; ?> ">
                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                <div class="side-menu__title"> Laporan </div>
            </a>
        </li>
        <li>
            <a href="#" class="side-menu  ">
                <div class="side-menu__icon"> <i data-feather="settings"></i> </div>
                <div class="side-menu__title">
                    Setting
                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="<?php echo ($this->uri->segment('1')=='datakondisi'
                                    || $this->uri->segment('1')=='datajenishak'
                                    || $this->uri->segment('1')=='dataprovinsi'
                                    || $this->uri->segment('1')=='datakota'
                                    || $this->uri->segment('1')=='datakecamatan'
                                    || $this->uri->segment('1')=='datadesa'
                                    || $this->uri->segment('1')=='datalemari'
                                    || $this->uri->segment('1')=='databaris'
                                    || $this->uri->segment('1')=='databundel'
                                    || $this->uri->segment('1')=='dataadmin'
                                    || $this->uri->segment('1')=='datapegawai'
                                    || $this->uri->segment('1')=='datawaktupelayanan'
                                    )?'side-menu__sub-open':''; ?> ">
                <li>
                    <a href="<?php echo base_url(); ?>datakondisi" class="side-menu <?php echo $this->uri->segment('1')=='datakondisi'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Data Kondisi </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>datajenishak" class="side-menu <?php echo $this->uri->segment('1')=='datajenishak'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Data Jenis Hak </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>dataprovinsi" class="side-menu <?php echo $this->uri->segment('1')=='dataprovinsi'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Data Provinsi </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>datakota" class="side-menu <?php echo $this->uri->segment('1')=='datakota'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Data Kota</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>datakecamatan" class="side-menu <?php echo $this->uri->segment('1')=='datakecamatan'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Data Kecamatan</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>datadesa" class="side-menu <?php echo $this->uri->segment('1')=='datadesa'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Data Desa </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>datalemari" class="side-menu <?php echo $this->uri->segment('1')=='datalemari'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Data Lemari </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>databaris" class="side-menu <?php echo $this->uri->segment('1')=='databaris'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Data Baris </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>databundel" class="side-menu <?php echo $this->uri->segment('1')=='databundel'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Data Bundel </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>datawaktupelayanan" class="side-menu <?php echo $this->uri->segment('1')=='datawaktupelayanan'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Waktu Pelayanan </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>dataadmin" class="side-menu <?php echo $this->uri->segment('1')=='datadamin'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Admin </div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>datapegawai" class="side-menu <?php echo $this->uri->segment('1')=='datapegawai'?'side-menu--active':''; ?> ">
                        <div class="side-menu__icon"> <i data-feather="hash"></i> </div>
                        <div class="side-menu__title"> Pegawai </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
