<?php require_once('inc/top.php');?>

<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>


<?PHP require_once('classes/aCourse.php');?>


<?php

if (!isset($_GET['c_id']) || $_GET['c_id']==NULL) {
    echo "<script>window.location='clist.php';</script>";
    }else{
        $id=$_GET['c_id'];
    }
        $pd=new aCourse();
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {
    $updateCourse= $pd->courseUpdate($_POST,$id);
   
}
?>
<div class="grid_10">
    <style type="text/css">
        td{
            padding: 8px;
        }
    </style>

    <div class="box round first grid">
        <h2>Update Course</h2>
        <div class="block"> 

        <?php
        if (isset($updateCourse)) {
            echo $updateCourse;
        }

        ?> 
        <?php
          $getpro=$pd->getProById($id);
          if ($getpro) {
              while ($value=$getpro->fetch_assoc()) {
                  
         
        ?>                
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Course Name</label><br>
                    </td>
                    <td>
                        <input type="text" name="c_name" value="<?php echo $value['c_name']?>" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Credit</label>
                    </td>
                    <td>
                      <input type="text" name="credit"  value="<?php echo $value['credit']?>"class="medium" />
                    </td>
                </tr>


                
            

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        <?php }}?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->



