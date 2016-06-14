
var request = require('request');
var cheerio = require('cheerio');
var fs = require('fs');
var moment = require('moment');
var http = require('http');
var async = require("async");


var date = new Date();
var cacheDir = 'cache/';
var cacheDirCSV = 'cache/csv/';

if (!fs.existsSync(cacheDir)){
    fs.mkdirSync(cacheDir);
}

if (!fs.existsSync(cacheDirCSV)){
    fs.mkdirSync(cacheDirCSV);
}

var a = moment('2016-06-10');
var b = moment('2016-06-12');
var startHour = 8;
var endHour = 20;


for (var m = a; m.isBefore(b); m.add(1, 'days')) {
	for (var hour = startHour;hour<=endHour;hour++) {
	
		var hourUse = ("0" + hour).slice(-2);
		var filePath = cacheDir+'files/'+m.format('YYYY-MM-DD')+'_'+hourUse;
		
		
		var parseOptions = {
			date:m.format('YYYY-MM-DD'),
			hour: hourUse
		};
		
		if (fs.existsSync(filePath)) {
			parseData(fs.readFileSync(filePath, 'utf8'), parseOptions)
		}
		else {
			
			request.post({
				headers: {'content-type' : 'application/x-www-form-urlencoded'},
				url:     'https://weather.data.gov.uk/query',
				body:    "Type=Observation&PredictionSiteID=ALL&ObservationSiteID=ALL&Date="+m.format('DD')+"%2F"+m.format('MM')+"%2F"+m.format('YYYY')+"&PredictionTime="+hourUse+"00",
				dateParam: m.format('YYYY-MM-DD'),
				hourParam:hourUse
				},
				function(error, response, body){
					var filePath = cacheDir+'files/'+response.request.dateParam+'_'+response.request.hourParam;
					var parseOptions = {
						date:response.request.dateParam,
						hour: response.request.hourParam
					};
					fs.writeFileSync(filePath, body);
					parseData(body, parseOptions)
				}
			).end();
		}
	}
}

function parseData(body, parseOptions) {
	$ = cheerio.load(body);
	
	var dataArray = [];
	
	$('a[href^="https"]').each(function() {
		console.log(parseOptions);
		var filePathCSV = cacheDirCSV+parseOptions.date+'_'+parseOptions.hour+'.csv';
		if (fs.existsSync(filePathCSV)) {
			
		}
		else {
			request($(this).attr('href')).pipe(fs.createWriteStream(filePathCSV))
		}
		
		
		
	});
	
}

