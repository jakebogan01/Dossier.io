<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\AreaChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyViewsChart
{
    protected LarapexChart $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): AreaChart
    {
        return $this->chart->areaChart()
            ->setTitle('Monthly Views')
            ->addData('Most Views', [70, 29, 77, 28, 55, 45])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June'])
            ->setHeight('300')
            ->setGrid(false, '#B18EC3', 0.05)
            ->setColors(['#B18EC3'])
            ->setFontFamily('Lato')
            ->setFontColor('#1C0681')
            ->setMarkers(['#57178E', '#E040FB'], 7, 10);
    }
}
