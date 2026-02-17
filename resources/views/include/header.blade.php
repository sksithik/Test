
        
<!-- Logo Section -->
<div class="flex items-center space-x-1 flex-shrink-0 cursor-pointer">
    <a href="/coding_studio" class="flex items-center space-x-3 px-3 py-1">
        <img src="{{ asset('assets/images/dashboard/icons/header/LogoIcons.svg') }}" alt="logo_icon">
    </a>
</div>

<!-- Navigation Section -->
<nav class="hidden lg:flex items-center space-x-10">

    <a href="#" class="header-link relative text-[1.1rem] font-medium text-header500-text hover:text-white transition-colors active-tab">
        Dashboard
    </a>

    <div class="header-link relative cursor-pointer text-[1.1rem] font-medium text-header500-text hover:text-white transition-colors">
        <div class="flex items-center space-x-1.5">
            <span>Agents</span>
            <img src="{{ asset('assets/images/dashboard/icons/header/arrow_DownwardIcons.svg') }}" alt="caret_icon">
        </div>
    </div>

    <a href="#" class="header-link relative text-[1.1rem] font-medium text-header500-text hover:text-white transition-colors">
        Analytics
    </a>

    <a href="#" class="header-link relative text-[1.1rem] font-medium text-header500-text hover:text-white transition-colors">
        Billing Tools
    </a>

    <a href="#" class="header-link relative text-[1.1rem] font-medium text-header500-text hover:text-white transition-colors">
        Coding Tools
    </a>

</nav>


        <!-- Actions Section -->
        <div class="flex items-center space-x-6">
            
            <!-- Search Bar -->
            <div class="relative hidden md:block">
                <input 
                    type="text" 
                    placeholder="Search" 
                    class="bg-[#E8EDF3] text-[1rem] font-normal text-header400-text pl-4 pr-10 py-1.5 rounded-md w-72 border border-transparent focus:outline-none focus:border-[#38BDF8] placeholder-gray-500"
                >
                <img src="{{ asset('assets/images/dashboard/icons/header/searchIcons.svg') }}" class="absolute right-3 top-1/2 -translate-y-1/2" alt="logo_icon" >
             
            </div>

            <!-- Notification & Profile -->
            <div class="flex items-center space-x-5">
            <button class="notification-btn text-header500-text hover:text-white transition-colors cursor-pointer relative pt-1">
                    <img src="{{ asset('assets/images/dashboard/icons/header/notificationIcon.svg') }}" alt="notification_icon">
                </button>

                <!-- Profile -->
                <div class="flex items-center space-x-2 cursor-pointer group">
                    <div class="w-[3.1444rem] h-[3.1444rem] rounded-full overflow-hidden border-2 border-gray-600 group-hover:border-[#38BDF8] transition-all">
                        <img 
                            src="{{ asset('assets/images/dashboard/icons/header/user.webp') }}" 
                            alt="User Profile" 
                            class="w-full h-full object-cover"
                        >
                    </div>
                    <img src="{{ asset('assets/images/dashboard/icons/header/arrow_DownwardIcons.svg') }}" alt="logo_icon" >
                </div>
            </div>
        </div>
   