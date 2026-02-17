@extends('layout.app')

@section('title', 'Chart Center')

@section('content')
<div class="flex justify-between items-start mt-6 mb-8">
        <div>
            <h1 class="text-3xl font-semibold text-dark-700">Chart Center</h1>
            <p class="text-neutral-600 italic mt-3 text-[1.1rem]">ImpactCoder - Autonomous medical coding agent</p>
        </div>
        <div class="flex items-center gap-2 text-slate-500">
            <span class="text-[1rem] text-secondary-500 font-medium italic">26 Sep, 2025</span>
            <img src="{{ asset('assets/images/dashboard/icons/Chart/datesIcon.svg') }}" alt="inventory">
        </div>
    </div>

    <!-- Stats Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4 mb-8">
        <div class="bg-[#F4F3FF] border border-sidebar-300 p-4 rounded-[1.4rem] card-shadow group transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer">
            <div class="bg-[#F4F3FF] w-8 h-8 rounded-lg flex items-center justify-center mb-3 ">
            <img src="{{ asset('assets/images/dashboard/icons/Chart/new_InventoryIcons.svg') }}" class="transition-transform duration-300 group-hover:scale-125"  alt="inventory">
            </div>
            <p class="text-secondary-600 text-[1.1rem] font-normal tracking-wider">New <br/> Inventory</p>
            <h2 class="text-[2.2rem] mt-2 font-semibold text-black">1,390</h2>
        </div>
        <div class="bg-third-200 border border-third-100 p-4 rounded-[1.4rem] card-shadow group transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer">
            <div class="bg-emerald-100 w-8 h-8 rounded-lg flex items-center justify-center mb-3">
            <img src="{{ asset('assets/images/dashboard/icons/Chart/complete_InventoryIcons.svg') }}" class="transition-transform duration-300 group-hover:scale-125" alt="inventory">
            </div>
            <p class="text-secondary-700 text-[1.1rem] font-normal tracking-wider">Completed <br/> Inventory</p>
            <h2 class="text-[2.2rem] mt-2 font-semibold text-black">835</h2>
        </div>
        <div class="bg-third-400 border border-third-300 p-4 rounded-[1.4rem] card-shadow group transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer"">
            <div class="bg-amber-100 w-8 h-8 rounded-lg flex items-center justify-center mb-3">
            <img src="{{ asset('assets/images/dashboard/icons/Chart/backlog_InventoryIcons.svg') }}" class="transition-transform duration-300 group-hover:scale-125" alt="inventory">
            </div>
            <p class="text-secondary-800 text-[1.1rem] font-normal tracking-wider">Backlog <br/> Inventory</p>
            <h2 class="text-[2.2rem] mt-2 font-semibold text-black">269</h2>
        </div>
        <div class="bg-third-600 border border-third-500 p-4 rounded-[1.4rem] card-shadow group transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer"">
            <div class="bg-rose-100 w-8 h-8 rounded-lg flex items-center justify-center mb-3">
            <img src="{{ asset('assets/images/dashboard/icons/Chart/onHold_QueryIcons.svg') }}" class="transition-transform duration-300 group-hover:scale-125" alt="inventory">
            </div>
            <p class="text-secondary-900 text-[1.1rem] font-normal tracking-wider">On Hold / <br/> Query</p>
            <h2 class="text-[2.2rem] mt-2 font-semibold text-black">251</h2>
        </div>
        <div class="bg-secondary-200 border border-secondary-300 p-4 rounded-[1.4rem] card-shadow group transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center mb-3">
            <img src="{{ asset('assets/images/dashboard/icons/Chart/claim_RegectionIcons.svg') }}" class="transition-transform duration-300 group-hover:scale-125" alt="inventory">
            </div>
            <p class="text-secondary-1000 text-[1.1rem] font-normal tracking-wider">Claim  <br/> Rejections</p>
            <h2 class="text-[2.2rem] mt-2 font-semibold text-black">184</h2>
        </div>
        <div class="bg-third-600 border border-third-500  p-4 rounded-[1.4rem] card-shadow group transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 cursor-pointer">
            <div class="bg-red-100 w-8 h-8 rounded-lg flex items-center justify-center mb-3">
            <img src="{{ asset('assets/images/dashboard/icons/Chart/claim_Denials.svg') }}" class="transition-transform duration-300 group-hover:scale-125" alt="inventory">
            </div>
            <p class="text-secondary-400 text-[1.1rem] font-normal tracking-wider">Claim  <br/> Denials</p>
            <h2 class="text-[2.2rem] mt-2 font-semibold text-black">24</h2>
        </div>
    </div>
   <!-- Table Toolbar -->
    <div class="bg-light-500 p-5 rounded-lg mb-8">
   <div class="flex flex-wrap justify-between items-center gap-4 mb-4">
        <div class="flex items-center gap-6 border-b border-slate-100 pb-1">
            <button onclick="filterTab('work-list', this)" class="tab-btn active-tab1 text-primary-500 px-5 py-3 rounded-lg text-[1rem] font-medium flex items-center gap-2 cursor-pointer">
            <img src="{{ asset('assets/images/dashboard/icons/Table/work_ListIcons.svg') }}" alt="work_list"> Work List
            </button>
            <button onclick="filterTab('allocated', this)" class="tab-btn px-5 py-3  text-primary-500 text-[1rem] font-medium  flex items-center gap-2 cursor-pointer">
            <img src="{{ asset('assets/images/dashboard/icons/Table/allocatedIcons.svg') }}" alt="allocated"> Allocated
            </button>
            <button onclick="filterTab('batches', this)" class="tab-btn px-5 py-3  text-primary-500  text-[1rem] font-medium  flex items-center gap-2 cursor-pointer">
            <img src="{{ asset('assets/images/dashboard/icons/Table/batchesIcons.svg') }}" alt="batches"> Batches
            </button>
        </div>

        <div class="flex items-center gap-6">
            <button class="px-5 py-3 border border-primary-300 text-primary-300 text-[1rem] font-medium rounded-lg hover:bg-blue-50 flex items-center gap-2">
            <img src="{{ asset('assets/images/dashboard/icons/Table/upload_chartsIcons.svg') }}" alt="batches">  Upload Charts
            </button>
            <button class="px-5 py-3 bg-[linear-gradient(104.62deg,_#1A78E2_5.78%,_#174C89_94.28%)] sync-btn text-white text-[1.1rem] font-medium rounded-lg transition-all duration-300 ease-in-out
