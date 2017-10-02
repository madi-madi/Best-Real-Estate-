
<!-- search here -->

<section id="search" class=" colord">
  <div class="container">
    <div class="row"> 
    
<form  method="get" action="<?php echo home_url('search')?>/#search-result">
  <!-- Start Filed div -->
<!--<div class="filed-name col-sm-3 col-xs-12">
  
  <input type="text" name="search_name" class="form-control col-xs-12" placeholder="Filed Name"/>
</div>-->
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  
    <select class="col-xs-12 form-control" id="rew_type" name="property_type">
    <option > Property Type</option>
    <option value="villa"> Villa</option>
    <option value="apartment">Apartment</option>
    <option value="land">Land</option>
  </select>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  
  <select class="col-xs-12 form-control" id="main-address" name="address">

    <option value=""> Main Location</option>
    <option data-value="ramallah" value="ramallah">Ramallah</option>
    <option data-value="gaza" value="gaza">Gaza</option>
    <option data-value="" value="nosirat">Nosirat</option>
    <option data-value="der-Al-balh" value="der-al-balh">Der Al-balh</option>
    <option data-value="khanyouns" value="khanyouns">Khan Youns</option>
    <option data-value="rafah" value="rafah">Rafah</option>
  </select>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  
  <select class="col-xs-12 form-control" id="district-address" name="district">

    <option value=""> District</option>
    <option value="" class="gaza"> <b>Gaza : </b></option>
    <option value="sheikh-ajlin" class="gaza" <?php selected( $district, 'sheikh-ajlin' ); ?> >Sheikh Ajlin</option>
    <option data-value="tal-al-hawa" value="tal-al-hawa" class="gaza" <?php selected( $district, 'tal-al-hawa' ); ?> >Tal Al-Hawa</option>
    <option value="al-ramla" class="gaza" <?php selected( $district, 'al-ramla' ); ?> >Al-Ramla</option>
    <option value="al-sahaa" class="gaza" <?php selected( $district, 'al-sahaa' ); ?> >Al-Sahaa</option>
    <option value="zaytoun" class="gaza" <?php selected( $district, 'zaytoun' ); ?> >Zaytoun</option>
     <option value="jabalia" class="gaza" <?php selected( $district, 'jabalia' ); ?> >Jabalia</option>
     <option value="alnasr" class="gaza" <?php selected( $district, 'alnasr' ); ?> >Al-Nasr</option>
     <option value="al-shaffa" class="gaza" <?php selected( $district, 'al-shaffa' ); ?> >Al-Shaffa</option>
     <option value="al-shajaeia" class="gaza" <?php selected( $district, 'al-shajaeia' ); ?> >Al-shajaeia</option>
     <option value="al-mueaskar" class="gaza" <?php selected( $district, 'al-mueaskar' ); ?> >Al-mueaskar</option>
     <option value="al-shshati" class="gaza" <?php selected( $district, 'al-shshati' ); ?> >Al-shshati</option>
     <option value="sheikh-radwan" class="gaza" <?php selected( $district, 'sheikh-radwan' ); ?> >Sheikh Radwan</option>
     <option value="al-jala" class="gaza" <?php selected( $district, 'al-jala' ); ?> >Al-jala</option>

    <option value="Nosirat">Nosirat</option>
    <option value="Der Al-balh">Der Al-balh</option>
    <option value="" class="khanyouns"> <b>Khan Youns : </b></option>
    <option value="Al-Qarara" class="khanyouns">Al-Qarara</option>
    <option value="Bani Suhaila" class="khanyouns">Bani Suhaila</option>
    <option value="Rafah" class="rafah"><b>Rafah :</b></option>
    <option value="Al-balad" class="rafah">Al-balad</option>
    <option value="Musabah" class="rafah">Musabah</option>
  </select>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<?php
$categores = get_terms('category');
/*var_dump($categores);
exit();*/
?>
<div class="filed-name col-sm-3 col-xs-12">
  
  <select class="col-xs-12 form-control" name="category">
  <option > Property Status</option>
      <?php foreach($categores as $category){

    ?>
    <option value="<?php echo $category->term_id?>"><?php echo $category->name?></option>
    <?php

    }?>
  </select>
</div>
<!-- End Filed div -->




<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  
  <input type="number" name="min_room" class="col-xs-12 form-control" placeholder="Min Beds"/>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  
  <input type="number" name="max_room" class="col-xs-12 form-control" placeholder="Max Beds"/>
</div>
<!-- End Filed div -->

<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  
  <input type="number" name="min_price" class="col-xs-12 form-control" placeholder="Min Price"/>

</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  
  <input type="number" name="max_price" class="col-xs-12 form-control" placeholder="Min Price"/>

</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  
  <input type="text" name="min_area" class="col-xs-12 form-control" placeholder="Min Area"/>
</div>
<!-- End Filed div -->
<!-- Start Filed div -->
<div class="filed-name col-sm-3 col-xs-12">
  
  <input type="text" name="max_area" class="col-xs-12 form-control" placeholder="Max Area"/>
</div>
<!-- End Filed div -->
<br/>
<div class="filed-name col-sm-6 col-xs-12 search-submit">
<input type="submit" name="submit" class="btn btn-info col-xs-12 form-control" value="Search ">
</div>
</form>


    </form>


    </div>
  </div>
  <!--/.container--> 
</section>


<!-- end  search here --> 
