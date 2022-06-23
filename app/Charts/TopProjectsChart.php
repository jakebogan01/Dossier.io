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
        $topProjects = auth()->user()
            ->projects->where('public', 1)
            ->sortByDesc('total_likes')
            ->take(3);

        return $this->chart->barChart()
            ->setTitle('Most Popular Projects')
            ->addData('Total', $topProjects->pluck('total_likes')->toArray())
            ->setXAxis($topProjects->pluck('title')->toArray())
            ->setColors(['#815ED7'])
            ->setFontFamily('Lato')
            ->setFontColor('#1C0681')
            ->setHeight('350')
            ->setDataLabels(true)
            ->setGrid();
    }
}
