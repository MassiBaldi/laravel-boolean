require('./bootstrap');

$(document).ready(function(){

  if ($('#gender').length > 0) {
    $('#filtra').click(function() {

      var genderValue = $('#gender').val();
      //console.log(genderValue);

      $.ajax({
        url: 'http://localhost:8000/api/students/filter',
        method: 'GET',
        data: {
          gender: genderValue
        },
        success: function(data) {
          console.log(data);
        },
        error: function() {

        }

      });
    });
  }


});
