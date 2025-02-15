import Chart from "chart.js/auto";

document.addEventListener("DOMContentLoaded", function () {
    if (typeof sanctionChartData !== "undefined") {
        const ctx1 = document
            .getElementById("sanctionsBarChart")
            .getContext("2d");

        new Chart(ctx1, {
            type: "bar",
            data: {
                labels: sanctionChartData.map((item) => item.penalite),
                datasets: [
                    {
                        label: "Nombre de sanctions",
                        data: sanctionChartData.map((item) => item.value),
                        backgroundColor: ["#3b82f6", "#f59e0b", "#ef4444"],
                    },
                ],
            },
        });
    }

    if (typeof absenteismChartData !== "undefined") {
        const ctx2 = document
            .getElementById("absenteeismLineChart")
            .getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: absenteismChartData.labels,
                datasets: [
                    {
                        label: "Justifié",
                        data: absenteismChartData.justified, 
                        borderColor: "#10b981",
                        backgroundColor: "rgba(16, 185, 129, 0.2)",
                        fill: true,
                        tension: 0.3, // Smooth curves
                        pointRadius: 5,
                    },
                    {
                        label: "Non Justifié",
                        data: absenteismChartData.unjustified, 
                        borderColor: "#ef4444",
                        backgroundColor: "rgba(239, 68, 68, 0.2)",
                        fill: true,
                        tension: 0.3,
                        pointRadius: 5,
                    },
                ],
            },
        });
    }
});
