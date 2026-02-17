        <div>
            <div class="mb-6 mt-4">
                <h2 class="text-primary-600 text-[1.3rem] font-semibold">ImpactCoder</h2>
            </div>

            <!-- Primary Navigation -->
            <nav class="space-y-1 flex-1">
                <a href="javascript:void(0);" class="sidebar-link flex items-center space-x-3 px-3 py-3.5 text-sidebar-500 hover:bg-gray-50 rounded-lg transition-colors hover:animate-shake">
                    <img  src="{{ asset('assets/images/dashboard/icons/aside/dashboard_icon.svg') }}" alt="dashboard_icon">
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="/chart_center" class="sidebar-link flex items-center space-x-3 px-3 py-3.5 text-sidebar-500 hover:bg-gray-50 rounded-lg transition-colors hover:animate-shake  {{ request()->is('chart_center') ? 'bg-sidebar-400 text-dark-500 font-medium' : 'text-sidebar-500' }}">
                <img  src="{{ asset('assets/images/dashboard/icons/aside/Chart_icon.svg') }}" alt="chart_icon">
                    <span class="font-medium">Chart Center</span>
                </a>
                <!-- Active Sidebar Item -->
                <a href="/coding_studio" class="sidebar-link flex items-center space-x-3 px-3 py-3.5 text-sidebar-500 hover:bg-gray-50 rounded-lg transition-colors hover:animate-shake {{ request()->is('coding_studio') ? 'bg-sidebar-400 text-dark-500 font-medium' : 'text-sidebar-500' }}">
                <img  src="{{ asset('assets/images/dashboard/icons/aside/coding_studioIcons.svg') }}" alt="coding_icon">
                    <span class="font-medium ">Coding Studio</span>
                </a>
                <a href="javascript:void(0);" class="sidebar-link flex items-center space-x-3 px-3 py-3.5 text-sidebar-500 hover:bg-gray-50 rounded-lg transition-colors hover:animate-shake">
                <img  src="{{ asset('assets/images/dashboard/icons/aside/audio_StudioIcons.svg') }}" alt="dashboard_icon">
                    <span class="font-medium">Audit Studio</span>
                </a>
                <a href="javascript:void(0);" class="sidebar-link flex items-center space-x-3 px-3 py-3.5 text-sidebar-500 hover:bg-gray-50 rounded-lg transition-colors hover:animate-shake">
                <img  src="{{ asset('assets/images/dashboard/icons/aside/coded_ReadyIcons.svg') }}" alt="codeready_icons">
                    <span class="font-medium">Coded & Ready</span>
                </a>
                <a href="javascript:void(0);" class=" sidebar-link flex items-center space-x-3 px-3 py-3.5 text-sidebar-500 hover:bg-gray-50 rounded-lg transition-colors hover:animate-shake">
                <img  src="{{ asset('assets/images/dashboard/icons/aside/manual_EntryIcons.svg') }}" alt="manual_icon">
                    <span class="font-medium">Manual Entry</span>
                </a>
                <a href="javascript:void(0);" class="sidebar-link flex items-center space-x-3 px-3 py-3.5 text-sidebar-500 hover:bg-gray-50 rounded-lg transition-colors hover:animate-shake">
                <img  src="{{ asset('assets/images/dashboard/icons/aside/reportsIcons.svg') }}" alt="report_icon">
                    <span class="font-medium">Reports</span>
                </a>
            </nav>

            <!-- Others Section -->
            <div class="mt-auto pt-28">
                <p class="text-xs font-medium text-gray-400  tracking-wider px-3 mb-2">Others</p>
                <div class="space-y-1">
                    <a href="javascript:void(0);" class="sidebar-link flex items-center space-x-3 px-3 py-3.5 text-sidebar-500 hover:bg-gray-50 rounded-lg transition-colors hover:animate-shake">
                    <img  src="{{ asset('assets/images/dashboard/icons/aside/settingsIcons.svg') }}" alt="setting_icon">
                        <span class="font-medium">Settings</span>
                    </a>
                    <a href="javascript:void(0);" class="sidebar-link flex items-center space-x-3 px-3 py-3.5 text-sidebar-500 hover:bg-gray-50 rounded-lg transition-colors hover:animate-shake">
                    <img  src="{{ asset('assets/images/dashboard/icons/aside/SupportIcons.svg') }}" alt="support_icon">
                        <span class="font-medium">Support</span>
                    </a>
                    <a href="javascript:void(0);" class="flex items-center space-x-3 px-3 py-3.5 text-red-500 hover:bg-red-50 rounded-lg transition-colors">
                    <img  src="{{ asset('assets/images/dashboard/icons/aside/logoutIcons.svg') }}" alt="logout_icon">
                        <span class="font-medium">Logout</span>
                    </a>
                </div>
            </div>
        </div>