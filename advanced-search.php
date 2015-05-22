<?php include("php/helper.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <title>Company News</title>
        <meta name="description" content="">
        <?php include("php/includes/header-files.php"); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include("php/includes/header.php"); ?>
        <?php include("php/includes/navbar.php"); ?>
        <?php include("php/includes/mobile-navigation.php"); ?>
        <div class="common-container container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-9" style="font-size:1.2em;">
                    <a class="btn btn-warning" href="<?php echo BASE_URL;?>"><span class="glyphicon glyphicon-arrow-left">&nbsp;</span>Back to Shopping</a><br><br>
                    <h2 id="contact-feedback">Advanced Search</h2><hr>
                    <div class="container-fluid form-panel">
                        <div class="row">
                            <form id="search-form">
                                <table>
                                    <tr>
                                        <td><label for="search_name">Name</label></td>
                                        <td><input type="text" id="search_name"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="search_description">Description</label></td>
                                        <td><input type="text" id="search_description"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="search_sku">SKU</label></td>
                                        <td><input type="text" id="search_sku"/></td>
                                    </tr>
                                    <tr>
                                        <td><label for="search_price">Price</label></td>
                                        <td><input type="text" id="search_price_from"/>&nbsp; &#45; &nbsp; <input type="text" id="search_price_to"/> (USD)</td>
                                    </tr>
                                    <tr>
                                        <td><label for="search_cut">Cut Length</label></td>
                                        <td>
                                            <select name="cut_length[]" id="search_cut" class="multiselect" title="Cut Length" multiple="multiple" size="4">
                                               <option value="178">1-1/2" clips, bag of 20</option>
                                               <option value="142">1.5" clips, bag of 20</option>
                                               <option value="887">115"</option>
                                               <option value="880">14.7"</option>
                                               <option value="884">3.298'</option>
                                               <option value="879">33.47"</option>
                                               <option value="893">52"</option>
                                               <option value="889">69.84"</option>
                                               <option value="878">7"</option>
                                               <option value="881">7'</option>
                                               <option value="886">80"</option>
                                               <option value="888">93.46"</option>
                                               <option value="871">Clips</option>
                                               <option value="152">Clips/10pcs</option>
                                               <option value="147">Clips/20pcs</option>
                                               <option value="873">1'</option>
                                               <option value="837">2'</option>
                                               <option value="542">3'</option>
                                               <option value="165">4'</option>
                                               <option value="170">5'</option>
                                               <option value="126">6'</option>
                                               <option value="125">8'</option>
                                               <option value="171">10'</option>
                                               <option value="146">12'</option>
                                               <option value="856">18"</option>
                                               <option value="857">24"</option>
                                               <option value="858">36"</option>
                                               <option value="855">48"</option>
                                               <option value="882">1.5"</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="search_finish">Finish</label></td>
                                        <td>
                                            <select name="finish[]" id="search_finish" class="multiselect" title="Finish" multiple="multiple" size="4">
                                               <option value="169">-</option>
                                               <option value="800">Black Anodized</option>
                                               <option value="186">Black Powder Coat</option>
                                               <option value="167">Brazilian Cherry</option>
                                               <option value="197">Brite-Dip Anodized</option>
                                               <option value="128">Clear Anodized</option>
                                               <option value="184">Gold Anodized</option>
                                               <option value="141">Mechanically Polished</option>
                                               <option value="291">Mill Finish</option>
                                               <option value="185">Oil-Rubbed Bronze</option>
                                               <option value="187">White Powder Coat</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="search_alloy">Alloy & Temper</label></td>
                                        <td>
                                            <select name="alloy_temper[]" id="search_alloy" class="multiselect" title="Alloy &amp; Temper" multiple="multiple" size="4">
                                               <option value="851">-</option>
                                               <option value="293">6061-T6</option>
                                               <option value="166">6063-T5</option>
                                               <option value="200">6463-T5</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="search_length">Length</label></td>
                                        <td>
                                            <select name="length[]" id="search_length" class="multiselect" title="Length" multiple="multiple" size="4">
                                               <option value="189">3'</option>
                                               <option value="365">5'</option>
                                               <option value="193">6'</option>
                                               <option value="533">6'-6-3/4"</option>
                                               <option value="221">8'</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>                                
                                <div class="col-xs-12"> 
                                    <input type="submit" value="Submit" class="btn btn-warning" style="font-size:1.2em;float:right;"/>
                                </div>
                            </form>
                        </div>
                    </div><br>
                </div>
                <div class="hidden-xs col-sm-3">
                    <?php include("php/includes/side-content.php"); ?>
                </div>
            </div>
        </div>
        <?php include("php/includes/chat.php"); ?>
        <?php include("php/includes/footer.php"); ?>
        <?php include("php/includes/script-js.php"); ?>
    </body>
</html>
