
			<?php 
			/*upcoming slider on front page */
		$url="api.rottentomatoes.com/api/public/v1.0/lists/movies/upcoming.json?limit=15&country=us&apikey=uuacu746nquzs3f2679dcyv6";
		$referer="http://apps.facebook.com/moviepie/" ; 
		$u=getPage($url, $referer, $timeout, $header);
		$j=json_decode($u);
		foreach ( $j->movies as $data)
		{
				echo "<div>";
				echo "<a href='movies.php?mid=".$data->id."'>";
				d($data->title) ; 
				echo "<img src=".$data->posters->thumbnail.">"; 
				echo "</a></div>"; 
		}
		/*above part displays the content in slider below is the tmdb api key, i have got 
		use this to do the call , its more or less similar 
		*/
		?></div></div>
					
					<?php 
		$tmdb_key ='4cff43a8a3eec60c17cb778d7d56214a'; 
		$url=" http://api.themoviedb.org/2.1/Movie.browse/en-US/xml/".$tmdb_key ."?order_by=rating&order=desc&genres=18&min_votes=5&page=1&per_page=10";
		echo $url;
		$referer="http://apps.facebook.com/moviepie/" ; 
		$u=getPage($url, $referer, $timeout, $header);
		$j=json_decode($u);
		print_r($j);