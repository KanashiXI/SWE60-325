
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      แก้ไขรายการการแข่งขัน
      <small>walailak university</small>
    </h1>
  </section>
  <a href="<?php echo base_url('api/competition/searchCompetitionById/'.$id) ?>" type="button" class="btn btn-default">Json Edit</a>
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
            <!-- form start -->
            <?php 
              $json = file_get_contents(base_url('api/competition/searchCompetitionById/'.$id));
              $obj = json_decode($json);
              //echo "<script> alert(".$obj->id."); </script>"
            ?>
          <form role="form" id="update-compet" action="<?php echo base_url('api/competition/update'); ?>" method="post">
          <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <label for="competition_name">ชื่อการแข่งขัน<sup class="error">*</sup></label>
                  <input type="text" class="form-control error" id="name" value='<?php echo $obj->name?>' name="name" placeholder="ชื่อรายการการแข่งขัน" required>
                </div>
              </div>
              
              <br>
              <div class="row">
                <div class="col-md-12">
                  <label for="palce">สถานที่แข่งขัน<sup class="error">*</sup></label>
                  <input type="text" class="form-control error" name="palce" value='<?php echo $obj->place?>' id="palce" placeholder="สถานที่แข่ง" required>
                </div> 
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="start">วันที่เปิดรับสมัคร<sup class="error">*</sup></label>
                  <input type="text" class ="datepicker" data-date-format="yyyy-mm-dd" value="<?php echo $obj->start?>" class="form-control error" name="start" id="start" placeholder="วว/ดด/ปปปป" required>
                </div>
                <div class="col-md-6" id ="comRegisEnd">
                  <label for="end">วันที่ปิดรับสมัคร<sup class="error">*</sup></label>
                  <input type="text" class ="datepicker" value='<?php echo $obj->end?>' data-date-format="yyyy-mm-dd" class="form-control error" name="end" id="end" placeholder="วว/ดด/ปปปป" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="startPay">ค่าสมัคร<sup class="error">*</sup><small>(500)</small></label>
                  <input type="text" class="form-control error" value='<?php echo $obj->prize?>' name="payCost" id="payCost" placeholder="จำนวนเงิน" required>
                </div>      
              <div class="col-md-6">
                  <label for="startPay">วันที่สิ้นสุดจ่ายเงิน<sup class="error">*</sup></label>
                  <input type="text" class ="datepicker" value='<?php echo $obj->pay_end?>' data-date-format="yyyy-mm-dd" class="form-control error" name="endPay" id="endPay" placeholder="วว/ดด/ปปปป" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="compet_start">วันที่เริ่มการแข่งขัน<sup class="error">*</sup></label>
                    <input type="text" class ="datepicker" value='<?php echo $obj->compet_start?>' data-date-format="yyyy-mm-dd" class="form-control error" name="compet_start" id="compet_start" placeholder="วว/ดด/ปปปป" required>
                </div>
                <div class="col-md-6" id ="comEnd">
                  <label for="compet_end">วันที่สุดการแข่งขัน<sup class="error">*</sup></label>
                    <input type="text"class ="datepicker" value='<?php echo $obj->compet_end?>' data-date-format="yyyy-mm-dd" class="form-control error" name="compet_end" id="compet_end" placeholder="วว/ดด/ปปปป" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <label>รายละเอียดการแข่งขัน</label>
                  <textarea rows="4" class="form-control error"  id="details" name="details"  placeholder="รายละเอียดเพิ่มเติม...."><?php echo $obj->detail?></textarea>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <label>รุ่นที่เปิดรับแข่งขัน</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_type[]" <?php if(in_array(1,$obj->compet_type)) echo "checked='checked'"; ?> id="compet_type1" value=1> รุ่นเยาวชน
                  </label>
                </div>
                <div class="col-md-6">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genY[]" <?php if(in_array(1,$obj->compet_gen)) echo "checked='checked'"; ?> id="compet_genY1" value=1> U9
                  </label>
                  <br>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genY[]"  <?php if(in_array(2,$obj->compet_gen)) echo "checked='checked'"; ?>  id="compet_genY2" value=2> U11
                  </label>
                  <br>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genY[]"  <?php if(in_array(3,$obj->compet_gen)) echo "checked='checked'"; ?>  id="compet_genY3" value=3> U13
                  </label>
                  <br>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genY[]"  <?php if(in_array(4,$obj->compet_gen)) echo "checked='checked'"; ?>  id="compet_genY4" value=4> U15
                  </label>
                  <br>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genY[]"  <?php if(in_array(5,$obj->compet_gen)) echo "checked='checked'"; ?>  id="compet_genY5" value=5> U17
                  </label>
                </div> 
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_type[]" <?php if(in_array(2,$obj->compet_type)) echo "checked='checked'"; ?> id="compet_type2" value=2> รุ่นประชาชน
                  </label>
                </div>
                <div class="col-md-6">
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genP[]"  <?php if(in_array(6,$obj->compet_gen)) echo "checked='checked'"; ?>  id="compet_genP1" value=6> N
                  </label>
                  <br>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genP[]"  <?php if(in_array(7,$obj->compet_gen)) echo "checked='checked'"; ?>  id="compet_genP2" value=7> S-
                  </label>
                  <br>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genP[]"  <?php if(in_array(8,$obj->compet_gen)) echo "checked='checked'"; ?>  id="compet_genP3" value=8> S+
                  </label>
                  <br>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genP[]"  <?php if(in_array(9,$obj->compet_gen)) echo "checked='checked'"; ?>  id="compet_genP4" value=9> P-
                  </label>
                  <br>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="compet_genP[]"  <?php if(in_array(10,$obj->compet_gen)) echo "checked='checked'"; ?>  id="compet_genP5" value=10> P+C
                  </label>
                </div> 
              </div>                          
              <div class="box-footer">
                <div class="row pull-right">
                  <div class="col-md-12">
                    <a href="<?php echo base_url('staff/Competition/index') ?>" type="button" class="btn btn-default">ยกเลิก</a>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
          <!-- /.box -->
      </div>
    </div>  
  </section>
  
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->