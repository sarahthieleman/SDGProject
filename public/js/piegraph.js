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

waardes = JSON.parse(waardes);
console.log(waardes)

var chart = am4core.create("chartdiv", am4charts.PieChart);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.data = [
    {
        category: "No poverty",

        value: waardes['poverty']
    },
    {
        category: "Zero Hunger",
        value: waardes['hunger']
    },
    {
        category: "Good Health and Well-being",
        value: waardes['health']
    },
    {
        category: "Quality Education",
        value: waardes['education']
    },
    {
        category: "Gender Equality",
        value: waardes['gender_equality']
    },
    {
        category: "Clean Water and Sanitation",
        value: waardes['clean_water']
    },
    {
        category: "Affordable and Clean Energy",
        value: waardes['energy']
    },
    {
        category: "Decent Work and Economic Growth",
        value: waardes['economic_growth']
    },
    {
        category: "Industry Innovation and Infrastructure",
        value: waardes['infrastructure']
    },
    {
        category: "Reduced Inequalities",
        value: waardes['reduced_inequalities']
    },
    {
        category: "Sustainable Cities and Communities",
        value: waardes['sustainable_cities']
    },
    {
        category: "Responsible Consumption and Production",
        value: waardes['durability']
    },
    {
        category: "Climate Action",
        value: waardes['climate']
    },
    {
        category: "Life Below Water",
        value: waardes['water_life']
    },
    {
        category: "Life on Land",
        value: waardes['land_life']
    },
    {
        category: "Peace, Justice and Strong Institutions",
        value: waardes['peace']
    },
    {
        category: "Partnerships for the Goals",
        value: waardes['partnership']

    }
];

var series = chart.series.push(new am4charts.PieSeries());
series.dataFields.value = "value";
series.dataFields.radiusValue = "value";
series.dataFields.category = "category";
// series.labels.template.disabled = true;
series.labels.template.text = "{category}: {value.value}";
series.slices.template.tooltipText = "{category}: {value.value}";



chart.legend = new am4charts.Legend();
chart.legend.valueLabels.template.text = "{value.value}";

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
