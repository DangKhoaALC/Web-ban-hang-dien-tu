<?php get_header(); ?>
<div id="main-content-wp" class="add-cat-page" >
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right" style="float:right">
            <div class="section" id="title-page" >
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Sửa bài viết</h3>
                    <a href="?modules=products&controllers=index&action=list" title="" id="add-new" class="fl-left">Danh sách</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail" style="clear:both; float:right">
                    <?php if(!empty($data)) foreach ($data as $value) {?>
                    <form method="POST" action="?modules=products&controllers=index&action=update&id=<?php echo $value['id'] ;?>" enctype="multipart/form-data">
                    <div style="width: 400px; clear:both; float:left" >
                                <label for="product-name">Tên sản phẩm</label>
                                <input type="text" name="name" id="product_name" value="<?php echo $value['name']; ?>" style="display: block;width: 300px;">

                                <label for="product-code">Mã sản phẩm</label>
                                <input type="text" name="code" id="product_code" readonly="readonly" value="<?php echo $value['code']; ?> " style="display: block;width: 300px;">

                                <label for="price">Giá sản phẩm</label>
                                <input type="text" name="price" id="price" readonly="readonly" value="<?php echo $value['price']; ?> " style="display: block;width: 300px;">

                                <label for="price">Giá khuyến mãi</label>
                                <input type="text" name="promotional_price" id="promotional_price" readonly="readonly" value="<?php echo $value['promotional_price']; ?> " style="display: block;width: 300px;">
                                
                                <label for="price">Số lượng</label>
                                <input type="text" name="quantity" id="quantity" readonly="readonly" value="<?php echo $value['quantity']; ?> " style="display: block;width: 300px;">

                                <label for="price">Người tạo</label>
                                <input type="text" name="user" id="user" value="<?php echo $value['user']; ?>" style="display: block;width: 300px;">

                         </div>
                            <div style="width: 400px; float:left">
                                <label for="price">Màn hình</label>
                                <input type="text" name="screen" id="title" value="<?php echo $value['screen']; ?>" style="display: block;width: 300px;">

                                <label for="price">Ram</label>
                                <input type="text" name="ram" id="title" value="<?php echo $value['ram']; ?>" style="display: block;width: 300px;">

                                <label for="price">Cpu</label>
                                <input type="text" name="cpu" id="title" value="<?php echo $value['cpu']; ?>" style="display: block;width: 300px;">

                                <label for="price">Bộ nhớ</label>
                                <input type="text" name="memory" id="title" value="<?php echo $value['memory']; ?>" style="display: block;width: 300px;">

                                <label for="price">Hệ điều hành</label>
                                <input type="text" name="operating_system" id="title" value="<?php echo $value['operating_system']; ?>" style="display: block;width: 300px;">

                                <label for="price">Camera trước</label>
                                <input type="text" name="front_camera" id="title" value="<?php echo $value['front_camera']; ?>" style="display: block;width: 300px;">

                                <label for="price">Camera sau</label>
                                <input type="text" name="rear_camera" id="title" value="<?php echo $value['rear_camera']; ?>" style="display: block;width: 300px;">
                        </div>
                        <div style="width: 350px;float:left">
                                <label for="status">Độ hot sản phẩm</label>
                                <select name="level" style="display: block;width: 300px;">
                                    <option value="hot">Sản phẩm hot</option>
                                    <option value="normal"> Sản phẩm bình thường</option>
                                    <option value="discount">Sản phẩm giảm giá</option>
                                </select>
                                <label for="status">Trạng thái</label>
                                <select name="status" style="display: block;width: 300px;">
                                    <option value="còn hàng">Còn hàng</option>
                                    <option value="hết hàng">Hết hàng</option>
                                    <option value="hàng sắp về">Hàng sắp về</option>
                                </select>
                                <label for="category">Danh mục sản phẩm</label>
                                <select name="category" style="display: block;width: 300px;">
                                    <option value="điện thoại">Điện thoại</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="laptop">Laptop</option>
                                </select>
                                <label for="brand">Thương hiệu sản phẩm</label>
                                <select name="brand" style="display: block;width: 300px;">
                                    <option value="Apple">Apple</option>
                                    <option value="samsung">Sam Sung</option>
                                    <option value="sony">Sony</option>
                                    <option value="nokia">Nokia</option>
                                    <option value="dell">Dell</option>
                                    <option value="hp">Hp</option>

                                </select>
                                
                                <label style="padding-bottom:20px">Hình ảnh</label>
                                <div id="uploadFile">
                                    <input type="file" name="image" id="upload-thumb">
                                    <img src="public/images/img-thumb.png">
                                </div>
                        </div>
                        <label for="desc">Mô tả sản phẩm</label>
                        <textarea name="description" id="desc" class="ckeditor"><?php echo $value['description']; ?></textarea>
                        
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