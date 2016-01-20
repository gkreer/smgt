
jQuery(document).ready(function()
{
  jQuery('.actualizaEfectivo').change(
             
    function actualizarEfectivo()
	{

		var total = parseInt(jQuery('#totalRecaudado').val());
		var aportes = parseInt(jQuery('#aporteBPS').val());
		var vales = parseInt(jQuery('#montoVales').val());
		var credito = parseInt(jQuery('#montoCredito').val());

		var efectivo = total + aportes - vales - credito;
		jQuery('#montoEfectivo').val(efectivo);
	}
         );

  jQuery('.actualizaSalario').change(
             
    function actualizarSalario()
	{
		var total = parseInt(jQuery('#totalRecaudado').val());		
		var salario = total * 0.29;

		jQuery('#salario').val(salario.toFixed(2));
	}
         );

	
	jQuery('.actualizaGastos').change(
             
    function actualizarGastos()
	{
		var salario = parseInt(jQuery('#salario').val());
		var aceite = parseInt(jQuery('#gastoAceite').val());
		var lavado = parseInt(jQuery('#gastoLavado').val());
		var taller = parseInt(jQuery('#gastoMantenimiento').val());
		var otros = parseInt(jQuery('#otroGasto').val());

		var total = salario + aceite + lavado + taller + otros;
		jQuery('#montoGastosTotal').val(total.toFixed(2));

		var totalCombustible = parseInt(jQuery('#montoCargaCombustible').val());
		var gastosTotales = total + totalCombustible;
		jQuery('#totalGastos').val(gastosTotales.toFixed(2));

	}
         );
	
		jQuery('.actualizaTotales').change(
             
    function actualizarTotales()
	{
		var totalRec = parseInt(jQuery('#totalRecaudado').val());
		var totalGastos = parseInt(jQuery('#montoGastosTotal').val());
		var totalCombustible = parseInt(jQuery('#montoCargaCombustible').val());
		
		var gastos = totalGastos + totalCombustible;
		var liquido = totalRec - gastos;
		
		jQuery('#total').val(totalRec.toFixed(2));
		jQuery('#totalGastos').val(gastos.toFixed(2));
		jQuery('#liquido').val(liquido.toFixed(2));

	}
         );

  jQuery('.actualizaPesoPorKm').change(
             
    function actualizarPesoPorKm()
	{
		var total = parseInt(jQuery('#totalRecaudado').val());
		var kmsTotales = parseInt(jQuery('#kmsTotalSalida').val());		
		var pesoPorKm = 0;
		if(kmsTotales > 0)
			pesoPorKm = total / kmsTotales;

		jQuery('#pesoPorKm').val(pesoPorKm.toFixed(2));
	}
         );
});

