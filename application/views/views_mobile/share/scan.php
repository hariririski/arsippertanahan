<div id="scan" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m" data-bs-backdrop="false" >
  <div class="menu-size" style="height:550px;">
    <div class="d-flex mx-3 mt-3 py-1">
      <div class="align-self-center">
        <h1 class="mb-0">Scan QRcode</h1>
      </div>
      <div class="align-self-center ms-auto">
        <a href="#" class="ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas" id="close">
          <i class="bi bi-x color-red-dark font-26 line-height-xl"></i>
        </a>
      </div>
    </div>
    <div class="divider divider-margins mt-1">
                  <div id="qr-reader" style="width:100%"></div>
                  <div id="qr-reader-results"></div>
    </div>

  </div>
</div>

<script type="text/javascript">

    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete"
            || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function () {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
          var audio = new Audio('../dist/qr.mp3');
          audio.play();
          lastResult=1;
          cari_barcode(decodedText);
          setTimeout(function(){console.log(`Scan result ${decodedText}`, decodedResult);}, 3000);

        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 2, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    });
</script>
<script type="text/javascript">
  function permisi(){
      $(function(){
          $('.permisi').trigger('click');
          $('#camera').trigger('click');
      });
    }

  function camera(){
    $(function(){
      $('#camera').trigger('click');
    });
  }
  $(document).ready(function(){
    $('#close').click(function(){
      $('#stop').trigger('click');
    });
  });
</script>
<script type="text/javascript">
function cari_barcode(barcode){
    $.ajax({
    type : "POST",
    url  : "<?php echo base_url()?>mobile/cari/"+barcode,
    dataType : "JSON",
            success: function(notif){
              if (notif==0) {
                  document.getElementById('close').click();
                  $('#gagal1').trigger('click');
              }else if(notif==1){
                  document.getElementById('close').click();
                  setTimeout("location.href = '<?php echo base_url()?>mobile/detail_bt';",1500);
              }

            }
        });

}
</script>
<button type="submit" hidden id="berhasil" class="list-group-item" data-bs-toggle="offcanvas" data-bs-target="#ok"></button>
<button type="submit" hidden id="gagal1" class="list-group-item" data-bs-toggle="offcanvas" data-bs-target="#gagal"></button>
<button type="submit" hidden id="berhasil" class="list-group-item" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer-ok"></button>
<div id="ok" style="width:320px" class="offcanvas offcanvas-modal offcanvas-detached rounded-m">
  <div class="content text-center">
    <i style="font-size:65px;" class="scale-box bi bi-check-circle-fill color-green-dark shadow-s rounded-circle p-0 mt-3 mb-3 d-inline-block"></i>
    <h1 class="pt-3 font-28">Transfer Successful</h1>
    <p class="font-14">
      Your transfer was successfully processed.
    </p>
    <a href="#" data-bs-toggle="offcanvas" class="btn btn-full gradient-green shadow-bg shadow-bg-xs">Okay</a>
  </div>
</div>

<div id="menu-transfer-pending" style="width:320px" class="offcanvas offcanvas-modal offcanvas-detached rounded-m">
  <div class="content text-center">
    <i style="font-size:65px;" class="scale-box bi bi-question-circle-fill color-blue-dark shadow-s rounded-circle p-0 mt-3 mb-3 d-inline-block"></i>
    <h1 class="pt-3 font-28">Transfer Pending</h1>
    <p class="font-14">
      Transfer process has started. Awaiting approval from bank before processing.
    </p>
    <a href="#" data-bs-toggle="offcanvas" class="btn btn-full gradient-blue shadow-bg shadow-bg-xs">Okay</a>
  </div>
</div>

<div id="gagal" style="width:320px" class="offcanvas offcanvas-modal offcanvas-detached rounded-m">
  <div class="content text-center">
    <i style="font-size:65px;" class="scale-box bi bi-x-circle-fill color-red-dark shadow-s rounded-circle p-0 mt-3 mb-3 d-inline-block"></i>
    <h1 class="pt-3 font-28">Transfer Failed</h1>
    <p class="font-14 mb-0">
      There was an error processing your transfer. Please contact support for more details.
    </p>
    <a href="tel:+1 234 567 155" class="py-4 font-700 text-uppercase d-block">Tap to Call Support</a>
    <a href="#" data-bs-toggle="offcanvas" class="btn btn-full gradient-red shadow-bg shadow-bg-xs">Okay</a>
  </div>
</div>
