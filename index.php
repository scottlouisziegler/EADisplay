<?php $pageTitle= "EADisplay | Another Test by Scott";

include ('inc/head.php');
 ?>
		
			<h1>EADisplay</h1>
			<p>A very simple PHP-based way to show EAD finding aids.</p>
			<p>Choose a collection to see a sample of the data</p>
			
			<div class="form">
				<!-- TODO: Auto populate collectionList options based on xml files in directory folder (can PHP do this?)-->
				<select name="collectionList" form="collections">
				  <option value="chambers">Chambers</option>
				  <option value="westbrook-lectureship">Westbrook Lectureship</option>
				 
				   
				</select>
				<br />
				<br />
				<form  method="post" action="collection-details.php" id="collections">
					<input type="submit" value="Let's See Some EAD!">
				</form> 
			</div>
<?php			
include ('inc/footer.php');			
?>
			

		
		
