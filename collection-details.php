<?php
	$name = $_POST ["name"];
	$callnumber = $_POST["collectionList"];
	$callUrl = $callnumber . "-ead.xml";

	$pageTitle= "EADislay | Another Test by Scott";
	include ('inc/head.php');
?>
			<div id="tabs">
				<ul>
				<li><a href="#tabs-1">Abstract</a></li>
				<li><a href="#tabs-2">Background</a></li>
				<li><a href="#tabs-3">Items</a></li>
				<li><a href="#tabs-4">To Do</a></li>
			
			</ul>
			<?php
				//pulling info from EAD finding aid
				//$callUrl is defined above as call number + '-ead.xml'
				$xml=simplexml_load_file("ead/$callUrl"); 
				
				//getting specific info from finding aid
				echo "<h1>" . $xml->archdesc->did->unittitle . "</h1>";
				echo "<strong>" . $xml->archdesc->did->unitid . "</strong>";
			?>
			
			
			<div id="tabs-1">
			<?php	
				echo "<strong>" . "About the Collection:" . "</strong>" . "<br />" . "<p>" . $xml->archdesc->did->abstract . "</p>";
			?>
			</div><!-- /#tabs-1-->
			<div id="tabs-2">
			<?php
				echo "<strong>" . "Background:" . "</strong>" . "<br />" . 
				"<p>" . $xml->archdesc->bioghist->p . "</p>" . 
				"<p>" . $xml->archdesc->bioghist->p[1] . "</p>" . 
				"<p>" . $xml->archdesc->bioghist->p[2] . "</p>" . 
				"<p>" . $xml->archdesc->bioghist->p[3] . "</p>" .
				"<p>" . $xml->archdesc->bioghist->p[4] . "</p>" .
				"<p>" . $xml->archdesc->bioghist->p[5] . "</p>" ;
			?>
			</div><!-- /#tabs-2-->
			<div id="tabs-3">
			<?php
				echo "<strong>" . "Some specific item info is provided below:" . "</strong>";
				echo "<hr />";
				
				//specific item
				//ToDO: functions to output multiple items based on $xml path
				
				echo "<p>" . $xml->archdesc->dsc->c01->did->unittitle . "</p>";
				echo "<p>" . $xml->archdesc->dsc->c01->c02->did->unittitle . "</p>";
				//Attempting to get URLs to digital items
				//have to get the attribute. This might be helpful: http://us1.php.net/manual/en/simplexmlelement.attributes.php
				echo "<hr />";
				foreach($xml->archdesc->dsc->c01->c02 as $item){
					echo "<p>" . $item->did ->unittitle . "</p>";
					echo "<p>" .$item->did ->unitdate . "</p>";
					//echo the type of container this is (file, box, etc.)
					echo "<p>" . $item->did ->container[0]['type']. ":" .$item->did ->container . ", " . $item->did ->container[1]['type']. ":" .$item->did ->container . "</p>";
					echo "<p>" .$item->c03->did ->unitdate . "</p>";
					echo "<hr />";
					}
				
			?>
			</div>	<!-- /#tabs-3-->
			<div id="tabs-4">
				<p>This is still a test, of course. </p>
				<p>Sample content provided by the American Philosophical Society Library and the Wagner Free Institute.</p>
				<p>To do:
				<ul>
					<li>Ensure that all elements of EAD are printed out</li>
					<li>Secure GET to show finding aid location in URL</li>
					<li>Ton of other stuff, I'm sure</li>
				</ul>
				
				</p>
			</div>
			</div><!-- /#tabs-->
			<div>
			<a class="choose-another" href="index.php">Choose another Collection</a>
			</div>
			
<?php			
include ('inc/footer.php');			
?>
