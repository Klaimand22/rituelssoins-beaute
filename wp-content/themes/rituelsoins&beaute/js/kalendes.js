/** @format */

document.addEventListener("DOMContentLoaded", (event) => {
  console.log("DOM fully loaded and parsed");

  if (document.body.classList.contains("page-template-page-idee-cadeau")) {
    window.kalendes = {
      host: "rsb",
      buttons: {
        buy: 0,
        reserve: 0,
        gift: 0,
        buyReserve: 0,
      },
      displayMode: "SIMPLE2",
      pageAtStart: "gift",
    };
  }

  if (
    document.body.classList.contains("page-template-page-reserver-en-ligne")
  ) {
    window.kalendes = {
      host: "rsb",
      buttons: {
        buy: 0,
        reserve: 0,
        gift: 0,
        buyReserve: 0,
      },
      displayMode: "SIMPLE2",
      pageAtStart: "reserve",
    };
  }
});
