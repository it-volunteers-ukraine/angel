jQuery(document).ready(function ($) {

  // Початок показу лоадера
  function showLoader() {
    $(".loader").show();
  };

  // Кінець показу лоадера
  function hideLoader() {
    $(".loader").hide();
  };
    
  // Отримання nonce
  function getAcknowledgementsNonce() {
    return myAjax.nonce;
  };

  // Початок скрипту
  var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
  var page = 1;

  // Функція для виведення постів і пагінації через AJAX
  function load_posts(page) {
    var data = {
      action: "load_acknowledgements",
      nonce: getAcknowledgementsNonce(),
      width: viewportWidth,
      page: page,
    };
    $.ajax({
      url: myAjax.ajaxUrl,
      type: "POST",
      data: data,
      beforeSend: showLoader,
      success: function (response) {
        hideLoader();
        $(".acknowledgements__content__cards").html(response.posts);
        $(".pagination").html(response.pagination);
      },
      error: function (xhr, status, error) {
        console.error("Request failed: " + error);
        hideLoader();
      },
    }); 
  };

   // Завантаження постів та пагінації при завантаженні сторінки
   load_posts(page);
   
   // Обробник кліків на сторінки пагінації
  $(document).on('click', '.pagination a', function(e) {
    e.preventDefault();
    var page = $(this).data('paged') || $(this).attr('href').split('paged=')[1]; // Отримуємо номер сторінки з посилання
    load_posts(page);
  });
});