
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>

    <script>

    var KTMapsWidget1 = {
        init: function() {
            !(function() {
                if ("undefined" != typeof am5) {
                    var e = document.getElementById("kt_maps_widget_1_map");
                    e &&
                        am5.ready(function() {
                            var t = am5.Root.new(e);
                            t.setThemes([am5themes_Animated.new(t)]);
                            var a = t.container.children.push(
                                    am5map.MapChart.new(t, {
                                        panX: "translateX",
                                        panY: "translateY",
                                        projection: am5map.geoMercator(),
                                        paddingLeft: 0,
                                        paddingrIGHT: 0,
                                        paddingBottom: 0,
                                    })
                                ),
                                r = a.series.push(
                                    am5map.MapPolygonSeries.new(t, {
                                        geoJSON: am5geodata_worldLow,
                                        exclude: ["AQ"],
                                    })
                                );
                            r.mapPolygons.template.setAll({
                                    tooltipText: "{name}",
                                    toggleKey: "active",
                                    interactive: !0,
                                    fill: am5.color(
                                        KTUtil.getCssVariableValue("--bs-gray-300")
                                    ),
                                }),
                                r.mapPolygons.template.states.create("hover", {
                                    fill: am5.color(
                                        KTUtil.getCssVariableValue("--bs-success")
                                    ),
                                }),
                                r.mapPolygons.template.states.create("active", {
                                    fill: am5.color(
                                        KTUtil.getCssVariableValue("--bs-success")
                                    ),
                                });
                            var o = a.series.push(
                                am5map.MapPolygonSeries.new(t, {
                                    geoJSON: am5geodata_worldLow,
                                    include: @json($countries),
                                })
                            );
                            o.mapPolygons.template.setAll({
                                    tooltipText: "{name}",
                                    toggleKey: "active",
                                    interactive: !0,
                                }),
                                am5.ColorSet.new(t, {}),
                                o.mapPolygons.template.set(
                                    "fill",
                                    am5.color(
                                        KTUtil.getCssVariableValue("--bs-primary")
                                    )
                                ),
                                o.mapPolygons.template.states.create("hover", {
                                    fill: t.interfaceColors.get(
                                        "primaryButtonHover"
                                    ),
                                }),
                                o.mapPolygons.template.states.create("active", {
                                    fill: t.interfaceColors.get(
                                        "primaryButtonHover"
                                    ),
                                }),
                                a.chartContainer
                                .get("background")
                                .events.on("click", function() {
                                    a.goHome();
                                }),
                                a.appear(1e3, 100);
                        });
                }
            })();
        },
    };
    "undefined" != typeof module && (module.exports = KTMapsWidget1),
    KTUtil.onDOMContentLoaded(function () {
        KTMapsWidget1.init();
    });
</script>
