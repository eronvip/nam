<?php
    session_start();
    if(!isset($_SESSION['quantri'])) {
        echo "<script> window.location='dang-nhap/dang-nhap.php'</script>";
    } else {
        include('layout/header.php');
        include('../inc/ketnoi.php');
        ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <ol class="breadcrumb" style="margin-top: 10px;margin-bottom: -10px;">
                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>

                        <li class="active">
                            <strong>Danh sách Sản Phẩm</strong>
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
                            <a  href="pages/them-san-pham.php" class="btn btn-primary ">Thêm Sản Phẩm Mới</a>
                        </div>
                        <table class="table table-striped table-bordered table-hover " id="editable" >
                            <thead>
                                <tr>
                                    <th>Mã SP</th>
                                    <th>Tên SP</th>
                                    <th>Số Lượng</th>
                                    <th>Giá</th>
                                    <th>Giá Giảm</th>
                                    <th>Trạng Thái</th>
                                    <th>Ảnh</th>
                                    <th>Danh Mục</th>
                                    <th>Sửa / Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $laysp = "SELECT * FROM san_pham";
                                    $qr_laysp = mysqli_query($ketnoi, $laysp);

                                    



                                    while($sp = mysqli_fetch_array($qr_laysp)) {
                                        $madanhmuc =  $sp['DanhMuc']; 
                                        $laydm1 = "SELECT * FROM danh_muc WHERE id='".$madanhmuc."'";
                                        $qr_dm1 = mysqli_query($ketnoi, $laydm1);
                                        $dm1 = mysqli_fetch_array($qr_dm1);
                                 ?>
                                <tr class="gradeX" style="text-align: center; height: 120px; ">
                                    <td><?php echo $sp['id']; ?></td>
                                    <td style="max-width: 250px;"><a class="tensp" href="../pages/chi-tiet-san-pham.php"><?php echo $sp['TenSanPham']; ?></a></td>
                                    <td><?php echo $sp['SoLuong']; ?></td>
                                    <td><?php echo number_format($sp['DonGia']); ?> VNĐ</td>
                                    <td><?php echo number_format($sp['Gia_Giam']); ?> VNĐ</td>
                                    <td>
                                        <?php 
                                        $trangthaisp =  $sp['TrangThai']; 
                                            if($trangthaisp == 1) {
                                                echo "Còn hàng";
                                            } elseif($trangthaisp == 0) {
                                                echo "Hết hàng";
                                            }
                                        ?>
                                        
                                    </td>
                                    <td style="width: 130px; text-align: center;">
                                        <img style="max-height: 100px; max-width: 100px;" src="uploads/sp/<?php echo $sp['Anh']; ?>" >
                                    </td>
                                    <td>
                                        <?php
                                            echo  $dm1['TenDanhMuc'];
                                         ?>
                                    </td>
                                    <td><a class="btn btn-success" href="/admin/pages/sua-san-pham.php?id=<?=$sp['id']?>">Sửa</a>  <a class="btn btn-danger" href="">Xóa</a></td>
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


        <!-- </div> -->
       <!--  </di -->

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
}
    include('layout/footer.php');
 ?>
