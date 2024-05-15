<?php
require_once 'parts/header.php';
if(isset($_POST['shop_price'])){
    $priceD = $_POST['priceD'];
    $priceP = $_POST['priceP'];
    $stmt = $pdo->query("SELECT * FROM `product` WHERE Price > {$priceD} AND Price < {$priceP}");

}else {
	$stmt = $pdo->query('SELECT * FROM product');
}
if(isset($_POST['namef'])){
    $findname1 = $_POST['findname'];
    if ($findname1 =="") {
      $stmt = $pdo->query('SELECT * FROM product');
    }
  else {
    $stmt = $pdo->query("SELECT * FROM `product` WHERE NameProduct = '{$findname1}'");
  }
}
if(isset($_POST['typef'])){
  $type1 = $_POST['type'];
  if($type1 == "Всі"){
      $stmt = $pdo->query('SELECT * FROM product');
  }
  else {
    $stmt = $pdo->query("SELECT * FROM `product` WHERE Category = '{$type1}'");
  }
}
?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"></span><span>Каталог</span></p>
            <h1 class="mb-0 bread"></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-lg-10 order-md-last">
    				<div class="row">
              <?php
                while($row = $stmt->fetch(PDO::FETCH_OBJ))
                {
               ?>
		    			<div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
		    				<div class="product d-flex flex-column">
		    					<a href="product-single.php?post_id=<?=$row->Idproduct?>" class="img-prod"><img class="img-fluid" src="<?=$row->Photo?>" alt="">
		    						<div class="overlay"></div>
		    					</a>
		    					<div class="text py-3 pb-4 px-3">
		    						<div class="d-flex">
		    							<div class="cat">

				    					</div>
				    					<div class="rating">
			    							<p class="text-right mb-0">
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    								<a href="#"><span class="ion-ios-star-outline"></span></a>
			    							</p>
			    						</div>
			    					</div>
		    						<h3><?=$row->NameProduct?></h3>
		    						<div class="pricing">
			    						<p class="price"><span><?=$row->Price?> грн</span></p>
			    					</div>
		    					</div>
		    				</div>
		    			</div>
                <?php }?>

		    		</div>

		    	</div>

          <div class="col-md-4 col-lg-2">
		    		<div class="sidebar">
							<div class="sidebar-box-2">
								<h2 class="heading">Пошук</h2>
								<div class="fancy-collapse-panel">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                         <div class="panel-heading" role="tab" id="headingTwo">
                             </div>
                         </div>
                     </div>
                  </div>
               </div>
							</div>
              <div class="sidebar-box-2">
                <form method="post" class="colorlib-form-2">
                  <div class="row">
                    <form action="" method="POST">
                      Пошук по типу:
                      <div class="form-field">
                        <select name="type" class="form-control">
                          <option value="Всі">Всі</option>
                          <option value="Капелюхи">Капелюхи</option>
                          <option value="Куртки">Куртки</option>
                          <option value="Кофти">Кофти</option>
                          <option value="Штани">Штани</option>
                          <option value="Рубашки">Рубашки</option>
                        </select>
                      </div>
                      <button style="margin-top:10px;margin-bottom:10px;" type="submit" name="typef">Застосувати</button>

                      Пошук за назвою:
                      <input type="text" name="findname" placeholder="Введіть назву">
                      <button style="margin-top:10px;" type="submit" name="namef" >Застосувати</button>
                    <div class="col-md-12">
                      <div class="form-group">
                        Пошук по ціні<br>
                        <label for="guests">З:</label>
                        <div class="form-field">
                          <i class="icon icon-arrow-down3"></i>
                          <select name="priceD" id="people" class="form-control">
                            <option value="1">1</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                            <option value="1000">1000</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="guests">ПО:</label>
                        <div class="form-field">
                          <i class="icon icon-arrow-down3"></i>
                          <select name="priceP" id="people" class="form-control">
                            <option value="2000">2000</option>
                            <option value="4000">4000</option>
                            <option value="6000">6000</option>
                            <option value="8000">8000</option>
                            <option value="10000">10000</option>
                          </select>
                        </div>
                      </div>
                    </div>
            <button type="submit" name="shop_price"  id="button_price">Застосувати</button>
            </form>
                  </div>
                </form>
              </div>
						</div>
    			</div>
    		</div>
    </section>

		<section class="ftco-gallery">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
            <h2 class="mb-4">Слідкуйте за нами в Instagram</h2>
          </div>
    		</div>
    	</div>
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-5.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-2 ftco-animate">
						<a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-6.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>

        </div>
    	</div>
	</section>
<?php require_once 'parts/footer.php' ?>
