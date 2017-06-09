$('.title').css('line-height', $('.logo').css('height'));
$('.btnInsc').click(function(){
  $('.inscription').toggle('drop');
});
var checkUser = false;
function checkConf(a, b){
  a.keyup(function(){
    if(a.val().length>7 && a.val()==b.val()){ a.css('background','none'); }
    else{a.css('background','rgba(255, 122, 0, 0.64)'); }
  });
  return (a.val().length>7 && a.val()==b.val());
}
function checkField(a, b){
  a.keyup(function(){
    if(a.val().length>b){
      a.css('background','none');
    }else{a.css('background','rgba(255, 122, 0, 0.64)');}
  });
  return a.val().length>b;
}
checkField($('.nom'), 1);
checkField($('.prenom'), 2);
$('.uname').keyup(function(){
  if($(this).val().length>=3){
    $.post(
      'php/suscribe.php',
      {
        pseudo: $(this).val(),
        opt : 'pseudo'
      },
      function(data){
        if(data=='ok'){$('.uname').css('color','#000'); $('.pseudoBad').css('display','none');$('.pseudoOk').css('display','block'); checkUser=true;}
        else{$('.uname').css('color','rgb(240, 108, 0)');  $('.pseudoBad').css('display','block');$('.pseudoOk').css('display','none'); checkUser=false;}
      }
    );
  }else{
    $('.uname').css('color','rgb(240, 108, 0)');
  }
});

checkField($('.pass'), 7);
checkField($('.contact'), 7);
checkConf($('.confpass'), $('.pass'));
checkField($('.mail'), 5);

$('.inscForm').submit(function(e){
  $('.inscErr').css('display', 'none');
  e.preventDefault();
  $('.Berr').css('display','none');
  if(checkField($('.nom'), 1) && checkField($('.prenom'), 2) && checkUser && checkField($('.pass'), 7) &&
    checkField($('.contact'), 7) && checkConf($('.confpass'), $('.pass'))){
      $.post(
        'php/suscribe.php',
        {
          opt: 'ok',
          nom: $('.nom').val(),
          prenom: $('.prenom').val(),
          uname: $('.uname').val(),
          password: $('.pass').val(),
          mail: $('.mail').val(),
          contact: $('.contact').val()
        },
        function(data){
          alert(data);
        }
      );
    }else{
      $('.inscErr').toggle('drop');
    }
});
