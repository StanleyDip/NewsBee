$(document).ready(function () {

        let url = "http://api.mediastack.com/v1/news?access_key=4752578a2773fe59f80646e85df16501&sources=en";

        $.ajax({
          url: url,
          method: "GET",
          dataType: "JSON",

          beforeSend: function () {
            $(".progress").show();
          },

          complete: function () {
            $(".progress").hide();
          },

          success: function (newsdata) {
            let output = "";
            let latestNews = newsdata.data;

            for (var i in latestNews) {
              output += `

                          <div class="card">
                        <div class="title">
                          <p>Title: <a href="${latestNews[i].url}" title="${latestNews[i].title}">${latestNews[i].title}</a></p>
                          <p><b>Author</b>: ${latestNews[i].author} </p>
                        </div>
                          <div class="header">
                            <img src="${latestNews[i].image}" alt="${latestNews[i].title}">
                          </div>

                          <div class="container">
                                      <p class="description"><b>Description</b>: ${latestNews[i].description}</p>
                                      <p><b>Language</b>: ${latestNews[i].language} </p>
                                      <p><b>Published</b>: ${latestNews[i].published_at} </p>
                                      <p><b>Counrty</b>: ${latestNews[i].country} </p>
                                      <p><a href="${latestNews[i].url}" target="_blank"><button class="activebtn" id="readmore">Read More</button></a></p>

                                      <p id="sharebtn">
                                      <a href="share.php?title=${latestNews[i].title}&url=${latestNews[i].url}&author=${latestNews[i].author}&image=${latestNews[i].image}&description=${latestNews[i].description}&language=${latestNews[i].language}&publish=${latestNews[i].published_at}&country=${latestNews[i].country}"><button class="sharebtn" id="sharebtn">Share</button></a></p>
                          </div>
                        </div>
                                `;
                     
                                
            }

            if (output !== "") {
              $("#newsResults").html(output);
            }

          },

          error: function () {
            let errorMsg = `<div class="errorMsg center">Some error occured</div>`;
            $("#newsResults").html(errorMsg);
          }

           

        })

          // function valtransfer(latestNews){
          //   $.post('share.php',{latestNews},function(data){
          //     $('#newsresult').html(data);
          //   }); }
        
 });
      // function clickMe(){ 
             
      //   $(document).ready(function () {

      //   let url = "http://api.mediastack.com/v1/news?access_key=4752578a2773fe59f80646e85df16501&sources=en";

      //   $.ajax({
      //     url: "http://api.mediastack.com/v1/news?access_key=4752578a2773fe59f80646e85df16501&url='https://www.independent.co.uk/sport/football/premier-league/chelsea/manchester-city-prediction-form-odds-b1781561.html'" ,
      //     method: "GET",
      //     dataType: "JSON",

      //     beforeSend: function () {
      //       $(".progress").show();
      //     },

      //     success: function (newsdata) {
      //       let output = "";
      //       let latestNews = newsdata.data;
      //         output += `

      //                     <div class="card">
      //                   <div class="title">
      //                     <p>Title: <a href="${latestNews.url}" title="${latestNews.title}">${latestNews.title}</a></p>
      //                     <p><b>Author</b>: ${latestNews.author} </p>
      //                   </div>
      //                     <div class="header">
      //                       <img src="${latestNews.image}" alt="${latestNews.title}">
      //                     </div>

      //                     <div class="container">
      //                                 <p class="description"><b>Description</b>: ${latestNews.description}</p>
      //                                 <p><b>Language</b>: ${latestNews.language} </p>
      //                                 <p><b>Published</b>: ${latestNews.published_at} </p>
      //                                 <p><b>Counrty</b>: ${latestNews.country} </p>
      //                                 <p><a href="${latestNews.url}" target="_blank"><button class="activebtn" id="readmore">Read More</button></a></p>
      //                                 <p id="sharebtn"><a ><button class="sharebtn" id="sharebtn">Share</button></a></p>
      //                     </div>
      //                   </div>
      //                           `;
                     
                                
            

            
      //         $("#share").html(output);
            

      //     },

           

      //   })
        
 // });





 //             }