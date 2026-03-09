<?php
// Set content type to XML for Google Search Console
header('Content-Type: application/xml; charset=utf-8');

// Print XML declaration
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    
    <url>
        <loc>https://naqiuddinrazak.com/</loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    
    <url>
        <loc>https://naqiuddinrazak.com/index.php?lang=en</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    <url>
        <loc>https://naqiuddinrazak.com/index.php?lang=my</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    <?php
    // Fetch dynamic articles from JSON file
    $articles_file = 'data/articles.json';
    
    if (file_exists($articles_file)) {
        $json_data = file_get_contents($articles_file);
        $articles_data = json_decode($json_data, true);
        
        if (!empty($articles_data) && is_array($articles_data)) {
            foreach ($articles_data as $article) {
                // Sanitize ID and format date
                $id = htmlspecialchars($article['id']);
                $date = isset($article['date']) ? date('Y-m-d', strtotime($article['date'])) : date('Y-m-d');
                ?>
    <url>
        <loc>https://naqiuddinrazak.com/article.php?id=<?php echo $id; ?></loc>
        <lastmod><?php echo $date; ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
                <?php
            }
        }
    }
    ?>
</urlset>