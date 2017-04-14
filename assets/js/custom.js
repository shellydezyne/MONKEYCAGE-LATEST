/* Add here all your JS customizations */
$('#action-button').click(function() {
   $.ajax({
      url: 'admin/albums.php',
      data: {
         format: 'json'
      },
      error: function() {
         $('#myCarousel').html('<p>An error has occurred</p>');
      },
      dataType: 'json',
      success: function(data) {
         //var $title = $('<h1>').text(data.talks[0].talk_title);
         //var $description = $('<p>').text(data.talks[0].talk_description);
         var slidelisting = '<ol class="carousel-indicators">';
         var slidewrappers = '<div class="carousel-inner" role="listbox">';

         //console.log(data);
         for (var index = 0; index < data.length ; ++index) {
           var album = data[index];
           //console.log(album.name);
           if (index == 0) {
             slidelisting += '<li data-target="#myCarousel" data-slide-to="' + index + '" class="active"></li>';
             slidewrappers += '<div class="item active"><img id="myCarousel_' + album.id + '" class="click_to_play" src="admin/' + album.filename + '" alt="' + album.name + '"><div class="carousel-caption"><h3>' + album.name +'</h3><p>' + album.description + '</p></div></div>';

           } else {
             slidelisting += '<li data-target="#myCarousel" data-slide-to="' + index + '" ></li>';
             slidewrappers += '<div class="item"><img id="myCarousel_' + album.id + '" class="click_to_play" src="admin/' + album.filename + '" alt="' + album.name + '"><div class="carousel-caption"><h3>' + album.name +'</h3><p>' + album.description + '</p></div></div>';
           }

         }
         slidelisting += '</ol>';
         slidewrappers += '</div>';

         //console.log(slidelisting);
         //console.log(slidewrappers);


         var $navigation = '<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
         $('#myCarousel').empty();
         $('#myCarousel')
            .append(slidelisting)
            .append(slidewrappers)
            .append($navigation);
         $('.click_to_play').bind('click',function(){
           //alert("Hello");
           var arg = $(this).attr('id').split('_')[1];
           //alert(arg);
           $.ajax({
              url: 'admin/images.php',
              data: {
                 format: 'json',
                 album_id : arg
              },
              error: function() {
                 $('#myCarousel').html('<p>An error has occurred</p>');
              },
              dataType: 'json',
              success: function(data) {
                 //var $title = $('<h1>').text(data.talks[0].talk_title);
                 //var $description = $('<p>').text(data.talks[0].talk_description);
                 var slidelisting = '<ol class="carousel-indicators">';
                 var slidewrappers = '<div class="carousel-inner" role="listbox">';

                 //console.log(data);
                 for (var index = 0; index < data.length ; ++index) {
                   var album = data[index];
                   //console.log(album.name);
                   if (index == 0) {
                     slidelisting += '<li data-target="#myCarousel" data-slide-to="' + index + '" class="active"></li>';
                     slidewrappers += '<div class="item active"><img src="admin/' + album.filename + '" alt="' + album.name + '"><div class="carousel-caption"><h3>' + album.name +'</h3><p>' + album.description + '</p></div></div>';

                   } else {
                     slidelisting += '<li data-target="#myCarousel" data-slide-to="' + index + '" ></li>';
                     slidewrappers += '<div class="item"><img src="admin/' + album.filename + '" alt="' + album.name + '"><div class="carousel-caption"><h3>' + album.name +'</h3><p>' + album.description + '</p></div></div>';
                   }

                 }
                 slidelisting += '</ol>';
                 slidewrappers += '</div>';

                 //console.log(slidelisting);
                 //console.log(slidewrappers);


                 var $navigation = '<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
                 $('#myCarousel').empty();
                 $('#myCarousel')
                    .append(slidelisting)
                    .append(slidewrappers)
                    .append($navigation);
              },
              type: 'GET'
           });
         });
      },
      type: 'GET'
   });
});

$(document).on('click','.click_to_play',function(){
  //alert("Hello");
  var arg = $(this).attr('id').split('_')[1];
  //alert(arg);
  $.ajax({
     url: 'admin/images.php',
     data: {
        format: 'json',
        album_id : arg
     },
     error: function() {
        $('#myCarousel').html('<p>An error has occurred</p>');
     },
     dataType: 'json',
     success: function(data) {
        //var $title = $('<h1>').text(data.talks[0].talk_title);
        //var $description = $('<p>').text(data.talks[0].talk_description);
        var slidelisting = '<ol class="carousel-indicators">';
        var slidewrappers = '<div class="carousel-inner" role="listbox">';

        //console.log(data);
        for (var index = 0; index < data.length ; ++index) {
          var album = data[index];
          //console.log(album.name);
          if (index == 0) {
            slidelisting += '<li data-target="#myCarousel" data-slide-to="' + index + '" class="active"></li>';
            slidewrappers += '<div class="item active"><img src="admin/' + album.filename + '" alt="' + album.name + '"><div class="carousel-caption"><h3>' + album.name +'</h3><p>' + album.description + '</p></div></div>';

          } else {
            slidelisting += '<li data-target="#myCarousel" data-slide-to="' + index + '" ></li>';
            slidewrappers += '<div class="item"><img src="admin/' + album.filename + '" alt="' + album.name + '"><div class="carousel-caption"><h3>' + album.name +'</h3><p>' + album.description + '</p></div></div>';
          }

        }
        slidelisting += '</ol>';
        slidewrappers += '</div>';

        //console.log(slidelisting);
        //console.log(slidewrappers);


        var $navigation = '<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
        $('#myCarousel').empty();
        $('#myCarousel')
           .append(slidelisting)
           .append(slidewrappers)
           .append($navigation);
     },
     type: 'GET'
  });
});
