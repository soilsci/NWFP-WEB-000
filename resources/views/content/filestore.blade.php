<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Supplementary Information and Data Summaries') }}
        </h2>
    </x-slot>
    <div class="p-3">
     Information and data summary files that are not available on the Data Portal can be directly
            downloaded from the Farm Platform file store and includes:
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
        Supplementary Information Files</h2>
    <div class="p-3">

        <ul class="list-disc pl-5">
            <li><a href="https://nwfp.rothamsted.ac.uk/fpdownload/ArcGIS_SHP_Files/showfiles.aspx"
                    style="color: blue; text-decoration: underline",
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    ArcGIS Shape Files of the Farm Platform fields
                </a>
            </li>

            <li><a href="https://nwfp.rothamsted.ac.uk/fpdownload/Farm_Platform_Maps/showfiles.aspx"
                    style="color: blue; text-decoration: underline",
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Farm Platform Maps
                </a>

            <li><a href="https://nwfp.rothamsted.ac.uk/fpdownload/DB_Updates/showfiles.aspx"
                    style="color: blue; text-decoration: underline",
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Database Updates
                </a>
        </ul>
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
        Data Summary Files</h2>
    <div class="p-3">
        <ul class="list-disc pl-5">
            <li><a href="https://nwfp.rothamsted.ac.uk/fpdownload/SummaryStatistics_15min_Data/showfiles.aspx"
                    style="color: blue; text-decoration: underline",
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Daily and 4-weekly Summary Statistics of the 15-Minute data
                </a>
            </li>

            <li><a href="https://nwfp.rothamsted.ac.uk/fpdownload/QC_Reports/15_minute%20QC-reports/Reports_QC_v3/showfiles.aspx"
                    style="color: blue; text-decoration: underline",
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Quality Control Reports
                </a>
            </li>

            <li><a href="https://nwfp.rothamsted.ac.uk/fpdownload/QC_Reports/15_minute_Data_Reports_External/Annual_Reports/showfiles.aspx"
                    style="color: blue; text-decoration: underline",
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Annual 15-Minute Data Summary Statistics
                </a>

            <li><a href="https://nwfp.rothamsted.ac.uk/fpdownload/Animal_Counts_Gantts/showfiles.aspx"
                    style="color: blue; text-decoration: underline",
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Animal Count Pivot Tables
                </a>
            </li>
        </ul>
    </div>
</x-guest-layout>
