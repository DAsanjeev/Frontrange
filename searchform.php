<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s"></label>
        <div class="search-wrapper">
            <input type="text"  value="" name="s" id="s" class="search-box" placeholder="Search" />
            <span class="search-button">
                <span class="search-icon"></span>
            </span>
        </div>
<!--        <input type="text" value="" name="s" id="s" placeholder="<?php the_search_query(); ?>" />
        <input type="submit" id="searchsubmit" value="Search" />-->
    </div>
</form>



