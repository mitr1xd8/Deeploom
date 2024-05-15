<?php
session_start();
require_once 'parts/header.php';
require_once 'dbconnect.php';
$stmt = $pdo->query('SELECT * FROM product WHERE IsNew = 1');?>
    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="images/bg_1.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#Нові товари</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">Нова колекція взуття 2019</h1>
				            <p class="mb-4">Удосконалюючи технології виробництва різних видів взуття і аксесуарів, магазин Minishop щорічно пропонує модні новинки. Вони призначені для людей, які обирають комфорт.</p>
				            <p><a href="shop.php" class="btn-custom">Дізнатись більше</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="images/bg_2.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#Нові товари</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">Нова колекція зимнього взуття</h1>
				            <p class="mb-4">Удосконалюючи технології виробництва різних видів взуття і аксесуарів, магазин Minishop щорічно пропонує модні новинки. Вони призначені для людей, які обирають комфорт.</p>

				            <p><a href="shop.php" class="btn-custom">Дізнатись більше</a></p>
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-bag"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Безкоштовна доставка</h3>
                <p>Магазин обовязково доставить товар в ваше місто до того ж безкоштовно.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Повна підтримка</h3>
                <p>Якщо виникли проблеми з доставкою товару, з самим товаром або викинли інші питання зв'яжіться з нами.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-payment-security"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Гаратнія безпеки</h3>
                <p>Ми гарантуємо безпеку ваших даних та товарі що ви замовили.</p>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Нові товари</h2>
            <p>Оновлюйся разом з нами</p>
          </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row">


          <?php
            while($row = $stmt->fetch(PDO::FETCH_OBJ))
            {
           ?>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a href="product-single.php?post_id=<?=$row->Idproduct?>" class="img-prod"><img class="img-fluid" src="<?=$row->Photo?>" alt="">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Рейтинг</span>
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
    						<h3><a href="product-single.php?post_id=<?=$row->Idproduct?>"><?=$row->NameProduct?></a></h3>
    						<div class="pricing">
	    						<p class="price"><span><?=$row->Price?>грн</span></p>
	    					</div>
    					</div>
    				</div>
    			</div>
            <?php }?>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
    	<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-4">
						<div class="choose-wrap divider-one img p-5 d-flex align-items-end" style="background-image: url(images/choose-1.jpg);">

    					<div class="text text-center text-white px-2">
								<span class="subheading">Чоловічі взуття</span>
    						<h2>Чоловіча колекці</h2>
    						<p>Великий вибір оригінальних фірмового взуття</p>
    						<p><a href="shop.php" class="btn btn-black px-3 py-2">Купити зараз</a></p>
    					</div>
    				</div>
					</div>
					<div class="col-lg-8">
    				<div class="row no-gutters choose-wrap divider-two align-items-stretch">
    					<div class="col-md-12">
	    					<div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end" style="background-image: url(images/choose-2.jpg);">
	    						<div class="col-md-7 d-flex align-items-center">
	    							<div class="text text-white px-5">
	    								<span class="subheading">Жіноче взуття</span>
			    						<h2>Жіноча колекція</h2>
			    						<p>Великий вибір оригінальних фірмового взуття</p>
			    						<p><a href="shop.php" class="btn btn-black px-3 py-2">Купити зараз</a></p>
			    					</div>
	    						</div>
	    					</div>
	    				</div>
    					<div class="col-md-12">
    						<div class="row no-gutters">
    							<div class="col-md-6">
		    						<div class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
		    							<div class="text text-center px-5">
		    								<span class="subheading">Літній розпродаж</span>
				    						<h2>Знижди до 50%</h2>
				    						<p>Для вас свіжий товарчик для нас хороший наварчик</p>
				    						<p><a href="shop.php" class="btn btn-black px-3 py-2">Купити зараз</a></p>
				    					</div>
		    						</div>
	    						</div>
	    						<div class="col-md-6">
		    						<div class="choose-wrap wrap img align-self-stretch d-flex align-items-center" style="background-image: url(images/choose-3.jpg);">
		    							<div class="text text-center text-white px-5">
		    								<span class="subheading">Взуття</span>
				    						<h2>Найкращі продавці</h2>
				    						<p>Для вас свіжий товарчик для нас хороший наварчик</p>
				    						<a href="shop.php" class="btn btn-black px-3 py-2">Купити зараз</a></p>
				    					</div>
		    						</div>
	    						</div>
	    					</div>
    					</div>
    				</div>
    			</div>
  			</div>
    	</div>
    </section>
<?php
require_once 'parts/footer.php';
?>
