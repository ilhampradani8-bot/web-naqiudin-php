<?php
// 1. LOGIKA PEMILIHAN BAHASA
session_start();

if (isset($_GET['lang'])) {
    $lang_code = $_GET['lang'];
    $_SESSION['lang'] = $lang_code;
} elseif (isset($_SESSION['lang'])) {
    $lang_code = $_SESSION['lang'];
} else {
    $lang_code = 'en';
}

if ($lang_code == 'my') {
    include('lang/my.php');
} else {
    include('lang/en.php');
}
?>

<!DOCTYPE html>
<html lang="<?php echo $lang_code; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Naquiddin Razak | <?php echo ($lang_code == 'en') ? 'Financial Planner' : 'Perancang Kewangan'; ?></title>
    <meta name="description" content="<?php echo ($lang_code == 'en') ? 'Licensed Financial Planner & Probationary Estate Agent. Building wealth & securing legacy the Shariah way.' : 'Perancang Kewangan Berlesen & ejen harta tanah. Membina kekayaan & menjamin legasi secara Syariah.'; ?>">
    <meta name="keywords" content="Financial Planner Malaysia, Perancang Kewangan, Takaful, Hibah, Investment, Naquiddin Razak">
    <meta name="author" content="Naquiddin Razak">
    <link rel="canonical" href="https://naqiuddinrazak.com/">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://naqiuddinrazak.com/">
    <meta property="og:title" content="Naquiddin Razak | <?php echo ($lang_code == 'en') ? 'Financial Planner' : 'Perancang Kewangan'; ?>">
    <meta property="og:description" content="<?php echo ($lang_code == 'en') ? 'Licensed Financial Planner & Probationary Estate Agent. Building wealth & securing legacy the Shariah way.' : 'Perancang Kewangan Berlesen & ejen harta tanah. Membina kekayaan & menjamin legasi secara Syariah.'; ?>">
    <meta property="og:image" content="https://naqiuddinrazak.com/assets/img/naqiudin.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Poppins', 'sans-serif'] },
                    colors: { navy: '#0a192f', gold: '#c5a022' }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-gray-800">

    <?php include('includes/header.php'); ?>

