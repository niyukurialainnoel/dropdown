<?php require_once'affichercategories.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>depend drop down</title>
</head>
<body>
<script src="jquery-3.6.1.js"></script>
      <script>
            $(document).ready(function(){
                  jQuery('#province').change(function(){
                        var id=jQuery(this).val();
                        if(id=='-1'){
                              jQuery('#commune').html('<option value="-1">selectioner une commune</option>');
                        }else{
                              jQuery.ajax({
                              type:'post',
                              url:'get_data.php',
                              data:'id='+id,
                              success:function(result){
                                    jQuery('#commune').html(result);
                              }
                        });
                        }
                  });
            });
      </script>
      <div id="espace"></div>
      <span>My Ajax depend dropdown</span>
      <div id="contena">
            <div id="left">
                  <h5>Province</h5>
                  <select name="province" id="province">
                        <option value="-1" >selectionner un province</option>
                        <?php $pro=affichercategorie();
                        echo "i m here";
                        foreach($pro as $p){
                        ?>
                        <option value="<?=$p["id"]?>" ><?=$p["nom"]?></option>
                        <?php }?>
                  </select>
            </div>

            <div id="right">
                  <h5>Commune</h5>
                  <select name="commune" id="commune">
                        <option value="" >selectionner une commune</option>
                  </select>
            </div>
      </div>
</body>
</html>