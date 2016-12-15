<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{url()}}</loc>
        <lastmod>{{ Carbon\Carbon::now()->format('Y-m-d') }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1</priority>
    </url>

	@if(isset($postTypes))
    @foreach($postTypes as $value)
    <url>
    	<loc>{{ url($value->slug) }}</loc>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
    </url>
    @endforeach
    @endif

	@if(isset($posts))
    @foreach($posts as $value)
    <url>
    	<loc>{{ url($value->slug) }}</loc>
    	<lastmod>{{ date('Y-m-d', strtotime($value->start_date)) }}</lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
    </url>
	@endforeach
	@endif

</urlset>
