<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url>
<loc>https://cronullaflorists.com.au/</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/categories</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/category/designer-choice</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/category/bouquet</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/category/arrangement</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/category/plant</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/category/flower</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/about-us</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/faq</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/customer-services</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/contact-us</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/shopping-cart</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
<url>
<loc>https://cronullaflorists.com.au/checkout</loc>
<lastmod>2019-12-11T06:28:36+00:00</lastmod>
<priority>0.80</priority>
</url>
@if (!$productUrl->isEmpty())
	 @foreach ($productUrl as $url)
	<url>
	<loc>https://cronullaflorists.com.au/product/{{$url->slug}}</loc>
	<lastmod>{{gmdate(DateTime::W3C, strtotime($url->updated_at))}}</lastmod>
	<priority>0.80</priority>
	</url>
	@endforeach
@endif
</urlset>