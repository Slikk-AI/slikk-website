<?php 
header("Content-Type: application/xml; charset=utf-8"); 
echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; 
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
 <loc>{{site_url}}</loc>
 <priority>1.0</priority>
 <changefreq>daily</changefreq>
 </url>
<url>
<loc>{{site_url.'about-us'}}</loc>
</url>
<url>
<loc>{{site_url.'blog-sitemap.xml'}}</loc>
</url>
 </urlset>