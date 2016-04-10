	
	function actualizarEfectivo()
	{
	
		var total = isNaN(parseInt(jQuery('#totalRecaudado').val())) ? 0 : parseInt(jQuery('#totalRecaudado').val()) ;
		var aportes = isNaN(parseInt(jQuery('#aporteBPS').val())) ? 0 : parseInt(jQuery('#aporteBPS').val());
		var vales = isNaN(parseInt(jQuery('#montoVales').val())) ? 0 : parseInt(jQuery('#montoVales').val());
		var credito = isNaN(parseInt(jQuery('#montoCredito').val())) ? 0 : parseInt(jQuery('#montoCredito').val());

		var efectivo = total + aportes - vales - credito;
		jQuery('#montoEfectivo').val(efectivo.toFixed(2));
	}

	function actualizarSalario()
	{
		var total = isNaN(parseInt(jQuery('#totalRecaudado').val())) ? 0 : parseInt(jQuery('#totalRecaudado').val());		
		var salario = total * 0.29;

		jQuery('#salario').val(salario.toFixed(2));
	}

	function actualizarGastos()
	{
		var salario = isNaN(parseInt(jQuery('#salario').val())) ? 0 : parseInt(jQuery('#salario').val())  ;
		var aceite = isNaN(parseInt(jQuery('#gastoAceite').val())) ? 0 : parseInt(jQuery('#gastoAceite').val())  ;
		var lavado = isNaN(parseInt(jQuery('#gastoLavado').val())) ? 0 : parseInt(jQuery('#gastoLavado').val()) ;
		var taller = isNaN(parseInt(jQuery('#gastoMantenimiento').val())) ? 0 : parseInt(jQuery('#gastoMantenimiento').val()) ;
		var otros = isNaN(parseInt(jQuery('#otroGasto').val())) ? 0 : parseInt(jQuery('#otroGasto').val())  ;

		var total = salario + aceite + lavado + taller + otros;
		jQuery('#montoGastosTotal').val(total.toFixed(2));

		var totalCombustible = parseInt(jQuery('#montoCargaCombustible').val());
		var gastosTotales = total + totalCombustible;
		jQuery('#totalGastos').val(gastosTotales.toFixed(2));

	}

	function actualizarTotales()
	{
		var totalRec = isNaN(parseInt(jQuery('#totalRecaudado').val())) ? 0 : parseInt(jQuery('#totalRecaudado').val());
		var totalGastos = isNaN(parseInt(jQuery('#montoGastosTotal').val())) ? 0 : parseInt(jQuery('#montoGastosTotal').val());
		var totalCombustible = isNaN(parseInt(jQuery('#montoCargaCombustible').val())) ? 0 : parseInt(jQuery('#montoCargaCombustible').val());
		
		var gastos = totalGastos + totalCombustible;
		var liquido = totalRec - gastos;
		
		jQuery('#total').val(totalRec.toFixed(2));
		jQuery('#totalGastos').val(gastos.toFixed(2));
		jQuery('#liquido').val(liquido.toFixed(2));

	}

	function actualizarPesoPorKm()
	{
		var total = isNaN(parseInt(jQuery('#totalRecaudado').val())) ? 0 : parseInt(jQuery('#totalRecaudado').val());
		var kmsTotales = isNaN(parseInt(jQuery('#kmsTotalSalida').val())) ? 0 : parseInt(jQuery('#kmsTotalSalida').val());		
		var pesoPorKm = 0;
		if(kmsTotales > 0)
			pesoPorKm = total / kmsTotales;

		jQuery('#pesoPorKm').val(pesoPorKm.toFixed(2));
	}


jQuery(document).ready(function()
{
	actualizarEfectivo();
	actualizarGastos();
	actualizarTotales();
	actualizarPesoPorKm();

  jQuery('.actualizaEfectivo').change(
     	function()
     	{
     		actualizarEfectivo();
     	}        
    
         );

  jQuery('.actualizaSalario').change(
             
    function()
	{
		actualizarSalario();
	}
         );

	
	jQuery('.actualizaGastos').change(
             
    function()
	{
		actualizarGastos();

	}
         );
	
	jQuery('.actualizaTotales').change(
             
    function()
	{
		actualizarTotales();

	}
         );

  jQuery('.actualizaPesoPorKm').change(
             
    function(){

    	actualizarPesoPorKm();
		
	});

  jQuery('#listaTaxis').on('change', function(e){
    jQuery(this).closest('form').submit();
	});
  
  jQuery('#listaChoferes').on('change', function(e){
    jQuery(this).closest('form').submit();
	});
  
  jQuery('#fechaDesde').on('change', function(e){
    jQuery(this).closest('form').submit();
	});
  
  jQuery('#fechaHasta').on('change', function(e){
    jQuery(this).closest('form').submit();
	});
  
});

