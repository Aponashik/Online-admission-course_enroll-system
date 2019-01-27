<?php require_once('inc/top.php');?>

<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>


<?PHP require_once('classes/aCourse.php');?>




<?php
    $pd=new aCourse();
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) {
    $insertCourse= $pd->courseInsert($_POST);
   
}
?>
<div class="grid_10">
    <style type="text/css">
        td{
            padding: 8px;
        }
    </style>

    <div class="box round first grid">
        <h2>Add New Course</h2>
        <div class="block"> 

        <?php
        if (isset($insertCourse)) {
            echo $insertCourse;
        }

        ?>              
         <form action="" method="post" enctype="multipart/form-data" style="background-color:">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Course Name</label><br>
                    </td>
                    <td>
                        <input type="text" name="c_name" placeholder="Enter Product Name..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Credit</label>
                    </td>
                    <td>
                      <input type="text" name="credit" placeholder="Enter Credit..." class="medium" />
                    </td>
                </tr>
                   <tr>
                    <td></td>
                    <td>
                        <input style="background-color: #30A4E7;color:white" type="submit" name="submit" Value="Add" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>

<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>