<section class="relative w-full min-h-screen flex flex-col md:flex-row bg-white pt-36 pb-20 overflow-hidden">
        
        <style>
            @font-face {
                font-family: 'Vogue';
                src: url('assets/fonts/vogue.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            .font-vogue {
                font-family: 'Vogue', serif;
                letter-spacing: 1px;
            }
            @keyframes fadeInUp {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-hero {
                animation: fadeInUp 1s ease-out forwards;
                opacity: 0;
            }
            .delay-100 { animation-delay: 0.1s; }
            .delay-200 { animation-delay: 0.3s; }
            .delay-300 { animation-delay: 0.5s; }
            .delay-500 { animation-delay: 0.8s; }
        </style>

        <div class="w-full md:w-[60%] flex flex-col justify-center px-6 md:pl-20 md:pr-0 z-20 order-2 md:order-1 text-center md:text-left relative">
            
            <h1 class="animate-hero delay-200 font-vogue text-5xl md:text-6xl lg:text-7xl text-navy leading-tight mb-6 mt-4">
                <?php echo $lang['hero_title2']; ?>
            </h1>

            <div class="animate-hero delay-300 border-l-4 border-gold pl-5 mb-8 mx-auto md:mx-0 w-fit md:w-auto text-left">
                <p class="text-xl md:text-3xl font-medium text-gray-900"><?php echo $lang['hero_guided']; ?></p>
            </div>

            <p class="animate-hero delay-300 text-navy text-lg md:text-xl mb-10 max-w-3xl leading-relaxed mx-auto md:mx-0 font-semibold italic">
                <?php echo $lang['hero_tagline']; ?>
            </p>

            <div class="animate-hero delay-500 flex flex-col sm:flex-row justify-center md:justify-start gap-4">
                
                <a href="#articles" class="bg-navy text-white px-8 py-4 rounded-full font-semibold hover:bg-gold hover:-translate-y-1 transition-all duration-300 shadow-xl text-sm md:text-lg flex items-center justify-center gap-3">
                    <i class="fa-solid fa-book-open"></i>
                    <?php echo $lang['btn_tips']; ?>
                </a>

                <a href="https://wa.me/60192009832" target="_blank" class="border-2 border-navy text-navy px-8 py-4 rounded-full font-semibold hover:bg-green-500 hover:text-white hover:border-green-500 hover:-translate-y-1 transition-all duration-300 text-sm md:text-lg flex items-center justify-center gap-3">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                    <?php echo $lang['btn_consult']; ?>
                </a>
                
            </div>
        </div>

        <div class="w-full md:w-[40%] flex items-end justify-center md:justify-end order-1 md:order-2 relative px-4 md:px-0 mt-8 md:mt-0">
            <img src="assets/img/naqiudin.png" 
                 alt="Naquiddin Razak" 
                 class="animate-hero delay-200 max-h-[50vh] md:max-h-[80vh] w-auto object-contain object-bottom drop-shadow-2xl mx-auto md:mx-0">
        </div>

</section>




<section id="services" class="w-full min-h-screen flex flex-col justify-center bg-gray-50 pt-28 pb-12 relative overflow-hidden">
        
        <div class="container mx-auto px-6 md:px-12">
            
            <div class="text-center mb-10 max-w-3xl mx-auto shrink-0">
                <h2 class="text-2xl md:text-4xl font-extrabold text-navy leading-tight">
                    <?php echo $lang['srv_main_title']; ?>
                </h2>
                <div class="w-16 h-1 bg-gold mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col group border border-gray-100">
                    <div class="h-[20vh] md:h-[25vh] overflow-hidden relative">
                        <img src="assets/img/gambar1.jpg" alt="Personal Advisory" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-xl md:text-2xl font-bold text-white"><?php echo $lang['srv_advisory']; ?></h3>
                        </div>
                    </div>
                    
                    <div class="p-5 flex flex-col flex-grow">
                        <ul class="space-y-2 mb-6 flex-grow text-gray-600 text-sm md:text-base font-medium">
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-gold"></i> <?php echo $lang['srv_invest']; ?></li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-gold"></i> <?php echo $lang['srv_retire']; ?></li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-gold"></i> <?php echo $lang['srv_takaful']; ?></li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-gold"></i> <?php echo $lang['srv_estate']; ?></li>
                            <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-gold"></i> <?php echo $lang['srv_realestate']; ?></li>
                        </ul>
                        
                        <button onclick="openLeadModal()" class="w-full bg-navy text-white py-3 rounded-xl font-bold hover:bg-gold transition-colors duration-300 text-sm md:text-base flex justify-center items-center gap-2">
                            <span><?php echo $lang['srv_learn_more']; ?></span> <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col group border border-gray-100">
                    <div class="h-[20vh] md:h-[25vh] overflow-hidden relative">
                        <img src="assets/img/pembicara-tgn.jpg" alt="Corporate Training" class="w-full h-full object-cover object-top transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-xl md:text-2xl font-bold text-white"><?php echo $lang['srv_training']; ?></h3>
                        </div>
                    </div>
                    
                    <div class="p-5 flex flex-col flex-grow">
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed flex-grow mb-6 font-medium">
                            <?php echo $lang['srv_training_desc']; ?>
                        </p>
                        
                        <a href="https://wa.me/60192009832" target="_blank" class="w-full text-center bg-green-500 text-white py-3 rounded-xl font-bold hover:bg-green-600 transition-colors duration-300 flex justify-center items-center gap-2 text-sm md:text-base">
                            <i class="fa-brands fa-whatsapp text-xl"></i> <?php echo $lang['srv_learn_more']; ?>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div id="leadModal" class="fixed inset-0 bg-navy/80 backdrop-blur-sm z-[100] hidden flex items-center justify-center p-4 transition-opacity duration-300 opacity-0">
            <div class="bg-white rounded-2xl w-full max-w-lg overflow-hidden shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh]" id="leadModalContent">
                
                <div class="bg-navy p-5 flex justify-between items-center text-white shrink-0">
                    <h3 class="text-lg font-bold"><?php echo $lang['mod_title']; ?></h3>
                    <button onclick="closeLeadModal()" class="text-gray-300 hover:text-white focus:outline-none">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </div>

                <div class="p-6 overflow-y-auto">
                    <p class="text-gray-500 mb-4 text-xs md:text-sm"><?php echo $lang['mod_desc']; ?></p>
                    
                    <form id="waForm" class="space-y-3">
                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1"><?php echo $lang['mod_name']; ?></label>
                            <input type="text" id="wa_name" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition text-sm">
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-1"><?php echo $lang['mod_phone']; ?></label>
                                <input type="tel" id="wa_phone" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition text-sm">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-1"><?php echo $lang['mod_email']; ?></label>
                                <input type="email" id="wa_email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1"><?php echo $lang['mod_loc']; ?></label>
                            <input type="text" id="wa_location" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition text-sm">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-gray-700 mb-1"><?php echo $lang['mod_prob']; ?></label>
                            <textarea id="wa_problem" rows="2" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gold focus:border-gold outline-none transition resize-none text-sm"></textarea>
                        </div>

                        <button type="button" onclick="sendToWhatsApp()" class="w-full mt-2 bg-green-500 text-white py-3 rounded-lg font-bold hover:bg-green-600 transition-colors duration-300 text-sm flex justify-center items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-lg"></i> <?php echo $lang['mod_btn']; ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <script>
            const modal = document.getElementById('leadModal');
            const modalContent = document.getElementById('leadModalContent');

            function openLeadModal() {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.classList.remove('opacity-0');
                    modalContent.classList.remove('scale-95');
                    modalContent.classList.add('scale-100');
                }, 10);
            }

            function closeLeadModal() {
                modal.classList.add('opacity-0');
                modalContent.classList.remove('scale-100');
                modalContent.classList.add('scale-95');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }

            function sendToWhatsApp() {
                const name = document.getElementById('wa_name').value;
                const phone = document.getElementById('wa_phone').value;
                const email = document.getElementById('wa_email').value;
                const location = document.getElementById('wa_location').value;
                const problem = document.getElementById('wa_problem').value;

                if(!name || !phone || !problem) {
                    alert("Please fill in your Name, Phone Number, and your Goal/Problem before proceeding.");
                    return;
                }

                const message = `Hi Naquiddin, I would like to request a Personal Advisory.\n\n*My Details:*\n- Name: ${name}\n- Phone: ${phone}\n- Email: ${email || '-'}\n- Location: ${location || '-'}\n\n*What I want to achieve/solve:*\n${problem}`;
                const encodedMessage = encodeURIComponent(message);
                const targetPhone = "60192009832";

                window.open(`https://wa.me/${targetPhone}?text=${encodedMessage}`, '_blank');
                closeLeadModal();
            }
        </script>
