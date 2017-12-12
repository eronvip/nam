<?php
    include('layout/header.php');

 ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <ol class="breadcrumb" style="margin-top: 10px;margin-bottom: -10px;">
                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>

                        <li class="active">
                            <strong>Danh mục sản phẩm</strong>
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
                            <a  href="them-danh-muc.php" class="btn btn-primary "> Thêm Danh Mục Sản Phẩm</a>
                        </div>
                        <table class="table table-striped table-bordered table-hover " id="editable" >
                            <thead>
                                <tr>
                                    <th>Mã Danh Mục</th>
                                    <th>Tên Danh Mục</th>
                                    <th>Mô Tả Chi Tiết</th>
                                    <th>Sửa / Xóa</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="gradeX">
                                    <th>Mã Danh Mục</th>
                                    <th>Tên Danh Mục</th>
                                    <th>Mô Tả Chi Tiết</th>
                                    <th>Sửa / Xóa</th>
                                </tr>

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
    include('layout/footer.php');
 ?>
