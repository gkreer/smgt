jQuery(document).ready(function(){
      var i=1;
     jQuery("#add_row").click(function(){
      jQuery('#addr'+i).html("<td>"+ (i+1) +
        "</td><td><input name='descripcion"+i+
        "' type='text' placeholder='Descripcion' class='form-control input-md'  /> </td><td><input  name='monto"+i
        +"' type='number' placeholder='Monto'  class='form-control input-md'></td><td>");

      jQuery('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     jQuery("#delete_row").click(function(){
       if(i>1){
     jQuery("#addr"+(i-1)).html('');
     i--;
     }
   });

});