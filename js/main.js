//Search
$(function(){
	var abre = $('.search span');
	var caixa = $('.searchbox');
	abre.click(function(){
		caixa.toggleClass('abre');
		if (has_class('abre')) {
			caixa.find('#s').focus();
		}
	});
});

//Menu mobile
$(function(){
    var botao = $('header#site .menuMobile i');
    var menu = $('header#site nav ul');
    botao.click(function(){menu.toggleClass('ativa');});
});

//Scroll
$('.readmore').on('click',function(){
	var header = $('header#site').outerHeight();
	var post = $('article.content-post').offset().top;
	var scroll = post - header;
	$.scrollTo((scroll) || 0, 750);
});

function footerfixo(elemento,destino) {
	alturawindow = window.innerHeight;
	var d = destino.outerHeight() + destino.offset().top;
	//Footerz
	scrolltop = $(window).scrollTop();
	scrolltop = scrolltop + alturawindow;
	if (scrolltop >= d) {
		elemento.removeClass('fixed');
	} else {
		elemento.addClass('fixed');
	}
}

$(window).scroll(function(){
	footerfixo($('footer#site .row1'),$('footer#site .alturarow1'));
});

footerfixo($('footer#site .row1'),$('footer#site .alturarow1'));