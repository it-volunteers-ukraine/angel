function formatDate(inputDate) {
  const date = new Date(inputDate);
  const day = date.getDate().toString().padStart(2, "0");
  const month = (date.getMonth() + 1).toString().padStart(2, "0");
  const year = date.getFullYear();
  return `${day}.${month}.${year}`;
}

document.addEventListener("DOMContentLoaded", function () {
  const dateElements = document.querySelectorAll(".news-card .date");
  dateElements.forEach((element) => {
    const originalDate = element.textContent.trim();
    const formattedDate = formatDate(originalDate);
    element.textContent = formattedDate;
  });
});
