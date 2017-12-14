<?php
    session_start();
    if(!isset($_SESSION['quantri'])) {
        echo "<script> window.location='dang-nhap/dang-nhap.php'</script>";
        die;
    } else {
        include('../layout/header.php');
        include('../../inc/ketnoi.php');
        ?>
        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <ol class="breadcrumb" style="margin-top: 10px;margin-bottom: -10px;">
                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li>
                            <a href="">Sản Phẩm</a>
                        </li>
                        <li class="active">
                            <strong>Thêm sản phẩm mới</strong>
                        </li>
                    </ol>
                </div>
            </div>
                
            <div class="row">
            <div class="col-lg-8 col-lg-push-1">
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Thêm Sản phẩm Mới</h5>
                        </div>
                        <div class="ibox-content">
                            <form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên Sản Phẩm</label>
                                    <div class="col-sm-10">
                                        <input id="tensanpham" class="form-control" type="text" name="tensanpham">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Số lượng</label>
                                    <div class="col-sm-10">
                                        <input id="soluong" class="form-control" type="text" name="soluong">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Đơn Giá</label>
                                    <div class="col-sm-10">
                                        <input id="dongia" class="form-control" type="text" name="dongia">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Giá Giảm</label>
                                    <div class="col-sm-10">
                                        <input id="giagiam" class="form-control" type="text" name="giagiam">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mô Tả</label>
                                    <div class="col-sm-10">
                                        <input id="mota" class="form-control" type="text" name="mota">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Chi Tiết Sản Phẩm</label>
                                    <div class="col-sm-10">
                                        <textarea id="chitietsp" name="chitietsp" class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Trạng Thái</label>
                                    <div class="col-sm-10">
                                        <select name="trangthai" id="trangthai" class="form-control">
                                            <option>Chọn Trạng Thái</option>
                                            <option value="1">Còn hàng</option>
                                            <option value="0">Hết hàng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Hình Ảnh 1</label>
                                    <div class="col-sm-10" >
                                        <input id="anh1" class="form-control"  type="file" name="anh1" style="padding-bottom: 40px; height: 32px;">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Hình Ảnh 2</label>
                                    <div class="col-sm-10">
                                        <input id="anh2" class="form-control"  type="file" name="anh2" style="padding-bottom: 40px; height: 32px;">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Hình Ảnh 3</label>
                                    <div class="col-sm-10">
                                        <input id="anh3" class="form-control"  type="file" name="anh3" style="padding-bottom: 40px; height: 32px;">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Danh Mục </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="danhmuc" name="danhmuc">
                                            <option>Chọn danh mục sản phẩm</option>
                                            <?php 
                                                $laydm = "SELECT * FROM danh_muc";
                                                $qr_laydm = mysqli_query($ketnoi, $laydm);
                                                while($dm = mysqli_fetch_array($qr_laydm)) {
                                             ?>
                                            <option value="<?php echo $dm['id']; ?>"><?php echo $dm['TenDanhMuc']; ?></option>
                                            <?php }?>
                                          
                                        </select>
                                    </div>
                                </div>
                                <div style="color: red; font-weight: bold;" class="text-danger" id="ThongBao"></div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <div class="row">
                                            <a href="<?php echo $url_admin ?>danh-muc-sp.php" class="btn btn-default ntn-huybo">Hủy Bỏ</a>
                                            <button id="taotv" class="btn btn-primary" type="submit" name="ok">Thêm Danh Mục</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <?php 
                    if($_SERVER["REQUEST_METHOD"] == "POST") {

                            $tensanpham = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['tensanpham']));
                            $soluong = $_POST['soluong'];
                            $dongia = $_POST['dongia'];
                            $giagiam = $_POST['giagiam'];
                            $mota = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['mota']));;
                            $chitietsp = htmlentities(mysqli_real_escape_string($ketnoi, $_POST['chitietsp']));
                            $trangthai = $_POST['trangthai'];
                            $danhmuc = $_POST['danhmuc'];
                            $anh1 = $_FILES["anh1"];
                            $anh2 = $_FILES["anh2"];
                            $anh3 = $_FILES["anh3"];

                        if($anh1['name'] == "" || $anh2['name'] == "" || $anh3['name'] == "") {
                            echo "<script>alert('Vui lòng chọn đủ 3 ảnh')</script>";
                        } else {
                            if($anh1["type"] != "image/jpeg" && $anh1["type"] != "image/png" && $anh1["type"] != "image/jpg") {
                                echo "<script>alert('Chắc chắn file bạn chọn là ảnh ???')</script>";
                                return;
                            }
                            if($anh2["type"] != "image/jpeg" && $anh2["type"] != "image/png" && $anh2["type"] != "image/jpg") {
                                echo "<script>alert('Chắc chắn file bạn chọn là ảnh ???')</script>";
                                return;
                            }
                             if($anh3["type"] != "image/jpeg" && $anh3["type"] != "image/png" && $anh3["type"] != "image/jpg") {
                                echo "<script>alert('Chắc chắn file bạn chọn là ảnh ???')</script>";
                                return;
                            }
                             //upload file
                            move_uploaded_file($anh1["tmp_name"], "../uploads/sp/".$anh1["name"]);
                            move_uploaded_file($anh2["tmp_name"], "../uploads/sp/".$anh2["name"]);
                            move_uploaded_file($anh3["tmp_name"], "../uploads/sp/".$anh3["name"]);

                            $themsp = "INSERT INTO san_pham VALUES('', '".$tensanpham."', '".$soluong."', '".$dongia."', '". $giagiam."', '".$mota."', '".$chitietsp."', '".$trangthai."', '".$anh1['name']."', '".$anh2['name']."', '".$anh3['name']."', '".$danhmuc."')";
                            $qr_themsp = mysqli_query($ketnoi, $themsp);
                            if($qr_themsp) {
                                echo "<script>alert('Thêm sản phẩm thành công')</script>";
                                echo "<script> window.location='../san-pham.php'</script>";
                            } else {
                                echo "<script>alert('Lỗi, vui lòng kiểm tra lại')</script>";
                            }

                       }
                        
                        
                        

                       
                    }
                ?>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#taotv').click(function(){
                    tensanpham = $('#tensanpham').val();
                    soluong = $('#soluong').val();
                    dongia = $('#dongia').val();
                    giagiam = $('#giagiam').val();
                    mota = $('#mota').val();
                    chitietsp = $('#chitietsp').val();
                    trangthai = $('#trangthai').val();
                    danhmuc = $('#danhmuc').val();

                    Loi =0;

                    kiểm tra đầy đủ thông tin
                    if(tensanpham == "" || soluong == "" || dongia == "" || giagiam == "" || mota == "" || chitietsp == "" || trangthai == "" || danhmuc == "" ) {
                        Loi++;
                        $('#ThongBao').text("Hãy nhập đầy đủ thông tin...");
                    }
                    if(isNaN(soluong) || isNaN(dongia) || isNaN(giagiam)){
                        Loi++;
                        $("#ThongBao").text("Hãy nhập đúng định dạng Số Lượng, Đơn Giá, Giá Giảm phải là số!");
                    }

                    if(Loi!=0) {
                        return false;
                    }
                });
            });
        </script>

        <?php
    }
 ?>

<?php
    include('../layout/footer.php');
 ?>
