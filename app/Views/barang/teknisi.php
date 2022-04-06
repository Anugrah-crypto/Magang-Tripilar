<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>

    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" id="changeIsJaringan"> IsJaringan</label>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" id="changeIsHardware"> IsHardware</label>
    </div>


    <div class="checkbox">
        <label><input type="checkbox" id="changeIsSoftware"> IsSoftware</label>
    </div>




    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <table id='example'>
        <thead>
            <tr>
                <!-- <th>BKT</th> -->
                <th>Tanggal Input</th>
                <th>IsJaringan</th>
                <th>IsSoftware</th>
                <th>IsHardware</th>
                <!-- <th> No.User</th>
                <th>Keterangan</th> -->
                <th>No.Teknisi</th>
                <th>Tanggal Penangganan</th>
                <th>Keterangan Teknisi</th>
                <th>IsFinish</th-->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barang as $b) : ?>
                <tr>
                    <!-- <td><1?php echo $b['BKT']; ?></td> -->
                    <td><?php echo $b['Tgl_input']; ?></td>
                    <td><?php echo $b['IsJaringan']; ?></td>
                    <td><?php echo $b['IsSoftware']; ?></td>
                    <td><?php echo $b['IsHardware']; ?></td>
                    <!-- <td><1?php echo $b['Usr_Pelapor']; ?></td>
                    <td><1?php echo $b['Keterangan_Pelapor']; ?></td> -->
                    <td><?php echo $b['Usr_Teknisi']; ?></td>
                    <td><?php echo $b['Tgl_Penanganan']; ?></td>
                    <td><?php echo $b['Keterangan_Teknisi']; ?></td>
                    <td><?php echo $b['IsFinisih']; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"></script>
    <script>
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [
                    [5, "asc"]
                ]
            });
        });
        /* Custom filtering function which will search data in column four between two values */
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                // var min = parseInt($('#min').val(), 10);
                // var max = parseInt($('#max').val(), 10);
                var age = parseFloat(data[2]) || 0; // use data for the age column

                if ((isNan(chJarBlock2)) ||
                    (isNaN(chJarBlock2) && age <= chJarBlock2))
                //  (min <= age && isNaN(max)) ||
                // (min <= age && age <= max)) 
                {
                    return true;
                }
                return false;
            }
        );

        $(document).ready(function() {
            var table = $('#example').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#changeIsSoftwareInput').keyup(function() {
                table.draw();
            });
        });
    </script>
    <!--/div=-->

    <!-- Modal -->
</div>