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
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Zero Hunger",
        value: waardes['hunger'],
        number: "",
        bullet: "img/goal01.png"

    },
    {
        category: "Good Health and Well-being",
        value: waardes['health'],
        number: "",
        bullet: "img/goal01.png"

    },
    {
        category: "Quality Education",
        value: waardes['education'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Gender Equality",
        value: waardes['gender_equality'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Clean Water and Sanitation",
        value: waardes['clean_water'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Affordable and Clean Energy",
        value: waardes['energy'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Decent Work and Economic Growth",
        value: waardes['economic_growth'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Industry Innovation and Infrastructure",
        value: waardes['infrastructure'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Reduced Inequalities",
        value: waardes['reduced_inequalities'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Sustainable Cities and Communities",
        value: waardes['sustainable_cities'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Responsible Consumption and Production",
        value: waardes['durability'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Climate Action",
        value: waardes['climate'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Life Below Water",
        value: waardes['water_life'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Life on Land",
        value: waardes['land_life'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Peace, Justice and Strong Institutions",
        value: waardes['peace'],
        number: "",
        bullet: "img/goal01.png"
    },
    {
        category: "Partnerships for the Goals",
        value: waardes['partnership'],
        number: "",
        bullet: "img/goal01.png"

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
chart.legend.valueLabels.template.text = ": {value.value}";

series.colors.list = [
    am4core.color("#EB1C2E"),
    am4core.color("#D3A02B"),
    am4core.color("#279B48"),
    am4core.color("#C21F32"),
    am4core.color("#EF402B"),
    am4core.color("#01AED9"),
    am4core.color("#FCB712"),
    am4core.color("#8F1836"),
    am4core.color("#F36D26"),
    am4core.color("#E01483"),
    am4core.color("#FA9D26"),
    am4core.color("#CE8D29"),
    am4core.color("#427E48"),
    am4core.color("#47773D"),
    am4core.color("#3DB04B"),
    am4core.color("#02558B"),
    am4core.color("#183668")
];




