<?php
session_start();
require_once("../connect.php");
$today=date("Y-m-d");
?>
<script src="../iiitolx.js"></script>
<script>
</script>
<div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>BOOKS</h3><h6>ALL</h6>
    		</div>
    		
    		
    		<div class="page-no"><ul>
    				<li>[<a id="allgad" name="overall/books.php" style="cursor:pointer;" onclick="load_page(this.name,this.id)"> show more>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clearfix"></div>
    	</div>
	      <div class="section group">
			  <?php 
			 
			  $books=mysql_query("SELECT * FROM products WHERE visibility='1' && procat='Books' && branchcat='ALL' ORDER BY sno DESC LIMIT 12");
			  if(mysql_num_rows($books)<1)
			  {
				  
				  echo "<center><h3>There are nothing in the cart in this category</h3></center>";
			  }
			  else
			  {
			  while($booksd=mysql_fetch_array($books))
			  {
				  ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a  style="cursor:pointer;" onclick=showproduct("<?php echo $booksd['sno'];?>")><img src="products/<?php echo $booksd['attachment'];?>" width="200px" height="200px"/></a>
					<?php 
					if($booksd['posted_date']==$today)
					{
						?> <div class="discount">
					 <span class="percentage">New</span>
					</div>
					<?php } ?>
					<h2><?php echo $booksd['name'];?> </h2>
					 <p>by <?php echo $booksd['posted_by'];?></p>
					 <p><span class="price">Rs <?php echo $booksd['cost'];?> /-</span></p>
				     <center><div class="button"><span><a style="cursor:pointer;" onclick=showproduct("<?php echo $booksd['sno'];?>") class="details">Details</a></span></div></center>
				     <center><div class="button"><span><a style="cursor:pointer;" onclick=showproduct("<?php echo $booksd['sno'];?>") class="details">Add to cart</a></span></div></center>
				</div>
				<?php
			} 
			}?>
				<div class="clearfix"></div>
			</div>
			<br><br><br>
		<div class="content_top">
    		<div class="heading">
    		<h3>GADGETS</h3><h6>ALL</h6>
    		</div>
    		
    		<div class="page-no"><ul>
    				<li>[<a id="allgad" name="overall/gadgets.php" style="cursor:pointer;" onclick="load_page(this.name,this.id)"> show more>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clearfix"></div>
    	</div>
	      <div class="section group">
			  <?php 
			 
			  $gadget=mysql_query("SELECT * FROM products WHERE visibility='1' && procat='Gadgets'  && branchcat='ALL' ORDER BY sno DESC LIMIT 12");
			  if(mysql_num_rows($gadget)<1)
			  {
				  
				  echo "<center><h3>There are nothing in the cart in this category</h3></center>";
			  }
			  else
			  {
			  while($gadgetd=mysql_fetch_array($gadget))
			  {
				  ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a  style="cursor:pointer;" onclick=showproduct("<?php echo $gadgetd['sno'];?>")><img src="products/<?php echo $gadgetd['attachment'];?>" width="200px" height="200px"/></a>
					<?php 
					if($gadgetd['posted_date']==$today)
					{
						?> <div class="discount">
					 <span class="percentage">New</span>
					</div>
					<?php } ?>
					<h2><?php echo $gadgetd['name'];?> </h2>
					 <p>by <?php echo $gadgetd['posted_by'];?></p>
					 <p><span class="price">Rs <?php echo $gadgetd['cost'];?> /-</span></p>
				     <center><div class="button"><span><a style="cursor:pointer;" onclick=showproduct("<?php echo $gadgetd['sno'];?>") class="details">Details</a></span></div></center>
				     <center><div class="button"><span><a style="cursor:pointer;" onclick=showproduct("<?php echo $gadgetd['sno'];?>") class="details">Add to cart</a></span></div></center>
				</div>
				<?php
			} 
			}?>
				<div class="clearfix"></div>
			</div>
			<br><br><br>
		<div class="content_top">
    		<div class="heading">
    		<h3>ARTS</h3><h6>ALL</h6>
    		</div>
    		
    		<div class="page-no"><ul>
    				<li>[<a id="allgad" name="overall/arts.php" style="cursor:pointer;" onclick="load_page(this.name,this.id)"> show more>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clearfix"></div>
    	</div>
	      <div class="section group">
			  <?php 
			 
			  $arts=mysql_query("SELECT * FROM products WHERE visibility='1' && procat='Arts'  && branchcat='ALL' ORDER BY sno DESC LIMIT 12");
			  if(mysql_num_rows($arts)<1)
			  {
				  
				  echo "<center><h3>There are nothing in the cart in this category</h3></center>";
			  }
			  else
			  {
			  while($artsd=mysql_fetch_array($arts))
			  {
				  ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a  style="cursor:pointer;" onclick=showproduct("<?php echo $artsd['sno'];?>")><img src="products/<?php echo $artsd['attachment'];?>" width="200px" height="200px"/></a>
					<?php 
					if($artsd['posted_date']==$today)
					{
						?> <div class="discount">
					 <span class="percentage">New</span>
					</div>
					<?php } ?>
					<h2><?php echo $artsd['name'];?> </h2>
					 <p>by <?php echo $artsd['posted_by'];?></p>
					 <p><span class="price">Rs <?php echo $artsd['cost'];?> /-</span></p>
				     <center><div class="button"><span><a style="cursor:pointer;" onclick=showproduct("<?php echo $artsd['sno'];?>") class="details">Details</a></span></div></center>
				     <center><div class="button"><span><a style="cursor:pointer;" onclick=showproduct("<?php echo $artsd['sno'];?>") class="details">Add to cart</a></span></div></center>
				</div>
				<?php
			} 
			}?>
				<div class="clearfix"></div>
			</div>
			<br><br><br>
			
		<div class="content_top">
    		<div class="heading">
    		<h3>OTHERS</h3><h6>ALL</h6>
    		</div>
    	
    		<div class="page-no"><ul>
    				<li>[<a id="allgad" name="overall/others.php" style="cursor:pointer;" onclick="load_page(this.name,this.id)"> show more>>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clearfix"></div>
    	</div>
	      <div class="section group">
			  <?php 
			 
			  $others=mysql_query("SELECT * FROM products WHERE visibility='1' && procat='Others'  && branchcat='ALL' ORDER BY sno DESC LIMIT 12");
			  if(mysql_num_rows($others)<1)
			  {
				  echo "<center><h3>There are nothing in the cart in this category</h3></center>";
			  }
			  else
			  {
			  while($othersd=mysql_fetch_array($others))
			  {
				  ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a  style="cursor:pointer;" onclick=showproduct("<?php echo $othersd['sno'];?>")><img src="products/<?php echo $othersd['attachment'];?>" width="200px" height="200px"/></a>
					<?php 
					if($others['posted_date']==$today)
					{
						?> <div class="discount">
					 <span class="percentage">New</span>
					</div>
					<?php } ?>
					<h2><?php echo $othersd['name'];?> </h2>
					 <p>by <?php echo $othersd['posted_by'];?></p>
					 <p><span class="price">Rs <?php echo $othersd['cost'];?> /-</span></p>
				     <center><div class="button"><span><a style="cursor:pointer;" onclick=showproduct("<?php echo $othersd['sno'];?>") class="details">Details</a></span></div></center>
				     <center><div class="button"><span><a style="cursor:pointer;" onclick=showproduct("<?php echo $othersd['sno'];?>") class="details">Add to cart</a></span></div></center>
				</div>
				<?php
			} 
			}?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
		
		</div>
	</div>
	
