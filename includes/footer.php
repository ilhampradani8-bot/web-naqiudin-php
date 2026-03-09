<footer class="bg-navy text-white pt-16 pb-8 border-t border-gray-800">
    <div class="container mx-auto px-6">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">

            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <img src="assets/img/logo.png" alt="Logo" class="h-12 w-auto object-contain">
                    <span class="text-xl font-bold tracking-widest text-gold">NAQUIDDIN RAZAK</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
                    Licensed Financial Planner & Probationary Estate Agent. Building wealth & securing legacy the Shariah way.
                </p>
            </div>

            <div>
                <h3 class="text-gold font-bold uppercase tracking-wider mb-6 text-sm">Contact Info</h3>
                <ul class="space-y-4 text-gray-300">
                    <li class="flex items-center gap-3 hover:text-white transition duration-300">
                        <i class="fa-brands fa-whatsapp text-green-400 text-xl w-6"></i>
                        <a href="https://wa.me/60192009832" target="_blank" class="font-medium">019- 200 9832</a>
                    </li>
                    <li class="flex items-center gap-3 hover:text-white transition duration-300">
                        <i class="fa-regular fa-envelope text-gold text-xl w-6"></i>
                        <a href="mailto:Naquiddin.razak@gmail.com" class="font-medium">Naquiddin.razak@gmail.com</a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-gold font-bold uppercase tracking-wider mb-6 text-sm">Connect With Me</h3>
                <ul class="space-y-4 text-gray-300">
                    
                    <li class="flex items-center gap-3 hover:text-white transition duration-300">
                        <span class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center text-blue-500">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <a href="https://www.facebook.com/search/top?q=naquiddin%20razak" target="_blank" class="font-medium">NAQUIDDIN RAZAK</a>
                    </li>

                    <li class="flex items-center gap-3 hover:text-white transition duration-300">
                        <span class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center text-blue-400">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </span>
                        <a href="https://www.linkedin.com/in/naquiddinrazak" target="_blank" class="font-medium">naquiddinrazak</a>
                    </li>

                    <li class="flex items-center gap-3 hover:text-white transition duration-300">
                        <span class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center text-pink-500">
                            <i class="fa-brands fa-tiktok"></i>
                        </span>
                        <a href="https://www.tiktok.com/@naquiddinrazak" target="_blank" class="font-medium">naquiddinrazak</a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
            <p>&copy; <?php echo date("Y"); ?> Naquiddin Razak. All Rights Reserved.</p>
            <div class="mt-4 md:mt-0 flex items-center gap-2">
                 <span class="w-2 h-2 rounded-full bg-gold inline-block"></span>
                 <span>Professional & Trustworthy</span>
            </div>
        </div>
    </div>

    <button id="backToTopBtn" class="fixed bottom-8 right-8 bg-gold text-navy w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-white hover:-translate-y-1 transition duration-300 opacity-0 invisible z-50 border-2 border-navy">
        <i class="fa-solid fa-arrow-up text-lg"></i>
    </button>

    <script>
        const btn = document.getElementById('backToTopBtn');
        window.onscroll = function() {
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                btn.classList.remove('opacity-0', 'invisible');
                btn.classList.add('opacity-100', 'visible');
            } else {
                btn.classList.add('opacity-0', 'invisible');
                btn.classList.remove('opacity-100', 'visible');
            }
        };
        btn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</footer>