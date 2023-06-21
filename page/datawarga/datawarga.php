<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- MORRIS CHART STYLES-->

        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- TABLE STYLES-->
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

        <style>
            span {
                font-size: 22px;
            }
        </style>
    </head>

    <body>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <span>Data Warga</span>
                        <span title="Tambah Data"></span>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sql = mysqli_query($koneksi, "SELECT * FROM tb_warga");
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <?php echo $no++; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['nama']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['nik']; ?>
                                            </td>
                                            <td>
                                                <?php echo $data['keterangan']; ?>
                                            </td>
                                        </tr> 
                                        <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    Copyright © 2023 All rights reserved.  <a href="http://instagram.com/">TI.21.C.2</a>
                    <br> Developed By <a href="https://instagram.com/wisnuwicaksn" target="_blank"><b>Kelompok Kami</b></a>
                </div>
            </div>
        </div>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>

        <script type="text/javascript">
            $(document).on("click", "#edit_data", function() {
                var kode = $(this).data('id');
                var ket = $(this).data('ket');
                var tgl = $(this).data('tgl');
                var jml = $(this).data('jml');

                $("#modal_edit #kode").val(kode);
                $("#modal_edit #ket").val(ket);
                $("#modal_edit #tgl").val(tgl);
                $("#modal_edit #jml").val(jml);

            })
        </script>

    </body>

    </html>