<?php include 'components/head.php'; ?>
<?php include 'components/header-interna.php'; ?>

<?php include 'components/sidebar.php'; ?>

	<section class="left" style="">
		<p class="title-section left">área de ação</p>
		<ul class="menu-actions right">
			<li><a href="#">volta</a></li>
			<li><a href="#">desce</a></li>
			<li><a href="#">avança</a></li>
			<li><a href="#">move</a></li>
			<li><a href="#">zoom</a></li>
		</ul>

		<div class="stage">
			<div id="viewportContent" style="width: 900px; height: 1274px; background: url(assets/images/1576942022.png) no-repeat center center; background-size: 100%;"></div>
		</div>
	</section>

	<div class="footer" style="">
		<p class="footer-title">inserir produto</p>
		<form action="/template?addItem=true&templateId=17&tamanhoId=2" class="forms form-interno frmAddItem" onsubmit="addItemSubmit(this); return false;">
			<div id="div-input-file">
				<input name="imgFile" type="hidden" id="imgFile">
			</div>
			<fieldset>
				<select name="marca" class="marcaList selectList" style="width:250px;">
					<option value="" selected disabled>Selecione a marca</option>
					<option value="1">Dona Benta</option>
					<option value="2">Águia</option>
					<option value="3">Brandini</option>
					<option value="4">Boa Sorte</option>
					<option value="5">Sol</option>
					<option value="6">Chiarini</option>
					<option value="7">Petibon</option>
					<option value="8">TENA Pants</option>
					<option value="9">TENA Slip</option>
				</select>
				<div class="listProd">
					<select name="produto" class="produto selectList" style="width:250px;" onchange="changeProduct();">
						<option value="" selected disabled>Selecione o produto</option>
						<option value="5" data-img="1576941498.png" data-weight="1" data-code="123456" data-minPrice="1" data-maxPrice="5">Farinha de trigo</option>
						<option value="6" data-img="1410376148.png" data-weight="200" data-code="123ABC" data-minPrice="3" data-maxPrice="6">Massa p/ lasagna</option>
						<option value="7" data-img="1577101719.png" data-weight="400" data-code="2323423545" data-minPrice="20" data-maxPrice="30">TENA Pants MEN</option>
						<option value="8" data-img="1577102806.png" data-weight="400" data-code="2323423545" data-minPrice="20" data-maxPrice="30">TENA Pants UltraCare</option>
						<option value="9" data-img="1577102974.png" data-weight="400" data-code="w423423" data-minPrice="20" data-maxPrice="30">TENA Slip Noturna</option>
					</select>
				</div>
			</fieldset>

			<fieldset id="dadosProd">
				<input type="hidden" name="peso" id="peso" value="">
				<p class="produto-form-name"></p>
				<label for="">Código</label>
				<input type="text" name="codigo" id="codigo" class="grande" onmousedown="return false;" onkeydown="return false;">
				<label for="">Preço min. (R$)</label>
				<input type="text" class="grande" id="minPrice" onmousedown="return false;" onkeydown="return false;" style="width: 115px;">
				<label for="">Preço max. (R$)</label>
				<input type="text" class="grande" id="maxPrice" onmousedown="return false;" onkeydown="return false;" style="width: 115px;">
				<label for="">Preço final (R$)</label>
				<input type="text" name="preco" id="preco" class="grande">
				<input type="submit" class="button add left" value="adicionar">
			</fieldset>
		</form>
	</div>
	</main>

	<div class="close bg-light"></div>

	<div class="lightbox-content">
		<p class="title-light">meus tablóides</p>
		<ul class="box-meus-tabloides">
			<li data-number="21/12/2019">
				<a href="tabloide?id=35&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=36&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=37&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=38&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=39&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=40&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=41&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=42&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=43&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=44&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=45&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=46&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=47&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="23/12/2019">
				<a href="tabloide?id=48&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="26/12/2019">
				<a href="tabloide?id=49&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="26/12/2019">
				<a href="tabloide?id=50&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="26/12/2019">
				<a href="tabloide?id=51&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="26/12/2019">
				<a href="tabloide?id=52&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="26/12/2019">
				<a href="tabloide?id=53&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="07/01/2020">
				<a href="tabloide?id=54&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="07/01/2020">
				<a href="tabloide?id=55&tamanho=2">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>
			</li>
			<li data-number="07/01/2020">
				<a href="tabloide?id=56&tamanho=2">
					<img src="assets/images/1577102084.png" width="150px" height="150px">
				</a>
			</li>
		</ul>
	</div>

	<div class="lightbox-content2">
		<p class="title-light">meus tablóides</p>
		<ul class="box-meus-tabloides">
			<li data-number="21/12/2019">
				<a href="models/exportar.php?id=35" target="_blank">
					<img src="assets/images/1576942022.png" width="150px" height="150px">
				</a>	
			</ul>
		</div>

		<div class="lightbox-content3">
			<p class="title-light">Dados do usuário</p>
			<ul class="box-meus-tabloides">
				<li class="dadoUsuario">
					<p class="userInfo"><span>Nome:</span> Teste</p>
					<p class="userInfo"><span>Estado:</span> SP</p>

					<form class="frmUser" method="POST" action="?saveUser=true" onsubmit="saveUser(); return false;">
						<label for="email">E-mail:</label> 
						<input name="email" id="email" type="text" value="teste@agencianovi.com.br">

						<label for="senha">Senha:</label> 
						<input name="senha" id="senha" type="password" value="">

						<input type="submit" value="Salvar dados">
					</form>
				</li>
			</ul>
		</div>
	</main>

	<footer class="interna">
		<img src="assets/images/logo-footer-interna.png" alt="">
	</footer>

	<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>

	<script src="assets/js/html2canvas.js"></script>
	<script src="assets/js/imgcentering.js"></script>
	<script src="assets/js/chosen.jquery.js"></script>
	<script src="assets/js/messi.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>