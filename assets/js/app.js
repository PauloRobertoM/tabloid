function exportImg()
{
	// $('.stage').css('transform', 'scale(2)');

	var viewportContent = $('.stage')[0];

	$('.productContainer').removeClass('editing'); // Remove editing dashes
	$('.deleteButton').hide();

	html2canvas(viewportContent,
	{
		onrendered: function(canvas)
		{	
			$('body').append('<div id="canvasImg" style="display: none;"></div>');

			document.getElementById('canvasImg').appendChild(canvas);
			
			$('#canvasImg canvas').addClass('myCanvas');

			// --

			var canvas = $('.myCanvas')[0];

			canvas.toBlob(function(blob)
			{
			    saveAs(blob, "tablÃ³ide.png");
			});

			// --

			// $('.stage').css('transform', 'scale(1)');

			$('.productContainer').addClass('editing');
			$('.deleteButton').show();

			$('#canvasImg').remove();
	  	}
	});
}

function saveUser()
{
	var _form = $('.frmUser');

	$.ajax
	({
		url: _form.attr('action'),
		data: _form.serialize(),
		type: 'POST',

		beforeSend: function()
		{
			
		},

		success: function(data)
		{		
			alert(data);
		}
	});

	return false;
}

function setFinish(id)
{
	Messi.ask('Deseja finalizar o tablÃ³ide e enviar para aprovaÃ§Ã£o?', function(val)
	{
		if(val == 'Y')
		{
			$.ajax
			({
				url: '/tabloide?setFinish=true',
				data: 
				{
					'id': id
				},
				type: 'GET',

				beforeSend: function()
				{
					
				},

				success: function(data)
				{		
					new Messi('Seu tablÃ³ide foi finalizado e foi enviado para aprovaÃ§Ã£o.', { title: 'Pronto!', titleClass: 'success', buttons: [{ id: 0, label: 'Fechar', val: 'X' }] });
				}
			});
		}
	});
}

function addItemSubmit(form)
{
	var imgFile = $('#imgFile').val();
	var productPrice = $('#preco').val();
	var productTitle = $('.produto-form-name').html();
	var productWeight = $('#peso').val();


	if(productPrice == 0
		|| productPrice == '')
	{
		alert('Por favor, digite um preÃ§o vÃ¡lido.');
	}
	else
	{
		if(parseInt(productWeight) >= 10)
		{
			productWeight += 'g';
		}
		else
		{
			productWeight += 'kg';
		}

		// Math.floor((Math.random() * 100) + 1

		var stage = $('.stage');

		var stageCenterTop = (parseInt(stage.css('height')) / 2);
		var stageCenterLeft = (parseInt(stage.css('width')) / 2);

		console.log('x: ' + stageCenterTop);
		console.log('y: ' + stageCenterLeft);

		var _form = $(form);
		var _formData = _form.serialize();

		_formData += '&x=' + stageCenterTop + '&y=' + stageCenterLeft;

		$.ajax
		({
			url: _form.attr('action'),
			type: 'POST',
			data: _formData,

			beforeSend: function()
			{

			},

			success: function(data)
			{
				var prodItemId = parseInt(data);

				insertProductContainer(prodItemId, productTitle, '/webroot/upload/prod-itens/' + imgFile, productWeight, productPrice, stageCenterTop, stageCenterLeft);
			}
		});
	}

	return false;
}

function deleteItem(id)
{
	Messi.ask('Tem certeza que deseja deletar este produto?', function(val)
	{
		if(val == 'Y')
		{
			$.ajax
			({
				url: '/template?deleteItem=true',
				type: 'GET',
				data: 
				{  
					'id': id,
				},

				beforeSend: function()
				{

				},

				success: function()
				{
					$('.productContainer[data-id="' + id + '"]').fadeOut('fast', function()
					{
						$(this).remove();
					});

					console.log('id: ' + id + ' - delete');
				}
			});	
		}
	});
}

function createDragListener()
{
	$('.productContainer').draggable
	({
		start: function()
		{
			
		},

		drag: function()
		{
			
		},

		stop: function(event, ui)
		{
			var pos = ui.position;
			var id = $(this).data('id');

			$.ajax
			({
				url: '/template?setPosition=true',
				type: 'GET',
				data: 
				{  
					'id': id,
					'x': pos.top,
					'y': pos.left
				},

				beforeSend: function()
				{

				},

				success: function()
				{
					console.log('id: ' + id + ' - drop: ' + pos.top + 'x' + pos.left);
				}
			});
		}
	});
}

