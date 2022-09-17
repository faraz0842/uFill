<script>

    //  total reveneu graph
   var KTCardWidget8 = {
    init: function () {
        !(function () {
            var e = document.getElementById("total_evenue_chart");
            var client_months = @json($client_month);
            if (e) {
                var t = parseInt(KTUtil.css(e, "height")),
                    a =
                        (KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                        KTUtil.getCssVariableValue("--bs-gray-800")),
                    r = KTUtil.getCssVariableValue("--bs-light-info"),
                    o = new ApexCharts(e, {
                        series: [
                            {
                                name: "Total Revenue",
                                // data: [
                                //     35, 25, 45, 15, 60, 50, 57, 35, 70, 40, 45,
                                //     25, 45, 30, 70,
                                // ],
                                data : @json($t_revenue),
                            },

                        ],
                        chart: {
                            fontFamily: "inherit",
                            type: "area",
                            height: t,
                            toolbar: { show: !1 },
                        },
                        legend: { show: !1 },
                        dataLabels: { enabled: !1 },
                        fill: { type: "solid", opacity: 0 },
                        stroke: {
                            curve: "smooth",
                            show: !0,
                            width: 2,
                            colors: [a],
                        },
                        xaxis: {
                            axisBorder: { show: !1 },
                            axisTicks: { show: !1 },
                            labels: { show: !1 },
                            crosshairs: {
                                position: "front",
                                stroke: { color: a, width: 1, dashArray: 3 },
                            },
                            tooltip: {
                                enabled: !0,
                                formatter: void 0,
                                offsetY: 0,
                                style: { fontSize: "12px" },
                            },
                        },
                        yaxis: { labels: { show: !1 } },
                        states: {
                            normal: { filter: { type: "none", value: 0 } },
                            hover: { filter: { type: "none", value: 0 } },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: { type: "none", value: 0 },
                            },
                        },
                        tooltip: {
                            style: { fontSize: "12px" },
                            x: {
                                formatter: function (e,client_months) {
                                    console.log(client_months[1]);
                                    return "month " + client_months;
                                },
                            },
                            y: {
                                formatter: function (e) {
                                    return  e + " €";
                                },
                            },
                        },
                        colors: [r],
                        grid: {
                            strokeDashArray: 4,
                            padding: {
                                top: 0,
                                right: -20,
                                bottom: -20,
                                left: -20,
                            },
                            yaxis: { lines: { show: !0 } },
                        },
                        markers: { strokeColor: a, strokeWidth: 2 },
                    });
                setTimeout(function () {
                    o.render();
                }, 300);
            }
        })();
    },
};
"undefined" != typeof module && (module.exports = KTCardWidget8),
    KTUtil.onDOMContentLoaded(function () {
        KTCardWidget8.init();
    });
</script>

<script>
    var KTCardWidget9 = {
    init: function () {
        !(function () {
            var e = document.getElementById("active_clients_graph");
            if (e) {
                var t = parseInt(KTUtil.css(e, "height")),
                    a =
                        (KTUtil.getCssVariableValue("--bs-border-dashed-color"),
                        KTUtil.getCssVariableValue("--bs-gray-800")),
                    r = KTUtil.getCssVariableValue("--bs-light-info"),
                    o = new ApexCharts(e, {
                        series: [
                            {
                                name: "Clients",
                                data: @json($total_clients),
                            },
                        ],
                        chart: {
                            fontFamily: "inherit",
                            type: "area",
                            height: t,
                            toolbar: { show: !1 },
                        },
                        legend: { show: !1 },
                        dataLabels: { enabled: !1 },
                        fill: { type: "solid", opacity: 0 },
                        stroke: {
                            curve: "smooth",
                            show: !0,
                            width: 2,
                            colors: [a],
                        },
                        xaxis: {
                            axisBorder: { show: !1 },
                            axisTicks: { show: !1 },
                            labels: { show: !1 },
                            crosshairs: {
                                position: "front",
                                stroke: { color: a, width: 1, dashArray: 3 },
                            },
                            tooltip: {
                                enabled: !0,
                                formatter: void 0,
                                offsetY: 0,
                                style: { fontSize: "12px" },
                            },
                        },
                        yaxis: { labels: { show: !1 } },
                        states: {
                            normal: { filter: { type: "none", value: 0 } },
                            hover: { filter: { type: "none", value: 0 } },
                            active: {
                                allowMultipleDataPointsSelection: !1,
                                filter: { type: "none", value: 0 },
                            },
                        },
                        tooltip: {
                            style: { fontSize: "12px" },
                            x: {
                                formatter: function (e) {
                                    @json($client_month).forEach(element => {
                                        return "Month" ;
                                    });

                                },
                            },
                            y: {
                                formatter: function (e) {
                                    return @json($clients->count()) +  '(' + @json($active_client_count) + ')'  + '(' + @json($cancelled_clients) + ')' + '(' + 'xxx' + ')';
                                },
                            },
                        },
                        colors: [r],
                        grid: {
                            strokeDashArray: 4,
                            padding: {
                                top: 0,
                                right: -20,
                                bottom: -20,
                                left: -20,
                            },
                            yaxis: { lines: { show: !0 } },
                        },
                        markers: { strokeColor: a, strokeWidth: 2 },
                    });
                setTimeout(function () {
                    o.render();
                }, 300);
            }
        })();
    },
};
"undefined" != typeof module && (module.exports = KTCardWidget9),
    KTUtil.onDOMContentLoaded(function () {
        KTCardWidget9.init();
    });
</script>
