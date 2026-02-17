@extends('layout.app')

@section('title', 'Coding Studio')

@section('content')

<!-- Top Cards Grid -->
<div class="flex justify-between items-start mb-8">
<div class="w-full">
<div class="flex justify-between items-start mt-6 mb-8">
        <div>
            <h1 class="text-3xl font-semibold text-dark-700">Coding Studio</h1>
            <p class="text-neutral-600 italic mt-3 text-[1.1rem]">ImpactCoder - Autonomous medical coding agent</p>
        </div>
        <div class="flex items-center gap-2 text-slate-500">
            <span class="text-[1rem] text-secondary-500 font-medium italic">26 Sep, 2025</span>
            <img src="{{ asset('assets/images/dashboard/icons/Chart/datesIcon.svg') }}" alt="inventory">
        </div>
    </div>

        <div class="dashboard-grid">
            <div class="card min-h-[27.75rem]">
                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <div class="section-title ">
                            <img  src="{{ asset('assets/images/dashboard/icons/Chart/productionIcons.svg') }}" alt="product_icon">
                            <span class="text-primary-600 font-medium text-[1.1rem]">Production</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-col justify-center items-center -mt-8">
                        <div id="production-chart" class="flex items-center justify-center -mt-10 min-h-[260px] w-full"></div>
                        <div class="px-3 flex justify-evenly items-center mb-6 w-full mt-[-1.1rem]">
                            <div class="flex flex-col items-center">
                                <div class="flex items-center gap-2 mb-1">
                                    <div class="w-[1.2rem] h-[1.2rem] bg-[#164e85] rounded-[2px]"></div>
                                    <span class="text-2xl font-extrabold text-[#1e293b]">82</span>
                                </div>
                                <span class="text-[1rem] font-medium text-neutral-700">Achieved</span>
                            </div>
                            <div class="v-divider"></div>
                            <div class="flex flex-col items-center">
                                <div class="flex items-center gap-2 mb-1">
                                    <div class="w-[1.2rem] h-[1.2rem] bg-[#f1f5f9] border border-gray-200 rounded-[2px]"></div>
                                    <span class="text-2xl font-extrabold text-[#1e293b]">38</span>
                                </div>
                                <span class="text-[1rem] font-medium text-neutral-700">Deficit</span>
                            </div>
                        </div>
                        <div class="px-1 mb-0 w-[12rem]">
                            <div class="bg-[#4caf50] text-white text-center py-1.5 rounded-full font-medium text-[1.1rem] shadow-sm">
                                78% achieved
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#f0fdf4] p-3 border-t border-green-100 flex items-center gap-2 w-full shrink-0 z-10">
                <img  src="{{ asset('assets/images/dashboard/icons/Chart/trending_upIcons.svg') }}" class="animate-float"alt="trending_icon">
                    <span class="text-[1rem] text-success-600 font-semibold tracking-tight  whitespace-nowrap">+31% <span class="text-numberic-400 font-normal">— 65% of monthly target achieved</span>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="flex flex-col gap-5">
                <div class="grid grid-cols-2 gap-5 h-[225px]">
                    <!-- Quality Card -->
                    <div class="card quality-card h-full py-4 px-6 flex flex-col justify-between">
                        <div class="section-title" style="margin-bottom: 0;">
                        <img  src="{{ asset('assets/images/dashboard/icons/Chart/qualityIcons.svg') }}" alt="quality_icon">
                        <span class="text-primary-600 font-medium text-[1.1rem]">Quality</span>
                        </div>
                        <div class="flex justify-between items-center mb-2 mt-1">
                            <div class="text-left">
                                <p  class="font-semibold text-error-600 text-[1.4rem]">>95%</p>
                                <p class="text-[1rem] font-medium text-neutral-700">Target</p>
                            </div>
                            <div class="v-divider-quality"></div>
                            <div class="text-right">
                                <p class="font-semibold text-error-700 text-[1.4rem]">97%</p>
                                <p class="text-[1rem] font-medium text-neutral-700">Accuracy</p>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <div class="quality-track">
                                <div id="quality-fill" class="quality-fill"></div>
                            </div>
                            <div class="flex justify-between px-1 text-[11px] font-bold text-gray-500">
                                <span class="text-neutral-700 font-medium text-[0.9rem]">0%</span>
                                <span class="text-neutral-700 font-medium text-[0.9rem]">95%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Error Breakdown Card -->
                    <div class="card p-0 h-full overflow-hidden error-breakdown-card">
                        <div class="p-4 pb-1 flex-grow flex flex-col items-center">
                            <div class="section-title mb-4 w-full text-left">
                                <img  src="{{ asset('assets/images/dashboard/icons/Chart/error_BreakIcons.svg') }}" alt="product_icon">
                                <span class="text-primary-600 font-medium text-[1.1rem]">Error Breakdown</span>
                            </div>
                            <div id="error-chart" class="flex-grow w-full"></div>
                        </div>
                        <div class="bg-secondary-100 h-12 border-t border-rose-100 flex items-center justify-center">
                            <div class="flex items-center gap-2 ">
                                <span class="text-xl font-black text-black leading-none">09</span> 
                                <span class=" text-numberic-500 font-medium text-[1rem] tracking-tight">Rework Pending</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Daily Progress Card -->
                <div class="card daily-progress-card p-4" style="height: 200px;">
                    <div class="flex justify-between items-center mb-2">
                        <div class="section-title" style="margin-bottom: 0;">
                        <img  src="{{ asset('assets/images/dashboard/icons/Chart/daily_ProgressIcons.svg') }}" alt="product_icon">
                        <span class="text-primary-600 font-medium text-[1.1rem]">Daily Progress</span>
                        </div>
                        <div class="flex gap-3">
                            <div class="flex items-center gap-1.5 legend-item cursor-pointer" onclick="toggleLegend('coding', this)">
                                <div class="legend-dot  w-4 h-4 rounded-[4px]" style="background-color: #96B9E1;"></div>
                                <span class="legend-text text-neutral-800 text-[13px] font-medium">Coding</span>
                            </div>
                            <div class="flex items-center gap-1.5 legend-item cursor-pointer" onclick="toggleLegend('denials', this)">
                                <div class="legend-dot w-4 h-4 rounded-[4px]" style="background-color: #C1DBE3;"></div>
                                <span class="legend-text text-neutral-800 text-[13px] font-medium">Denials</span>
                            </div>
                            <div class="flex items-center gap-1.5 legend-item cursor-pointer" onclick="toggleLegend('rejections', this)">
                                <div class="legend-dot  w-4 h-4 rounded-[4px]" style="background-color: #FFDBE0;"></div>
                                <span class="legend-text text-neutral-800 text-[13px] font-medium">Rejections</span>
                            </div>
                        </div>
                    </div>
                    <div id="daily-chart" class="w-full" style="height: 140px;"></div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="flex flex-col gap-5 h-[27.75rem] bg-light-500">
                <div class="card flex-grow w-full min-w-0 py-4 px-6 bg-light-500 !overflow-y-auto hide-scrollbar">
                    <div class="section-title">
                    <img  src="{{ asset('assets/images/dashboard/icons/Chart/coding_updatesIcons.svg') }}" alt="product_icon">
                    <span class="text-primary-600 font-medium text-[1.1rem]">Coding Updates</span>
                    </div>
                    
                    <div class="flex flex-wrap gap-2 mb-2">
                        <button id="btn-all" class="tab-btn active" onclick="showTab('all')">All</button>
                        <button id="btn-lcd" class="tab-btn" onclick="showTab('lcd')">LCD</button>
                        <button id="btn-cci" class="tab-btn" onclick="showTab('cci')">CCI</button>
                        <button id="btn-general" class="tab-btn" onclick="showTab('general')">General</button>
                        <button id="btn-client" class="tab-btn" onclick="showTab('client')">Client Update</button>
                    </div>

                    <div id="content-all" class="tab-content active">
                        <div class="update-item">Z12.11 is not Applicable to Florida state</div>
                        <div class="update-item">New code updated in surgical procedure code</div>
                        <div class="update-item">Z78.021 is not Applicable to Florida state</div>
                    </div>
                    <div id="content-lcd" class="tab-content">
                        <div class="update-item">Local Coverage Determination update for Radiology</div>
                    </div>
                    <div id="content-cci" class="tab-content">
                        <div class="update-item">CCI Edit version 29.3 update now live</div>
                    </div>
                    <div id="content-general" class="tab-content">
                        <div class="update-item">Documentation requirements for 2025 ICD-10-CM</div>
                    </div>
                    <div id="content-client" class="tab-content">
                        <div class="update-item">Integris Health: Specific SOP for Post Charges</div>
                    </div>

                    <div class="section-title !mb-0 mt-4">
                    <img  src="{{ asset('assets/images/dashboard/icons/Chart/coding_updatesIcons.svg') }}" alt="product_icon">
                    <span class="text-primary-600 font-medium text-[1.1rem]">Client Instruction</span>
                    </div>
                    <div class="mt-4">
                        <div class="instruction-row">
                            <span class="instruction-text">Integris Health system SOP</span>
                            <a href="#" class="view-link">       <img  src="{{ asset('assets/images/dashboard/icons/Chart/viewIcons.svg') }}" alt="product_icon"> <span class="text-primary-400 text-[15px] font-medium">View</span></a>
                        </div>
                        <div class="instruction-row"><span class="instruction-text">Post Charges within 24 hours</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    </div>

