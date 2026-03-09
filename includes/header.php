<nav id="navbar" class="fixed w-full top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 shadow-sm transition-all duration-300 px-6 py-4">
    <div class="container mx-auto flex justify-between items-center relative">
        <a href="index.php" class="flex items-center gap-3 group">
            <img src="assets/img/logo.png" alt="Logo" class="h-10 md:h-12 w-auto object-contain group-hover:scale-105 transition duration-300">
            <div class="text-lg font-bold text-navy tracking-wide">
                NAQUIDDIN <span class="text-gold">RAZAK</span>
            </div>
        </a>

        <ul class="hidden md:flex gap-8 items-center">
            <li><a href="index.php" class="text-gray-600 hover:text-gold font-medium transition relative group">
                <?php echo $lang['nav_home']; ?>
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
            </a></li>
            
            <li>
                <button id="desktop-services-btn" class="text-gray-600 hover:text-gold font-medium transition flex items-center gap-1 relative group focus:outline-none">
                    <?php echo $lang['nav_services']; ?>
                    <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                </button>
            </li>

            <li><a href="#articles" class="text-gray-600 hover:text-gold font-medium transition relative group">
                <?php echo $lang['nav_articles']; ?>
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
            </a></li>

            <li><a href="#testimonials" class="text-gray-600 hover:text-gold font-medium transition relative group">
                <?php echo $lang['nav_testimonials']; ?>
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
            </a></li>

            <li>
                <a href="index.php<?php echo $lang['nav_lang_link']; ?>" class="text-navy font-bold border border-navy px-3 py-1 rounded hover:bg-navy hover:text-white transition text-xs uppercase">
                    <?php echo $lang['nav_lang']; ?>
                </a>
            </li>

            <li>
                <a href="https://wa.me/60192009832" class="flex items-center gap-2 bg-green-500 text-white px-5 py-2 rounded-full font-semibold hover:bg-green-600 transition shadow-md hover:-translate-y-0.5 transform duration-200">
                    <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp
                </a>
            </li>
        </ul>

        <button id="mobile-menu-btn" class="md:hidden text-navy text-2xl focus:outline-none p-2 z-50">
            <i class="fa-solid fa-bars transition-transform duration-300"></i>
        </button>
    </div>

    <div id="desktop-mega-menu" class="hidden absolute top-full left-0 w-full bg-white/95 backdrop-blur-md border-t border-gray-100 shadow-2xl transition-all duration-300">
        <div class="container mx-auto px-6 py-10">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6 text-center">
                <a href="#investment" class="mega-link p-6 rounded-xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition group">
                    <i class="fa-solid fa-chart-line text-3xl text-gold mb-3 group-hover:scale-110 transition"></i>
                    <h4 class="font-bold text-navy"><?php echo $lang['srv_invest']; ?></h4>
                </a>
                <a href="#retirement" class="mega-link p-6 rounded-xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition group">
                    <i class="fa-solid fa-umbrella-beach text-3xl text-gold mb-3 group-hover:scale-110 transition"></i>
                    <h4 class="font-bold text-navy"><?php echo $lang['srv_retire']; ?></h4>
                </a>
                <a href="#takaful" class="mega-link p-6 rounded-xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition group">
                    <i class="fa-solid fa-shield-halved text-3xl text-gold mb-3 group-hover:scale-110 transition"></i>
                    <h4 class="font-bold text-navy"><?php echo $lang['srv_takaful']; ?></h4>
                </a>
                <a href="#estate" class="mega-link p-6 rounded-xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition group">
                    <i class="fa-solid fa-file-contract text-3xl text-gold mb-3 group-hover:scale-110 transition"></i>
                    <h4 class="font-bold text-navy"><?php echo $lang['srv_estate']; ?></h4>
                </a>
                <a href="#realestate" class="mega-link p-6 rounded-xl hover:bg-gray-50 border border-transparent hover:border-gray-100 transition group">
                    <i class="fa-solid fa-building text-3xl text-gold mb-3 group-hover:scale-110 transition"></i>
                    <h4 class="font-bold text-navy"><?php echo $lang['srv_realestate']; ?></h4>
                </a>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white/95 backdrop-blur-xl border-t border-gray-100 shadow-2xl flex-col p-6 space-y-4 md:hidden transform transition-all duration-300 origin-top">
        <a href="index.php" class="mobile-link block text-gray-700 font-medium hover:text-gold border-b border-gray-100 pb-3 text-lg">
            <?php echo $lang['nav_home']; ?>
        </a>
        
        <button id="mobile-services-btn" class="w-full flex justify-between items-center text-gray-700 font-medium hover:text-gold border-b border-gray-100 pb-3 text-lg focus:outline-none">
            <?php echo $lang['nav_services']; ?> <i class="fa-solid fa-chevron-down text-sm transition-transform duration-300"></i>
        </button>
        
        <div id="mobile-services-menu" class="hidden flex-col pl-4 space-y-3 mt-2 border-b border-gray-100 pb-3">
            <a href="#investment" class="mobile-link text-gray-600 hover:text-gold block"><?php echo $lang['srv_invest']; ?></a>
            <a href="#retirement" class="mobile-link text-gray-600 hover:text-gold block"><?php echo $lang['srv_retire']; ?></a>
            <a href="#takaful" class="mobile-link text-gray-600 hover:text-gold block"><?php echo $lang['srv_takaful']; ?></a>
            <a href="#estate" class="mobile-link text-gray-600 hover:text-gold block"><?php echo $lang['srv_estate']; ?></a>
            <a href="#realestate" class="mobile-link text-gray-600 hover:text-gold block"><?php echo $lang['srv_realestate']; ?></a>
        </div>

        <a href="#articles" class="mobile-link block text-gray-700 font-medium hover:text-gold border-b border-gray-100 pb-3 text-lg">
            <?php echo $lang['nav_articles']; ?>
        </a>

        <a href="#testimonials" class="mobile-link block text-gray-700 font-medium hover:text-gold border-b border-gray-100 pb-3 text-lg">
            <?php echo $lang['nav_testimonials']; ?>
        </a>

        <div class="flex flex-col gap-4 pt-4">
            <a href="index.php<?php echo $lang['nav_lang_link']; ?>" class="text-center w-full text-navy font-bold border border-navy px-4 py-3 rounded hover:bg-navy hover:text-white transition">
                Bahasa: <?php echo $lang['nav_lang']; ?>
            </a>
            <a href="https://wa.me/60192009832" class="flex justify-center items-center gap-2 bg-green-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-600 transition shadow-md w-full">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp Me
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const icon = btn.querySelector('i');
        
        const mobServicesBtn = document.getElementById('mobile-services-btn');
        const mobServicesMenu = document.getElementById('mobile-services-menu');
        const mobServicesIcon = mobServicesBtn.querySelector('i');

        const deskServicesBtn = document.getElementById('desktop-services-btn');
        const deskMegaMenu = document.getElementById('desktop-mega-menu');
        const deskIcon = deskServicesBtn.querySelector('i');

        function toggleMobileMenu() {
            menu.classList.toggle('hidden');
            if (menu.classList.contains('hidden')) {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            }
        }

        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMobileMenu();
            deskMegaMenu.classList.add('hidden');
            deskIcon.classList.remove('rotate-180');
        });

        mobServicesBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            mobServicesMenu.classList.toggle('hidden');
            mobServicesIcon.classList.toggle('rotate-180');
        });

        deskServicesBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            deskMegaMenu.classList.toggle('hidden');
            deskIcon.classList.toggle('rotate-180');
        });

        document.addEventListener('click', (e) => {
            if (!menu.classList.contains('hidden')) {
                if (!menu.contains(e.target) && !btn.contains(e.target)) {
                    menu.classList.add('hidden');
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            }
            if (!deskMegaMenu.classList.contains('hidden')) {
                if (!deskMegaMenu.contains(e.target) && !deskServicesBtn.contains(e.target)) {
                    deskMegaMenu.classList.add('hidden');
                    deskIcon.classList.remove('rotate-180');
                }
            }
        });

        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            });
        });

        document.querySelectorAll('.mega-link').forEach(link => {
            link.addEventListener('click', () => {
                deskMegaMenu.classList.add('hidden');
                deskIcon.classList.remove('rotate-180');
            });
        });
    });
</script>