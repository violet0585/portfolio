const Utils = {
    srand(seed) {
        this._seed = seed;
    },
    rand(min, max) {
        const seed = this._seed;
        min = min === undefined ? 0 : min;
        max = max === undefined ? 1 : max;
        this._seed = (seed * 9301 + 49297) % 233280;
        const rnd = this._seed / 233280;
        return min + rnd * (max - min);
    },
    numbers(config) {
        const cfg = config || {};
        const min = cfg.min || 0;
        const max = cfg.max || 100;
        const from = cfg.from || [];
        const count = cfg.count || 8;
        const decimals = cfg.decimals || 8;
        const continuity = cfg.continuity || 1;
        const dfactor = Math.pow(10, decimals) || 0;
        const data = [];
        let i, value;
        for (i = 0; i < count; ++i) {
            value = (from[i] || 0) + this.rand(min, max);
            if (this.rand() <= continuity) {
                data.push(Math.round(dfactor * value) / dfactor);
            } else {
                data.push(null);
            }
        }
        return data;
    },
    color(index) {
        const COLORS = [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ];
        return COLORS[index % COLORS.length];
    },
    transparentize(color, opacity) {
        const alpha = opacity === undefined ? 0.5 : 1 - opacity;
        return color.replace('1)', `${alpha})`);
    }
};

// 데이터 생성 함수
function generateData() {
    return Utils.numbers({
        count: DATA_COUNT,
        min: 0,
        max: 100
    });
}

// 데이터 및 설정
const DATA_COUNT = 7;
Utils.srand(110);

const data = {
    labels: ['Playing bass guitar', 'Hiking', 'Baking', 'Planting', 'Cleaning', 'Painting', 'Doing nothing'],
    datasets: [{
        data: [75, 80, 65, 78, 94, 90, 0]
    }]
};

// 레이더 차트에서 사용할 함수들
function getLineColor(ctx) {
    return Utils.color(ctx.datasetIndex);
}

function alternatePointStyles(ctx) {
    const index = ctx.dataIndex;
    return index % 2 === 0 ? 'circle' : 'rect';
}

function makeHalfAsOpaque(ctx) {
    return Utils.transparentize(getLineColor(ctx));
}

function make20PercentOpaque(ctx) {
    return Utils.transparentize(getLineColor(ctx), 0.8);
}

function adjustRadiusBasedOnData(ctx) {
    const v = ctx.parsed.y;
    return v < 10 ? 5
        : v < 25 ? 7
        : v < 50 ? 9
        : v < 75 ? 11
        : 15;
}

// 차트 설정
const config = {
    type: 'radar',
    data: data,
    options: {
        scales: {
            r: {
                pointLabels: {
                    font: {
                        size: 16 // 레이블 텍스트 크기를 16px로 설정
                    }
                }
            }
        },
        plugins: {
            legend: false,
            tooltip: {
                enabled: true, // 툴팁 활성화
                callbacks: {
                    label: function(context) {
                        const label = context.dataset.label || '';
                        const value = context.raw;
                        return `${label}: ${value}`;
                    }
                }
            }
        },
        elements: {
            line: {
                backgroundColor: make20PercentOpaque,
                borderColor: getLineColor,
            },
            point: {
                backgroundColor: getLineColor,
                hoverBackgroundColor: makeHalfAsOpaque,
                radius: adjustRadiusBasedOnData,
                pointStyle: alternatePointStyles,
                hoverRadius: 10,
            }
        }
    }
};

// 차트 생성
const ctx = document.getElementById('hobbiesRadarChart').getContext('2d');
new Chart(ctx, config);