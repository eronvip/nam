<?php
    include('inc/ketnoi.php');
 ?>
<aside class="col-sm-4 col-md-3 col-lg-3 content-aside">

    <!-- Shop by categories -->
    <section>
        <h3>Danh mục</h3>
        <ul class="expander-list">
            <?php
                $laydm = "SELECT * FROM danh_muc";
                $qr_laydm = mysqli_query($ketnoi, $laydm);

                while($dm = mysqli_fetch_array($qr_laydm)) {

             ?>
            <li>
                <span class="name">
                    <a href="/danh-muc-sp.php?id=<?=$dm['id']?>"><?=$dm['TenDanhMuc']?></a>
                </span>
            </li>
        <?php } ?>
        </ul>
    </section>
    <!-- //end Shop by categories -->
    <div style="margin-bottom: 30px;"></div>
    <!-- <div class="section-divider"></div> -->

    <!-- Shop by -->
    <section>
        <h3>SHOP BY</h3>
        <p><strong>Category</strong>
        </p>
        <ul class="simple-list">
            <li><span class="m-icon m-icon-dress"></span> <a href="listing.html">Dresses (17)</a>
            </li>
            <li><span class="m-icon m-icon-shirts"></span> <a href="listing.html">Shirts (6)</a>
            </li>
            <li><span class="m-icon m-icon-coats"></span> <a href="listing.html">Coats (6)</a>
            </li>
            <li><span class="m-icon m-icon-jackets"></span> <a href="listing.html">Jackets (6)</a>
            </li>
            <li><span class="m-icon m-icon-shorts"></span> <a href="listing.html">Shorts (6)</a>
            </li>
            <li><span class="m-icon m-icon-jeans"></span> <a href="listing.html">Jeans (6)</a>
            </li>
            <li><span class="m-icon m-icon-skirts"></span> <a href="listing.html">Skirts (6)</a>
            </li>
            <li><span class="m-icon m-icon-lingerie"></span> <a href="listing.html">Lingerie (6)</a>
            </li>
            <li><span class="m-icon m-icon-tops"></span> <a href="listing.html">Tops (5)</a>
            </li>
        </ul>
        <br>

    </section>
    <!-- //end Shop by -->

    <div class="section-divider"></div>


    <!-- Compare products -->
    <section>
        <h3>COMPARE PRODUCTS</h3>
        <p>You have no items to compare.</p>
    </section>
    <!-- //end Compare products -->

    <div class="section-divider"></div>

    <!-- Price -->
    <section>
        <h3>PRICE</h3>
        <div class="slider-range">
            <div class="control ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
                <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 100%;"></a>
            </div>
            <div class="min">$<span class="value">19</span>
            </div>
            <div class="max">$<span class="value">3000</span>
            </div>
        </div>
    </section>
    <!-- //end Price -->

    <div class="section-divider"></div>

</aside>
