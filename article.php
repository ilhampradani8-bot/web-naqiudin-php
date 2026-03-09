<?php
// 1. LOGIKA PEMILIHAN BAHASA (Sama seperti index.php)
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

// 2. LOGIKA MENCARI ARTIKEL DARI JSON
$article = null;
if (isset($_GET['id'])) {
    $articles_file = 'data/articles.json';
    if (file_exists($articles_file)) {
        $json_data = file_get_contents($articles_file);
        $articles_data = json_decode($json_data, true);
        
        // Cari artikel yang padan dengan ID di URL
        foreach ($articles_data as $item) {
            if ($item['id'] == $_GET['id']) {
                $article = $item;
                break;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang_code; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if ($article): ?>
        <title><?php echo htmlspecialchars($article['title']); ?> | Naquiddin Razak</title>
        
        <meta name="description" content="<?php echo htmlspecialchars($article['excerpt']); ?>">
        
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo htmlspecialchars($article['title']); ?>">
        <meta property="og:description" content="<?php echo htmlspecialchars($article['excerpt']); ?>">
        <meta property="og:image" content="<?php echo htmlspecialchars($article['image']); ?>">
        <meta property="og:url" content="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
        <meta property="og:site_name" content="Naquiddin Razak - Financial Planner">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php echo htmlspecialchars($article['title']); ?>">
        <meta name="twitter:description" content="<?php echo htmlspecialchars($article['excerpt']); ?>">
        <meta name="twitter:image" content="<?php echo htmlspecialchars($article['image']); ?>">
    <?php else: ?>
        <title>Article Not Found | Naquiddin Razak</title>
        <meta name="description" content="The requested article could not be found.">
    <?php endif; ?>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
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

<body class="bg-gray-50 text-gray-800">

    <?php include('includes/header.php'); ?>

    <main class="pt-32 pb-24 min-h-screen">
        <div class="container mx-auto px-6 md:px-12 max-w-4xl">
            
            <?php if ($article): ?>
                
                <a href="index.php#articles" class="inline-flex items-center gap-2 text-navy hover:text-gold font-bold mb-8 transition duration-300">
                    <i class="fa-solid fa-arrow-left"></i> Back to Home
                </a>

                <header class="mb-10 text-center md:text-left">
                    <span class="text-gold font-bold tracking-widest uppercase text-sm mb-3 block">
                        Published on <?php echo date("d F Y", strtotime($article['date'])); ?>
                    </span>
                    <h1 class="text-3xl md:text-5xl font-extrabold text-navy leading-tight mb-6">
                        <?php echo $article['title']; ?>
                    </h1>
                </header>

                <div class="w-full h-[40vh] md:h-[60vh] rounded-3xl overflow-hidden shadow-2xl mb-12 relative border border-gray-100">
                    <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" class="w-full h-full object-cover">
                </div>

                <article class="prose prose-lg max-w-none text-gray-700">
                    <?php 
                        // Paparkan HTML terus dari database tanpa nl2br atau htmlspecialchars
                        $isi_artikel = (isset($article['content']) && !empty($article['content'])) ? $article['content'] : $article['excerpt'];
                        echo $isi_artikel; 
                    ?>
                </article>

                <div class="mt-16 pt-8 border-t border-gray-200 flex flex-col md:flex-row items-center justify-between gap-4">
                    <span class="font-bold text-navy">Share this insightful article:</span>
                    <div class="flex gap-4">
                        <a href="https://wa.me/?text=<?php echo urlencode($article['title'] . ' - Read here: ' . "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>" target="_blank" class="w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center hover:bg-green-600 transition hover:-translate-y-1 shadow-lg text-xl">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>" target="_blank" class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition hover:-translate-y-1 shadow-lg text-xl">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                </div>

            <?php else: ?>
                <div class="text-center py-24">
                    <div class="text-8xl text-gray-300 mb-6"><i class="fa-solid fa-file-circle-question"></i></div>
                    <h1 class="text-4xl font-bold text-navy mb-4">Article Not Found</h1>
                    <p class="text-gray-500 mb-8">The article you are looking for does not exist or has been removed.</p>
                    <a href="index.php" class="bg-navy text-white px-8 py-4 rounded-full font-bold hover:bg-gold transition shadow-lg">Return to Home</a>
                </div>
            <?php endif; ?>

        </div>
    </main>

    <?php include('includes/footer.php'); ?>

</body>
</html>