$(document).ready(function(){
	$("#music").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=musica')
   });
   $("#jogos").click(function(){
      ajax('.conteudo', 'conteudo.php?cat=jogos')
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
