<x-app-layout>
    <div class="my-8 max-w-[1920px] mx-auto">
        <x-dashboard.welcome :currentUser="$currentUser" :areaChart="$areaChart" :pieChart="$pieChart" />
    </div>
</x-app-layout>
