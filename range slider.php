<div class="filed-name col-sm-3 col-xs-12" style="position: relative;">
  <input class=" col-xs-6 range-slider__range" type="range" value="0" min="0" max="500" step="50" name="min_price">
  <span class="range-slider__value" style="position: absolute; top: -20px; left: 0;">0</span>
    <input class="col-xs-6 range-slider__range" type="range" value="0" min="0" max="100000" step="50" name="max_price">
  <span class="range-slider__value" style="position: absolute; top: -20px; right: 0;">0</span>
<script>
var rangeSlider = function(){
  var slider = jQuery('.range-slider'),
      range = jQuery('.range-slider__range'),
      value = jQuery('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = jQuery(this).prev().attr('value');
      jQuery(this).html(value);
    });

    range.on('input', function(){
      jQuery(this).next(value).html(this.value);
    });
  });
};

rangeSlider();
</script>












<div class="range-slider">
  <input class="range-slider__range" type="range" value="100" min="0" max="500">
  <span class="range-slider__value">0</span>
</div>