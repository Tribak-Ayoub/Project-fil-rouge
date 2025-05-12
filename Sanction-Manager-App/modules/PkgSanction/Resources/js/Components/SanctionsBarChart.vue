<template>
    <div>
        <canvas ref="chartCanvas"></canvas>
    </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import Chart from 'chart.js/auto';

const props = defineProps({
    chartData: {
        type: Object,
        required: true
    }
});

const chartCanvas = ref(null);
let chart = null;

const createChart = () => {
    if (chart) {
        chart.destroy();
    }

    const ctx = chartCanvas.value.getContext('2d');
    chart = new Chart(ctx, {
        type: 'bar',
        data: props.chartData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(255, 255, 255, 0.9)',
                    titleColor: '#111827',
                    bodyColor: '#111827',
                    borderColor: '#e5e7eb',
                    borderWidth: 1,
                    padding: 10,
                    boxPadding: 5
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        borderDash: [2, 4],
                        color: '#e5e7eb'
                    }
                }
            }
        }
    });
};

onMounted(() => {
    if (chartCanvas.value) {
        createChart();
    }
});

watch(() => props.chartData, () => {
    if (chartCanvas.value) {
        createChart();
    }
}, { deep: true });
</script>