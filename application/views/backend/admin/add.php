
<div class="content">
    <div class="left">
        <div class="card">
            <div class="header">
                <h4 class="title">Thêm tour</h4>
            </div>
            <div class="content">
                <?php
                    $CI =& get_instance();
                    if ($CI->session->flashdata('code')) {
                    if ($CI->session->flashdata('code')=='1') {
                        echo '<div class="alert alert-success" role="alert">'.$CI->session->flashdata('message').'</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">'.$CI->session->flashdata('message').'</div>';
                    }
                    }
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Tên tour</label>
                                <input type="text" class="form-control" name="name_tour" placeholder="Company" value="Creative Code Inc.">
                            </div>
                        </div>
                       
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="text" class="form-control" name="price" placeholder="Company" value="0.000.000VNĐ">
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Địa điểm</label>
                                <input type="text" class="form-control" name="address"placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input type="file" class="form-control" name="picture">
                            </div>
                        </div>
                       
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Lịch trình</label>
                                <textarea rows="5" class="form-control" name="schedule" placeholder="Here can be your description"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Xác nhận</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>  
    </div>
</div>




