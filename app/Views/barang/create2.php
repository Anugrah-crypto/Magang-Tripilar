<?php echo view('templates/v_header'); ?>
<?php echo view('templates/v_sidebar');; ?>
<div class="container-fluid">
    <div class="modal fade" id="modelTambah">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah
                        <?= $judul; ?>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="<?= '/tripilar/public/barang/tambah'; ?>" method="post">
                        <div class="form-group mb-0">
                            <label for="BKT"></label>
                            <input type="text" name="BKT" id="BKT" class="form-control" placeholder="Masukkan BKT">

                        </div>
                        <div class="form-group mb-0">
                            <label for="IsJaringan"></label>
                            <input type="text" name="IsJaringan" id="IsJaringan" class="form-control" placeholder="IsJaringan">

                        </div>
                        <div class="form-group mb-0">
                            <label for="IsSoftware"></label>
                            <input type="text" name="IsSoftware" id="IsSoftware" class="form-control" placeholder="Masukkan IsSoftware">
                        </div>
                        <div class="form-group mb-0">
                            <label for="IsHardware"></label>
                            <input type="text" name="IsHardware" id="IsHardware" class="form-control" placeholder="Masukkan IsSoftware">
                        </div>

                        <div class="form-group mb-0">
                            <label for="Usr_Pelapor"></label>
                            <input type="text" name="Usr_Pelapor" id="Usr_Pelapor" class="form-control" placeholder="Masukkan No. User">
                        </div>
                        <div class="form-group mb-0">
                            <label for="Keterangan_Pelapor"></label>
                            <input type="text" name="Keterangan_Pelapor" id="Keterangan_Pelapor" class="form-control" placeholder="Masukkan Keterangan">

                        </div>
                    </form>

                    <!--div class="form-group mb-0">
                            <label for="Usr_Teknisi"></label>
                            <input type="text" name="Usr_Teknisi" id="Usr_Teknisi" class="form-control" placeholder="Masukkan No. User Teknisi">

                         </div-->
                    <!--div class="form-group mb-0">
                            <label for="Tgl Penanganan"></label>
                            <input type="" name="Tgl Penanganan" id="Tgl Penanganan" class="form-control" placeholder="Masukkan Tanggal Penanganan">

                             </div-->
                    <!--div class="form-group mb-0">
                         <label for="Keterangan_Teknisi"></label>
                         <input type="text" name="Keterangan_Teknisi" id="Keterangan_Teknisi" class="form-control" placeholder="Masukkan Keterangan">

                             </div>
                            <div class="form-group mb-0">
                            <label for="IsFinisih"></label>
                            <input type="text" name="IsFinisih" id="IsFinisih" class="form-control" placeholder="Sudah selesai?">

                            </div-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?php echo view('templates/v_topbar'); ?>
<?php echo view('templates/v_footer'); ?>