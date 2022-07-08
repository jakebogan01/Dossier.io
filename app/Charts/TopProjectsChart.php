<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\HorizontalBar;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class TopProjectsChart
{
    protected LarapexChart $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): HorizontalBar
    {
        $topProjects = auth()->user()
            ->projects->where('public', 1)
            ->sortByDesc('total_likes')
            ->take(3);

        $totalLikes = [];
        $projectTitles = [];

        foreach($topProjects as $project) {
            array_unshift($totalLikes, $project->total_likes);
        }

        foreach($topProjects as $project) {
            array_unshift($projectTitles, $project->title);
        }

        if (auth()->user()->dark_mode) {
            $color = '#ffffff';
            $chartColor = ['#4FAE9E'];
        } else {
            $color = '#1C0681';
            $chartColor = ['#815ED7'];
        }

        return $this->chart->horizontalBarChart()
            ->setTitle('Most Popular Projects')
            ->setSubtitle(Carbon::now()->format('F, Y'))
            ->addData('Total Likes', $totalLikes)
            ->setXAxis($projectTitles)
            ->setColors($chartColor)
            ->setHeight('350')
            ->setFontFamily('Lato')
            ->setFontColor($color)
            ->setDataLabels(true);
    }
}
