  <?php include 'header.php';
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Genel Ayarlar <small>
                      <?php 
                      if (isset($_GET['durum'])){
                        if ($_GET['durum']=='ok'){ ?>
                        <b style="color:green;">İşlem BAŞARILI...</b>

                         <?php }elseif ($_GET['durum']=='no') { ?>
                         <b style="color:red;">İşlem BAŞARISIZ...</b>

                         <?php }
                        }
                       ?>
                    </small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>
                    <form action="../airport/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Section1 İçerik<span class="required">*</span>
                        </label>
                        <?php //CKEDİTÖR BAŞLANGIÇ ?>
                      <div class="form-group">
                         <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="ckeditor" id="editor1" name="blog_section1"><?php echo $ayarcek['blog_section1']; ?></textarea>
                        </div>
                      </div>
                      <script type="text/javascript">
                        
                        CKEDITOR.replace('editor1',
                        {
                          filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                          filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                          filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                          filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUplaod&type=Files',
                          filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUplaod&type=Images',
                          filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUplaod&type=Flash',
                          forcePasteAsPlainText: true
                        }
                          );

                      </script>
                      <?php //CKEDİTÖR BİTİŞ ?>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="blog_twitter" value="<?php echo $ayarcek['blog_twitter'] ?>"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="blog_facebook" value="<?php echo $ayarcek['blog_facebook'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İnstagram <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="blog_instagram" value="<?php echo $ayarcek['blog_instagram'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Linkedin <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="blog_linkedin" value="<?php echo $ayarcek['blog_linkedin'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Github <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="blog_github" value="<?php echo $ayarcek['blog_github'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" name="section1kaydet" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>


            

            

        <?php include 'footer.php'; ?>