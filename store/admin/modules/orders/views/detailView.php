<?php get_header(); ?>

<div id="main-content-wp" class="list-product-page" >
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách đơn hàng</h3>
                    <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        <a  style=" <?php if(!$data[count($data) - 1]) echo "pointer-events: none;" ?> display: inline-block; text-align: center; margin-bottom: 20px;background-color: green;color: white; border: none; border-radius: 5px; width: 100px;"  href="?modules=orders&controllers=index&action=confirm&id_order=<?php echo $data[count($data)-2]; ?>">Xác nhận <a/>
                        <a style=" display: inline-block; text-align: center; margin-bottom: 20px;background-color: red;color: white; border: none; border-radius: 5px; width: 100px;"  href="?modules=orders&controllers=index&action=cancel&id_order=<?php echo $data[count($data)-2]; ?>" >Hủy đơn<a/>
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Mã sản phẩm</span></td>
                                    <td><span class="thead-text">Hình ảnh</span></td>
                                    <td><span class="thead-text">Tên sản phẩm</span></td>
                                    <td style="padding-left: 40px"><span class="thead-text">Giá</span></td>
                                    <td><span class="thead-text">Số lượng</span></td>
                                    <td><span class="thead-text">Tổng tiền</span></td>
                                    <td><span class="thead-text">Thông báo</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($data))  foreach ($data as $key => $value) { if($key < count($data) -2){?>
                                <tr>
                                    <td style="padding-left: 15px"><span class="tbody-text"><?php echo ($key +1) ;?></h3></span>
                                    <td><span class="tbody-text"><?php echo $value['code']; ?></h3></span>
                                    <td>
                                        <div class="tbody-thumb">
                                            <img src="<?php echo $value['image']; ?>" alt="">
                                        </div>
                                    </td>
                                    <td><span class="tbody-text"><?php echo $value['name']; ?></h3></span>
                                    <td><span class="tbody-text"><?php echo $value['promotional_price'].'VND' ;?></span></td>
                                    <td style="padding-left: 30px"><span class="tbody-text"><?php echo $value['num_total'] ;?></span></td>
                                    <td ><span class="tbody-text"><?php echo $value['sub_total_price'].'0.000VND'; ?></span></td>
                                    <td><span  class="tbody-text"><?php echo $value['mess']; ?></span></td>
                                </tr> 

                            <?php } }; ?>
                            </tbody>
                        </table>
                        <hr>;
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>