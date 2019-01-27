<?php require_once('inc/top.php');?>

<?php include 'inc/header.php';?>


<?PHP require_once('classes/Category.php');?>
<?PHP require_once('classes/aCourse.php');?>
<?php  require_once('helpers/format.php');?>

<?php
    $pd=new aCourse();
    $fm=new Format();
?>
<?php
  
   $cat=new Category();

   if (isset($_GET['delpro'])) {
   	$id=$_GET['delpro'];
   	$delpro=$pd->delProById($id);
   }
?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width:100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 15px;

}

tr:nth-child(even) {
    background-color: #dddddd;



</style>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Course List</h2>
        <div class="block"> 

          <?php
                   if (isset($delpro)) {
                   	echo $delpro;
                   	# code...
                   }
                 
           ?> 
            <table class="data display datatable" id="example">
			<thead>
				<tr style="background-color:#653091">
					<th style="color:white;">SL</th>
					<th style="color:white;">Course Name</th>
					<th style="color:white;">Credit</th>
          
					<th style="color:white;">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
                  $getPd=$pd->getAllProduct();
                  if ($getPd) {
                  	$i=0;
                  	while ($result=$getPd->fetch_assoc()) {
                  		$i++;
                  
				?>
				<tr class="odd gradeX">
					<td><?php echo $i;?></td>
					<td><?php echo $result['c_name'];?></td>
					<td><?php echo $result['credit'];?></td>
          
					
					<td><a href="cedit.php?c_id=<?php echo $result['c_id'];?>">Edit</a> ||
				     <a onclick=" return confirm('Are you sure to delete?')" href="?delpro=<?php echo $result['c_id'];?>">Delete</a></td>
				</tr>
		        <?php 	} }?>
			</tbody>
		</table>


       </div>
    </div>

</div>



<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>

