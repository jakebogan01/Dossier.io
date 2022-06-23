<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\BarChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TopProjectsChart
{
    protected LarapexChart $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Top Five Projects')
            ->addData('Most Liked', [6, 9, 3, 4, 10])
            ->setXAxis(['January', 'February', 'March', 'April', 'May'])
            ->setColors(['#815ED7'])
            ->setFontFamily('Lato')
            ->setFontColor('#1C0681')
            ->setHeight('350')
            ->setDataLabels(true)
            ->setGrid();
    }
}
