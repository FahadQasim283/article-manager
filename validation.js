document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("articleForm");
  form.addEventListener("submit", function (event) {
    const title = document.getElementById("title").value.trim();
    const author = document.getElementById("author").value.trim();
    const content = document.getElementById("content").value.trim();
    if (title === "") {
      alert("Title is required.");
      event.preventDefault();
      return;
    }
    if (author === "") {
      alert("Author name is required.");
      event.preventDefault();
      return;
    }
    if (content === "") {
      alert("Article content is required.");
      event.preventDefault();
      return;
    }
  });
});
