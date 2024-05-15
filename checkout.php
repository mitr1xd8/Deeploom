<?php
require_once 'parts/header.php';
 ?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"></span> <span>Сторінка оплати</span></p>
            <h1 class="mb-0 bread">Оплата</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 ftco-animate">
						  <form action="function.php" method="POST">
							<h3 class="mb-4 billing-heading">Заповніть поля</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="fio">Ім'я</label>
	                  <input type="text" class="form-control" name="fio"  placeholder="Прізвище ім'я побатькові"required>
	                </div>
	              </div>
                <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="birthday">День народження</label>
		                  <input type="date" class="form-control" name="birthday" placeholder="дд.мм.рррр."required>
		            	</div>
		            </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="city">Місто</label>
		                  <input type="text" class="form-control" name="city" placeholder="Житомир"required>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
	                	<label for="address">Адреса</label>
	                  <input type="text" class="form-control" name="address" placeholder="Вулиця,номер будинку так номер квартири"required>
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-12">
	                <div class="form-group">
	                	<label for="phone">Телефон</label>
	                  <input type="tel" class="form-control" pattern="\+380\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" name="phone" placeholder="+380(___)___-__-__"required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="email">Пошта</label>
	                  <input type="email" class="form-control" name="email" placeholder="mail@example.com"required>
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										  <label class="mr-3"> <a href="login_form.php">Створити аккаунт?</a> </label>
									</div>
                </div>
	            </div>
	         <!-- END -->



	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Загалом</h3>
	          			<p class="d-flex">
		    						<span>Ціна</span>
		    						<span><?=$_GET['proc']?><?=$row->Price?>грн</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Доставка</span>
		    						<span>0.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Всього  </span>
		    						<span><?=$_GET['proc']?>грн</span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail bg-light p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
									</div>
									<p>
                  <button type="submit"  class="btn btn-primary py-3 px-4" name="check">Залишити замовлення</button></p>

								</div>
	          	</div>
	          </div>
             </form>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

	<?php
  require_once 'parts/footer.php'; ?>
