<x-dashboard-tile :position="$position" refresh-interval="30">
    <div class="grid gap-2 h-full">
        <ul class="self-center divide-y-2">
            <li class="py-1 grid grid-cols-1-auto">
                <span>✨</span>
                <span class="font-bold tabular-nums">
                    {{ formatNaturalNumber($gitHubStars) }}
                </span>
            </li>
            <li class="py-1 grid grid-cols-1-auto">
                <span>Contributors</span>
                <span class="font-bold tabular-nums">
                    {{ formatNaturalNumber($gitHubContributors) }}
                </span>
            </li>
            <li class="py-1 grid grid-cols-1-auto">
                <span>Issues</span>
                <span class="font-bold tabular-nums">
                    {{ formatNaturalNumber($gitHubIssues) }}
                </span>
            </li>
            <li class="py-1 grid grid-cols-1-auto">
                <span>Pull Requests</span>
                <span class="font-bold tabular-nums">
                    {{ formatNaturalNumber($gitHubPullRequests) }}
                </span>
            </li>
            <li class="py-1 grid grid-cols-1-auto">
                <span>30 days</span>
                <span class="font-bold tabular-nums">
                    {{ formatNaturalNumber($packagistMonthly) }}
                </span>
            </li>
            <li class="py-1 grid grid-cols-1-auto">
                <span>Total</span> <span class="font-bold tabular-nums">
                    {{ formatNaturalNumber($packagistTotal) }}
                </span>
            </li>
        </ul>
    </div>
</x-dashboard-tile>
