 <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>

    <div class="container">
      <div class="client_container layout_padding2">
       <?php 
                        $query = "SELECT * FROM testimonial";
                        $select_all_testi = mysqli_query($connection,$query);
                        
                        while($row = mysqli_fetch_assoc($select_all_testi)) {
                            
                            $pict_id = $row['pict_id'];
                            $name = $row['name'];
                            $address = $row['address'];
                            $image = $row['image'];
                            $write_up = substr($row['write_up'],0,1000);
                            
                            
                            
                            ?>
        <div class="client_box b-1">
          <div class="client-id">            
            <div class="img-box">
              <img src="images/<?php echo $post_image;?>" alt="" />
            </div>
            <div class="name">
              <h5>
                <?php echo $name ?>
              </h5>
              <p>
                <?php echo $address ?>
              </p>
            </div>
          </div>
          <div class="detail">
            <p>
             <?php echo $write_up ?>
            </p>
            <div>
              <div class="arrow_img">
              </div>
            </div>
          </div>
        </div>
        
        <div class="client_box b-2">
          <div class="client-id">
            <div class="img-box">
              <img src="img/<?php echo $post_image;?>" alt="" />
            </div>
             <div class="name">
              <h5>
                <?php echo $name ?>
              </h5>
              <p>
                <?php echo $address ?>
              </p>
            </div>
          </div>
          <div class="detail">
            <p>
             <?php echo $write_up ?>
            </p>
            <div>
              <div class="arrow_img">
              </div>
            </div>
          </div>
        </div>
        
 <?php           
                        }
                        
                        ?>
        
      </div>
    </div>
  </section>
          
