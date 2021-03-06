<div class="menu-size" style="height:440px;">
  <div class="d-flex mx-3 mt-3 py-1">
    <div class="align-self-center">
      <h1 class="mb-0">Data Pengembalian</h1>
    </div>
    <div class="align-self-center ms-auto">
      <a href="#" class= "ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas">
        <i class="bi bi-x color-red-dark font-26 line-height-xl"></i>
      </a>
    </div>
  </div>
  <div class="divider divider-margins mt-3"></div>
  <div class="content mt-0">
    <div class="collapse show" id="tab-4" data-bs-parent="#tab-group-2">
      <?php
        $i=0;
        foreach($data as $data2){
        $i++;
      ?>
      <a href="#" class="d-flex py-1" data-bs-toggle="offcanvas" data-bs-target="#menu-activity-1">
        <div class="align-self-center">
          <span class="icon gradient-red me-2 shadow-bg shadow-bg-s rounded-s">
            <img src="../assets_m/images/pictures/6s.jpg" width="45" class="rounded-s" alt="img">
          </span>
        </div>
        <div class="align-self-center ps-1">
          <h5 class="pt-1 mb-n1 font-13">
            <?php
             $barang="";
            if($data2->id_warkah!=null){
              $barang="W - ".$data2->w_nomor."/".$data2->w_tahun;
            }else if ($data2->bt_id_buku_tanah!=null) {
              $barang="BT - ".$data2->nama_jenis_hak." ".$data2->no_hak." - ".$data2->bt_desa;
            }else if ($data2->id_surat_ukur!=null) {
              $barang="SU - ".$data2->su_nomor."/".$data2->su_tahun." - ".$data2->su_desa;
            }
            ?>
              <?php echo $barang; ?>-<?php echo $data2->pelayanan; ?>
          </h5>
          <p class="mb-0 font-11 opacity-70"><?php echo $data2->nama_lengkap; ?>-<?php echo $data2->tgl_pinjam; ?> <span class="copyright-year"></span></p>
        </div>
        <div class="align-self-center ms-auto text-end">
          <span class="btn btn-xxs gradient-green shadow-bg shadow-bg-xs">Details</span>
        </div>
      </a>
      <div class="divider my-2 opacity-50"></div>
      <?php } ?>
    </div>
  </div>
  <a href="#" data-bs-dismiss="offcanvas" class="mx-3 mb-3 btn btn-full gradient-green shadow-bg shadow-bg-s">Lihat Semua</a>
  <br>
  <br>
  <br>
</div>
