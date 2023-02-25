<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php"><span>HOME</span></a></li>
          <li class="dropdown"><a href="all_product.php"><span>CATEGORY</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="category_nct.php">NCT</a></li>
              <li><a href="category_enhypen.php">ENHYPEN</a></li>
              <li><a href="category_treasure.php">TREASURE</a></li>
            </ul>
          </li>
          
          <li class="dropdown"><a href="#"><span>STATUS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="status.php">ติดตามสถานะ</a></li>
              <li><a href="report.php">แจ้งปัญหา</a></li>
            </ul>
          </li>

                    <!-- search box right -->
          
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<form action="finding.php" method="GET" id="formS">
            <input type="search" id="query" name="search"
             placeholder="Search..."
             aria-label="Search through site content">
             <div class="d-grid gap-2 d-md-flex justify-content-md-end">
             <button type="submit"  value="Search">
              <svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
              <a href= "finding.php"></a></path></svg>
            </button>  
          </form>
                    
                   
                    
                  </div>
                    <?php
                      
                      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
                      $row_count = mysqli_num_rows($select_rows);

                    ?>
                  <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true" style="font-size:30px;color:rgb(250, 243, 243)"></i><span>&emsp;Cart (<?php echo $row_count; ?>)</span></a>
          
                    <li class="dropdown"><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size:30px;color:rgb(250, 243, 243)"></i><i class="bi bi-chevron-down"></i></a>
                      <ul>
                        <li><a href="edit_profile.php">Edit Profile</a></li>
                        <li><a href="index.php">Log out</a></li>
                      </ul>
                    </li>
                  </li>

      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->