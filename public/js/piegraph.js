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
        value: waardes['poverty'],
        number: "1"
    },
    {
        category: "Zero Hunger",
        value: waardes['hunger'],
        number: "2"

    },
    {
        category: "Good Health and Well-being",
        value: waardes['health'],
        number: "3"
    },
    {
        category: "Quality Education",
        value: waardes['education'],
        number: "4"
    },
    {
        category: "Gender Equality",
        value: waardes['gender_equality'],
        number: "5"
    },
    {
        category: "Clean Water and Sanitation",
        value: waardes['clean_water'],
        number: "6"
    },
    {
        category: "Affordable and Clean Energy",
        value: waardes['energy'],
        number: "7"
    },
    {
        category: "Decent Work and Economic Growth",
        value: waardes['economic_growth'],
        number: "8"
    },
    {
        category: "Industry Innovation and Infrastructure",
        value: waardes['infrastructure'],
        number: "9"
    },
    {
        category: "Reduced Inequalities",
        value: waardes['reduced_inequalities'],
        number: "10"
    },
    {
        category: "Sustainable Cities and Communities",
        value: waardes['sustainable_cities'],
        number: "11"
    },
    {
        category: "Responsible Consumption and Production",
        value: waardes['durability'],
        number: "12"
    },
    {
        category: "Climate Action",
        value: waardes['climate'],
        number: "13"
    },
    {
        category: "Life Below Water",
        value: waardes['water_life'],
        number: "14"
    },
    {
        category: "Life on Land",
        value: waardes['land_life'],
        number: "15"
    },
    {
        category: "Peace, Justice and Strong Institutions",
        value: waardes['peace'],
        number: "16"
    },
    {
        category: "Partnerships for the Goals",
        value: waardes['partnership'],
        number: "17"

    }
];

var series = chart.series.push(new am4charts.PieSeries());
series.dataFields.value = "value";
series.dataFields.radiusValue = "value";
series.dataFields.category = "category";
// series.labels.template.disabled = true;
series.labels.template.text = "{number}";
series.labels.template.bent = true;
series.alignLabels =false;
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
