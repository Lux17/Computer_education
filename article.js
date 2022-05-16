var form = new FormData();
form.append("token", "819256578e7a3d7719b7bb5d6a75effa");

var settings = {
  "url": "http://localhost/apice/api/tbl_article/read.php",
  "method": "POST",
  "timeout": 0,
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {

    
    const post = JSON.parse(response);
    let artikel = post.body;
    $.each(artikel, function(i, data){
        $('#post-list').append(`
        <div class="post-img">`+ data.cover +`</div>
        <span class="post-date">`+ data.tgl_upload +`</span>
        <h3 class="post-title">`+ data.title +`</h3>
        <a href="artikel.php" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
        `);
    });
    console.log(artikel);
}
);
