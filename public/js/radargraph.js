
// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
        var chart = am4core.create("chartdiv", am4charts.RadarChart);
        chart.scrollbarX = new am4core.Scrollbar();

        var data = [
            {
                category: "No poverty",
                value: 260
            },
            {
                category: "Zero Hunger",
                value: 230
            },
            {
                category: "Good Health and Well",
                value: 200
            },
            {
                category: "Quality Education",
                value: 165
            },
            {
                category: "Gender Equality",
                value: 139
            },
            {
                category: "Clean Water and Sanitation",
                value: 260
            },
            {
                category: "Affordable and Clean Energy",
                value: 230
            },
            {
                category: "Decent Work and Economic Growth",
                value: 200
            },
            {
                category: "Industry Innovation and Infrastructure",
                value: 165
            },
            {
                category: "Reduced Inequalities",
                value: 139
            },
            {
                category: "Sustainable Cities and Communities",
                value: 260
            },
            {
                category: "Responsible Consumption and Production",
                value: 230
            },
            {
                category: "Climate Action",
                value: 200
            },
            {
                category: "Life Below Water",
                value: 165
            },
            {
                category: "Life on Land",
                value: 139
            },
            {
                category: "Peace, Justice and Strong Institutions",
                value: 139
            },
            {
                category: "Partnerships for the Goals",
                value: 128
            }
        ];

        // for(var i = 0; i < 20; i++){
        //     data.push({category: i, value:Math.round(Math.random() * 100)});
        // }

        chart.data = data;
        chart.radius = am4core.percent(100);
        chart.innerRadius = am4core.percent(50);

// Create axes
        var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "category";
        categoryAxis.renderer.grid.template.location = 0;
        categoryAxis.renderer.minGridDistance = 30;
        categoryAxis.tooltip.disabled = true;
        categoryAxis.renderer.minHeight = 110;
        categoryAxis.renderer.grid.template.disabled = true;
//categoryAxis.renderer.labels.template.disabled = true;
        let labelTemplate = categoryAxis.renderer.labels.template;
        labelTemplate.radius = am4core.percent(-60);
        labelTemplate.location = 0.5;
        labelTemplate.relativeRotation = 90;

        var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
        valueAxis.renderer.grid.template.disabled = true;
        valueAxis.renderer.labels.template.disabled = true;
        valueAxis.tooltip.disabled = true;

// Create series
        var series = chart.series.push(new am4charts.RadarColumnSeries());
        series.sequencedInterpolation = true;
        series.dataFields.valueY = "value";
        series.dataFields.categoryX = "category";
        series.columns.template.strokeWidth = 0;
        series.tooltipText = "{valueY}";
        series.columns.template.radarColumn.cornerRadius = 10;
        series.columns.template.radarColumn.innerCornerRadius = 0;

        series.tooltip.pointerOrientation = "vertical";

// on hover, make corner radiuses bigger
        let hoverState = series.columns.template.radarColumn.states.create("hover");
        hoverState.properties.cornerRadius = 0;
        hoverState.properties.fillOpacity = 1;


        series.columns.template.adapter.add("fill", function(fill, target) {
            return chart.colors.getIndex(target.dataItem.index);
        })

// Cursor
        chart.cursor = new am4charts.RadarCursor();
        chart.cursor.innerRadius = am4core.percent(50);
        chart.cursor.lineY.disabled = true;

