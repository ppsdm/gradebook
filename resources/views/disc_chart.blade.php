<html>
    <head>
        <title>DISC</title>
        <link rel="stylesheet" type="text/css" href="<?php echo url('assets/style-disc.css') ?>">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
    </head>
    <body>
        <section class="content">
            <div class="grid-container">
                <div class="disc-one">
                    <div id="disc_one"></div>
                </div>
                <div class="disc-two">
                    <div id="disc_two"></div>
                </div>
                <div class="disc-three">
                    <div id="disc_three"></div>
                </div>
            </div>
        </section>
    </body>
    <script type="text/javascript">
		Highcharts.chart('disc_one', {
            chart: {
                type: 'line',
                spacingBottom: 30,
                spacingTop: 30,
                spacingLeft: 10,
                spacingRight: 10,

                // Explicitly tell the width and height of a chart
                width: 400,
                height: 500,
                borderWidth: 1,
                borderColor: '#000',
                // backgroundColor:'#ddd',
            },
            title: {
                text: 'Perilaku yang Ditampilkan',
            },
            subtitle: {
                text: 'ppsdm.com'
            },
            xAxis: {
                categories: ['D', 'I', 'S', 'C',],
                gridLineColor:'#000',
                gridLineDashStyle:'Solid',
            },
            yAxis: {
                min: 0,
                max:40,
                gridLineColor:'#000',
                gridLineDashStyle:'Solid',
                gridLineWidth:1,
                title: {
                    text: 'DISC SCORES'
                }
            },
            plotOptions: {
                line: {
			            pointPadding:10,
			            borderWidth: 10
			    },
                line: {
                    dataLabels: {
                        enabled: false
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'DISC',
                data: [{!! $discreport['disc']['scores']['disc']['d1'] !!}, {!! $discreport['disc']['scores']['disc']['i1'] !!},{!! $discreport['disc']['scores']['disc']['s1'] !!}, {!! $discreport['disc']['scores']['disc']['c1'] !!}],
            }]
        });

        //DISC TWO
        Highcharts.chart('disc_two', {
            chart: {
                type: 'line',
                spacingBottom: 30,
                spacingTop: 30,
                spacingLeft: 10,
                spacingRight: 10,

                // Explicitly tell the width and height of a chart
                width: 400,
                height: 500,
                borderWidth: 1,
                borderColor: '#000',
                // backgroundColor:'#ddd',
            },
            title: {
                text: 'Perilaku Dibawah Tekanan',
            },
            subtitle: {
                text: 'ppsdm.com'
            },
            xAxis: {
                categories: ['D', 'I', 'S', 'C',],
                gridLineColor:'#000',
                gridLineDashStyle:'Solid',
            },
            yAxis: {
                min: 0,
                max:40,
                gridLineColor:'#000',
                gridLineDashStyle:'Solid',
                gridLineWidth:1,
                title: {
                    text: 'DISC SCORES'
                }
            },
            plotOptions: {
                line: {
			            pointPadding:10,
			            borderWidth: 10
			    },
                line: {
                    dataLabels: {
                        enabled: false
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'DISC',
                data: [{!! $discreport['disc']['scores']['disc']['d2'] !!}, {!! $discreport['disc']['scores']['disc']['i2'] !!},{!! $discreport['disc']['scores']['disc']['s2'] !!}, {!! $discreport['disc']['scores']['disc']['c2'] !!}],
            }]
        });

        //DISC THREE
        Highcharts.chart('disc_three', {
            chart: {
                type: 'line',
                spacingBottom: 30,
                spacingTop: 30,
                spacingLeft: 10,
                spacingRight: 10,

                // Explicitly tell the width and height of a chart
                width: 400,
                height: 500,
                borderWidth: 1,
                borderColor: '#000',
                // backgroundColor:'#ddd',
            },
            title: {
                text: 'Konsep Diri',
            },
            subtitle: {
                text: 'ppsdm.com'
            },
            xAxis: {
                categories: ['D', 'I', 'S', 'C',],
                gridLineColor:'#000',
                gridLineDashStyle:'Solid',
            },
            yAxis: {
                min: 0,
                max:40,
                gridLineColor:'#000',
                gridLineDashStyle:'Solid',
                gridLineWidth:1,
                title: {
                    text: 'DISC SCORES'
                }
            },
            plotOptions: {
                line: {
			            pointPadding:10,
			            borderWidth: 10
			    },
                line: {
                    dataLabels: {
                        enabled: false
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'DISC',
                data: [{!! $discreport['disc']['scores']['disc']['d3'] !!}, {!! $discreport['disc']['scores']['disc']['i3'] !!},{!! $discreport['disc']['scores']['disc']['s3'] !!}, {!! $discreport['disc']['scores']['disc']['c3'] !!}],
            }]
        });
	</script>
</html>