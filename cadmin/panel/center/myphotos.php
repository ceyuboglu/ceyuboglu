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
                    <h2>Left-Bar Ayarlar <small>
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
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../airport/islem.php" method="POST" enctype="multipart/form-data"> 
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Photo(max 60kbyte)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="profile_photo" value="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <button type="submit" name="leftbarphotokaydet">upload</button>
                      </div>
                    </form>

                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        
                      </div>

                    </form>

                  </div>

                </div>
              </div>
            </div>
             
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Uploaded Photos<small>-</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form action="myphotos.php" method="POST">
                     
                    <?php 
                    // action="../airport/islem.php" method="POST"
                    $elemansay=$db->prepare("SELECT photo_id FROM kisisel_photos");
                    $elemansay->execute(array());
                    $elemansayisi = count($elemansay->fetchAll());
                    $z = 1 ;
                    $c = 0 ;
                    
                    
                    /*
                      $path = "../../../upload/";
                      $open = opendir($path);
                      $read = readdir($open);
                      $nameofphoto=$read;
                      */
                      /*
                      while ($c <=  $elemansayisi) {
                         $c=$c+1;
                        $fotoara=$db->prepare("SELECT photo_id FROM kisisel_photos WHERE photo_id=$z");
                        $fotoara-> execute(array());  
                         $eslesenfoto = count($fotoara->fetchAll());  
                         while ($eslesenfoto != 1){
                          $z=$z+1;
                          if ($eslesenfoto=1) {
                            break;
                          }else{
                            continue;
                          }
                         }
                       
                         $fotosor=$db->prepare("SELECT photo_name FROM kisisel_photos where photo_id=:id");
                           $fotosor->execute(array(  
                          'id' => $z
                           ));
                          $fotocek=$fotosor->fetch(PDO::FETCH_ASSOC);
                          
                          
                                              ?>
                          <div style="width:250px; margin-right:0px; display: inline-block; margin-bottom: 15px;">
                          <input type="radio" id="foto" name="photo" value="<?php echo  $z; ?>">
                          <img src='../../../upload/<?php echo $fotocek['photo_name']; ?>' width='200' height='200'/></div>
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                          <?php  
                          $z=$z+1;

                      }
                     */
                      $fotosor=$db->prepare("SELECT * FROM kisisel_photos");
                           $fotosor->execute();
                         
                      while ($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC)) {
                         
                       
                         
                          
                          
                                              ?>
                          <div style="width:250px; margin-right:0px; display: inline-block; margin-bottom: 15px;">
                          <input type="radio" id="foto" name="photo" value="<?php echo  $fotocek['photo_id']; ?>">
                          <img src='../../../upload/<?php echo $fotocek['photo_name']; ?>' width='200' height='200'/></div>
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                          <?php  
                          $z=$z+1;










                              }



                      ?>
                     
                    
                  </div>
                  <button type="submit" name="selectprofilephoto" class="btn btn-success">Select</button>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <button type="submit" name="deletephoto" class="btn btn-danger">Delete</button>

                 
                  <?php 
                    if (isset($_POST['selectprofilephoto'])) {
                      $z = $_POST['photo']; ;
                      $fotosor=$db->prepare("SELECT photo_name FROM kisisel_photos where photo_id=:id");
                           $fotosor->execute(array(  
                          'id' => $z
                           ));
                          $fotocek=$fotosor->fetch(PDO::FETCH_ASSOC);
                      $n=$fotocek['photo_name'];
                      
                      header("Location:../airport/islem.php?selectedphoto=$n");
                    }

                    if (isset($_POST['deletephoto'])) {
                      $z = $_POST['photo']; ;
                      
                      $n=$fotocek['photo_name'];
                      
                      $fotosil=$db->prepare("DELETE FROM kisisel_photos where photo_id=:id");
                      $fotosil->execute(array(  
                          'id' => $z
                           ));
                      if($fotosil){
                        unlink("../../../upload/$n");
                        header("Location:myphotos.php");
                      }else{
                        echo "olmadı";
                        header("Location:myphotos.php");
                      }
                    }
                    

                   ?>
                  </form>
                </div>
              </div>
              
             

            

            

        <?php include 'footer.php'; ?>
        