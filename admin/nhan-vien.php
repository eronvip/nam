<?php
session_start();
    include('layout/header.php');
    include('../inc/ketnoi.php');
    if(!isset($_SESSION['quantri'])) {
        echo "<script> window.location='dang-nhap/dang-nhap.php'</script>";
    }
 ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <ol class="breadcrumb" style="margin-top: 10px;margin-bottom: -10px;">
                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>

                        <li class="active">
                            <strong>Danh sách thành viên</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-content">
                        <div class="">
                            <a  href="pages/them-nhan-vien.php" class="btn btn-primary ">Thêm Nhân Viên Mới</a>
                        </div>
                        <table class="table table-striped table-bordered table-hover " id="editable" >
                            <thead>

                                <tr>
                                    <th>Mã NV</th>
                                    <th>Tên Đăng Nhập</th>
                                    <th>Tên NV</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Email</th>
                                    <th>Ngày SInh</th>
                                    <th>Giới Tính</th>
                                    <th>Trạng Thai</th>
                                    <th>Sửa / Xóa</th>
                                </tr>

                            </thead>
                            <tbody>
                               <?php 
                                    $laynhanvien = "SELECT * FROM nhan_vien";
                                    $truyvan_nv = mysqli_query($ketnoi, $laynhanvien);

                                    while($nv = mysqli_fetch_array($truyvan_nv)) {
                                 ?>
                                    <tr class="gradeX">
                                        <td><?php echo $nv['id']; ?></td>
                                        <td><?php echo $nv['TenDangNhap']; ?></td>
                                        <td><?php echo $nv['TenNhanVien']; ?></td>
                                        <td><?php echo $nv['DienThoai']; ?></td>
                                        <td><?php echo $nv['Email']; ?></td>
                                        <td><?php echo $nv['NgaySinh']; ?></td>
                                        <td><?php echo $nv['GioiTinh']; ?></td>
                                        <td><?php echo $nv['Status']; ?></td>
                                        <td><a href="">Sửa</a> / <a href="">Xóa</a></td>
                                    </tr>
                                <?php 
                                    }
                                 ?>
                                
                                
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Page-Level Scripts -->
    <script src="js/jquery.jeditable.mini.js"></script>
    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf",
                }
            });
            /* Init DataTables */
           var oTable = $('#editable').dataTable();
        });

    </script>
<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>
<?php
    include('layout/footer.php');
 ?>
