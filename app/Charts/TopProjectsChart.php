<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\PieChart;
use Carbon\Carbon;

class TopProjectsChart
{
    protected LarapexChart $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): PieChart
    {
        $topProjects = auth()->user()
            ->projects->where('public', 1)
            ->sortByDesc('total_likes')
            ->take(3);

        if (auth()->user()->dark_mode) {
            $color = '#ffffff';
            $chartColor = ['#4FAE9E', '#5EADD6', '#333333'];
        } else {
            $color = '#1C0681';
            $chartColor = ['#815ED7', '#a95ed7', '#6a5ed7'];
        }

        return $this->chart->pieChart()
            ->setTitle('Most Popular Projects')
            ->setSubtitle(Carbon::now()->format('F, Y'))
            ->addData($topProjects->pluck('total_likes')->toArray())
            ->setLabels($topProjects->pluck('title')->toArray())
            ->setColors($chartColor)
            ->setHeight('350')
            ->setFontFamily('Lato')
            ->setFontColor($color)
            ->setDataLabels(true);
    }
}
