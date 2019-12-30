<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo 'Update Imaginations'; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class=""><a href="<?php echo site_url('admin/imaginations');?>">Imaginations</a></li>
            <li class="active"><a href="">Update Imaginations</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form-horizontal" method="POST" action="<?php echo base_url('admin/imaginations/update') ?>">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Title</label>

                                <div class="col-sm-8">
                                    <input type="title" class="form-control" name="blog_name" id="title" placeholder="Title" value="<?php echo $blogDetail->title?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Image</label>

                             <div class="col-sm-8">
                                    <!-- <input class="form-control" type="text" placeholder="Browse..." readonly="">
                                    <input type="file" accept="video/*|image/*" onchange="document.getElementById('pImg').src = window.URL.createObjectURL(this.files[0])" name="image" id="name"> -->
                               
                                     <div class="profile_content edit_img">
                                            <div class="file_btn file_btn_logo">
                                              <input type="file"  class="input_img2" id="cat_image" name="blog_image" style="display: inline-block;">
                                              <span class="glyphicon input_img2 logo_btn" style="display: block;">
                                                <div id="show_company_img"></div>
                                                <span class="ceo_logo">
                                                    <?php if(!empty($blogDetail->image)){ ?>
                                                        <img src="<?php echo base_url().BLOG_CONTENT.$blogDetail->image; ?>">
                                                    <?php }else{ ?>
                                                        <img src="<?php echo base_url().CATEGORY_DEFAULT_IMAGE;?>">
                                                   <?php }?>     
                                                </span>
                                                <i class="fa fa-camera"></i>
                                              </span>
                                              <img class="show_company_img2" style="display:none" alt="img" src="<?php echo base_url() ?>/backend_asset/custom/images/logo121.png">
                                              <span style="display:none" class="fa fa-close remove_img"></span>
                                            </div>
                                          </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Description</label>

                                <div class="col-sm-8">
                                    <!-- <textarea name="description" id="description" class="form-control" placeholder="Enter description here.."></textarea> -->
                                    <textarea id="editor1" name="blog_disp" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $blogDetail->title?></textarea>
                 
                                </div>
                                 <input type="hidden" name="id" value="<?php echo $blogDetail->blogId;?>" />
                            <!-- <input type="hidden" name="exists_image" value="<?php echo $results->image;?>" /> -->
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" class="btn btn-danger add_blog">UPDATE</button>
                                    <button type="button"  onclick="window.location.href='<?php echo base_url()?>admin/imaginations'" class="btn btn-danger ">CANCEL</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  