</section>





<section id="testimonials" class="w-full py-24 bg-gray-50 relative overflow-hidden">
        
        <style>
            @keyframes scroll {
                0% { transform: translateX(0); }
                100% { transform: translateX(-50%); } 
            }
            .marquee-track {
                display: flex;
                width: max-content; 
                animation: scroll 30s linear infinite; 
            }
            .marquee-wrapper:hover .marquee-track {
                animation-play-state: paused;
            }
            .card-3d {
                transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
                transform-style: preserve-3d;
                perspective: 1000px;
            }
            .card-3d:hover {
                transform: translateY(-10px) rotateX(5deg) rotateY(-5deg) scale(1.05);
                box-shadow: 20px 20px 60px #bebebe, -20px -20px 60px #ffffff; 
                z-index: 10;
                background: white;
                border-color: #c5a022; 
            }
        </style>

        <div class="container mx-auto px-6 mb-12 text-center relative z-10">
            <h2 class="text-4xl font-extrabold text-navy mb-4">
                <?php echo $lang['testi_title']; ?>
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg">
                <?php echo $lang['testi_subtitle']; ?>
            </p>
        </div>

        <div class="marquee-wrapper w-full relative z-10">
            <div class="absolute top-0 left-0 w-32 h-full bg-gradient-to-r from-gray-50 to-transparent z-20 pointer-events-none"></div>
            <div class="absolute top-0 right-0 w-32 h-full bg-gradient-to-l from-gray-50 to-transparent z-20 pointer-events-none"></div>

            <div class="marquee-track gap-8 py-10 px-4">
                
                <div class="card-3d w-[400px] bg-white p-8 rounded-2xl shadow-lg border border-gray-100 flex-shrink-0 cursor-pointer relative group">
                    <div class="absolute -top-6 -right-6 w-16 h-16 bg-gold text-navy rounded-full flex items-center justify-center font-bold text-2xl shadow-lg group-hover:rotate-12 transition transform">”</div>
                    <div class="flex text-yellow-400 mb-4 text-lg">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic text-lg leading-relaxed mb-6">"<?php echo $lang['t1_text']; ?>"</p>
                    <div class="flex items-center gap-4 border-t pt-4 border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-navy text-white flex items-center justify-center font-bold text-xl">S</div>
                        <div>
                            <h4 class="font-bold text-navy text-lg"><?php echo $lang['t1_name']; ?></h4>
                            <p class="text-xs text-gold uppercase font-bold tracking-wider"><?php echo $lang['t1_role']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="card-3d w-[400px] bg-white p-8 rounded-2xl shadow-lg border border-gray-100 flex-shrink-0 cursor-pointer relative group">
                    <div class="absolute -top-6 -right-6 w-16 h-16 bg-navy text-gold rounded-full flex items-center justify-center font-bold text-2xl shadow-lg group-hover:rotate-12 transition transform">”</div>
                    <div class="flex text-yellow-400 mb-4 text-lg">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic text-lg leading-relaxed mb-6">"<?php echo $lang['t2_text']; ?>"</p>
                    <div class="flex items-center gap-4 border-t pt-4 border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-gold text-navy flex items-center justify-center font-bold text-xl">A</div>
                        <div>
                            <h4 class="font-bold text-navy text-lg"><?php echo $lang['t2_name']; ?></h4>
                            <p class="text-xs text-gray-400 uppercase font-bold tracking-wider"><?php echo $lang['t2_role']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="card-3d w-[400px] bg-white p-8 rounded-2xl shadow-lg border border-gray-100 flex-shrink-0 cursor-pointer relative group">
                    <div class="absolute -top-6 -right-6 w-16 h-16 bg-gray-800 text-white rounded-full flex items-center justify-center font-bold text-2xl shadow-lg group-hover:rotate-12 transition transform">”</div>
                    <div class="flex text-yellow-400 mb-4 text-lg">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic text-lg leading-relaxed mb-6">"<?php echo $lang['t3_text']; ?>"</p>
                    <div class="flex items-center gap-4 border-t pt-4 border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-xl">L</div>
                        <div>
                            <h4 class="font-bold text-navy text-lg"><?php echo $lang['t3_name']; ?></h4>
                            <p class="text-xs text-gold uppercase font-bold tracking-wider"><?php echo $lang['t3_role']; ?></p>
                        </div>
                    </div>
                </div>

                <div class="card-3d w-[400px] bg-white p-8 rounded-2xl shadow-lg border border-gray-100 flex-shrink-0 cursor-pointer relative group">
                    <div class="absolute -top-6 -right-6 w-16 h-16 bg-gold text-navy rounded-full flex items-center justify-center font-bold text-2xl shadow-lg group-hover:rotate-12 transition transform">”</div>
                    <div class="flex text-yellow-400 mb-4 text-lg"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-gray-600 italic text-lg leading-relaxed mb-6">"<?php echo $lang['t1_text']; ?>"</p>
                    <div class="flex items-center gap-4 border-t pt-4 border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-navy text-white flex items-center justify-center font-bold text-xl">S</div>
                        <div><h4 class="font-bold text-navy text-lg"><?php echo $lang['t1_name']; ?></h4><p class="text-xs text-gold uppercase font-bold tracking-wider"><?php echo $lang['t1_role']; ?></p></div>
                    </div>
                </div>

                <div class="card-3d w-[400px] bg-white p-8 rounded-2xl shadow-lg border border-gray-100 flex-shrink-0 cursor-pointer relative group">
                    <div class="absolute -top-6 -right-6 w-16 h-16 bg-navy text-gold rounded-full flex items-center justify-center font-bold text-2xl shadow-lg group-hover:rotate-12 transition transform">”</div>
                    <div class="flex text-yellow-400 mb-4 text-lg"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-gray-600 italic text-lg leading-relaxed mb-6">"<?php echo $lang['t2_text']; ?>"</p>
                    <div class="flex items-center gap-4 border-t pt-4 border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-gold text-navy flex items-center justify-center font-bold text-xl">A</div>
                        <div><h4 class="font-bold text-navy text-lg"><?php echo $lang['t2_name']; ?></h4><p class="text-xs text-gray-400 uppercase font-bold tracking-wider"><?php echo $lang['t2_role']; ?></p></div>
                    </div>
                </div>

                <div class="card-3d w-[400px] bg-white p-8 rounded-2xl shadow-lg border border-gray-100 flex-shrink-0 cursor-pointer relative group">
                    <div class="absolute -top-6 -right-6 w-16 h-16 bg-gray-800 text-white rounded-full flex items-center justify-center font-bold text-2xl shadow-lg group-hover:rotate-12 transition transform">”</div>
                    <div class="flex text-yellow-400 mb-4 text-lg"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    <p class="text-gray-600 italic text-lg leading-relaxed mb-6">"<?php echo $lang['t3_text']; ?>"</p>
                    <div class="flex items-center gap-4 border-t pt-4 border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-xl">L</div>
                        <div><h4 class="font-bold text-navy text-lg"><?php echo $lang['t3_name']; ?></h4><p class="text-xs text-gold uppercase font-bold tracking-wider"><?php echo $lang['t3_role']; ?></p></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-12 text-center relative z-10">
            <button onclick="openLeadModal()" class="group inline-flex items-center gap-4 bg-navy text-white px-10 py-5 rounded-full font-bold text-xl shadow-2xl hover:bg-gold hover:text-navy hover:scale-105 transition-all duration-300 focus:outline-none">
                <span><?php echo $lang['btn_conversation']; ?></span>
                <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </button>
        </div>
        
