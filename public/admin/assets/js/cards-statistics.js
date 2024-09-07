!(function () {
    let t, e, o, r;
    r = (
        isDarkStyle
            ? ((t = config.colors_dark.cardColor),
              (e = config.colors_dark.textMuted),
              (o = config.colors_dark.headingColor),
              config.colors_dark)
            : ((t = config.colors.cardColor),
              (e = config.colors.textMuted),
              (o = config.colors.headingColor),
              config.colors)
    ).bodyColor;
    var a = document.querySelector("#totalRevenue"),
        s = {
            chart: {
                height: 100,
                type: "bar",
                distributed: !0,
                parentHeightOffset: 0,
                toolbar: { show: !1 },
            },
            grid: {
                padding: { top: -20, left: -14, right: 0, bottom: -15 },
                yaxis: { lines: { show: !1 } },
            },
            series: [
                { name: "Earning", data: [120, 200, 150, 120] },
                { name: "Expense", data: [72, 120, 50, 65] },
            ],
            legend: { show: !1 },
            tooltip: { enabled: !1 },
            dataLabels: { enabled: !1 },
            colors: [config.colors.primary, config.colors.warning],
            plotOptions: {
                bar: {
                    borderRadius: 6,
                    columnWidth: "48%",
                    startingShape: "rounded",
                },
            },
            states: { active: { filter: { type: "none" } } },
            xaxis: {
                labels: { show: !1 },
                axisTicks: { show: !1 },
                axisBorder: { show: !1 },
            },
            yaxis: { labels: { show: !1 } },
        },
        a =
            (null !== a && new ApexCharts(a, s).render(),
            document.querySelector("#sessions")),
        s = {
            chart: {
                height: 100,
                type: "line",
                parentHeightOffset: 0,
                toolbar: { show: !1 },
            },
            grid: {
                borderColor: e,
                strokeDashArray: 6,
                xaxis: { lines: { show: !0 } },
                yaxis: { lines: { show: !1 } },
                padding: { top: -15, left: -7, right: 7, bottom: -15 },
            },
            colors: [config.colors.primary],
            stroke: { width: 3 },
            series: [{ data: [0, 20, 5, 30, 15, 45] }],
            tooltip: { shared: !1, intersect: !0, x: { show: !1 } },
            tooltip: { enabled: !1 },
            xaxis: {
                labels: { show: !1 },
                axisTicks: { show: !1 },
                axisBorder: { show: !1 },
            },
            yaxis: { labels: { show: !1 } },
            markers: {
                size: 6,
                strokeWidth: 3,
                strokeColors: "transparent",
                colors: ["transparent"],
                discrete: [
                    {
                        seriesIndex: 0,
                        dataPointIndex: 5,
                        fillColor: t,
                        strokeColor: config.colors.primary,
                        size: 6,
                        shape: "circle",
                    },
                ],
                hover: { size: 7 },
            },
            responsive: [
                { breakpoint: 768, options: { chart: { height: 110 } } },
            ],
        },
        a =
            (null !== a && new ApexCharts(a, s).render(),
            document.querySelector("#overviewChart")),
        s = {
            chart: {
                height: 114,
                type: "radialBar",
                sparkline: { enabled: !0 },
            },
            plotOptions: {
                radialBar: {
                    hollow: { size: "55%" },
                    dataLabels: {
                        name: { show: !1 },
                        value: {
                            show: !0,
                            offsetY: 5,
                            fontWeight: 500,
                            fontSize: "1rem",
                            fontFamily: "Inter",
                            color: o,
                        },
                    },
                    track: { background: config.colors_label.secondary },
                },
            },
            states: {
                hover: { filter: { type: "none" } },
                active: { filter: { type: "none" } },
            },
            stroke: { lineCap: "round" },
            colors: [config.colors.primary],
            grid: { padding: { bottom: -15 } },
            series: [64],
            labels: ["Progress"],
        },
        a =
            (null !== a && new ApexCharts(a, s).render(),
            document.querySelector("#totalProfitChart")),
        s = {
            chart: {
                type: "bar",
                height: 100,
                parentHeightOffset: 0,
                stacked: !0,
                toolbar: { show: !1 },
            },
            series: [
                { name: "PRODUCT A", data: [44, 21, 56, 34, 47] },
                { name: "PRODUCT B", data: [-27, -17, -31, -23, -31] },
            ],
            plotOptions: {
                bar: {
                    horizontal: !1,
                    columnWidth: "28%",
                    borderRadius: 5,
                    startingShape: "rounded",
                    endingShape: "rounded",
                },
            },
            dataLabels: { enabled: !1 },
            tooltip: { enabled: !1 },
            stroke: {
                curve: "smooth",
                width: 1,
                lineCap: "round",
                colors: [t],
            },
            legend: { show: !1 },
            colors: [config.colors.headingColor, config.colors.danger],
            grid: {
                show: !1,
                padding: { top: -21, right: 0, left: -10, bottom: -16 },
            },
            xaxis: {
                categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                labels: { show: !1 },
                axisBorder: { show: !1 },
                axisTicks: { show: !1 },
            },
            yaxis: { show: !1 },
            states: {
                hover: { filter: { type: "none" } },
                active: { filter: { type: "none" } },
            },
        },
        a =
            (null !== a && new ApexCharts(a, s).render(),
            document.querySelector("#totalSalesChart")),
        s = {
            chart: {
                type: "line",
                height: 100,
                parentHeightOffset: 0,
                toolbar: { show: !1 },
            },
            series: [{ data: [0, 30, 10, 70, 40, 110, 95] }],
            plotOptions: {
                bar: {
                    horizontal: !1,
                    columnWidth: "28%",
                    borderRadius: 5,
                    startingShape: "rounded",
                    endingShape: "rounded",
                },
            },
            tooltip: { enabled: !1 },
            stroke: { curve: "smooth", width: 4, lineCap: "round" },
            legend: { show: !1 },
            colors: [config.colors.warning],
            grid: {
                show: !1,
                padding: { left: -5, top: -15, right: 5, bottom: -10 },
            },
            xaxis: {
                labels: { show: !1 },
                axisBorder: { show: !1 },
                axisTicks: { show: !1 },
            },
            yaxis: { show: !1 },
        },
        a =
            (null !== a && new ApexCharts(a, s).render(),
            document.querySelector("#totalGrowthChart")),
        s = {
            chart: { height: 127, parentHeightOffset: 0, type: "donut" },
            labels: [
                "" + new Date().getFullYear(),
                "" + (new Date().getFullYear() - 1),
                "" + (new Date().getFullYear() - 2),
            ],
            series: [35, 30, 23],
            colors: [
                config.colors.primary,
                config.colors.success,
                config.colors.secondary,
            ],
            stroke: { width: 5, colors: t },
            tooltip: {
                y: {
                    formatter: function (e, o) {
                        return parseInt(e) + "%";
                    },
                },
            },
            dataLabels: {
                enabled: !1,
                formatter: function (e, o) {
                    return parseInt(e) + "%";
                },
            },
            states: {
                hover: { filter: { type: "none" } },
                active: { filter: { type: "none" } },
            },
            legend: { show: !1 },
            plotOptions: {
                pie: {
                    donut: {
                        size: "70%",
                        labels: {
                            show: !0,
                            value: {
                                fontSize: "1rem",
                                fontFamily: "Inter",
                                color: r,
                                fontWeight: 500,
                                offsetY: 4,
                                formatter: function (e) {
                                    return parseInt(e) + "%";
                                },
                            },
                            name: { show: !1 },
                            total: {
                                label: "",
                                show: !0,
                                fontSize: "1.5rem",
                                fontWeight: 500,
                                formatter: function (e) {
                                    return "12%";
                                },
                            },
                        },
                    },
                },
            },
        };
    function i(e, o) {
        return {
            chart: {
                height: 77,
                parentHeightOffset: 0,
                type: "line",
                toolbar: { show: !1 },
            },
            tooltip: { enabled: !1 },
            markers: {
                size: 5,
                offsetY: 1,
                offsetX: -2,
                strokeWidth: 2,
                strokeOpacity: 1,
                colors: "transparent",
                strokeColors: "transparent",
                discrete: [
                    {
                        size: 5,
                        fillColor: t,
                        seriesIndex: 0,
                        dataPointIndex: 5,
                        strokeColor: o,
                    },
                ],
            },
            grid: { show: !1, padding: { left: -7, top: -15 } },
            colors: [o],
            stroke: { width: 3, curve: "smooth", lineCap: "round" },
            series: [{ data: e }],
            xaxis: {
                labels: { show: !1 },
                axisTicks: { show: !1 },
                axisBorder: { show: !1 },
            },
            yaxis: { labels: { show: !1 } },
            responsive: [
                { breakpoint: 1441, options: { chart: { height: 90 } } },
                { breakpoint: 1025, options: { chart: { height: 78 } } },
                { breakpoint: 577, options: { chart: { height: 87 } } },
            ],
        };
    }
    null !== a && new ApexCharts(a, s).render();
    var a = $.ajax({
            url: assetsPath + "json/sales-profit-charts.json",
            dataType: "json",
            async: !1,
        }).responseJSON,
        s = document.querySelector("#salesChart"),
        n = i(a.data[0].chart_data, config.colors[a.data[0].chart_color]),
        s =
            (null !== s && new ApexCharts(s, n).render(),
            document.querySelector("#profitChart")),
        n = i(a.data[1].chart_data, config.colors[a.data[1].chart_color]),
        a =
            (null !== s && new ApexCharts(s, n).render(),
            document.querySelector("#saleThisMonth")),
        s = {
            chart: {
                height: 100,
                type: "line",
                parentHeightOffset: 0,
                toolbar: { show: !1 },
                dropShadow: {
                    top: 14,
                    blur: 4,
                    left: 0,
                    enabled: !0,
                    opacity: 0.12,
                    color: config.colors.primary,
                },
            },
            tooltip: { enabled: !1 },
            grid: {
                xaxis: { lines: { show: !1 } },
                yaxis: { lines: { show: !1 } },
                padding: { top: -12, left: -2, right: 8, bottom: -10 },
            },
            colors: [config.colors.primary],
            stroke: { width: 5, lineCap: "round" },
            series: [
                {
                    data: [
                        200, 200, 500, 500, 300, 300, 100, 100, 450, 450, 650,
                        650,
                    ],
                },
            ],
            xaxis: {
                labels: { show: !1 },
                axisTicks: { show: !1 },
                axisBorder: { show: !1 },
            },
            yaxis: { min: 0, labels: { show: !1 } },
            responsive: [
                { breakpoint: 1441, options: { chart: { height: 125 } } },
                { breakpoint: 1025, options: { chart: { height: 100 } } },
            ],
        };
    null !== a && new ApexCharts(a, s).render();
    (n = document.querySelectorAll(".chart-progress")),
        n &&
            n.forEach(function (e) {
                var o = config.colors[e.dataset.color],
                    t = e.dataset.series,
                    o = {
                        chart: {
                            height: 90,
                            width: 90,
                            type: "radialBar",
                            sparkline: { enabled: !0 },
                        },
                        plotOptions: {
                            radialBar: {
                                hollow: {
                                    size: "52%",
                                    image: e.dataset.icon,
                                    imageWidth: 24,
                                    imageHeight: 24,
                                    imageClipped: !1,
                                },
                                dataLabels: {
                                    name: { show: !1 },
                                    value: { show: !1 },
                                },
                                track: {
                                    background: config.colors_label.secondary,
                                },
                            },
                        },
                        states: {
                            hover: { filter: { type: "none" } },
                            active: { filter: { type: "none" } },
                        },
                        stroke: { lineCap: "round" },
                        colors: [o],
                        grid: { padding: { bottom: 0 } },
                        series: [t],
                        labels: ["Progress"],
                        responsive: [
                            {
                                breakpoint: 1441,
                                options: { chart: { height: 103 } },
                            },
                            {
                                breakpoint: 1400,
                                options: { chart: { height: 100 } },
                            },
                            {
                                breakpoint: 1380,
                                options: { chart: { height: 95 } },
                            },
                            {
                                breakpoint: 1332,
                                options: { chart: { height: 85 } },
                            },
                            {
                                breakpoint: 1265,
                                options: { chart: { height: 75 } },
                            },
                            {
                                breakpoint: 1025,
                                options: { chart: { height: 90 } },
                            },
                        ],
                    };
                new ApexCharts(e, o).render();
            }),
        (a = document.querySelector("#swiper-weekly-sales")),
        a &&
            new Swiper(a, {
                loop: !0,
                autoplay: { delay: 2500, disableOnInteraction: !1 },
                pagination: { clickable: !0, el: ".swiper-pagination" },
            }),
        (s = document.querySelector("#swiper-marketing-sales")),
        s &&
            new Swiper(s, {
                loop: !0,
                autoplay: { delay: 2500, disableOnInteraction: !1 },
                pagination: { clickable: !0, el: ".swiper-pagination" },
            }),
        (n = document.querySelector("#swiper-weekly-sales-with-bg")),
        n &&
            new Swiper(n, {
                loop: !0,
                autoplay: { delay: 2500, disableOnInteraction: !1 },
                pagination: { clickable: !0, el: ".swiper-pagination" },
            }),
        (a = document.querySelector("#liveVisitors")),
        (s = {
            chart: {
                height: 250,
                parentHeightOffset: 0,
                type: "bar",
                toolbar: { show: !1 },
            },
            plotOptions: {
                bar: {
                    borderRadius: 12,
                    columnWidth: "43%",
                    endingShape: "rounded",
                    startingShape: "rounded",
                },
            },
            colors: [config.colors.success],
            grid: {
                padding: { top: -4, left: -20, right: -2, bottom: -7 },
                yaxis: { lines: { show: !1 } },
            },
            dataLabels: { enabled: !1 },
            series: [
                { data: [70, 118, 92, 49, 19, 49, 23, 82, 65, 23, 49, 65, 65] },
            ],
            legend: { show: !1 },
            xaxis: {
                labels: { show: !1 },
                axisTicks: { show: !1 },
                axisBorder: { show: !1 },
            },
            yaxis: { labels: { show: !1 } },
            responsive: [
                {
                    breakpoint: 1441,
                    options: { plotOptions: { bar: { borderRadius: 10 } } },
                },
                {
                    breakpoint: 1288,
                    options: { plotOptions: { bar: { borderRadius: 8 } } },
                },
                {
                    breakpoint: 1200,
                    options: { plotOptions: { bar: { borderRadius: 10 } } },
                },
                {
                    breakpoint: 1025,
                    options: { plotOptions: { bar: { borderRadius: 8 } } },
                },
                {
                    breakpoint: 992,
                    options: { plotOptions: { bar: { borderRadius: 14 } } },
                },
                {
                    breakpoint: 645,
                    options: { plotOptions: { bar: { borderRadius: 10 } } },
                },
                {
                    breakpoint: 474,
                    options: { plotOptions: { bar: { borderRadius: 7 } } },
                },
                {
                    breakpoint: 383,
                    options: { plotOptions: { bar: { borderRadius: 6 } } },
                },
            ],
        });
    null !== a && new ApexCharts(a, s).render();
})();
