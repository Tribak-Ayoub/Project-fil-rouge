import "./bootstrap";
import Chart from "chart.js/auto";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    const ctx1 = document.getElementById("sanctionsBarChart").getContext("2d");
    const ctx2 = document
        .getElementById("absenteeismLineChart")
        .getContext("2d");

    new Chart(ctx1, {
        type: "bar",
        data: {
            labels: ["Type A", "Type B", "Type C"],
            datasets: [
                {
                    label: "Nombre de sanctions",
                    data: [10, 20, 15],
                    backgroundColor: ["#3b82f6", "#f59e0b", "#ef4444"],
                },
            ],
        },
    });

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr"],
            datasets: [
                {
                    label: "Absentéisme",
                    data: [5, 10, 8, 12],
                    borderColor: "#10b981",
                    backgroundColor: "rgba(16, 185, 129, 0.2)",
                    fill: true,
                },
            ],
        },
    });
});