<!-- Form Section -->
                <div class="bg-[#FBFBFB]">
                <div id="top-tabs"  class="tab-nums flex items-center space-x-2 pt-[1.125rem] px-[1.125rem] pb-0 mb-8 overflow-x-auto pb-2">
                <div class="tab-item flex items-center space-x-2 px-5 py-2 rounded-lg text-sm transition-all shrink-0 cursor-pointer">
                <img src="{{ asset('assets/images/dashboard/icons/patient_DetailsIcons/file_InventoryIcons.svg') }}" alt="file_inventory">
                    <span class="text-primary-500 text-[1rem]">File Inventory </span><span class="text-num text-primary-500 bg-[#F0F1F3] font-semibold rounded-[0.4rem] text-[0.8rem] opacity-60 ml-1">10</span>
                </div>
                <div class="tab-item  flex items-center space-x-2 px-5 py-2 rounded-lg text-sm transition-all shrink-0 cursor-pointer">
                <img src="{{ asset('assets/images/dashboard/icons/patient_DetailsIcons/batchIcons.svg') }}" alt="batch_icon">
                    <span class="text-primary-500 text-[1rem]">Batch </span><span class="text-num text-primary-500 bg-[#F0F1F3] font-semibold rounded-[0.4rem] text-[0.8rem] opacity-60 ml-1">10</span>
                </div>
                <div class="tab-item tab-active flex items-center space-x-2 px-5 py-2 rounded-lg text-sm  shadow-lg shrink-0 cursor-pointer">
                <img src="{{ asset('assets/images/dashboard/icons/patient_DetailsIcons/Manual_EntryIcons.svg') }}" alt="manual_icons">
                    <span class="text-primary-500 text-[1rem]">Manual Entry</span>
                </div>
                <div class="tab-item flex items-center space-x-2 px-5 py-2 rounded-lg text-sm transition-all shrink-0 cursor-pointer">
                <img src="{{ asset('assets/images/dashboard/icons/patient_DetailsIcons/in_ProgressIcons.svg') }}" alt="in_progress">
                    <span class="text-primary-500 text-[1rem]">In Progress </span><span class="text-num text-primary-500 bg-[#F0F1F3] font-semibold  rounded-[0.4rem] text-[0.8rem] opacity-60 ml-1">113</span>
                </div>
                <div class="tab-item  flex items-center space-x-2 px-5 py-2 rounded-lg text-sm transition-all shrink-0 cursor-pointer">
                <img src="{{ asset('assets/images/dashboard/icons/patient_DetailsIcons/completedIcons.svg') }}" alt="completed_icons">
                    <span class="text-primary-500 text-[1rem]">Completed</span> <span class="text-num text-primary-500 bg-[#F0F1F3] font-semibold rounded-[0.4rem] text-[0.8rem] opacity-60 ml-1">57</span>
                </div>
                <div class="tab-item  flex items-center space-x-2 px-5 py-2 rounded-lg text-sm transition-all shrink-0 cursor-pointer">
                <img src="{{ asset('assets/images/dashboard/icons/patient_DetailsIcons/on_HoldIcons.svg') }}" alt="on_holdIcons">
                    <span class="text-primary-500 text-[1rem]">On Hold / Query </span><span class="text-num text-primary-500 bg-[#F0F1F3] font-semibold  rounded-[0.4rem] text-[0.8rem] opacity-60 ml-1">4</span>
                </div>
                <div class="tab-item  flex items-center space-x-2 px-5 py-2 rounded-lg text-sm transition-all shrink-0 cursor-pointer">
                <img src="{{ asset('assets/images/dashboard/icons/patient_DetailsIcons/BacklogIcons.svg') }}" alt="backIcons">
                    <span class="text-primary-500 text-[1rem] ">Backlog </span><span class="text-num text-primary-500 font-semibold bg-[#F0F1F3] rounded-[0.4rem] text-[0.8rem] opacity-60 ml-1">4</span>
