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

        if (auth()->user()->dark_mode) {
            $color = '#ffffff';
            $chartColor = '#DCDCDC';
        } else {
            $color = '#1C0681';
            $chartColor = '#B18EC3';
        }

        return $this->chart->areaChart()
            ->setTitle('Monthly Views')
            ->addData('Most Views', [0, $totalViews->total_views])
            ->setXAxis([$totalViews->created_at->format('F'), $totalViews->updated_at->format('F')])
            ->setHeight('300')
            ->setGrid(false, $chartColor, 0.05)
            ->setColors([$chartColor])
            ->setFontFamily('Lato')
            ->setFontColor($color)
            ->setMarkers([$chartColor, $chartColor], 7, 10);
    }
}
