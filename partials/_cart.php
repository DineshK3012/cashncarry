<?php
     if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
     {
         require 'partials/_connectdb.php';

         $username = $_SESSION['username'];

         $fci  = "SELECT * FROM `ucart` WHERE `username`='$username'";
         $resultfci = mysqli_query($conn, $fci);

         //find the number of records returned
         $num = mysqli_num_rows($resultfci);

         //displaying the rows returned by the sql query
         if ($num > 0) {
             //now fetching using while loop
             while ($row = mysqli_fetch_assoc($resultfci))
             {
                 $pid = $row['pid'];
                 $pqn = $row['pqn'];

                 $sql1 = "SELECT * FROM `products` WHERE `pid`= '$pid'";
                 $result1 = mysqli_query($conn, $sql1);
                 $prdt = mysqli_fetch_assoc($result1);

                 echo '<div class="cart-itm">
                             <input type="hidden" name="proid" class="proid" value="'.$pid.'">
                             <i class="fas fa-times" id="dfc" onclick="dfc(this)"></i>
                             <div class="cart-itm-img">
                                 <img src="'.$prdt['src1'].'" alt="cart-item-img">
                             </div>
                             <div class="cart-itm-details">
                                 <p class="cart-itm-desc">
                                 '.$prdt['pname']. ' ('.$prdt['punit'].')
                                 </p>
                                 <div class="cart-itm-price">
                                     <div class="item-qn">
                                         <i class="fas fa-minus-circle deqn" onclick="decreaseQn(this),updateCart()"></i>
                                         <input type="number" name="quantity" class="pqn" value="'.$pqn.'" readonly>
                                         <i class="fas fa-plus-circle inqn" onclick="increaseQn(this),updateCart()"></i>
                                         <b>X</b>
                                     </div>
                                     <div class="item-p">
                                         <b>₹</b><span>'.$prdt['pprice'].'</span>
                                     </div>
                                     <div class="item-tp">
                                         <b>₹</b><span></span>
                                     </div>
                                 </div>
                             </div>
                         </div>';
             }
         }
     }
?>