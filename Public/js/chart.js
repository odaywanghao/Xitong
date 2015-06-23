$(document).ready(function() {



	var data1 = {
		labels : ["bookLast1DayCount","bookLast1DayCount","bookLast1WeelCount","bookAllCount"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,1)",
				data : $('#bookCount').attr('data-data').split('-')
			}]
	};

	var ctx1 = $('#bookCount').get(0).getContext('2d');
	var myNewChart1 = new Chart(ctx1).Bar(data1);

	var data2 = {
		labels : ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : $('#noteEveryCount').attr('data-data').split('-')
				}]
	};

	var ctx2 = $('#noteEveryCount').get(0).getContext('2d');
	var myNewChart2 = new Chart(ctx2).Line(data2);


	var values3 = $('#commentCount').attr('data-data').split('-');
	var data3 = [
		{
			value: values3[0],
			color:"#F38630"
		},
		{
			value : values3[1],
			color : "#E0E4CC"
		},
		{
			value : values3[2],
			color : "#69D2E7"
		},
		{
			value : values3[3],
			color: "#aaaaaa"
		}];
	var ctx3 = $('#commentCount').get(0).getContext('2d');
	var myNewChart3 = new Chart(ctx3).Pie(data3);


	var values4 = $('#noteCount').attr('data-data').split('-');
	var data4 = [
		{
			value: values4[0],
			color:"#F38630"
		},
		{
			value : values4[1],
			color : "#E0E4CC"
		},
		{
			value : values4[2],
			color : "#69D2E7"
		},
		{
			value : values4[3],
			color: "#aaaaaa"
		}];
	var ctx4 = $('#noteCount').get(0).getContext('2d');
	var myNewChart4 = new Chart(ctx4).Doughnut(data4);

});