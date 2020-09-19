// scroll_top js start//
 $(document).ready(function(){ 
    $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
          $('.scrollup').fadeIn();
      } else {
          $('.scrollup').fadeOut();
      }
    }); 
    $('.scrollup').click(function(){
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
  });
// scroll_top js end//



// countdown js start//
const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Jan 2, 2019 03:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);  
    }, second)
// countdown js end//




// upload event photos js start//
$(".imgAdd").click(function(){
    $(this).closest(".row").find('.imgAdd').before('<div class="imgUp"><div class="imagePreview"></div><label class="btn">Upload<input name="image[]" type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><span class="del"><i class="fa fa-times"></i></span></div>');
  });
  $(document).on("click", "span.del" , function() {
      $(this).parent().remove();
  });
  $(function() {
      $(document).on("change",".uploadFile", function()
      {
          var uploadFile = $(this);
          var files = !!this.files ? this.files : [];
          if (!files.length || !window.FileReader) return;
   
          if (/^image/.test( files[0].type)){
              var reader = new FileReader();
              reader.readAsDataURL(files[0]);
   
              reader.onloadend = function(){
  uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
              }
          }
        
      });
  });
// upload event photos js end//


// image_thumbnail_gallery js start//
jQuery(document).ready(function($) {
    $('#myCarousel').carousel({
        interval: 5000
    });
    $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
        var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
    $('#myCarousel').on('slid.bs.carousel', function (e) {
        var id = $('.item.active').data('slide-number');
        $('#carousel-text').html($('#slide-content-'+id).html());
    });
});
// image_thumbnail_gallery js end//




// form_edit js start //
$(document).ready(function(){
  $('.js-edit, .js-save').on('click', function(){
    var $form = $(this).closest('#edit_name');
    $form.toggleClass('is-readonly is-editing');
    var isReadonly  = $form.hasClass('is-readonly');
    $form.find('input,textarea,select').prop('disabled', isReadonly);
  });
});
// form_edit js end //



// profile_pic_preview js start//
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreview').css('background-image', 'url('+e.target.result +')');
          $('#imagePreview').hide();
          $('#imagePreview').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
    readURL(this);
});
// profile_pic_preview js end//

