$(document).ready(function(){

  $("input[name='author']").keyup(function(){
    var value = $(this).val();
    $("input[name='authorID']").val("");

    $.ajax({
      type: "get",
      url: "api/listAuthors.php",
      data: {
        inputValue: value
      },
      success: function(dataFromApi){
        console.log(dataFromApi);
        $("#autoCompleteAuthors").empty();
        if(dataFromApi){
          for (var i = 0; i < dataFromApi.length; i++) {
            $("#autoCompleteAuthors").append("<div data-id='"+dataFromApi[i].id+"'>"+dataFromApi[i].author_name+"</div>");
          }
          $("#autoCompleteAuthors").show();
        } else{
          $("#autoCompleteAuthors").hide();
        }
      },
      error: function(){
        console.log("Something went wrong, can't connect to API.");
      }
    });

    // $("autoCompleteAuthors").show();

  });

});

$(document).on("click", "#autoCompleteAuthors div", function(){
  var value = $(this).text();
  var id = $(this).data('id');
  $("input[name='author']").val(value);
  $("input[name='authorID']").val(id);
  $("#autoCompleteAuthors").empty().hide();
});