</section>



<section id="purpose" class="w-full py-24 bg-white relative overflow-hidden">
        
        <div class="absolute top-0 right-0 w-64 h-64 bg-gray-50 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <span class="text-gold font-bold tracking-widest uppercase text-sm mb-2 block">
                    Your Financial Partner
                </span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-navy leading-tight mb-6">
                    <?php echo $lang['purpose_title']; ?>
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    <?php echo $lang['purpose_subtitle']; ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="bg-gray-50 rounded-2xl p-8 hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border-b-4 border-transparent hover:border-gold group">
                    <div class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-gold text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-compass"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3">
                        <?php echo $lang['p1_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $lang['p1_desc']; ?>
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border-b-4 border-transparent hover:border-blue-500 group">
                    <div class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-blue-500 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3">
                        <?php echo $lang['p2_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $lang['p2_desc']; ?>
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border-b-4 border-transparent hover:border-green-500 group">
                    <div class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-green-500 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3">
                        <?php echo $lang['p3_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $lang['p3_desc']; ?>
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-8 hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border-b-4 border-transparent hover:border-purple-500 group">
                    <div class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center text-purple-500 text-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fa-solid fa-file-signature"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy mb-3">
                        <?php echo $lang['p4_title']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        <?php echo $lang['p4_desc']; ?>
                    </p>
                </div>

            </div>
        </div>
</section>

    
 <section id="gallery" class="w-full h-screen bg-white flex flex-col pt-24 pb-6 overflow-hidden">
        
        <div class="text-center px-6 mb-4 flex-shrink-0">
            <span class="text-gold font-bold tracking-widest uppercase text-xs md:text-sm">Gallery</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-navy mt-1 mb-2">
                <?php echo $lang['gallery_title']; ?>
            </h2>
            <p class="text-gray-500 text-sm md:text-base max-w-2xl mx-auto">
                <?php echo $lang['gallery_subtitle']; ?>
            </p>
        </div>

        <div class="flex-grow container mx-auto px-6 md:px-12 h-full min-h-0 pb-4">
            
            <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-3 h-full">
                
                <div class="group relative md:col-span-2 md:row-span-2 overflow-hidden rounded-2xl cursor-pointer shadow-lg bg-gray-100">
                    <img src="assets/img/gallery1.jpg" alt="Speaking Stage" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                        <span class="text-white font-bold text-lg translate-y-4 group-hover:translate-y-0 transition duration-300">Public Speaking Stage</span>
                    </div>
                </div>

                <div class="group relative md:col-span-2 overflow-hidden rounded-2xl cursor-pointer shadow-lg bg-gray-100">
                    <img src="assets/img/gallery2.jpg" alt="Client Consultation" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                        <span class="text-white font-bold text-lg translate-y-4 group-hover:translate-y-0 transition duration-300">Personal Consultation</span>
                    </div>
                </div>

                <div class="group relative md:col-span-1 overflow-hidden rounded-2xl cursor-pointer shadow-lg bg-gray-100">
                    <img src="assets/img/gallery3.jpg" alt="Workshop" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                     
                     <div class="absolute inset-0 bg-navy/20 group-hover:bg-navy/0 transition duration-300"></div>
                </div>

                <div class="group relative md:col-span-1 overflow-hidden rounded-2xl cursor-pointer shadow-lg bg-gray-100">
                    <img src="assets/img/gallery4.jpg" alt="Award" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                    
                    <div class="absolute inset-0 bg-navy/20 group-hover:bg-navy/0 transition duration-300"></div>
                </div>

            </div>
        </div>

</section>



<section id="resources" class="w-full py-24 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12">
            
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <span class="text-gold font-bold tracking-widest uppercase text-sm">Downloads</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-navy mt-2 mb-6">
                    <?php echo $lang['res_title']; ?>
                </h2>
                <p class="text-gray-500 text-lg leading-relaxed">
                    <?php echo $lang['res_subtitle']; ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 flex flex-col group">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-red-100 text-red-500 rounded-xl flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300">
                            <i class="fa-solid fa-file-pdf"></i>
                        </div>
                        <div>
                            <span class="bg-red-50 text-red-600 text-xs font-bold px-2 py-1 rounded uppercase tracking-wider">Property</span>
                            <h3 class="font-bold text-navy text-lg mt-1 break-all">Geran 101 (1).pdf</h3>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-xl mb-6 flex-grow">
                        <h4 class="text-xs font-bold text-gray-400 uppercase mb-2">Inside this file:</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php echo $lang['desc_geran']; ?>
                        </p>
                    </div>
                    <a href="assets/downloads/Geran 101 (1).pdf" download class="w-full bg-navy text-white py-3 rounded-xl font-semibold flex items-center justify-center gap-2 hover:bg-gold transition duration-300">
                        <i class="fa-solid fa-download"></i> <?php echo $lang['btn_download']; ?>
                    </a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 flex flex-col group">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-blue-100 text-blue-500 rounded-xl flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300">
                            <i class="fa-solid fa-file-zipper"></i>
                        </div>
                        <div>
                            <span class="bg-blue-50 text-blue-600 text-xs font-bold px-2 py-1 rounded uppercase tracking-wider">Investment</span>
                            <h3 class="font-bold text-navy text-lg mt-1 break-all">The Super Conservative savings & investment options (1).zip</h3>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-xl mb-6 flex-grow">
                        <h4 class="text-xs font-bold text-gray-400 uppercase mb-2">Inside this file:</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php echo $lang['desc_conservative']; ?>
                        </p>
                    </div>
                    <a href="assets/downloads/The Super Conservative savings & investment options (1).zip" download class="w-full bg-navy text-white py-3 rounded-xl font-semibold flex items-center justify-center gap-2 hover:bg-gold transition duration-300">
                        <i class="fa-solid fa-download"></i> <?php echo $lang['btn_download']; ?>
                    </a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 flex flex-col group">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-green-100 text-green-500 rounded-xl flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300">
                            <i class="fa-solid fa-file-zipper"></i>
                        </div>
                        <div>
                            <span class="bg-green-50 text-green-600 text-xs font-bold px-2 py-1 rounded uppercase tracking-wider">Tax Planning</span>
                            <h3 class="font-bold text-navy text-lg mt-1 break-all">How to take advantage on tax reliefs (1).zip</h3>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-xl mb-6 flex-grow">
                        <h4 class="text-xs font-bold text-gray-400 uppercase mb-2">Inside this file:</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php echo $lang['desc_tax']; ?>
                        </p>
                    </div>
                    <a href="assets/downloads/How to take advantage on tax reliefs (1).zip" download class="w-full bg-navy text-white py-3 rounded-xl font-semibold flex items-center justify-center gap-2 hover:bg-gold transition duration-300">
                        <i class="fa-solid fa-download"></i> <?php echo $lang['btn_download']; ?>
                    </a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 flex flex-col group">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-purple-100 text-purple-500 rounded-xl flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300">
                            <i class="fa-solid fa-file-zipper"></i>
                        </div>
                        <div>
                            <span class="bg-purple-50 text-purple-600 text-xs font-bold px-2 py-1 rounded uppercase tracking-wider">Financial Mgmt</span>
                            <h3 class="font-bold text-navy text-lg mt-1 break-all">Copy of Copy of Cashflow Cheat sheet.zip</h3>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-xl mb-6 flex-grow">
                        <h4 class="text-xs font-bold text-gray-400 uppercase mb-2">Inside this file:</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php echo $lang['desc_cashflow']; ?>
                        </p>
                    </div>
                    <a href="assets/downloads/Copy of Copy of Cashflow Cheat sheet.zip" download class="w-full bg-navy text-white py-3 rounded-xl font-semibold flex items-center justify-center gap-2 hover:bg-gold transition duration-300">
                        <i class="fa-solid fa-download"></i> <?php echo $lang['btn_download']; ?>
                    </a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 flex flex-col group">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-yellow-100 text-yellow-600 rounded-xl flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300">
                            <i class="fa-solid fa-file-zipper"></i>
                        </div>
                        <div>
                            <span class="bg-yellow-50 text-yellow-700 text-xs font-bold px-2 py-1 rounded uppercase tracking-wider">Insurance</span>
                            <h3 class="font-bold text-navy text-lg mt-1 break-all">Someone has to work (1).zip</h3>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-xl mb-6 flex-grow">
                        <h4 class="text-xs font-bold text-gray-400 uppercase mb-2">Inside this file:</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php echo $lang['desc_protection']; ?>
                        </p>
                    </div>
                    <a href="assets/downloads/Someone has to work (1).zip" download class="w-full bg-navy text-white py-3 rounded-xl font-semibold flex items-center justify-center gap-2 hover:bg-gold transition duration-300">
                        <i class="fa-solid fa-download"></i> <?php echo $lang['btn_download']; ?>
                    </a>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 flex flex-col group">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 bg-orange-100 text-orange-500 rounded-xl flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300">
                            <i class="fa-solid fa-file-zipper"></i>
                        </div>
                        <div>
                            <span class="bg-orange-50 text-orange-600 text-xs font-bold px-2 py-1 rounded uppercase tracking-wider">Economics</span>
                            <h3 class="font-bold text-navy text-lg mt-1 break-all">Inflation.zip</h3>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-xl mb-6 flex-grow">
                        <h4 class="text-xs font-bold text-gray-400 uppercase mb-2">Inside this file:</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?php echo $lang['desc_inflation']; ?>
                        </p>
                    </div>
                    <a href="assets/downloads/Inflation.zip" download class="w-full bg-navy text-white py-3 rounded-xl font-semibold flex items-center justify-center gap-2 hover:bg-gold transition duration-300">
                        <i class="fa-solid fa-download"></i> <?php echo $lang['btn_download']; ?>
                    </a>
                </div>

            </div>

        </div>
</section>


<?php
        // LOGIK PHP: Membaca fail JSON
        $articles_file = 'data/articles.json';
        $articles_data = [];
        
        if (file_exists($articles_file)) {
            $json_data = file_get_contents($articles_file);
            $articles_data = json_decode($json_data, true);
            
            // Susun artikel dari yang terbaru
            usort($articles_data, function($a, $b) {
                return $b['id'] <=> $a['id'];
            });
        }
        
        $featured_article = isset($articles_data[0]) ? $articles_data[0] : null;
        $list_articles = array_slice($articles_data, 1, 3);
    ?>

    <section id="articles" class="w-full py-24 bg-white relative">
        <div class="container mx-auto px-6 md:px-12">
            
            <div class="mb-12 flex flex-col md:flex-row justify-between items-end gap-6">
                <div class="max-w-2xl">
                    <span class="text-gold font-bold tracking-widest uppercase text-sm mb-2 block"><?php echo $lang['art_label']; ?></span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-navy leading-tight">
                        <?php echo $lang['nav_articles']; ?>
                    </h2>
                </div>
                <a href="#" class="hidden md:inline-flex items-center gap-2 text-navy font-bold hover:text-gold transition-colors duration-300">
                    <?php echo $lang['art_view_all']; ?> <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <?php if ($featured_article): ?>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2">
                    <a href="article.php?id=<?php echo $featured_article['id']; ?>" class="group flex flex-col bg-gray-50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 h-full">
                        
                        <div class="h-64 md:h-80 w-full overflow-hidden relative shrink-0">
                            <img src="<?php echo $featured_article['image']; ?>" alt="Featured" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute top-4 left-4 bg-gold text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-md">
                                Latest
                            </div>
                        </div>
                        
                        <div class="p-6 md:p-8 flex flex-col flex-grow bg-gray-50">
                            <span class="text-gray-400 text-sm font-medium mb-3 flex items-center gap-2">
                                <i class="fa-regular fa-calendar"></i> <?php echo date("d M Y", strtotime($featured_article['date'])); ?>
                            </span>
                            
                            <h3 class="text-2xl md:text-3xl font-bold text-navy mb-4 group-hover:text-gold transition-colors duration-300 line-clamp-2">
                                <?php echo $featured_article['title']; ?>
                            </h3>
                            
                            <div class="relative h-24 md:h-28 overflow-hidden mb-6">
                                <div class="text-gray-600 leading-relaxed text-sm md:text-base">
                                    <?php echo $featured_article['excerpt']; ?>
                                </div>
                                <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-gray-50 to-transparent pointer-events-none"></div>
                            </div>
                            
                            <div class="mt-auto pt-5 border-t border-gray-200 inline-flex items-center gap-2 font-bold text-navy group-hover:text-gold transition-colors duration-300 w-full">
                                <?php echo $lang['art_read_more']; ?> <i class="fa-solid fa-arrow-right text-sm transform group-hover:translate-x-1 transition-transform"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="lg:col-span-1 flex flex-col gap-6">
                    <?php foreach($list_articles as $article): ?>
                    <a href="article.php?id=<?php echo $article['id']; ?>" class="group flex flex-row lg:flex-col xl:flex-row gap-4 bg-gray-50 rounded-xl p-4 hover:bg-white hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 h-full">
                        
                        <div class="w-1/3 lg:w-full xl:w-1/3 h-24 md:h-28 lg:h-32 xl:h-24 rounded-lg overflow-hidden shrink-0 relative">
                            <img src="<?php echo $article['image']; ?>" alt="Thumbnail" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </div>
                        
                        <div class="flex flex-col justify-center flex-grow overflow-hidden">
                            <span class="text-gray-400 text-xs font-medium mb-1 shrink-0">
                                <?php echo date("d M Y", strtotime($article['date'])); ?>
                            </span>
                            <h4 class="text-sm md:text-base font-bold text-navy leading-snug group-hover:text-gold transition-colors duration-300 line-clamp-3">
                                <?php echo $article['title']; ?>
                            </h4>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>

            </div>
            <?php else: ?>
                <div class="text-center py-12 bg-gray-50 rounded-2xl border border-dashed border-gray-300">
                    <p class="text-gray-500">Articles coming soon...</p>
                </div>
            <?php endif; ?>

        </div>
    </section>




<section id="contact" class="w-full py-24 bg-navy relative overflow-hidden flex items-center justify-center">
        
        <div class="absolute top-0 left-0 w-96 h-96 bg-green-500/20 rounded-full blur-[100px] -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gold/20 rounded-full blur-[100px] translate-x-1/2 translate-y-1/2"></div>

        <style>
            @keyframes float-y {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(2deg); }
            }
            @keyframes pulse-glow {
                0%, 100% { box-shadow: 0 0 20px rgba(34, 197, 94, 0.5); }
                50% { box-shadow: 0 0 40px rgba(34, 197, 94, 0.8); }
            }
            @keyframes typing {
                0%, 100% { opacity: 0.3; transform: scale(1); }
                50% { opacity: 1; transform: scale(1.2); }
            }
            .floating-card {
                animation: float-y 6s ease-in-out infinite;
            }
            .typing-dot {
                animation: typing 1.5s infinite;
            }
            .typing-dot:nth-child(2) { animation-delay: 0.2s; }
            .typing-dot:nth-child(3) { animation-delay: 0.4s; }
        </style>

        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-16">

                <div class="w-full md:w-1/2 text-center md:text-left">
                    <span class="text-green-400 font-bold tracking-widest uppercase text-sm mb-2 block">
                        <i class="fa-brands fa-whatsapp text-lg mr-2"></i> Fast Response
                    </span>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">
                        <?php echo $lang['chat_title']; ?>
                    </h2>
                    <p class="text-gray-300 text-lg mb-10 leading-relaxed">
                        <?php echo $lang['chat_subtitle']; ?>
                    </p>
                    
                    <a href="https://wa.me/60192009832?text=Hi%20Naquiddin,%20saya%20berminat%20nak%20tahu%20lebih%20lanjut." target="_blank" class="inline-flex items-center gap-4 bg-green-500 text-white px-8 py-5 rounded-full font-bold text-xl transition-all duration-300 hover:bg-green-600 hover:scale-105" style="animation: pulse-glow 3s infinite;">
                        <i class="fa-brands fa-whatsapp text-3xl"></i>
                        <span><?php echo $lang['chat_btn']; ?></span>
                    </a>
                    <p class="text-gray-400 text-sm mt-4 ml-2">
                        <i class="fa-solid fa-bolt text-yellow-400 mr-1"></i> Usually replies within 1 hour
                    </p>
                </div>

                <div class="w-full md:w-1/2 flex justify-center">
                    <div class="floating-card w-[320px] bg-white rounded-[3rem] p-4 shadow-2xl border-8 border-gray-800 relative">
                        
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-32 h-6 bg-gray-800 rounded-b-xl z-20"></div>

                        <div class="bg-gray-100 w-full h-[500px] rounded-[2rem] overflow-hidden flex flex-col relative">
                            
                            <div class="bg-green-600 p-6 pt-10 flex items-center gap-3 shadow-md">
                                <div class="w-10 h-10 rounded-full bg-white p-0.5">
                                    <img src="assets/img/naqiudin.png" class="w-full h-full object-cover rounded-full bg-gray-200" alt="Avatar">
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-sm">Naquiddin Razak</h4>
                                    <p class="text-green-100 text-xs flex items-center gap-1">
                                        <span class="w-2 h-2 bg-green-300 rounded-full"></span> Online
                                    </p>
                                </div>
                            </div>

                            <div class="flex-grow p-4 flex flex-col gap-4 overflow-hidden relative">
                                <div class="absolute inset-0 opacity-5" style="background-image: url('https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png');"></div>

                                <div class="self-end bg-green-100 text-gray-800 p-3 rounded-l-xl rounded-tr-xl rounded-br-none shadow-sm max-w-[85%] relative z-10 transform translate-y-4 opacity-0" style="animation: fadeInUp 0.5s forwards 0.5s;">
                                    <p class="text-sm"><?php echo $lang['chat_bubble_1']; ?></p>
                                    <span class="text-[10px] text-gray-500 block text-right mt-1">10:00 AM <i class="fa-solid fa-check-double text-blue-500"></i></span>
                                </div>

                                <div class="self-end bg-green-100 text-gray-800 p-3 rounded-l-xl rounded-tr-xl rounded-br-none shadow-sm max-w-[85%] relative z-10 transform translate-y-4 opacity-0" style="animation: fadeInUp 0.5s forwards 1s;">
                                    <p class="text-sm"><?php echo $lang['chat_bubble_2']; ?></p>
                                    <span class="text-[10px] text-gray-500 block text-right mt-1">10:01 AM <i class="fa-solid fa-check-double text-blue-500"></i></span>
                                </div>

                                <div class="self-start bg-white p-3 rounded-r-xl rounded-tl-xl rounded-bl-none shadow-sm relative z-10 flex items-center gap-1 w-fit transform translate-y-4 opacity-0" style="animation: fadeInUp 0.5s forwards 2s;">
                                    <span class="w-2 h-2 bg-gray-400 rounded-full typing-dot"></span>
                                    <span class="w-2 h-2 bg-gray-400 rounded-full typing-dot"></span>
                                    <span class="w-2 h-2 bg-gray-400 rounded-full typing-dot"></span>
                                </div>

                            </div>

                            <div class="bg-white p-3 flex items-center gap-2 border-t border-gray-200">
                                <i class="fa-solid fa-plus text-blue-500 text-xl"></i>
                                <div class="flex-grow bg-gray-100 rounded-full h-8 px-3 text-xs flex items-center text-gray-400">Type a message...</div>
                                <i class="fa-solid fa-camera text-blue-500 text-lg"></i>
                                <i class="fa-solid fa-microphone text-blue-500 text-lg"></i>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>

</body>
</html>