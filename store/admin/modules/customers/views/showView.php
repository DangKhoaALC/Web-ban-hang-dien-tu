<?php get_header(); ?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Sửa thông tin khách hàng</h3>
                    <a href="?modules=customers&controllers=index&action=list" title="" id="add-new" class="fl-left">Danh sách</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    
                    <?php if(!empty($data)) foreach ($data as $value) {?>
                    <form method="POST" action="?modules=customers&controllers=index&action=update&id=<?php echo $value['id'] ;?>" enctype="multipart/form-data">
                        <div style="display: flex;">
                            <div style="width: 400px;">
                                <label for="title">Họ tên</label>
                                <input type="text" name="fullname" id="title" value="<?php echo $value['fullname']; ?>" style="display: block;width: 300px;">
                                <label for="title">Email</label>
                                <input type="text" name="mail" id="email" readonly="readonly" value="<?php echo $value['mail']; ?> " style="display: block;width: 300px;">
                                <label for="title">Số điện thoại</label>
                                <input type="text" name="phone" id="title" value="<?php echo $value['phone']; ?>" style="display: block;width: 300px;">
                                <label for="title">Địa chỉ</label>
                                <input type="text" name="address" id="title" value="<?php echo $value['address']; ?>" style="display: block;width: 300px;">
                                <label for="title">Ngày đăng kí</label>
                                <input type="text" name="create_date" id="title" value="<?php echo $value['create_date']; ?>" style="display: block;width: 300px;">
                            </div>
                            
                        </div>

                    <?php };?>

                        <input type="submit" name="btn_submit" id="btn-submit" value="Cập Nhật" style="height: 40px;
                                                                                                border-radius: 60px;
                                                                                                width: 150px;
                                                                                                color: green;
                                                                                                border-color: white;
                                                                                                color: white;
                                                                                                background-color: #48ad48;">
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>