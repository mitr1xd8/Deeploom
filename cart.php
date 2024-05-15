<?php 
require_once 'parts/header.php';
	   $query = $pdo->query('SELECT * FROM `cart`');
 ?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2">Каталог</span> <span>Корзини</span></p>
            <h1 class="mb-0 bread">Мій список бажань</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Товар</th>
						        <th>Ціна</th>
						        <th>Кількість</th>
								<th>Розмір</th>
						        <th>Всього</th>
						      </tr>
						    </thead>
						    <tbody>
									<form action="function.php" method="POST">
								<?php
									 while($row = $query->fetch(PDO::FETCH_OBJ)){
									 $queryCart = $pdo->query("SELECT * FROM `product` WHERE Idproduct = $row->IdProduct"); 
									 $rowCart = $queryCart->fetch(PDO::FETCH_OBJ);
									 $p = $row->count;
									 $s	= $rowCart->Price;
									 $g= $p*$s;
									 $proc += $g;
									 ?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="function.php?cart_delete=<?=$rowCart->Idproduct?>"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img"><img class="img-fluid"  src="<?=$rowCart->Photo?>" alt=""></div></td>

						        <td class="product-name">

                      <span><?=$rowCart->NameProduct?></span>
						        </td>

						        <td class="price">
                      <span id="pr"><?=$rowCart->Price?></span>
                    </td>
						        <td class="quantity">
					             	<span><?=$row->count?></span>
					          </td>
										<td>
											  <span><?=$row->size?></span>
										</td>


						        <td class="total"><span>
											<?echo $p*$s;?></span>грн</td>
						      </tr>
										<?}?>
							  <!-- END TR-->
								</form>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-start">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Ціна загалом</h3>
    					<p class="d-flex">
    						<span name="totul">Ціна</span>
    						<span><?echo $proc?>грн</span>
    					</p>
    					<p class="d-flex">
    						<span>Доставка</span>
    						<span>0.00грн</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Всього</span>
    						<span><?echo $proc?>грн</span>
    					</p>
    				</div>

    				<p class="text-center"><a href="checkout.php?proc=<?=$proc?>" class="btn btn-primary py-3 px-4">Перейти до покупки</a></p>
    			</div>
    		</div>
			</div>
		</section>
		<script src="js/control.js"></script>
		<?php
		require_once 'parts/footer.php'; ?>