hover:scale-105 hover:shadow-[0_10px_25px_rgba(26,120,226,0.4)]
active:scale-95">
                Sync EHR
            </button>
            <div class="relative">
            <img src="{{ asset('assets/images/dashboard/icons/Table/searchIcons.svg') }}" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-300" alt="batches"> 
                <input type="text" id="searchInput" onkeyup="updateUI()" placeholder="Search" class=" px-5 py-3.5  border border-header500-text text-neutral-200 rounded-lg w-64 text-[1rem] focus:outline-none focus:ring-1 focus:ring-blue-400">
            </div>
        </div>
    </div>

    <!-- Data Table Container -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden mb-2">
    <table class="w-full text-left border-collapse" id="mainTable">
    <thead class="bg-slate-50/50">
    <tr class="border-b-[3px] border-[#A2B7CF]">

        <!-- File Name -->
        <th class="p-4 cursor-pointer" onclick="sortTable(0)">
            <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">File Name</span>
                <div class="sort-icons">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/upArrow.svg') }}" alt="">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/downArrow.svg') }}" alt="">
                </div>
            </div>
        </th>

        <!-- Total Claims -->
        <th class="p-4 text-center cursor-pointer" onclick="sortTable(1)">
            <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">Total Claims</span>
                <div class="sort-icons">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/upArrow.svg') }}" alt="">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/downArrow.svg') }}" alt="">
                </div>
            </div>
        </th>

        <!-- Uploaded -->
        <th class="p-4 text-center cursor-pointer" onclick="sortTable(2)">
            <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">Uploaded</span>
                <div class="sort-icons">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/upArrow.svg') }}" alt="">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/downArrow.svg') }}" alt="">
                </div>
            </div>
        </th>

        <!-- Failed -->
        <th class="p-4 text-center cursor-pointer" onclick="sortTable(3)">
            <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">Failed</span>
                <div class="sort-icons">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/upArrow.svg') }}" alt="">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/downArrow.svg') }}" alt="">
                </div>
            </div>
        </th>

        <!-- Duplicate -->
        <th class="p-4 text-center cursor-pointer" onclick="sortTable(4)">
            <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">Duplicate</span>
                <div class="sort-icons">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/upArrow.svg') }}" alt="">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/downArrow.svg') }}" alt="">
                </div>
            </div>
        </th>

        <!-- Unbilled Days -->
        <th class="p-4 text-center cursor-pointer" onclick="sortTable(5)">
            <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">Unbilled Days</span>
                <div class="sort-icons">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/upArrow.svg') }}" alt="">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/downArrow.svg') }}" alt="">
                </div>
            </div>
        </th>

        <!-- Success Rate -->
        <th class="p-4 text-center cursor-pointer" onclick="sortTable(6)">
            <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">Success Rate</span>
                <div class="sort-icons">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/upArrow.svg') }}" alt="">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/downArrow.svg') }}" alt="">
                </div>
            </div>
        </th>

        <!-- Uploaded On -->
        <th class="p-4 cursor-pointer" onclick="sortTable(7)">
            <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">Uploaded On</span>
                <div class="sort-icons">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/upArrow.svg') }}" alt="">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/downArrow.svg') }}" alt="">
                </div>
            </div>
        </th>

        <!-- Status -->
        <th class="p-4 text-center cursor-pointer" onclick="sortTable(8)">
            <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">Status</span>
                <div class="sort-icons">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/upArrow.svg') }}" alt="">
                    <img src="{{ asset('assets/images/dashboard/icons/Table/downArrow.svg') }}" alt="">
                </div>
            </div>
        </th>

        <!-- View -->
        <th class="p-4 text-center ">
        <div class="th-content">
                <span class="text-primary-400 font-medium text-[1rem]">View</span>
                
            </div>
        </th>

    </tr>
