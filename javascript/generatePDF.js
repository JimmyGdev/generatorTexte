var doc = new jsPDF();
var specialElementHandlers = {
  "#editor": function (element, renderer) {
    return true;
  },
};

var cmd = document.querySelector("#cmd");
cmd.addEventListener("click", function () {
  var contentContainer = document.querySelector("#content");
  doc.fromHTML(contentContainer.outerHTML, 15, 15, {
    width: 70,
    elementHandlers: specialElementHandlers,
  });
  doc.save("sample-file.pdf");
});
