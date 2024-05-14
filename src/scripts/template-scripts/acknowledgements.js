jQuery(document).ready(function ($) {
    
  // Отримання nonce
  function getAcknowledgementsNonce() {
    return myAjax.nonce;
  }

  // Початок скрипту
  var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
  var page = 1;

  // Функція для виведення постів через AJAX
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
      success: function (response) {
        $(".acknowledgements__content__cards").html(response.posts);
      },
      error: function (xhr, status, error) {
        console.error("Request failed: " + error);
      },
    }); 
  }

  // Функція для виведення пагінації через AJAX
  function load_pagination(page) {
    var data = {
      action: "load_pagination",
      nonce: getAcknowledgementsNonce(),
      width: viewportWidth,
      page: page,
    };
    $.ajax({
      url: myAjax.ajaxUrl,
      type: "POST",
      data: data,
        success: function(response) {
            $(".pagination").html(response.pagination);
        },
        error: function(xhr, status, error) {
            console.error('Request failed: ' + error);
        }
    });
  }

   // Завантаження постів та пагінації при завантаженні сторінки
   load_posts(page);
   load_pagination(page);

   // Обробник кліків на сторінки пагінації
  $(document).on('click', '.pagination a', function(e) {
    e.preventDefault();
    var page = $(this).data('paged') || $(this).attr('href').split('paged=')[1]; // Отримуємо номер сторінки з посилання
    load_posts(page);
    load_pagination(page);
    console.log("hi");
});
})