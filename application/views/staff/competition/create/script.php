<script>
  $(function () {
    
    $('#create-compet').validate({
      rules:{
        'name': "required",
        'compet_start': "required",
        'compet_end': "required",
        'palce': "required",
        'start': "required",
        'end': "required",
        'payCost': "required",
        'endPay': "required",

      },
      messages:{
        'name': "กรอกชื่อการแข่งขัน",
        'compet_start': "กรอกวันเริ่มการแข่งขัน",
        'compet_end': "กรอกวันสิ้นสุดการแข่งขัน",
        'palce': "กรอกสถานที่การแข่งขัน",
        'start': "กรอกวันเปิดรับสมัคร",
        'end': "กรอกวันปิดรับสมัคร",
        'payCost': "กรอกค่าสมัคร",
        'endPay': "กรอกวันสิ้นสุดการจ่ายเงิน",

      }
    });

  });

  
      var compet_type = $("#compet_type").val();
      $("#gen").hide();
      $("#compet_type").change(function (e) { 
        e.preventDefault();
        compet_type = $("#compet_type").val();
        $("#gen").show();
        option();
      });
      $("#start").change(function (e) { 
        e.preventDefault();
        $("#startPay").val($("#start").val());
      });
      
      

      function option(){
        if(compet_type == "youth"){
          $("#compet_gen").empty();
          $("#compet_gen").html( "<option value = 'U9'>U9</option><option value = 'U11'>U11</option><option value = 'U13'>U13</option><option value = 'U15'>U15</option><option value = 'U17'>U17</option>" );
        }
        else if(compet_type == "people"){
          $("#compet_gen").empty();
          $("#compet_gen").html("<option value = 'N'>N</option><option value = 'S-'>S-</option><option value = 'S+'>S+</option><option value = 'P-'>P-</option><option value = 'P+C'>P+C</option>");
        }
        else{
          $("#gen").hide();
        }
      }
   


</script>