// load the function on window start
$(window).on('load', function(){
	//post the current data to analytics
	$.ajax({
		//url : "https://www.diabetes-logbook.com/analytics.php", //Use this line on server
		url : "http://localhost/analytics.php", //Use this line on test machine
		type : "POST",
		// if it is a success begin set up for a graph
		success : function(data){
			//create a post function so that the date range can be pulled
			var $_POST = $_POST(),
				fromDate = $_POST['from'],
				toDate = $_POST['to'];
			//split the data being outputted from the doctype html
			var htmlmover = data.split("<!DOCTYPE html>")[0];
			//split the data again to remove the input
			var htmlsplitter = htmlmover.split('<input type="hidden" name="foo" value="')[1];
			//substring the data to output the data which is used
			var truedata = htmlsplitter.substring(0, htmlsplitter.length - 6);
			data = truedata;
			//parse the data through json so it can be read
			data = JSON.parse(data);
			//create a table for all the different sections 
            var datatable = { 
				glogTime:[],
				glogdate:[],
                gbloodGlucose:[],
                gcarbExchange:[],
                gqaInsulin:[],
                gbackgroundInsulin:[]
            };
			var len = data.length;
			//if there is a beginning date and end Date run the function
			if(fromDate != null && toDate != null){
				//create the beginning date start of the date range
				var yearBegin = parseInt(fromDate.split('-')[0]);
				var monthBegin = (parseInt(fromDate.split('-')[1]) - 1);
				var dayBegin = parseInt(fromDate.split('-')[2]);
                var startdate = new Date(yearBegin, monthBegin, dayBegin);
				//create the beginning date end of the date range
				var yearEnd = parseInt(toDate.split('-')[0]);
				var monthEnd = (parseInt(toDate.split('-')[1]) - 1);
				var dayEnd = parseInt(toDate.split('-')[2]);
                var enddate = new Date(yearEnd, monthEnd, dayEnd);
				for(var i = 0; i < len; i++){
						//create the date to be sorted
						var actualYear = Number(data[i].logDate.split("-")[0]);
						var actualMonth = (Number(data[i].logDate.split("-")[1]) - 1);
						var actualDay = Number(data[i].logDate.split("-")[2]);
                        var actualDate = new Date(actualYear, actualMonth, actualDay);
						if (startdate <= actualDate && enddate >= actualDate ){
								datatable.glogdate.push(data[i].logDate);
								datatable.glogTime.push(data[i].logTime);
								datatable.gbloodGlucose.push(data[i].bloodGlucose);
								datatable.gcarbExchange.push(data[i].carbExchange);
								datatable.gqaInsulin.push(data[i].qaInsulin);
								datatable.gbackgroundInsulin.push(data[i].backgroundInsulin);
						}
				}
				// if there isnt a date range produce the last month
			}else{
				for(var i = 0; i < len; i++){
					//create the date to be sorted
                    var actualYear = Number(data[i].logDate.split("-")[0]);
                    var actualMonth = (Number(data[i].logDate.split("-")[1]) - 1);
                    var actualDay = Number(data[i].logDate.split("-")[2]);
                    var actualDate = new Date(actualYear, actualMonth, actualDay);
					//create the beginning date start of the date range
                    var startdate = new Date();
                    startdate.setMonth(startdate.getMonth() - 1);
					//create the beginning date end of the date range
                    var enddate = new Date();
					//if the date is within the date range send the rest of the values to the array
                    if(startdate <= actualDate && enddate >= actualDate ){
							datatable.glogdate.push(data[i].logDate);
							datatable.glogTime.push(data[i].logTime);
                            console.log(typeof(data[i].logTime));
							datatable.gbloodGlucose.push(data[i].bloodGlucose);
							datatable.gcarbExchange.push(data[i].carbExchange);
							datatable.gqaInsulin.push(data[i].qaInsulin);
							datatable.gbackgroundInsulin.push(data[i].backgroundInsulin);
                    }
				}
			}
				
			//get canvas and set it for when the length of date is more than six
			var canvas = document.getElementById("linecanvasday");
			if(datatable.glogdate.length > 6){ 
				var graphdata = {
					data:{
						labels : datatable.glogdate,
						datasets : [
						{
							label : "BloodGlucose Level",
							data : datatable.gbloodGlucose,
							backgroundColor : "blue",
							borderColor : "lightblue",
							fill : false,
							lineTension : 0,
							pointRadius : 5
						}],  
					}
				};
			//else it produces the regular values which are configured below	
			}else{
				var graphdata = {
					data:{
						labels : datatable.glogTime,
						datasets : [
						{
							label : "BloodGlucose Level",
							data : datatable.gbloodGlucose,
							backgroundColor : "blue",
							borderColor : "lightblue",
							fill : false,
							lineTension : 0,
							pointRadius : 5
						}],  
					}
				};
			}
			//set the options for the graph over all 
			var options = {
				title: {
					display : true,
					position : "top",
					text : "Blood Glucose Over Time",
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : false,
					position : "bottom"
				},
				scales : {
					yAxes : [{
						ticks : {
							max: 9
						}
					}]
				}
			};
			//create the graph
         	var graphchart = new Chart(canvas, {
				    type : "line",
				    data : graphdata.data,
				    options : options
			     });
			//check if the user wishes to see the carb data
            document.getElementById('carbbtn').addEventListener('click',function(){  
				//get canvas and set it for when the length of date is more than six
				if(datatable.glogdate.length > 6){
					var carbdataobject ={
						labels : datatable.glogdate,
							datasets : [{
							label : "CarbExchange Level",
							data : datatable.gcarbExchange,
							backgroundColor : "blue",
							borderColor : "lightblue",
							fill : false,
							lineTension : 0,
							pointRadius : 5
						   }]
					};
					var options = {
						title: {
							display : true,
							position : "top",
							text : "Carb Exchange Over Time",
							fontSize : 18,
							fontColor : "#111"
						},
						legend : {
							display : false,
							position : "bottom"
						},
						scales : {
							yAxes : [{
								ticks : {
									max: 6
								}
							}]
						}
					};
					//else it produces the regular values which are configured below	
				}else{
					var carbdataobject ={
						labels : datatable.glogTime,
							datasets : [{
							label : "CarbExchange Level",
							data : datatable.gcarbExchange,
							backgroundColor : "blue",
							borderColor : "lightblue",
							fill : false,
							lineTension : 0,
							pointRadius : 5
						   }]
					};
					//set the options for the graph over all
					var options = {
						title: {
							display : true,
							position : "top",
							text : "Carb Exchange Over Time",
							fontSize : 18,
							fontColor : "#111"
						},
						legend : {
							display : false,
							position : "bottom"
						},
						scales : {
							yAxes : [{
								ticks : {
									max: 6
								}
							}]
						}
					};
				}
				
			     // the newDataObject overrides the original data
                graphdata.data = carbdataobject;
			     // destroys the previous chart           
                graphchart.destroy();
				//create the  new graph
              	graphchart = new Chart(canvas, {
				    type : "line",
				    data : graphdata.data,
				    options : options
			     });
                 graphchart.update(); 
		});
			//execute the date range search function
		document.getElementById('sort').addEventListener('click',function(){    // HERE                      
			var fromDate = document.getElementById("fromDate").value;
			var toDate = document.getElementById("toDate").value;

			window.location.href = './analytics.php?from='+fromDate+'&to='+toDate;;

			});
			//check if the user wishes to see the qa data
            document.getElementById('qabtn').addEventListener('click',function(){  
				//get canvas and set it for when the length of date is more than six
				if(datatable.glogdate.length > 6){                  
					var qadataobject ={
						labels : datatable.glogdate,
							datasets : [{
							label : "qaInsulin Level",
							data : datatable.gqaInsulin,
							backgroundColor : "blue",
							borderColor : "lightblue",
							fill : false,
							lineTension : 0,
							pointRadius : 5
						}]
					};
					//set the options for the graph over all
					var options = {
						title: {
							display : true,
							position : "top",
							text : "Quick Acting Insulin Over Time",
							fontSize : 18,
							fontColor : "#111"
						},
						legend : {
							display : false,
							position : "bottom"
						}, 
						scales : {
							yAxes : [{
								ticks : {
									max: 7
								}
							}]
						}
					};
					//else it produces the regular values which are configured below	
				}else{
					var qadataobject ={
						labels : datatable.glogTime,
							datasets : [{
							label : "qaInsulin Level",
							data : datatable.gqaInsulin,
							backgroundColor : "blue",
							borderColor : "lightblue",
							fill : false,
							lineTension : 0,
							pointRadius : 5
						}]
					};
					//set the options for the graph over all
					var options = {
						title: {
							display : true,
							position : "top",
							text : "Quick Acting Insulin Over Time",
							fontSize : 18,
							fontColor : "#111"
						},
						legend : {
							display : false,
							position : "bottom"
						},
						scales : {
							yAxes : [{
								ticks : {
									max: 7
								}
							}]
						}
					};
				}
			      // the newDataObject overrides the original data
                graphdata.data = qadataobject;
				 // delete previous chart 
                graphchart.destroy();
				//create the graph
              	graphchart = new Chart(canvas, {
				    type : "line",
				    data : graphdata.data,
				    options : options
			     });
                 graphchart.update(); 
        });
			//check if the user wishes to see the background insulin data
            document.getElementById('backgroundbtn').addEventListener('click',function(){ 
				//get canvas and set it for when the length of date is more than six
				if(datatable.glogdate.length > 6){   
					var backdataobject ={
						labels : datatable.glogdate,
							datasets : [{
							label : "BackgroundInsulin Level",
							data : datatable.gbackgroundInsulin,
							backgroundColor : "blue",
							borderColor : "lightblue",
							fill : false,
							lineTension : 0,
							pointRadius : 5
						}]
						};
					//set the options for the graph over all
					var options = {
						title: {
							display : true,
							position : "top",
							text : "Basal Insulin Over Time",
							fontSize : 18,
							fontColor : "#111"
						},
						legend : {
							display : false,
							position : "bottom"
						},
						scales : {
							yAxes : [{
								ticks : {
									max: 4
								}
							}]
						}
					};
				}else{
					//else it produces the regular values which are configured below	
					var backdataobject ={
						labels : datatable.glogTime,
							datasets : [{
							label : "BackgroundInsulin Level",
							data : datatable.gbackgroundInsulin,
							backgroundColor : "blue",
							borderColor : "lightblue",
							fill : false,
							lineTension : 0,
							pointRadius : 5
						}]
						};
					//set the options for the graph over all
					var options = {
						title: {
							display : true,
							position : "top",
							text : "Basal Insulin Over Time",
							fontSize : 18,
							fontColor : "#111"
						},
						legend : {
							display : false,
							position : "bottom"
						},
						scales : {
							yAxes : [{
								ticks : {
									max: 4
								}
							}]
						}
					};
				}
			       // the newDataObject overrides the original data
                graphdata.data = backdataobject;
			     // delete previous chart  
                graphchart.destroy();
				//create the graph
              	graphchart = new Chart(canvas, {
				    type : "line",
				    data : graphdata.data,
				    options : options
			     });
                 graphchart.update(); 

        });
			//check if the user wishes to see the blood glucose data
            document.getElementById('bloodbtn').addEventListener('click',function(){     
				//get canvas and set it for when the length of date is more than six
				if(datatable.glogdate.length > 6){                     
					var blooddataobject ={
						labels : datatable.glogdate,
							datasets : [{
							label : "BloodGlucose Level",
							data : datatable.gbloodGlucose,
							backgroundColor : "blue",
							borderColor : "lightblue",
							fill : false,
							lineTension : 0,
							pointRadius : 5
						}]
						};
					//set the options for the graph over all
					var options = {
						title: {
							display : true,
							position : "top",
							text : "Blood Glucose Over Time",
							fontSize : 18,
							fontColor : "#111"
						},
						legend : {
							display : false,
							position : "bottom"
						},
						scales : {
							yAxes : [{
								ticks : {
									max: 9
								}
							}]
						}
					};
					//else it produces the regular values which are configured below	
				}else{                    
						var blooddataobject ={
							labels : datatable.glogTime,
								datasets : [{
								label : "BloodGlucose Level",
								data : datatable.gbloodGlucose,
								backgroundColor : "blue",
								borderColor : "lightblue",
								fill : false,
								lineTension : 0,
								pointRadius : 5
							}]
							};
					//set the options for the graph over all
						var options = {
						title: {
							display : true,
							position : "top",
							text : "Blood Glucose Over Time",
							fontSize : 18,
							fontColor : "#111"
						},
						legend : {
							display : false,
							position : "bottom"
						},
						scales : {
							yAxes : [{
								ticks : {
									max: 9
								}
							}]
						}
					};
				}
			       // the newDataObject overrides the original data
                graphdata.data = blooddataobject;
				 // delete previous chart                                                           
			    graphchart.destroy();
				//create the graph
              	graphchart = new Chart(canvas, {
				    type : "line",
				    data : graphdata.data,
				    options : options
			     });
                 graphchart.update();                                                            
            });
			//this allows the function to post functions to the javascript
		function $_POST(param) {
			var vars = {};
			//cleans up the link to the javascript and to the new page generated
			window.location.href.replace( location.hash, '' ).replace( 
				/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
				function( m, key, value ) { // callback
					vars[key] = value !== undefined ? value : '';
				}
			);
			
			if ( param ) {
				return vars[param] ? vars[param] : null;	
			}
			return vars;
		}
		},
        error : function(data){
        console.log(data);
        }
	});
	
});

