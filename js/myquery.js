jQuery( function() {
  var counter = 0;
  $('.item-d1').each(function(){
      counter++;
  });
  $("#kensu").html(counter);
});

$(function() {
  $("#myTable,#myTable2,#myTable3").tablesorter();
    
  });
