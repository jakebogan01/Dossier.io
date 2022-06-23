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
        $totalViews = auth()->user();

        return $this->chart->areaChart()
            ->setTitle('Monthly Views')
            ->addData('Most Views', [0, $totalViews->total_views])
            ->setXAxis([$totalViews->created_at->format('F'), $totalViews->updated_at->format('F')])
            ->setHeight('300')
            ->setGrid(false, '#B18EC3', 0.05)
            ->setColors(['#B18EC3'])
            ->setFontFamily('Lato')
            ->setFontColor('#1C0681')
            ->setMarkers(['#57178E', '#E040FB'], 7, 10);
    }
}
