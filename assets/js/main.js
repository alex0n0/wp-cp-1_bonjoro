(function($) {
  $(document).ready(function () {
    let menuOpen = false;
    $("#mobile-nav-menu-button").on("click", function () {
      menuOpen = !menuOpen;
      if (menuOpen) {
        $("#mobile-nav-menu").addClass("open");
        $("body").addClass("mobile-nav-menu-open");
      } else {
        $("#mobile-nav-menu").removeClass("open");
        $("body").removeClass("mobile-nav-menu-open");
      }
    });
  
    let mobileProductDropdownOpen = false;
    $("#mobile-nav-menu-product-button").on("click", function () {
      $(".mobile-nav-menu-dropdown").each((i, el) => {
        $(el).removeClass("open");
      });
      mobileProductDropdownOpen = !mobileProductDropdownOpen;
      mobileProductBonjoroOpen = false;
      if (mobileProductDropdownOpen) {
        $("#mobile-nav-menu-product-dropdown").addClass("open");
      } else {
        $("#mobile-nav-menu-product-dropdown").removeClass("open");
      }
    });
  
    let mobileProductBonjoroOpen = false;
    $("#mobile-nav-menu-bonjoro-for-button").on("click", function () {
      $(".mobile-nav-menu-dropdown").each((i, el) => {
        $(el).removeClass("open");
      });
      mobileProductBonjoroOpen = !mobileProductBonjoroOpen;
      mobileProductDropdownOpen = false;
      if (mobileProductBonjoroOpen) {
        $("#mobile-nav-menu-bonjoro-for-dropdown").addClass("open");
      } else {
        $("#mobile-nav-menu-bonjoro-for-dropdown").removeClass("open");
      }
    });

    let allowCookies = localStorage.getItem("cookies-allowed");
    if (!allowCookies) {
      $("#cookies-banner").removeClass("d-none");
    }

    $("#allowCookies").on("click", function() {
      localStorage.setItem("cookies-allowed","1");
      $("#cookies-banner").addClass("d-none");
    });


    let chatOpen = false;
    let chatBoxTimeout;
    $("#chat-box").addClass("d-none");
    $("#fab-chat").on("click", function() {
      chatOpen = !chatOpen;
      $("#chat-box").removeClass("d-none");
      $("#chat-box").toggleClass("open");
      clearTimeout(chatBoxTimeout);
      if (!chatOpen) {
        chatBoxTimeout = setTimeout(function() {
          $("#chat-box").addClass("d-none");
        }, 300);
      }
    });


    
    let mailingListPanelClosed = localStorage.getItem("mailing-list-closed");
    if (!mailingListPanelClosed) {
      $("#mailing-list-panel").removeClass("d-none");

      $("#mailingListClose").on("click", function() {
        localStorage.setItem("mailing-list-closed","1");
        $("#mailing-list-panel").addClass("d-none");
      });
    }
  });
})(jQuery);
