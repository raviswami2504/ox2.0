let itemsContainer = document.querySelector("#cardContainer");
let nodeList_items = itemsContainer.querySelectorAll("#blogs");
let items = Array.from(nodeList_items);
let paginationContainer = document.querySelector("#pagination");
let itemsPerPage = 20;
paginate(items, itemsPerPage);

function paginate(items, itemsPerPage) {
  let currentPage = 1;
  let totalPages = Math.ceil(items.length / itemsPerPage);
  showItems(currentPage, totalPages);
  setupPagination(currentPage, totalPages);
}

function showItems(currentPage, totalPages) {
  const startIndex = (currentPage - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const pageItems = items.slice(startIndex, endIndex);
  itemsContainer.innerHTML = "";
  pageItems.forEach((item) => {
    itemsContainer.appendChild(item);
  });

  let paginationText = document.querySelector("#pagination-text");
  paginationText.innerText = `${startIndex + 1} - ${endIndex} of ${items.length}`;

  let previousBtn = document.querySelector("#preBtn");
  let nextBtn = document.querySelector("#nextBtn");
  if (currentPage === 1) {
    enableDisableButtons(previousBtn, true);
  } else if (currentPage === totalPages) {
    enableDisableButtons(nextBtn, true);
  } else {
    enableDisableButtons(previousBtn, false);
    enableDisableButtons(nextBtn, false);
  }
}

function setupPagination(currentPage, totalPages) {
  paginationContainer.addEventListener("click", (event) => {
    let pagination_button = event.target.innerText;
    if (pagination_button === "Previous") {
      --currentPage;
    }
    if (pagination_button === "Next") {
      ++currentPage;
    }
    showItems(currentPage, totalPages);
  });
}

function enableDisableButtons(button, isDisabled) {
  button.disabled = isDisabled;
}
