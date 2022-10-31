  <!-- Banner -->
  
  <section>
      <div class="banner text-center" >
       <?php
      
        if(isset($_GET['quanly']))
          {
            $tam=$_GET['quanly'];
          }
          else
          {
            $tam='';
          }
          if($tam=='vieclam')
          {
            include("main/vieclam.php");
          }
          elseif($tam=='ungvien')
          {
            include("main/ungvien.php");
          }
          elseif($tam=='congty')
          {
            include("main/congty.php");
          }
          elseif($tam=='tintuc')
          {
            include("main/tintuc.php");
          }
          elseif($tam=='lienhe')
          {
            include("main/lienhe.php");
          }
          else
          {
            include("main/index.php");
          }
      

       ?> 
      
    </div>
    </section>
   