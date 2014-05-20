$(function(){
  $("#filter").keyup(function(){

    // Retrieve the input field text and reset the count to zero
    var filter = $(this).val(), count = 0;

    // Loop through the comment list
    $(".results .blog-post").each(function(){

        // If the list item does not contain the text phrase fade it out
        if ($(this).text().search(new RegExp(filter, "i")) < 0) {
            $(this).fadeOut();

        // Show the list item if the phrase matches and increase the count by 1
        } else {
            $(this).show();
            count++;
        }
    });

    // Update the count
    if (count == 1) {
      $("#filter-count").text(count+" Search Result");
    } else {
      $("#filter-count").text(count+" Search Results");
    }
  });
})