</thead>

            <tbody class="divide-y divide-slate-100 [&>tr:nth-child(even)]:bg-[#F3F8FD]" id="tableBody">
                <!-- Static Row 1 -->
                <tr class="hover:bg-slate-50/50 transition-colors" data-type="work-list">
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 font-medium">denial_management.xls</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">531</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">511</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">10</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">8</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">4</td>
                    <td class="p-4 flex justify-center" data-sort-val="93">
                        <div class="relative w-8 h-8 flex items-center justify-center">
                            <svg class="w-full h-full circle-progress" viewBox="0 0 36 36">
                                <circle class="text-slate-100 stroke-current" stroke-width="3" fill="transparent" r="16" cx="18" cy="18"></circle>
                                <circle class="text-green-500 stroke-current animate-circle" stroke-width="3" stroke-linecap="round" fill="transparent" r="16" cx="18" cy="18" stroke-dasharray="100" stroke-dashoffset="7"></circle>
                            </svg>
                            <span class="absolute text-[9px] font-bold text-neutral-800">93%</span>
                        </div>
                    </td>
                    <td class="p-4 text-sm text-slate-500">09/27/2025</td>
                    <td class="p-4 text-center"><span class="text-[0.95rem] font-medium text-success-600">Success</span></td>
                    <td class="p-4 text-center text-sky-900 cursor-pointer"><img src="{{ asset('assets/images/dashboard/icons/Table/viewIcons.svg') }}" class="view-icon mx-auto"
                    alt=""></td>
                </tr>
                <!-- Static Row 2 -->
                <tr class="hover:bg-slate-50/50 transition-colors" data-type="work-list">
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 ">coding_files_27_Sep_2025.pdf</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">68</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">0</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">68</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">17</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">17</td>
                    <td class="p-4 flex justify-center" data-sort-val="0">
                        <div class="relative w-8 h-8 flex items-center justify-center">
                            <svg class="w-full h-full circle-progress" viewBox="0 0 36 36">
                                <circle class="text-slate-100 stroke-current" stroke-width="3" fill="transparent" r="16" cx="18" cy="18"></circle>
                                <circle class="text-red-500 stroke-current animate-circle" stroke-width="3" stroke-linecap="round" fill="transparent" r="16" cx="18" cy="18" stroke-dasharray="100" stroke-dashoffset="100"></circle>
                            </svg>
                            <span class="absolute text-[9px] font-bold text-neutral-800">0%</span>
                        </div>
                    </td>
                    <td class="p-4 text-sm text-slate-500">09/27/2025</td>
                    <td class="p-4 text-center"><span class="text-[0.95rem] font-medium text-error-500">Failed</span></td>
                    <td class="p-4 text-center text-sky-900 cursor-pointer"><img src="{{ asset('assets/images/dashboard/icons/Table/viewIcons.svg') }}" class="view-icon mx-auto" alt=""></td>
                </tr>
                <!-- Static Row 3 -->
                <tr class="hover:bg-slate-50/50 transition-colors" data-type="work-list">
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 ">denial_management_v2.xls</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">531</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">511</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">20</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">22</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">22</td>
                    <td class="p-4 flex justify-center" data-sort-val="42">
                        <div class="relative w-8 h-8 flex items-center justify-center">
                            <svg class="w-full h-full circle-progress" viewBox="0 0 36 36">
                                <circle class="text-slate-100 stroke-current" stroke-width="3" fill="transparent" r="16" cx="18" cy="18"></circle>
                                <circle class="text-green-600/60 stroke-current animate-circle" stroke-width="3" stroke-linecap="round" fill="transparent" r="16" cx="18" cy="18" stroke-dasharray="100" stroke-dashoffset="58"></circle>
                            </svg>
                            <span class="absolute text-[9px] font-bold text-neutral-800">42%</span>
                        </div>
                    </td>
                    <td class="p-4 text-sm text-slate-500">09/27/2025</td>
                    <td class="p-4 text-center"><span class="text-[0.95rem] font-medium text-success-600">Success</span></td>
                    <td class="p-4 text-center cursor-pointer"><img src="{{ asset('assets/images/dashboard/icons/Table/viewIcons.svg') }}" class="view-icon mx-auto" alt=""></td>
                </tr>
                <!-- More static rows -->
                <tr class="hover:bg-slate-50/50 transition-colors" data-type="work-list">
                    <td class="p-4 text-[0.95rem] font-normal text-third-700">sample_files_27_Sep.pdf</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">23</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">23</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">0</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">12</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">12</td>
                    <td class="p-4 flex justify-center" data-sort-val="0">
                        <div class="relative w-8 h-8 flex items-center justify-center">
                            <svg class="w-full h-full circle-progress" viewBox="0 0 36 36">
                                <circle class="text-slate-100 stroke-current" stroke-width="3" fill="transparent" r="16" cx="18" cy="18"></circle>
                                <circle class="text-red-500 stroke-current animate-circle" stroke-width="3" stroke-linecap="round" fill="transparent" r="16" cx="18" cy="18" stroke-dasharray="100" stroke-dashoffset="100"></circle>
                            </svg>
                            <span class="absolute text-[9px] font-bold text-neutral-800">0%</span>
                        </div>
                    </td>
                    <td class="p-4 text-sm text-slate-500">09/27/2025</td>
                    <td class="p-4 text-center"><span class="text-[0.95rem] font-medium text-error-500">Failed</span></td>
                    <td class="p-4 text-center text-sky-900 cursor-pointer"><img src="{{ asset('assets/images/dashboard/icons/Table/viewIcons.svg') }}" class="view-icon mx-auto" alt=""></td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition-colors" data-type="allocated">
                    <td class="p-4 text-[0.95rem] font-normal text-third-700">allocated_charts_batch_A.pdf</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">120</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">100</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">10</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">5</td>
                    <td class="p-4 text-[0.95rem] font-normal text-third-700 text-center">5</td>
                    <td class="p-4 flex justify-center" data-sort-val="80">
                        <div class="relative w-8 h-8 flex items-center justify-center">
                            <svg class="w-full h-full circle-progress" viewBox="0 0 36 36">
                                <circle class="text-slate-100 stroke-current" stroke-width="3" fill="transparent" r="16" cx="18" cy="18"></circle>
                                <circle class="text-green-500 stroke-current animate-circle" stroke-width="3" stroke-linecap="round" fill="transparent" r="16" cx="18" cy="18" stroke-dasharray="100" stroke-dashoffset="20"></circle>
                            </svg>
                            <span class="absolute text-[9px] font-bold text-neutral-800">80%</span>
                        </div>
                    </td>
                    <td class="p-4 text-[0.95rem] text-slate-500">09/27/2025</td>
                    <td class="p-4 text-center"><span class="text-[0.95rem] font-medium text-success-600">Success</span></td>
                    <td class="p-4 text-center text-sky-900 cursor-pointer"><img src="{{ asset('assets/images/dashboard/icons/Table/viewIcons.svg') }}" class="view-icon mx-auto" alt=""></td>
                </tr>
            </tbody>
        </table>

        <!-- Table Footer Pagination -->
        <div class="p-4 flex items-center justify-between text-slate-400 text-sm border-t border-slate-50 bg-white">
            <div class="flex items-center gap-2">
                <span>Show</span>
                <select id="pageSize" onchange="currentPage=1; updateUI()" class="border border-slate-200 rounded px-2 py-1 outline-none text-black font-medium">
                <option class="text-black" value="2">2</option>
                    <option class="text-black" value="5" selected>5</option>
                    <option class="text-black" value="10">10</option>
                </select>
                <span>entries</span>
            </div>
            <div id="pageStatus" class="font-medium text-neutral-200">Showing 2 out of 4 records</div>
            <div class="flex items-center gap-2" id="paginationControls">
                <!-- Buttons dynamically generated -->
            </div>
        </div>
    </div>
    </div>
        <!-- Insights Banner -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 flex justify-between items-center card-shadow">
        <div>
            <h4 class="text-inventer-500 font-semibold text-[1.2rem]">Need deeper insights?</h4>
            <p class="text-neutral-800 text-[1.1rem] font-normal mt-3 italic">Export analytics, schedule reports, or connect a new data source.</p>
        </div>
        <button class="bg-gradient-to-r from-[#1A78E2] to-[#174C89] 
text-white px-5 py-3 rounded-lg 
font-medium text-[1.1rem]
transition-all duration-300 ease-in-out
hover:scale-105 hover:shadow-[0_10px_25px_rgba(26,120,226,0.4)]
active:scale-95">
            Connect with Client
        </button>
    </div>
@endsection
