<x-guest-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Agri-Modelling') }}
            </h2>
            <x-share-on-x></x-share-on-x>
        </div>

    </x-slot>

    <div class="p-3">

        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Data Use
        </span>
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Input Data
        </span>
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Calibration data
        </span>
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Further Data
        </span>
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-900 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Modelled Data
        </span>

    </div>
    <div class="flex">
        <div class="p-3">
            <p>The North Wyke Farm Platform provides a response to the needs of modellers who have long required more
                agri-environmental data for simulations regarding sustainable agriculture, providing data for agri-model
                input and calibration data to compare with simulated output.</p>
            <p>This website provides a guide to using the Farm Platform Data Portal for data, splitting it into input
                data and calibration data. We provide some examples of results produced using the models we have used.
            </p>
            <p>Please let us know if you have used the Farm Platform data for your modelling, we would appreciate your
                feedback on how easy or difficult you found the Data Portal.</p>
            <p>The aim is that the Data Portal supplies data on temperate high rainfall grassland livestock systems
                internationally for models to use the Farm Platform in their simulations.</p>

        </div>
        <div class="border-3 m-3 border-dotted border-nw-blue-700 p-3">

            <p>Rothamsted North Wyke has a long history of modelling experimental data, for example the <a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="http://www.sciencedirect.com/science/article/pii/S0048969711005742"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    SIMSDairy
                </a> model. Models currently being used with data from the farm platform include:</p>
            <ul class="space-y-3">
                <x-li-dot class="bg-nw-blue-700"><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://www.sciencedirect.com/science/article/pii/S0304380006003802"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        SPACSYS
                    </a></x-li-dot>
                <x-li-dot class="bg-nw-blue-700"><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="http://www.nrel.colostate.edu/projects/daycent/"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        DayCent</a>
                </x-li-dot>
                <x-li-dot class="bg-nw-blue-700"><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://iwaponline.com/hr/article/48/1/277-294/1702"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        SH2O-NW
                    </a></x-li-dot>
                <x-li-dot class="bg-nw-blue-700"><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://www.sciencedirect.com/science/article/pii/S004896971731896X?via%3Dihub"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        The Landscape Model
                    </a></x-li-dot>
            </ul>
        </div>
    </div>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-500 px-4 text-lg font-medium text-nw-blue-50">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Data Use
        </span> How to use the Data Portal and Guides for modelling
    </h2>
    <div class="p-3">
        <p>When using the Farm Platform Data Portal for the first time, to gain a good familiarisation to the
            North Wyke Farm Platform and the data, it is useful to read:</p>

        <ul class="space-y-3">
            <x-li-dot class="bg-nw-blue-700">
                The background information on the establishment, <a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://repository.rothamsted.ac.uk/item/98y1x/the-north-wyke-farm-platform-design-establishment-and-development"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    design and continued
                    development of the Farm Platform provided in the User Guide
                </a>
            </x-li-dot>
            <x-li-dot class="bg-nw-blue-700">Supporting Documents</x-li-dot>
            <ul class="m-5 space-y-3">
                <x-li-arrow><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="http://resources.rothamsted.ac.uk/sites/default/files/groups/North_Wyke_Farm_Platform/Harrod%20and%20Hogan%202008.pdf"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Soils
                        of North Wyke</a></x-li-arrow>
                <x-li-arrow><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="http://resources.rothamsted.ac.uk/sites/default/files/groups/North_Wyke_Farm_Platform/Draft%20report%20v5%20%2831%20Oct%2008%29.pdf"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Hydrological
                        Assessment</a></x-li-arrow>
            </ul>

            <x-li-dot class="bg-nw-blue-700"> Learn about the range of parameters measured, and data collection methods
                for all the
                datasets available on the portal in dedicated <a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="{{ route('guides') }}">User Guides</a> page such as:
            </x-li-dot>
            <ul class="m-5 space-y-3">

                <x-li-arrow>Guide to

                    <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://repository.rothamsted.ac.uk/item/98y34/the-north-wyke-farm-platform-fine-resolution-15-minute-hydrology-and-water-quality-data"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">User
                        the 15 Minute Hydrology and Water Quality Data</a></x-li-arrow>
                <x-li-arrow>Guide to <a
                        href="https://repository.rothamsted.ac.uk/item/98y4x/the-north-wyke-farm-platform-fine-resolution-15-minute-soil-moisture-station-data"
                        style="font-size: 14px;"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">User
                        the 15 Minute Soil Moisture Station Data</a></x-li-arrow>
                <x-li-arrow>Guide to <a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://repository.rothamsted.ac.uk/item/98y4w/the-north-wyke-farm-platform-fine-resolution-15-minute-meteorological-data"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">User
                        the 15 Minute Meteorological Data</a></x-li-arrow>
            </ul>
            <x-li-dot>
                <p>First look at the datasets (both downloaded datasets and metadata) and assess if they
                    would be relevant for input to your model. These <a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://nwfp.rothamsted.ac.uk/fpdownload/QC_Reports/15_minute_Data_Reports_External/Annual_Reports/showfiles.aspx"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Annual
                        reports</a> might help you
                </p>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-700">
                Input to your model one dataset at a time from the data portal (information on
                datasets are supplied on this website).
            </x-li-dot>
            <x-li-dot class="bg-nw-blue-700">
                Explore changing dataset years or parameters and see what difference it makes. This
                helps the user become familiar with the data format and values.
            </x-li-dot>
            <x-li-dot class="bg-nw-blue-700">
                Check the <a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="{{ route('guides') }}">User Guides'</a> webpage
                <span class="px-2 font-semibold"> Known Issues and Workarounds </span> section for known problems with
                using
                the data portal .

            </x-li-dot>
            <x-li-dot class="bg-nw-blue-700">
                When you are more familiar with the data and its format, if you have any questions,
                consult the more detailed explanatory information provided in the data portal user
                guides, including data conversion methods, sensor sensitivity, and potential
                limitations of data. If you still have questions email the data query contact
                address, but please remember the Farm Platform team can answer questions relating to
                data, not modelling.
            </x-li-dot>
        </ul>
        <p>Reading the explanatory guides are a very important step, and not to be bypassed but the
            explanatory information may be absorbed and understood better when you have familiarised
            yourself with the datasets available.</p>

    </div>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-600 px-4 text-lg font-medium text-nw-blue-50">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Input Data
        </span> Datasets suitable for process model input
    </h2>
    <div class="grid grid-cols-2 gap-6 p-3">
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Soils information can
                be
                gained from:</h3>
            <ul class="space-y-3">
                <x-li-arrow>
                    <p><a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="/sites/default/files/groups/North_Wyke_Farm_Platform/Harrod%20and%20Hogan%202008.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"><u>Soils
                                of North Wyke</u></a> which contains % sand, silt, clay for available water
                        capacity determination</p>
                </x-li-arrow>
                <x-li-arrow>
                    <p>Data Portal - Field Surveys - Soil Survey contains pH and bulk density</p>
                </x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Weather data can be
                obtained from:</h3>
            <ul class="space-y-3">
                <x-li-arrow>Data Portal </x-li-arrow>
                <x-li-arrow>Time Series data </x-li-arrow>
                <x-li-arrow>MET Station for whole of Farm Platform.
                </x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Field management data
                including fertilizer applications and silage cutting operations can be
                gained from:</h3>
            <ul class="mx-5 space-y-3">
                <x-li-arrow>
                    Data Portal </x-li-arrow>
                <x-li-arrow> Livestock, Field Event &amp; Survey data </x-li-arrow>
                <x-li-arrow> Field Events datasets*.
                </x-li-arrow>
                <x-li-arrow>
                    <p>These should be used with <a
                            class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="/documents/FP%20Technical%20case%20study%202%20HS%20Field%20Spreading%20Areas.pdf">Technical
                            case study 2:
                            Field spreading area calculations</u></a>, to calculate the rate of
                        application.</p>
                </x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Stock numbers per
                field
                can be gained from:</h3>
            <ul class="mx-5 space-y-3">
                <x-li-arrow>
                    Data Portal </x-li-arrow>
                <x-li-arrow> Livestock datasets
                </x-li-arrow>
            </ul>
        </div>
    </div>
    <div class = "p-3">
        <p class="italic">The field events files are described in farming operations terms, hence the Defra RB209
            Fertilizer Manual is useful for conversion. Ready- converted fertilizer to elemental
            amounts are included <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="/documents/Fertiliser%20conversion%20%28oxide%20to%20element%29.pdf"><u>here</u></a> for the
            fertilizer types used on the Farm Platform.</p>
    </div>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Calibration data
        </span> Datasets suitable for process model calibration and validation
    </h2>
    <div class="grid grid-cols-2 gap-6 p-3">
        <div>
            <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Crop Production</h3>
            <ul class="mx-5 space-y-3">
                <x-li-arrow>Data Portal</x-li-arrow>
                <x-li-arrow>Field Surveys</x-li-arrow>
                <x-li-arrow>Silage Cut Survey gives dry matter yield from the herbage cut for silage
                    production</x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Soil moisture sensor
            </h3>
            <ul class="mx-5 space-y-3">
                <x-li-arrow>Data Portal</x-li-arrow>
                <x-li-arrow>Time Series data</x-li-arrow>
                <x-li-arrow>Soil moisture &amp; Precipitation for each catchment</x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Flume runoff flow &amp;
                nutrients in runoff water</h3>
            <ul class="mx-5 space-y-3">
                <x-li-arrow>Data Portal</x-li-arrow>
                <x-li-arrow>Time Series data</x-li-arrow>
                <x-li-arrow>Water Flow and Properties for each catchment</x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Above-ground herbage
                nitrogen
                &amp; carbon</h3>
            <ul class="space-y-3">
                <x-li-arrow>Data Portal</x-li-arrow>
                <x-li-arrow> Livestock, Field Event and Survey data</x-li-arrow>
                <x-li-arrow>Herbage survey</x-li-arrow>
            </ul>
        </div>
    </div>

    <h2 class="mt-4 h-12 content-center bg-nw-blue-800 px-4 text-lg font-medium text-nw-blue-50">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Further Data
        </span> Supplementary information, Links and further resources
    </h2>
    <div class="p-3">
        Extra data which may be useful in modelling is to be found on the <a
            class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
            href="{{ route('guides') }}">
            Guides, Information, Data Portal Updates and External Links</a>
        webpage in the '<span class="font-bold">Supplementary Data, Information and File Downloads'
        </span>section. This supplementary file store is very useful for models using a daily
        time-step since it contains statistical summaries of the 15-minute datasets, including daily
        weather data, flume measurements and soil moisture, temperature and field precipitation. The
        file store also contains GIS shape files for the farm platform fields.</p>
        <p>Links to further sources of data, including datasets from the same North Wyke site as well as
            other sites, are given on the webpage in the '<span class="font-bold">Useful Links to External Data
                Repositories and Associated Organisations' </span>section.</p>
    </div>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-900 px-4 text-lg font-medium text-nw-blue-50">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-900 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Modelled Data
        </span> Results of Process modelling carried out using the data of the Farm Platform
    </h2>
    <div class="p-3">
        <h3 class="mt-4 text-lg font-medium text-nw-blue-900 underline underline-offset-4">
            <span
                class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
                Modelled Data
            </span> SPACSYS
        </h3>
        <div class="ms-10 pt-5">
            <p>The SPACSYS model (Wu et al., 2007) is a field scale, weather-driven and daily-time-step
                dynamic simulation model. The current version includes a plant growth and development
                component, a nitrogen cycling component, a carbon cycling component, a phosphorus cycling
                component, plus a soil water component that includes representation of water flow to field
                drains as well as downwards through the soil layers, together with a heat transfer
                component. The model has a capability to simulate the interaction of C, N, P, soil water and
                temperature in the soil-plant-atmosphere continuum system.</p>
            <p>The main processes concerning plant growth in the model are plant development, assimilation,
                respiration, and partition of photosynthate and nitrogen from uptake estimated with various
                mechanisms implemented in the model, plus N fixation for legume plants, and root growth and
                development that is described in 3D root system by the following processes: branching,
                extension, architecture, mortality, water uptake and nutrient uptake. An alternative 1D root
                system is implemented to simplify processes involved in root growth and development. The
                functionality on water and nitrogen uptake by roots is also quantified.</p>
            <p>The model has been used to investigate a number of issues including nitrate leaching,
                resource use efficiency by crops, root systems, GHG emissions and and the responses of
                cropping/grassland systems on environmental changes. The model can address the questions,
                such as, how to increase N and water use efficiency through manipulating genetic traits of
                plant root architecture; what field managements to mitigate GHG emissions and diffuse
                pollution; how response of plants/cropping systems to climate change and carbon sequestered
                into soils with land use change.</p>
            <p>Wu, L., McGechan, M. B., McRoberts, N., Baddeley, J. A., Watson, C. A., 2007. SPACSYS:
                integration of a 3D root architecture component to carbon, nitrogen and water cycling -
                model description. <span class="italic">Ecol. Model</span>. 200, 343-359. (<a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://www.sciencedirect.com/science/article/abs/pii/S0304380006003802?via%3Dihub"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">doi:10.1016/j.ecolmodel.2006.08.010</a>)
            </p>
        </div>
        <h3 class="mt-4 text-lg font-medium text-nw-blue-900 underline underline-offset-4"><span
                class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
                Modelled Data
            </span> DAYCENT </h3>
        <div class="ms-10 pt-5">
            <p>DAYCENT is the daily time-step version of the CENTURY biogeochemical model (Parton et al.,
                1994). DAYCENT simulates fluxes of C and N among the atmosphere, vegetation, and soil
                (Parton et al., 1998). Submodels include soil water content and temperature by layer, plant
                production and allocation of net primary production (NPP), decomposition of litter and soil
                organic matter, mineralization of nutrients, N gas emissions from nitrification and
                denitrification, and CH4 oxidation in non-saturated soils.</p>
            <p>Operators create a schedule file which calls in modules for field management and makes it
                possible to manage operations on a daily basis. Model outputs include: daily N-gas flux
                (N2O, NOx, N2), CO2 flux from heterotrophic soil respiration, soil organic C and N, NPP, H2O
                and NO3 leaching, and other ecosystem parameters.</p>
            <p>Parton, W.J. and Rasmussen, P.E. (1994). Long term effects of crop management in
                wheat/fallow: II. CENTURY model simulations. <span class="italic">Soil Science Society of America
                    Journal</span> 58:
                530-536.</p>
            <p>Parton, W.J., Hartman, M., Ojima, D., Schimel, D. 1998. DAYCENT and its land surface
                submodel: description and testing. <span class="italic">Global Planetary Change</span>, 19, 35-48.</p>
        </div>
        <h3 class="mt-4 text-lg font-medium text-nw-blue-900 underline underline-offset-4">
            <span
                class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
                Modelled Data
            </span> SH20-NW
        </h3>
        <div class="ms-10 pt-5">
            <p>SH2O-NW is a simple but effective soil water model to predict the soil moisture stored in the
                root zone and determine field runoff from soil (Shepherd et al., 2002). The model has been
                validated for the North Wyke Farm Platform (Shepherd et al., 2016), and is parsimonious
                requiring available water capacity and soil runoff curve number plus meteorological data.
            </p>
            <p>Water availability in the root zone involves a water balance in which effective rainfall,
                runoff and evapo-transpiration are the main factors. The model assumes that in the absence
                of a water table, effective rainfall is the only source of water. The effective rainfall is
                calculated from rainfall minus surface runoff. If the available water is below a critical
                threshold, the crop demand cannot be met. The relative reduction in water use is related to
                the ratio of the available water and the water holding capacity.</p>
            <p>A. Shepherd, S.M. McGinn, G.C.L. Wyseure. (2002). Simulation of the effect of water
                shortage on the yields of winter wheat in North-East England. <a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://abdn.pure.elsevier.com/en/publications/simulation-of-the-effect-of-water-shortage-on-the-yields-of-winte"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"><span
                        class="italic">Ecological
                        Modelling</span>, 147(1), 41-52.</a></p>
            <p>A. Shepherd, W. Atuhaire, L. Wu, D. Hogan, R. Dunn and L. Cardenas (2016). Historic
                record of pasture soil water and the influence of the North Atlantic Oscillation in
                south-west England. Hydrology Research. (<a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://iwaponline.com/hr/article/48/1/277/1702/Historic-record-of-pasture-soil-water-and-the"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">doi:
                    https://doiorg/10.2166/nh.2016.195</a>)
            </p>
        </div>
    </div>

</x-guest-layout>
