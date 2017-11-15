$(document).ready(function(){
   $("#jogos").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=jogos')
   });
	 $("#teste").click(function(){
			ajax('.conteudo', 'conteudo.php?cat=teste')
	 });
});


function ajax(retorno, urll) {
  $.ajax({
    url : urll,
    success : function(result) {
      $(retorno).html(result);
    }
   });
}
