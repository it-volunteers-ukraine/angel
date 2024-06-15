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


// Popup

  const popupLinks = document.querySelectorAll('.popup-link');
  const body = document.querySelector('body');
  const lockPadding = document.querySelectorAll('.lock-padding');

  let unlock = true;

  const timeout = 800;

  if (popupLinks.length > 0) {
      for (let index = 0; index < popupLinks.length; index++) {
          const popupLink = popupLinks[index];
          popupLink.addEventListener('click', function (e) {
              const popupName = popupLink.getAttribute('href').replace('#', '');
              const currentPopup = document.getElementById(popupName);
              popupOpen(currentPopup);
              e.preventDefault();
          });
      }
  }

  const popupCloseIcon = document.querySelectorAll('.close-popup');
  if (popupCloseIcon.length > 0) {
      for (let index = 0; index < popupCloseIcon.length; index++) {
          const el = popupCloseIcon[index];
          el.addEventListener('click', function(e) {
              popupClose(el.closest('.popup'));
              e.preventDefault();
          });
      }
  }

  function popupOpen(currentPopup) {
      if (currentPopup && unlock) {
          const popupActive = document.querySelector('.popup.open');
          if (popupActive) {
              popupClose(popupActive, false);
          } else {
              bodyLock();
          }
          currentPopup.classList.add('open');
          currentPopup.addEventListener('click', function (e) {
              if (!e.target.closest('.popup__content')) {
                  popupClose(e.target.closest('.popup'));
              }
          });
      }
  }

  function popupClose(popupActive, doUnlock = true) {
      if (unlock) {
          popupActive.classList.remove('open');
          if (doUnlock) {
              bodyUnlock();
          }
      }
  }

  function bodyLock() {
      const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';

      if (lockPadding.length > 0) {
          for (let index = 0; index < lockPadding.length; index++) {
              const el = lockPadding[index];
              el.style.paddingRight = lockPaddingValue;
          }
      }
      body.style.paddingRight = lockPaddingValue;
      body.classList.add('lock');

      unlock = false;
      setTimeout(function() {
          unlock = true;
      }, timeout);
  }

  function bodyUnlock() {
      setTimeout(function() {
          if (lockPadding.length > 0) {
              for (let index = 0; index < lockPadding.length; index++) {
                  const el = lockPadding[index];
                  el.style.paddingRight = '0px';
              }
          }
          body.style.paddingRight = '0px';
          body.classList.remove('lock');
      }, timeout);

      unlock = false;
      setTimeout(function() {
          unlock = true;
      }, timeout);
  }

  // Додати обробник подій для всіх посилань подяк
  document.addEventListener('click', function(event) {
      if (event.target.closest('.open-modal')) {
          event.preventDefault(); // Зупинити перехід по посиланню
          var imgUrl = event.target.closest('.open-modal').getAttribute('href'); // Отримати URL зображення
          document.getElementById('modalImg').src = imgUrl; // Додати зображення до модального вікна
          popupOpen(document.getElementById('acknowledgementsModal'));
      }
  });