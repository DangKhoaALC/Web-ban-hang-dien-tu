<?php get_header(); ?>

<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách khách hàng</h3>
                    <!-- <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a> -->
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead style="text-align: center;">
                                <tr>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Họ tên</span></td>
                                    <td><span class="thead-text">Email</span></td>
                                    <td><span class="thead-text">Số điện thoại</span></td>
                                    <td><span class="thead-text">Địa chỉ</span></td>
                                    <td><span class="thead-text">Ngày đăng kí</span></td>
                                    <td><span class="thead-text">Hoàn tác</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($data['0']))  foreach ($data['0'] as $key => $value) {?>
                                <tr>
                                    <td style="text-align: center;"><span class="tbody-text"><?php echo ($key +1); ?></h3></span>
                                    <td style="text-align: center;"><span class="tbody-text"><?php echo $value['fullname']; ?></h3></span>
                                    <td style="text-align: center;"><span class="tbody-text"><?php echo $value['mail']; ?></span></td>
                                    <td style="text-align: center;"><span class="tbody-text"><?php echo $value['phone']; ?></span></td>
                                    <td style="text-align: center;"><span class="tbody-text"><?php echo $value['address']; ?></span></td>
                                    <td style="text-align: center; width:100px"><span class="tbody-text"><?php echo $value['create_date']; ?></span></td>
                                    <td  style="text-align: center; width:100px">
                                        <ul class="list-operation" style="clear: both; width:100px">
                                            <li style="float: left; width: 10px;">
                                                <a href="?modules=customers&controllers=index&action=edit&id=<?php echo $value['id']; ?>" title="Sửa" class="edit">
                                                <button style="color:green; margin-bottom:2px">Edit</button>
                                            </a></li>
                                            <li style="float: right; width: 1px;">
                                                <a href="?modules=customers&controllers=index&action=delete&id=<?php echo $value['id']; ?>" title="Xóa" class="delete">
                                                <button style="color:red; float:right">Delete</button>
                                            </a></li>
                                        </ul>
                                    </td>
                                </tr>
                                
                                <?php }; ?>
                                
                            </tbody>
                           
                        </table>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <ul id="list-paging" class="fl-right">
                         <?php for ($i=1; $i <= $data['1'] ; $i++) { ?>
                        <li>
                            <a <?php if($i == $data['2']) echo 'style="background-color: green;color:white; border-radius:300px;"';  ?>  href="?modules=customers&controllers=index&action=list&page=<?php echo $i; ?>" title=""><?php echo $i; ?></a>
                        </li>
                        <?php }; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>