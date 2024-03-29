<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.ml-8{margin-left:2rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}a.github{fill:#c6cbd1;}}.giant{font-size:3em}.scroll{overflow:auto;}pre{margin:0}.p0{padding:0}
        </style>

        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 giant antialiased dark:text-white">
                {{ config('app.name') }}
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">

                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="text-lg">🌐</div>
                            <div class="ml-1 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Metadata URLs</div>
                        </div>

                        <div class="ml-8 leading-7"><a href="{{ $ep }}" class="underline text-gray-900 dark:text-white">OData service</a></div>
                        <pre class="p0 ml-8 text-gray-600 dark:text-gray-400 text-sm">{{ $ep }}</pre>

                        <div class="ml-8 leading-7"><a href="{{ $ep }}$metadata?$format=json" class="underline text-gray-900 dark:text-white">CSDL JSON</a></div>
                        <pre class="p0 ml-8 text-gray-600 dark:text-gray-400 text-sm">{{ $ep }}$metadata?$format=json</pre>

                        <div class="ml-8 leading-7"><a href="{{ $ep }}$metadata?$format=xml" class="underline text-gray-900 dark:text-white">CSDL XML</a></div>
                        <pre class="p0 ml-8 text-gray-600 dark:text-gray-400 text-sm">{{ $ep }}$metadata?$format=xml</pre>

                        <div class="ml-8 leading-7"><a href="{{ \Lodata::getOpenApiUrl() }}" class="underline text-gray-900 dark:text-white">OpenAPI v3</a></div>
                        <pre class="p0 ml-8 text-gray-600 dark:text-gray-400 text-sm">{{ \Lodata::getOpenApiUrl() }}</pre>

                        <div class="ml-8 leading-7"><a href="{{ \Lodata::getPbidsUrl() }}" class="underline text-gray-900 dark:text-white">PowerBI discovery</a></div>
                        <pre class="p0 ml-8 text-gray-600 dark:text-gray-400 text-sm">{{ \Lodata::getPbidsUrl() }}</pre>

                        <div class="ml-8 leading-7"><a href="{{ \Lodata::getOdcUrl('Operations') }}" class="underline text-gray-900 dark:text-white">Office Data Connection</a></div>
                        <pre class="p0 ml-8 text-gray-600 dark:text-gray-400 text-sm">{{ \Lodata::getOdcUrl('Operations') }}</pre>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <div class="text-lg">📊</div>
                            <div class="ml-1 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Recommended clients</div>
                        </div>

                        <div class="ml-8 mt-2">
                            <a href="https://lodata.io/clients/powerbi.html" class="mt-2 underline text-gray-900 dark:text-white">Microsoft Power BI</a>
                        </div>

                        <div class="ml-8 mt-2">
                            <a href="https://lodata.io/clients/excel.html" class="mt-2 underline text-gray-900 dark:text-white">Microsoft Excel</a>
                        </div>

                        <div class="ml-8 mt-2">
                            <a href="https://lodata.io/clients/openapi.html" class="mt-2 underline text-gray-900 dark:text-white">OpenAPI / Swagger</a>
                        </div>

                        <div class="ml-8 mt-2">
                            <a href="https://lodata.io/clients/dataverse.html" class="mt-2 underline text-gray-900 dark:text-white">Microsoft Dataverse</a>
                        </div>

                        <div class="ml-8 mt-2">
                            <a href="https://lodata.io/clients/salesforce.html" class="mt-2 underline text-gray-900 dark:text-white">Salesforce Connect</a>
                        </div>
                        
                        <div class="ml-8 mt-2">
                            <a href="https://lodata.io/clients/sap.html" class="mt-2 underline text-gray-900 dark:text-white">SAP Data Intelligence</a>
                        </div>

                        <div class="ml-8 mt-2">
                            <a href="https://lodata.io/clients/devextreme.html" class="mt-2 underline text-gray-900 dark:text-white">DevExtreme</a>
                        </div>

                        <div class="ml-8 mt-2">
                            <a href="https://www.tableau.com/en-us/downloads/public/pc64" class="mt-2 underline text-gray-900 dark:text-white">Tableau Public</a>
                        </div>
                        
                        <div class="ml-8 mt-2">
                            <a href="https://www.qlik.com/us/products/qlik-sense" class="mt-2 underline text-gray-900 dark:text-white">Qlik Sense</a>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <div class="text-lg">📚</div>
                            <div class="ml-1 text-lg leading-7 font-semibold text-gray-900 dark:text-white">About</div>
                        </div>

                        <div class="ml-8 mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            This service provides APIs for an OCAP database (parsed from JSON to SQL by ocap-stats).
                        </div>
                        <div class="ml-8 mt-2">
                            <a href="https://github.com/OCAP2/OCAP" class="mt-2 underline text-gray-900 dark:text-white">OCAP</a>
                        </div>
                        <div class="ml-8">
                            <a href="https://github.com/a-sync/ocap-stats" class="mt-2 underline text-gray-900 dark:text-white">ocap-stats</a>
                        </div>
                        <div class="ml-8">
                            <a href="https://lodata.io/" class="mt-2 underline text-gray-900 dark:text-white">Lodata</a>
                        </div>
                        <div class="ml-8">
                            <a href="https://www.oasis-open.org/standard/odata-v4-01-os/" class="mt-2 underline text-gray-900 dark:text-white">OData</a>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <span class="text-lg">🧠</span>
                            <div class="ml-1 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Data
                                @if(config('app.ocap_stats_url'))
                                    <a href="{{ config('app.ocap_stats_url') }}" class="ml-1 text-gray-600 dark:text-gray-400 text-sm underline">(source)</a>
                                @endif
                            </div>
                        </div>

                        <div class="ml-8 mt-2 text-gray-600 dark:text-gray-400 text-sm">
<pre class="scroll">operations: {{ $stats['operations'] }}
timestamps: {{ $stats['timestamps'] }}
entities: {{ $stats['entities'] }}
events: {{ $stats['events'] }}
players: {{ $stats['players'] }}
aliases: {{ $stats['aliases'] }}</pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left sm:ml-0">
                    <a href="https://github.com/a-sync/ocap-odata" class="github"><svg width="16" height="16" viewBox="0 0 16 16" version="1.1" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                        </svg></a>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Lodata {{ \Composer\InstalledVersions::getPrettyVersion('flat3/lodata') }}
                    /
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                    /
                    PHP v{{ PHP_VERSION }}
                </div>
            </div>
        </div>
    </div>
    </body>

</html>
