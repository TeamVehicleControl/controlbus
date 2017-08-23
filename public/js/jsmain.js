function abirModalAlertas() {
	google.charts.setOnLoadCallback(drawTable1);
	modal('modalAlertas');
	drawTable1();
}

function drawTable1() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Alerta');
    data.addColumn('number', 'Costo');
    data.addColumn('boolean', 'Solucionadas');
    data.addRows([
      ['Motor',  {v: 10000, f: '$10,000'}, true],
      ['Gasolina',   {v: 8000,  f: '$8,000'},  false],
      ['Bujia', {v: 12500, f: '$12,500'}, true],
      ['Carburador',   {v: 7000,  f: '$7,000'},  true]
    ]);

    var table = new google.visualization.Table(document.getElementById('chart_div7'));

    table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
  }

function logout() {
	$.ajax({
		url   : 'C_main/logout',
		type  : 'POST'
	}).done(function(data){
		try{
			data = JSON.parse(data);
			if(data.error == 0){
				location.href = data.url;
			}else {
				return;
			}
		} catch (err){
			msj('error',err.message);
		}
	});
}