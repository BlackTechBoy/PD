/*
$.ajax({
  type: form.attr("method"),
  url: window.location.href="success.php?successfullypaid="+ referenced,
  data: form.serialize(),
  dataType: "json",
  success: function(data){
    $(".response").text(data.content);
  },
  error: function(data){
    $(".response").text("An Error Occured");
  }
})
*/