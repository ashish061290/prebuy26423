<div class="container-fluid home-page1" >
  <div class="color1">
  <div class="heading-part align-center mb-10">
  <h2 class="main_title"><span>Our Popular Categories</span></h2>
</div>

<div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <?php foreach($Category as $row){
                        ?>
                    <div class="item text-center">
                      <div class="category-img">
                        <img src="<?=$row['category_img']?>" alt="<?=$row['category_name']?>" id="item-img">
                    </div>
                    <a href="category.php?category=<?=$row['title']?>"><p><?=$row['category_name']?></p></a>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</div></div>

