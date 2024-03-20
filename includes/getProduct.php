<?php 
require('../includes/connection.inc.php');
function getProduct()
{
    global $con;
$sql="select * from product order by rand()";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){?>
        <div class="product">
            <img class="product_img" src="./img/<?php echo $row['image']?>" alt="Tomatoes">
            <div class="product_info">
            <p style="font-size: 13px;"><u><?php echo $row['vendor']?></u></p>
            <p style="font-weight: 1000; font-size: large;"><?php echo $row['product_name']?></p>
            <p ><span style="color: orangered;">&#9733 &#9733 &#9733 &#9733</span> &#9734  <span>(3 reviews)</span></p>
            <p><?php echo $row['qty']?>kg</p>
            <p><span style="font-weight: 1000; font-size: large;">&#8377 <?php echo $row['price']?> </span><span style="font-size:small;"><s>&#8377 <?php echo $row['mrp']?></s></span></p>
            <button class="AddToCart" ><span>&#x1F6D2</span> Add to cart</button> 
            <span class="wishlist">&hearts;</span>     
        </div>
        </div>
<?php } }?>