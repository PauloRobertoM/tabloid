<?php include 'components/head.php'; ?>

<body>
	<main>
		<header>
			<div class="topo">
				<div class="logo"></div>
				<ul class="menu-topo">
					<li><a href="/">Sair</a></li>
				</ul>
			</div>
		</header>
		<div class="center">
			<h2 class="title2">ESCOLHA O TEMPLATE QUE DESEJA MONTAR:</h2>
			<div class="box-templates">
				<div class="template-mini">
					<a href="/template?id=17&tamanho=2" class="left">
						<div class="mask-img" style="background: url(assets/images/1576942022.png) no-repeat; background-size: 100%; overflow: hidden;"></div>
					</a>
					<p class="template-mini-title">TESTE</p>
					<p class="template-mini-subtitle">Clique para usar esse template</p>
				</div>
				<div class="template-mini">
					<a href="/template?id=19&tamanho=2" class="left">
						<div class="mask-img" style="background: url(assets/images/1577102084.png) no-repeat; background-size: 100%; overflow: hidden;"></div>
					</a>
					<p class="template-mini-title">TENA</p>
					<p class="template-mini-subtitle">Clique para usar esse template</p>
				</div>
			</div>
		</div>
	</main>

<?php include 'components/footer.php'; ?>
<script src="assets/js/imgcentering.js"></script>
<script type="text/javascript">
	$(".mask-img div img").imgCentering({
		'forceSmart': true
	});
</script>