// insertProductContainer(2, 'produto teste', 'http://www.tex-jmacedo.com.br/webroot/upload/prod-itens/1410204604.png', '2kg', '2,00', 300, 150);

function insertProductContainer(id, title, img, weight, price, top, left)
{
	$('#viewportContent').append(' \
		<div class="productContainer editing" data-id="' + id + '" style="display: none; top: ' + top + 'px; left: ' + left + 'px;"> \
			<div class="imgContainer"> \
				<img src="' + img + '" alt="' + title + '"> \
			</div> \
			<div class="deleteButton" onclick="deleteItem(' + id + ');">X</div> \
			<div class="infoContainer"> \
				<span class="title">' + title + '</span> \
				<span class="weight">' + weight + '</span> \
				<div class="price"> \
					<span>R$</span> ' + price + ' \
				</div> \
			</div> \
		</div>');

	$('#viewportContent .productContainer[data-id="' + id + '"]')/*.draggable().resizable()*/.fadeIn('fast');

	createDragListener();
}

function changeProduct()
{
	var _elem = $('.produto').children('option:selected');

	$('#dadosProd').show();

	$('#preco').val('');

    var img = _elem.data('img');
    var peso = _elem.data('weight');
    var code = _elem.data('code');

    var minPrice = _elem.data('minprice');
    var maxPrice = _elem.data('maxprice');

    $('#minPrice').val(minPrice);
    $('#maxPrice').val(maxPrice);

    if(typeof img == 'undefined'
    	|| img == '')
    {
    	$('#div-input-file').css('background-color', '#CCC');
    	$('#div-input-file').css('background-image', 'none');
    }
    else
    {
    	$('#div-input-file').css('background-color', 'transparent');
    	$('#div-input-file').css('background-image', 'url(webroot/upload/prod-itens/' + img + ')');
    }

    $('#imgFile').val(img);

    $('#peso').val(peso);
    $('#codigo').val(code);

    $('.produto-form-name').html(_elem.html());
}

function addProductForm()
{
	$('html, body').animate({ scrollTop: $(document).height() }, 'slow');
	$('div.footer').show();

	var value = $('.forms.form-interno').val();

	var all = value.split('-');

	$('input.linha').val(all[0]);
	$('input.coluna').val(all[1]);
}

$(document).ready(function()
{
	$('.stage').css('width', $('#viewportContent').width() + 'px')
			   .css('height', $('#viewportContent').height() + 'px');

	// --
	
	addProductForm();

	// --

	$('.exportar').click(function()
	{
		exportImg();
	});

	// -- 

	$('.box-menu-list').each(function()
	{
		var quantLink = $(this).children('li').length,
			widthLink = quantLink * 102;
		
		$(this).css('width', widthLink + 'px');
	});

	$('.ativaDropdown').mouseenter(function()
	{
		$(this).next().show();
	});

	$('.box-dropdown').mouseenter(function()
	{
		$(this).prev().addClass('ativo');
	});

	$('.box-dropdown').mouseleave(function()
	{
		$(this).prev().removeClass('ativo');
	});

	$('.meusTabloides').click(function(e)
	{
		$('.bg-light').fadeIn(500);
		$('.lightbox-content').css('display', 'table');

		return false;
	});

	$('.meusTabloides2').click(function(e)
	{
		$('.bg-light').fadeIn(500);
		$('.lightbox-content2').css('display', 'table');

		return false;
	});

	$('.meusTabloides3').click(function(e)
	{
		$('.bg-light').fadeIn(500);
		$('.lightbox-content3').css('display', 'table');

		return false;
	});

	$('.close').click(function()
	{
		$('.bg-light').fadeOut(500);
		$('.lightbox-content, .lightbox-content2, .lightbox-content3').css('display', 'none');
	});

	$('.marcaList').bind('change', function()
	{
		var marca = $(this).val();

		$.ajax
		({
			url: '/models/ajax/listProd.php',
			type: 'POST',
			
			data:
			{
				'marca': marca
			},

			success: function(data)
			{
				$('div.listProd').html(data);
			}
		});

		return false;

	});

	$('.produto').bind('change', function()
	{
		$('#dadosProd').css('display', 'block');
	});
});