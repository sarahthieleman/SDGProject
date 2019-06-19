/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

am4core.useTheme(am4themes_animated);

var chart = am4core.create("chartdiv", am4charts.PieChart);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.data = [
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

var series = chart.series.push(new am4charts.PieSeries());
series.dataFields.value = "value";
series.dataFields.radiusValue = "value";
series.dataFields.category = "category";
series.slices.template.cornerRadius = 6;
// series.colors.step = 3;



series.hiddenState.properties.endAngle = -90;

chart.legend = new am4charts.Legend();
series.colors.list = [
    am4core.color("#E32642"),
    am4core.color("#DEA54B"),
    am4core.color("#559C50"),
    am4core.color("#CC1F34"),
    am4core.color("#ED4135"),
    am4core.color("#33BFE3"),
    am4core.color("#FAC332"),
    am4core.color("#9E1E44"),
    am4core.color("#EA6D33"),
    am4core.color("#D52369"),
    am4core.color("#F59E3A"),
    am4core.color("#BF8D31"),
    am4core.color("#427E48"),
    am4core.color("#2997D4"),
    am4core.color("#5CB94E"),
    am4core.color("#1A6B9E"),
    am4core.color("#1A6B9E")
];
