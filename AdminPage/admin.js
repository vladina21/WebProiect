
function showTable(category) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState === 4) {
        if (this.status === 200) {
          var response = this.responseText;
          var categoryHeader = document.getElementById("category-header");
          var recentPayments = document.querySelector(".recent-payments");
          
          if (categoryHeader) {
            categoryHeader.textContent = 'Detalii despre ' + category;
          } else {
            console.error("Target element not found: category-header");
          }
          
          if (recentPayments) {
            recentPayments.innerHTML = response;
          } else {
            console.error("Target element not found: .recent-payments");
          }
        } else {
          console.error("Error: " + this.status);
        }
      }
    };
    
    xhttp.open("GET", "admin.php?category=" + encodeURIComponent(category), true);
    xhttp.send();
  }
  
function openPDF(pdfUrl) {
    window.open(pdfUrl, "_blank");
}
