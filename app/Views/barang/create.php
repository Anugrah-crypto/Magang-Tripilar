<?php echo view('templates/v_header'); ?>
<?php echo view('templates/v_sidebar'); ?>
<?php echo view('templates/v_topbar'); ?>
<div class="container-fluid">

    <form action=<?= "http://localhost:8080/barang/tambah;" ?> method="post">
        <div class="form-group mb-0">
            <label for="BKT"></label>
            <input type="text" name="BKT" id="BKT" class="form-control" placeholder="Masukkan BKT">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" id="changeShip"> IsJaringan</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" id="changeIsJaringan"> IsSoftware</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" id="changeIsHardware"> IsHardware</label>
        </div>

        <div class="form-group mb-0">
            <label for="Usr_Pelapor"></label>
            <input type="text" name="Usr_Pelapor" id="Usr_Pelapor" class="form-control" placeholder="Masukkan No. User">
        </div>
        <div class="form-group mb-0">
            <label for="Keterangan_Pelapor"></label>
            <input type="text" name="Keterangan_Pelapor" id="Keterangan_Pelapor" class="form-control" placeholder="Masukkan Keterangan">

        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
    <!-- <div class="modal fade" id="modelTambah">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </div>
    </div> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        var form = $('#myForm'),
            checkbox = $('#changeShip'),
            chShipBlock = $('#changeShipInputs');

        chShipBlock.hide();

        checkbox.on('click', function() {
            if ($(this).is(':checked')) {
                chShipBlock.show();
                chShipBlock.find('input').attr('required', true);
            } else {
                chShipBlock.hide();
                chShipBlock.find('input').attr('required', false);
            }
        });
        var form = $('#IsJaringan'),
            checkboks = $('#changeIsJaringan'),
            chJarBlock = $('#changeIsJaringanInput');

        chJarBlock.hide();

        checkboks.on('click', function() {
            if ($(this).is(':checked')) {
                chJarBlock.show();
                chJarBlock.find('input').attr('required', true);
            } else {
                chJarBlock.hide();
                chJarBlock.find('input').attr('required', false);
            }
        });

        var form = $('#IsHardware'),
            checkboks1 = $('#changeIsHardware'),
            chJarBlock1 = $('#changeIsHardwareInput');

        chJarBlock1.hide();

        checkboks1.on('click', function() {
            if ($(this).is(':checked')) {
                chJarBlock1.show();
                chJarBlock1.find('input').attr('required', true);
            } else {
                chJarBlock1.hide();
                chJarBlock1.find('input').attr('required', false);
            }
        });
    </script>

</div>

<?php echo view('templates/v_footer'); ?>