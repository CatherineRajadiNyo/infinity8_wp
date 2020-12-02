$(function () {
    // Seed data to populate the donut pie chart
    var seedData = [{
        "label": "Determining your current financial situation",
        "number": '01',
        "value": 25,
        "link": "https://facebook.github.io/react/"
    }, {
        "label": "Developing financial goals",
        "number": '02',
        "value": 25,
        "link": "https://redux.js.org/"
    }, {
        "label": "Identifying alternative courses of action",
        "number": '03',
        "value": 25,
        "link": "https://vuejs.org/"
    }, {
        "label": "Evaluating alternatives",
        "number": '04',
        "value": 25,
        "link": "https://angularjs.org/"
    }, {
        "label": "Creating and implementing a financial action plan",
        "number": '05',
        "value": 25,
        "link": "https://meteorhacks.com/meteor-js-web-framework-for-everyone"
    }, {
        "label": "Reevaluating and revising the plan",
        "number": '06',
        "value": 25,
        "link": "https://nodejs.org/"
    }];

    // Define size & radius of donut pie chart
    var width = 450,
        height = 450,
        radius = Math.min(width, height) / 2;

    // Define arc colours
    var colour = d3.scaleOrdinal(d3.schemeCategory20);

    // Define arc ranges
    var arcText = d3.scaleOrdinal()
        .range([0, width]);

    // Determine size of arcs
    var arcInner = d3.arc()
        .innerRadius(radius - 124)
        .outerRadius(radius - 129);

    var arc = d3.arc()
        .innerRadius(radius - 130)
        .outerRadius(radius - 10);

    // Create the donut pie chart layout
    var pie = d3.pie()
        .padAngle(.02)
        .value(function (d) { return d["value"]; })
        .sort(null);

    // Append SVG attributes and append g to the SVG
    var svg = d3.select("#donut-chart")
        .attr("width", width)
        .attr("height", height)
        .append("g")
        .attr("transform", "translate(" + radius + "," + radius + ")");

    // Define inner circle
    svg.append("circle")
        .attr("cx", 0)
        .attr("cy", 0)
        .attr("r", 100)
        .attr("fill", "#fff");

    // Calculate SVG paths and fill in the colours
    var g = svg.selectAll(".arc")
        .data(pie(seedData))
        .enter().append("g")
        .attr("class", function (d, i) {
            return "arc pie-tab " + (d.data.number == "01" ? "active" : "")
        })
        .on('mouseover', function (d, i) {
            d3.select(this).classed("hover", true);
        })
        .on('mouseout', function (d, i) {
            d3.select(this).classed("hover", false)
        })
        .on("click", function (d, i) {
            d3.selectAll(".arc").classed("active", false)
            d3.select(this).classed("active", true)
            $(".home_process_content").removeClass("show active")
            $(".home_process_content[data-process=" + d.data.number + "]").addClass("show active");
        });

    // Append the path to each g
    g
        .append("path")
        .attr("d", arc)
        .attr("class", "bg_pie")
        .attr("stroke-width", "1")

    g
        .append("path")
        .attr("d", arcInner)
        .attr("class", "bg_pie_border")

    g
        .append("text")
        .attr("transform", function (d) {
            return "translate(" + arc.centroid(d) + ")";
        })
        .attr("y", "-15")
        .style("text-anchor", "middle")
        .attr("class", "header")
        .text(function (d, i) { return seedData[i].number; })

    g
        .append("text")
        .attr("transform", function (d) {
            return "translate(" + arc.centroid(d) + ")";
        })
        .attr("x", "0")
        .attr("y", "5")
        .style("text-anchor", "middle")
        .attr("class", "content")
        .text(function (d, i) { return seedData[i].label; })
        .call(wrap, 100);

    // var g2 = svg.selectAll("#donut-chart")
    //     .data(pie(seedData))
    //     .enter()
    //     // .append("circle")
    //     // .attr("cy", function (d) {
    //     //     return Math.sin(d.startAngle - Math.PI / 2) * (radius - 75)
    //     // })
    //     // .attr("cx", function (d) {
    //     //     return Math.cos(d.startAngle - Math.PI / 2) * (radius - 75)
    //     // })
    //     // .attr("fill", "#fff")
    //     // .attr("r", 30)
    //     .append("svg:image")
    //     .attr("class", function (d) {
    //         return "arrow_" + d.index
    //     })
    //     .attr("x", 0)
    //     .attr("y", 0)
    //     .attr("dy", function (d) {
    //         return Math.sin(d.startAngle - Math.PI / 2) * (radius - 60)
    //     })
    //     .attr("dx", function (d) {
    //         return Math.cos(d.startAngle - Math.PI / 2) * (radius - 75)
    //     })
    //     .attr("xlink:href", "/images/arrow-default.png")
    //     .attr("width", 30)

    // Append text to the inner circle
    svg.append("text")
        .style("text-anchor", "middle")
        .attr("class", "inner-circle title")
        .attr("dy", ".5em")
        .text(function (d) { return 'CLIENT'; });

    // Wrap function to handle labels with longer text
    function wrap(text, width) {
        text.each(function () {
            var text = d3.select(this),
                words = text.text().split(/\s+/).reverse(),
                word,
                line = [],
                lineNumber = 0,
                lineHeight = 1.1, // ems
                x = text.attr("x"),
                y = text.attr("y"),
                dy = 0, //parseFloat(text.attr("dy")),
                tspan = text.text(null)
                    .append("tspan")
                    .attr("x", x)
                    .attr("y", y)
                    .attr("dy", dy + "em");
            while (word = words.pop()) {
                line.push(word);
                tspan.text(line.join(" "));
                if (tspan.node().getComputedTextLength() > width) {
                    line.pop();
                    tspan.text(line.join(" "));
                    line = [word];
                    tspan = text.append("tspan")
                        .attr("x", x)
                        .attr("y", y)
                        .attr("dy", ++lineNumber * lineHeight + dy + "em")
                        .text(word);
                }
            }
        });
    }

})