</div>
            </div>

            <!-- Page Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left: Forms -->
                <div class="lg:col-span-7 space-y-6">
                    <!-- Patient Details Section -->
                    <section class=" px-6 rounded-xl  relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-1 h-full "></div>
                        <h3 id="section-title" class="text-primary-600 text-[1.2rem] font-medium mb-5">Patient Details</h3>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="space-y-1">
                                <label class="text-neutral-300 font-normal text-[1rem] tracking-tight">Last Name <span class="text-red-500">*</span></label>
                                <input type="text" value="Westervelt" class="input-animated w-full mt-1 px-4 py-2 border border-input-400 rounded-[5px] text-sm">
                            </div>
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">First Name <span class="text-red-500">*</span></label>
                                <input type="text" value="Haylie" class="input-animated w-full px-4 mt-1 py-2 border border-input-400 rounded-[5px] text-[1rem]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">MI</label>
                                <input type="text" value="SA" class="input-animated w-full px-4 py-2 mt-1 border border-input-400 rounded-[5px] text-[1rem]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">Account Number <span class="text-red-500">*</span></label>
                                <input type="text" value="8188166301" class="input-animated w-full px-4 py-2 mt-1 border border-input-400 rounded-[5px] text-[1rem]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">DOB <span class="text-red-500">*</span></label>
                                <input type="date" value="1996-05-16" class="input-animated w-full px-4 py-2 mt-1 border-input-400 rounded-[5px] text-[1rem] cursor-pointer">
                            </div>
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">SSN</label>
                                <input type="text" value="8610047586" class="input-animated w-full px-4 py-2 mt-1 border-input-400 rounded-[5px] text-[1rem]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">Patient ID</label>
                                <input type="text" value="584854585" class="input-animated w-full px-4 py-2 mt-1 border-input-400 rounded-[5px] text-[1rem]">
                            </div>
                        </div>
                    </section>

                    <!-- Claim Details Section -->
                    <section class=" p-6 rounded-xl ">
                        <h3 class="text-primary-600 text-[1.2rem] font-medium mb-5">Claim Details</h3>
                        <div class="grid grid-cols-2 gap-6 mb-6">
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">Insurance</label>
                                <input type="text" value="4 Ever Life Insurance Company" class="input-animated w-full px-4 py-2 mt-1 border-input-400 rounded-[5px] text-[1rem]">
                            </div>
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">Group Name</label>
                                <input type="text" value="Personal Accident Insurance" class="input-animated w-full px-4 py-2 mt-1 border-input-400 rounded-[5px] text-[1rem]">
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">Visit Type</label>
                                <div class="select-wrapper">
                                    <select class="input-animated w-full px-4 py-2 mt-1 border-input-400 rounded-[5px] text-[1rem] appearance-none ">
                                        <option>Psychotherapy</option>
                                        <option>Physical Therapy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">Allocated to</label>
                                <div class="select-wrapper">
                                    <select class="input-animated w-full px-4 py-2 mt-1 border-input-400 rounded-[5px] text-[1rem] appearance-none ">
                                        <option>Makenna Botosh</option>
                                        <option>Dr. Smith</option>
                                    </select>
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label class="font-normal text-neutral-300 text-[1rem] tracking-tight">Scope</label>
                                <div class="select-wrapper">
                                    <select class="input-animated w-full px-4 py-2 mt-1 border-input-400 rounded-[5px] text-[1rem] appearance-none ">
                                        <option>Coding</option>
                                        <option>Billing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 w-1/3 space-y-1">
                            <label class="text-neutral-300 font-normal text-[1rem] tracking-tight">Date of Service</label>
                            <input type="date" value="2025-04-27" class="input-animated w-full px-4 py-2 mt-1 border-input-400 rounded-[5px] text-[1rem] cursor-pointer">
                        </div>
                    </section>

                    <!-- Bottom Buttons -->
                    <div class="flex items-center justify-center space-x-4 mb-[4rem] pt-4">
                        <button class="px-10 py-3.5 rounded-[12px] bg-gray-200 text-neutral-800 font-medium cursor-pointer transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-[0_10px_25px_rgba(26,120,226,0.4)]active:scale-95">Clear</button>
                        <button class="px-10 py-3.5 rounded-[12px] bg-gradient-to-br from-[#1A78E2] to-[#174C89] text-white font-medium  cursor-pointer transition-all shadow-lg transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-[0_10px_25px_rgba(26,120,226,0.4)] active:scale-95">Continue</button>
                    </div>
                </div>

                <!-- Right: Upload Section -->
                <div class="lg:col-span-5 h-full">
                    <div class=" rounded-xl  h-full flex flex-col">
                        <div class="flex items-center justify-between">
                            <h3 class="text-primary-600 text-[1.2rem] font-medium mb-5">Upload Documents</h3>
                        </div>
                        
                        <input type="file" id="file-input" class="hidden" multiple>
                        <div 
                            onclick="document.getElementById('file-input').click()"
                            class="  border-dashed  rounded-2xl mr-4.5  flex flex-col items-center justify-center p-8 text-center cursor-pointer"
                        >
                            <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <img src="{{ asset('assets/images/dashboard/icons/patient_DetailsIcons/drag_DropIcons.svg') }}" class=" group-hover:animate-icon-hover" alt="manual_icons ">
                            </div>
                            <p class="font-medium text-lg mb-2">
                                <span class="text-dark-600 underline">Click to Upload</span> or drag & drop it here
                            </p>
                            <p class="text-xs text-neutral-500 text-[1rem] italic ">Excel, PDF, JPG, PNG are supported formats. Max 10MB per file.</p>
                        </div>

                        <!-- Uploaded Files List -->
                        <div id="file-list" class="mt-6 mr-4.5 space-y-3 hidden">
                            <p class="text-primary-600 font-normal text-[1rem]">Selected Files</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
@endsection
