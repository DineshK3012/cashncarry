<?php 
    require 'partials/_connectdb.php';

    if (isset($_POST['pid'])){
        $proId = $_POST['pid']; 
        // echo $proId; 

        $sql1 = "SELECT * FROM `products` WHERE `pid`= '$proId'";
        $result1 = mysqli_query($conn, $sql1);
        $prdt = mysqli_fetch_assoc($result1);
        // echo $category;

        echo '<i class="fas fa-times" onclick="showProductSpecs()"></i>
            <div class="product-single" id="product-single">
                <div class="product-imgs">
                    <img src="'.$prdt['src1'].'" alt="product-img" class="primary-img">
                    <div class="product-other-imgs">
                        <div class="small-imgs" onclick="otherf(this)">
                            <img src="'.$prdt['src1'].'" alt="otherImages" class="other-img">
                        </div>
                        <div class="small-imgs" onclick="otherf(this)">
                            <img src="'.$prdt['src2'].'" alt="otherImages" class="other-img">
                        </div>
                        <div class="small-imgs" onclick="otherf(this)">
                            <img src="'.$prdt['src3'].'" alt="otherImages" class="other-img">
                        </div>
                        <div class="small-imgs" onclick="otherf(this)">
                            <img src="'.$prdt['src4'].'" alt="otherImages" class="other-img">
                        </div>
                    </div>
                </div>
                <div class="product-desc">
                    <p class="product-category">Category/'.$prdt['pcategory'].'</p>
                    <p class="product-name">'.$prdt['pname'].' '.$prdt['punit'].'</p>
                    <p class="product-price">₹'.$prdt['pprice'].'</p>';
                    if($prdt['pstock'] > 0)
                    {
                        echo '<p class="product-instock"><i class="fas fa-circle"></i> In Stock</p>';
                    }else{
                        echo '<p class="product-outstock"><i class="fas fa-circle"></i> Out Of Stock</p>';
                    }

                    echo '<div>
                        <input type="number" value="1" name="pqn">
                        <input type="hidden" name="proid" class="proid" value="' . $prdt['pid'] . '"></input>                        
                        <input type="hidden" name="pstock" class="pstock" value="' . $prdt['pstock'] . '"></input>                        
                        <button class="atc" onclick="atc(this)">Add to Cart</button>
                        </div>
                    <div class="specs">
                        <h3>Product Specification</h3>
                        <p>'.$prdt['pdesc'].'</p>
                    </div>
                </div>
            </div>';
        echo '<div class="category-products">
                <h2>Similar Products</h2>
                <div class="cate-products show">';
                    $category = $prdt['pcategory'];
                    $sql2  = "SELECT * FROM `products` WHERE `pcategory`='$category' LIMIT 3";
                    $result2 = mysqli_query($conn, $sql2);

                    //find the number of records returned
                    $num = mysqli_num_rows($result2);

                    //displaying the rows returned by the sql query
                    if ($num > 0) {
                        //now fetching using while loop
                        while ($row = mysqli_fetch_assoc($result2)) {
                            echo '<div class="prdct">
                                            <div class="prdct-img">
                                                    <img src="' . $row['src1'] . '" alt="product-image">
                                            </div>
                                            <div class="prdct-details">
                                                <div>
                                                    <p class="prdct-name">' . $row['pname'] . '</p>
                                                    <p class="prdct-unit">' . $row['punit'] . '</p>
                                                </div>
                                                <p class="prdct-price">₹' . $row['pprice'] . '</p>
                                            </div>
                                            <input type="hidden" name="pqn" value="1"></input>
                                            <input type="hidden" name="pstock" class="pstock" value="'.$row['pstock'] .'"></input>      
                                            <button class="atc" onclick="atc(this)">Add to Cart</button>
                                            <div class="prdct-desc" onclick="showProductSpecs()">
                                                <input type="hidden" name="proid" class="proid" value="' . $row['pid'] . '"></input>
                                                <a href="#product-specs" class="showprdct" onclick="showproduct(this)">View</a>
                                            </div>
                                        </div>';
                        }
                        echo '<div class="prdct">
                                  <p class="seeMore"><a href="Products.php?category='.$category.'">See all<i class="fas fa-angle-double-right"></i></a></p>
                             </div>';
                    }
            echo '</div>
            </div>';
    }
?>